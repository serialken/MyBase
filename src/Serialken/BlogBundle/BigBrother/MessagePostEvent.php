<?php
// src\Serialken\BlogBundle\BigBrother

namespace Serialken\BlogBundle\BigBrother;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Security\Core\User\UserInterface;

class MessagePostEvent extends Event
{
    protected $message;
    protected $user;
    protected $autorise;
    
    public function __construct($message, UserInterface $user)
    {
        $this->message = $message;
        $this->user = $user;
    }
    
    //le listener doit avoir acces au message
    public function getMessage() {
        return $this->message;
    }
    
    //le listener doit pouvoir modifier le message
    public function setMessage($message) {
        $this->message = $message;
        return $this->message;
    }
    
    //le listener doit avoir acces au usere
    public function getUser() {
        return $this->user;
    }
    
    //pas de stter le listener ne peut pas modif le user
}