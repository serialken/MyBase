<?php
// src\Serialken\BlogBundle\Beta

namespace Serialken\BlogBundle\Beta;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class BetaListener
{
    //la date de fin de la version Beta
    //- Avant cette date on affichera un compte a rebours (J-3 par exemple)
    //- Apres cette date on naffichera plus le Beta
    protected $dateFin;
    
    public function __construct($dateFin) 
    {
        $this->dateFin = new \DateTime($dateFin);
    }
    
    //pour ajouter le Beta
    protected function displayBeta(Response $response, $joursRestant)
    {
        $content = $response->getContent();
        
        //code a rajouter
        $html = '<span style="color: red; font-size:0.5em;"> - Beta J -'.(int)$joursRestant.' </span>';
        //insertion du code dans la page
        $content = preg_replace('#<h1>(.*?)</h1>#iU',
                '<h1>$1'.$html.'</h1>',
                $content,
                1);
        
        //modification du contenu dans la reponse
        $response->setContent($content);
        return $response;
    }
    
    public function onKernelResponse(FilterResponseEvent $event)
    {
        //on teste si la requete est bien la requete principale
        if (HttpKernelInterface::MASTER_REQUEST !== $event->getRequestType())
        {
            return;
        }
        
        // on recup la reponse que le noyau a insere dan levent
        $response = $event->getResponse();
        
        //ici on modifie la reponse
        $joursRestant = $this->dateFin->diff(new \DateTime())->days;
        
        if ($joursRestant > 0)
        {
            $response = $this->displayBeta($event->getResponse(), $joursRestant);
        }
         //on insere la rep modifie
        $event->setResponse($response);
    }
}