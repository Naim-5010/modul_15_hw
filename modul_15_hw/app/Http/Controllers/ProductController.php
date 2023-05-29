<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
public function index()
    {
        return "Display a list of all products.";
    }

    public function create()
    {
       return "Display the form to create a new product.";
    }

    public function store(Request $request)
    {
      return " Store a newly created product.";
    }

    public function show($id)
    {
        // return "";
    }

    public function edit($id)
    {
       return " Display the form to edit an existing product.";
    }

    public function update(Request $request, $id)
    {
       return "Update the specified product.";
    }

    public function destroy($id)
    {
       return "Delete the specified product.";
    }
}
