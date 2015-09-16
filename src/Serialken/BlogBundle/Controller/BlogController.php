<?php

//creation et gestion du controller pour afficher mon blog

namespace Serialken\BlogBundle\Controller;

//use Serialken\BlogBundle\Entity\ArticleCompetence;
//use Serialken\BlogBundle\Form\ArticleEditType;
//use Serialken\BlogBundle\Form\ArticleDeleteType;
//use Serialken\BlogBundle\Entity\Image;
use Serialken\BlogBundle\Entity\Commentaire;
use Serialken\BlogBundle\Form\CommentaireType;
//use Serialken\BlogBundle\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\httpFoundation\response;
use Serialken\BlogBundle\Entity\Article;
use Serialken\BlogBundle\Entity\Competence;
use Serialken\BlogBundle\Form\ArticleType;
//use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\Security\Core\SecurityContext;
use Serialken\UserBundle\Entity\User;
use Serialken\BlogBundle\BigBrother\MessagePostEvent;


Class BlogController extends Controller
{
  public function indexAction($page)
  {
    if($page < 1)
    {
	// ici je cree une exeption si le num de page est inf a 1 il genere une erreur 404
	throw $this->createNotFoundException('Page inexistante(page = '.$page.')');
    }
	
    //ici on va recup les differents articles puis on va les passer au template concerne
    $articles = $this->getCustomRepository('SerialkenBlogBundle:Article')->getArticles(3, $page);
    if ($articles === null){
        throw $this->createNotFoundException('Pas d\'articles');
    }
    $nombrePage = ceil(count($articles)/3);
	// j appele juste le template avec mon tab 
        return $this->render('SerialkenBlogBundle:Blog:index.html.twig', array(
            'articles' => $articles ,
            'page' => $page,
            'nombrePage' => $nombrePage
                ));
  }
   
  public function voirAction(Article $article)
  {   
    // plus besoin de recup lentite grace a ParamConverter
    // il transforme $id en une instance de article contenu dans $article 
    
    //on recupere les articlecompetence de larticle $article
    $listeArticleCompetence = $this->getCustomRepository('SerialkenBlogBundle:ArticleCompetence')->findbyArticle($article->getid());

    //on recup la liste des commentaires
    // plus besoin de faire un getCustomRepository grace a la relation oneToMany
    $listeCommentaires = $article->getCommentaires();
   //die(var_dump($listeArticleCompetence));
    return $this->render('SerialkenBlogBundle:Blog:voir.html.twig', array(
        'article' => $article,
        'listeCommentaires' => $listeCommentaires,
        'listeArticleCompetence' => $listeArticleCompetence
            ));
  }
  
 
//  /**
//   * 
//   * @Secure(roles="ROLE_USER")
//   */
  public function ajouterAction()
  {
      //$test = "> je suis la :)";
    //die(var_dump($test));
//    if(!$this->get('security.context')->isGranted('ROLE_AUTEUR'))
//    {
//        throw new AccessDeniedHttpException('Accés limité aux auteurs');
//    }
      //on cree un article
      $article = new Article();
      $article->setAuteur($this->getUser());

      //on cree le formulaire grace au form ArticleType
      $form = $this->createForm(new ArticleType, $article);
      
      // on verifie si on est en post
    if($this->get('request')->getMethod() == 'POST')
    {
        //on lie les donnees post(formulaire) avec la requete
        $form->bind($this->get('request'));
        //on verifie les donnee du form
        if($form->isValid())
        {
            //on cree levent avec ces 2 arguments
            $event = new MessagePostEvent($article->getContenu(), $this->getUser());
            
            //on declenche levent
            $this->get('event_dispatcher')->dispatch(\Serialken\BlogBundle\BigBrother\BigBrotherEvents::onMessagePost, $event);
            
            //on recupere ce qui a ete modifie par le listener ici le msg
            $article->setContenu($event->getMessage());
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            //die(var_dump($article->getImage()));
            $em->flush();
            
            //$this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');
            //et apres je redirige vers la page pour visualiser le larticle cree
            return $this->redirect($this->generateUrl('serialkenblog_voir', array(
                'id' => $article->getId()))); 
        }   
    }

	return $this->render('SerialkenBlogBundle:Blog:ajouter.html.twig', array(
            'form' => $form->createView()
                ));
  }
  
  public function ajouterCommentaireAction(Article $article)
  {
      // plus besoin de recup lentite grace a ParamConverter
    // il transforme $id en une instance de article contenu dans $article 
      $listeArticleCompetence = $this->getCustomRepository('SerialkenBlogBundle:ArticleCompetence')->findbyArticle($article->getid());
      $listeCommentaires = $article->getCommentaires();
    
    $commentaire = new Commentaire();
    $commentaire->setAuteur($this->getUser());
    
    $form = $this->createForm(new CommentaireType, $commentaire);
    

      //$form = $this->createForm(new CommentaireType, $article->getCommentaires());
       if($this->get('request')->getMethod() == 'POST')
       {
           //pour le moment on fait rien
           $form->bind($this->get('request'));
           
           if ($form->isValid())
           {
               $article->addCommentaire($commentaire);
               $this->getDoctrine()->getManager()->flush();
            //$this->get('session')->getFlashBag()->add('info', 'Article bien modifié');
            //et apres je redirige vers la page pour visualiser le larticle modifier
            return $this->redirect($this->generateUrl('serialkenblog_voir', array(
                'id' => $article->getId()))); 
           }
       }
       
       return $this->render('SerialkenBlogBundle:Blog:voir.html.twig', array(
           'article' => $article,
           'comment' => true,
           'listeArticleCompetence' => $listeArticleCompetence,
           'listeCommentaires' => $listeCommentaires,
           'form' => $form->createView()));
  }
  
  //public function supprimerCommentaire
  
  
  
  /**
   * 
   * @Secure(roles="ROLE_USER")
   */
  public function modifierAction($id)
  {
    
    $em = $this->getDoctrine()->getManager();
     $article = $em->getRepository('SerialkenBlogBundle:Article')->find($id); 
     if ($article === null){
         throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
     }
         
    //ici je fais la creation et et les modif sur mon form
     $form = $this->createForm(new ArticleType, $article);
     //je check si je suis en POST
    if($this->get('request')->getMethod() == 'POST')
    {
        //on lie avec le post 
        $form->bind($this->get('request'));
       if ($form->isValid())
        {
           //on cree levent avec ces 2 arguments
            $event = new MessagePostEvent($article->getContenu(), $this->getUser());
            
            //on declenche levent
            $this->get('event_dispatcher')->dispatch(\Serialken\BlogBundle\BigBrother\BigBrotherEvents::onMessagePost, $event);
            $article->setContenu($event->getMessage());
            $em->flush();
            //$this->get('session')->getFlashBag()->add('info', 'Article bien modifié');
            //et apres je redirige vers la page pour visualiser le larticle modifier
            return $this->redirect($this->generateUrl('serialkenblog_voir', array(
                'id' => $article->getId()))); 
        }
    }
    //si je suis pas en POST 
    return $this->render('SerialkenBlogBundle:Blog:modifier.html.twig', array('form' => $form->createView(), 'article' => $article));
  }
  
  /**
   * 
   * @Secure(roles="ROLE_USER")
   */
  public function supprimerAction($id)
    {
      
      //ici je recupe l'article correspondant a $id
      $article = $this->getCustomRepository('SerialkenBlogBundle:Article')->find($id);
      if ($article === null){
         throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
     }
     $form = $this->createFormBuilder()->getForm();
     if($this->get('request')->getMethod() == 'POST')
     {
         $form->bind($this->get('request'));
         if($form->isValid())
         {
            $em = $this->getDoctrine()->getManager();
            $em->remove($article);
            $em->flush();
            $this->get('session')->getFlashBag()->add('info', 'Article bien supprimé');
            //on redirige sur accueil
             return $this->redirect($this->generateUrl('serialkenblog_accueil'));
         }
     }
     // si on la recoit en GET on genere le CSRF
     return $this->render('SerialkenBlogBundle:Blog:supprimer.html.twig', array(
         'article' => $article,
         'form' => $form->createView()
             ));
     
    }
 
   public function menuAction($nombre)
    {
    // on rcup les $nombre dernier article
    $liste = $this->getCustomRepository('SerialkenBlogBundle:Article')->findLastArticle($nombre);
    
    return $this->render('SerialkenBlogBundle:Blog:menu.html.twig', array('liste_articles' => $liste));
    }
  
   public function getCustomRepository($name) 
    {
      return $this->getDoctrine()->getManager()->getRepository($name);
    }
       
   //puisque jai pas implementer le fixture doctrine 
   //je me fait un controller sur un page pour remplir ma base de donnee
   //page load sa va me servir plutard
   
    public function loadAction()
   {
       $em = $this->getDoctrine()->getManager();
       
       //Liste des noms de categories a ajouter       
       //$noms =array('Symfony2','Doctrine2','Tutoriel', 'Evénement');
       //Liste des noms de competence a ajouter       
       $noms =array('Yannick', 'Talus', 'toto', 'bobo');
       
       foreach($noms as $i => $nom)
       {
           //on crée la categorie
           //$liste_categories[$i] = new Categorie();
           //$liste_categories[$i]->setNom($nom);
           //on crée la competence
           //$liste_competences[$i] = new Competence();
           //$liste_competences[$i]->setNom($nom);
           //on cree l'utilisateur
           $users[$i] = new User;
           
           //le MDP et le LOGIN sont identiques
           $users[$i]->setUsername($nom);
           $users[$i]->setPassword($nom);
           //le sel et les roles sont vides
           $users[$i]->setSalt('');
           $users[$i]->setRoles(array());               
           
           //on la persiste
           //$em->persist($liste_categories[$i]);
           //$em->persist($liste_competences[$i]);
           $em->persist($users[$i]);
       }
       
       //on enregistre
       $em->flush();
  
       return $this->render('SerialkenBlogBundle:Blog:load.html.twig', array('sujet' => 'utilisateurs BDD'));
   }
}