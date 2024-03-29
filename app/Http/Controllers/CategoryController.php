<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categories', [
            "title" => "Post Category",
            "active" => 'categories',
            "categories" => Category::all()
        ]);
    }

    public function show(Category $category)
    {
        return view('posts', [
            'title' => "Post By Category : $category->name",
            "active" => 'categories',
            'posts' => $category->posts->load('category', 'author')
        ]);
    }
}