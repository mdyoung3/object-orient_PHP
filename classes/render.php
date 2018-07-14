<?php

class Render
{
  public function listIngredients($ingredients){
    $output = "";

    foreach ($ingredients as $ing) {
      $output .= $ing["item"] . $ing["amount"] . " " . $ing["measure"];
      $output .= "\n";
    }

    return $output;
  }
  //Single responsibility
  public static function displayRecipe($recipe) {
    $output = "";

    $output .= $recipe->getTitle() . " by " . $recipe->getSource();

    $output .= "\n";

    $output .= implode("\n", $recipe->getInstructions());

    $output .= "\n";

    $output .= self::listIngredients($recipe->getIngredients());

    $output .= $recipe->getYield();

    $output .= "\n";

    $output .= implode(" ", $recipe->getTags());

    $output .= "\n";

    return $output;
  }
}