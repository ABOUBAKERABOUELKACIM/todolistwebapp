<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    use HasFactory;

    private $id;
    private $email;
    private $username;
    private $name;
    private $mdp;

    public function __construct( $email, $username, $name, $mdp)
    {
        
        $this->email = $email;
        $this->username = $username;
        $this->name = $name;
        $this->mdp = $mdp;
    }

    public function getId()
    {
        return $this->id;
    }

    

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getMdp()
    {
        return $this->mdp;
    }

    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }
}
