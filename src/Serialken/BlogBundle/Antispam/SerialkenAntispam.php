<?php
// src\Serialken\BlogBundle\Antispam

namespace Serialken\BlogBundle\Antispam;

class SerialkenAntispam extends \Twig_Extension
{
    protected $mailer;
    protected $locale;
    protected $nbForSpam;
    
    public function __construct(\Swift_Mailer $mailer, $nbForSpam)
    {
     $this->mailer    = $mailer;
     $this->nbForSpam = (int) $nbForSpam;
    }
    
    public function getFunctions() {
        return array('checkIfSpam' => new \Twig_Function_Method($this, 'isSpam'));
    }
    
    public function getName() {
        return 'SerialkenAntispam';
    }
    
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }
    
    /**
     * Verifie si le texte est un spam ou non
     * un texte est considere comme spam a partir de 3 liens
     * ou adresses email dans son contenu
     * 
     * @parm string $text
     */
    
    public function isSpam($text)
    {
        return $this->countLinks($text) + $this->countMails($text) >= $this->nbForSpam;
    }

    /**
    * compte les url de $text
    * 
    * @param string $text
    */
    private function countLinks($text)
    {
        preg_match_all(
                '#(http|https|ftp)://([A-Z0-9][A-Z0-9_-]*(?:.[A-Z0-9][A-Z0-9_-]*)+):?(d+)?/?#i',
                $text, 
                $matches);
        
        return count($matches[0]);
    }
    
    /**
     * Compte les mails de $text
     * 
     * @param string $text 
     */
    private function countMails($text)
    {
        preg_match_all(
                '#[a-z0-9._-]+@[a-z0-9.-_]{2,}\.[a-z]{2,4}#i', 
                $text, 
                $matches);
        return count($matches[0]);
    }
}