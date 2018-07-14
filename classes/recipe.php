<?php

class Recipe
{
  private $ingredients = [];

  private $source;

  private $title;

  private $instructions = [];

  private $yield;

  private $tag = [];

  private $measurements = [
    'tsp',
    "tbsp",
    "cup",
    "oz",
    "pint",
    "lb",
    "fl oz",
    'pint',
    'quart',
    'gallon'
  ];

  function __construct($title) {
    if (empty($title)){
      $title = null;
    } else {
      $this->title = ucwords($title);
    }
  }

  function __toString() {
    // TODO: Implement __toString() method.
    return $this->getTitle();
  }

  public function setTitle($title) {
    $this->title = ucwords($title);
  }

  public function getTitle() {
    return $this->title;
  }

  public function addIngredients($item, $amount = null, $measure = null) {
    if ($amount != null && !is_float($amount) && !is_int($amount)) {
      exit("The amount must be a float: " . gettype($amount) . " $amount given.");
    }

    if ($measure != null && !in_array($measure, $this->measurements)) {
      exit("Please use a valid measurement: " . implode(", ", $this->measurements));
    }

    $this->ingredients[] = [
      "item" => ucwords($item),
      "amount" => $amount,
      "measure" => $measure,
    ];
  }

  public function getIngredients(){
    return $this->ingredients;
  }

  public function addInstruction($string){
    $this->instructions[] = $string;
  }

  public function getInstructions(){
    return $this->instructions;
  }

  public function addTag($tag) {
    $this->tag[] = $tag;
  }

  public function getTags(){
    return $this->tag;
  }

  public function setYield($yield){
    $this->yield = $yield;
  }

  public function getYield(){
    return $this->yield;
  }

  public function setSource($source){
    $this->source = ucwords($source);
  }

  public function getSource(){
    return $this->source;
  }


}
