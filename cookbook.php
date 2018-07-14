<?php
include "classes/recipe.php";
include "classes/render.php";

/*
 *   Recipe 1
 */

$recipe1 = new Recipe("spaghett");

$recipe1->setSource("Grandma Young");

$recipe1->addIngredients("egg", 1);

$recipe1->addIngredients("flour", 2, "cup");

$recipe1->addInstruction('this is my first instruction.');

$recipe1->addInstruction('this is my second instruction.');

$recipe1->addTag('savory');

$recipe1->addTag('Sweet');

$recipe1->setYield('4 servings');

echo $recipe1;

echo Render::displayRecipe($recipe1);

/*
 *   Recipe 2
 */

/*$recipe2 = new Recipe();

$recipe2->setSource("Your mama");

$recipe2->setTitle('Chowda');

echo $recipe2->getTitle();

echo $recipe2->displayRecipe();*/

