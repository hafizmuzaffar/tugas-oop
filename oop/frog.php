<?php

class Frog extends animal
{
  public $sounds1 = "hop hop";
  public $legs = 4;

  function __construct($name)
  {
    $this->name = $name;
  }
  function getName()
  {
    return $this->name;
  }
  function setJump($sounds1)
  {
    $this->sounds1 = $sounds1;
  }
  function jump()
  {
    return $this->sounds1;
  }
  function setLeg($legs)
  {
    $this->legs = $legs;
  }
  function getLeg()
  {
    return $this->legs;
  }
}