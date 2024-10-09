<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\RecipeResource;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
{
    $recipes = Recipe::with(['photos', 'category'])->get();

    return RecipeResource::collection($recipes);
}

public function show(Recipe $recipe)
{
    // Eager load the relationships, including 'recipeIngredients.ingredient'
    $recipe->load([
        'category',
        'recipeIngredients.ingredient', // Load recipe ingredients with their associated ingredient
        'photos',
        'tutorials',
        'author'
    ]);

    // Return the recipe as a resource
    return new RecipeResource($recipe);
}

}
