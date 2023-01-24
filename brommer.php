<?php
class Brommer

{
    private $model= "";
    private $uitvoering= "";
    private $kleur= "";
    private $windscherm= "";

    function __construct ($model,$uitvoeirng,$kleur,$windscherm)
   
{   
    $this->model = $model;
    $this->uitvoering = $uitvoering;
    $this->kleur = $kleur; 
    $this->windscherm = $windscherm;
}

function getModel()
    {
    return $this->model;
    }
    function getUitvoering()
    {
        return $this->uitvoering;
    }
}