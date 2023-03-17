<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    private $id;
    private $goal;
    private $deadline;
    private $idusercreator;

    public function __construct($id, $goal, $deadline, $idusercreator)
    {
        $this->id = $id;
        $this->goal = $goal;
        $this->deadline = $deadline;
        $this->idusercreator = $idusercreator;
    }

    public function getId()
    {
        return $this->id;
    }

    

    public function getGoal()
    {
        return $this->goal;
    }

    public function setGoal($goal)
    {
        $this->goal = $goal;
    }

    public function getDeadline()
    {
        return $this->deadline;
    }

    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;
    }

    public function getIdUserCreator()
    {
        return $this->idusercreator;
    }

    public function setIdUserCreator($idusercreator)
    {
        $this->idusercreator = $idusercreator;
    }
}
