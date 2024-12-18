<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;

class ProductController  extends Controller
{
    public function index()
    {
        // Eager load the category relationship to avoid N+1 query problem
        $product = Product::with('category')->get(); // Retrieve all  and their related category
        return view('admin.product_list', compact('product')); // Pass the  data to the view
    }
    public function create()
{
    $categories = Category::all(); // Fetch all categories
    return view('admin.product', compact('categories')); // Pass categories to the form
}

public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'category_id' => 'required|exists:categories,id',
        'about' => 'nullable|string',
        'price' => 'nullable|numeric',
        'discounted_price' => 'nullable|numeric',
        'rating' => 'nullable|numeric|max:5',
        'thumbnail' => 'nullable|image|max:2048',
    ]);

    if ($request->hasFile('thumbnail')) {
        $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
    }

    // Create product
    Product::create($data);

    return redirect()->route('product.index')->with('success', 'Product added successfully!');
}


    
  
public function edit($id)
{
    // Fetch the course to be edited
    $product = Product::find($id);
    
    // Fetch all categories (assuming you have a 'categories' table)
    $categories = Category::all();
    
    // Pass the course and categories to the view
    return view('admin.edit_product', compact('product', 'categories'));
}

public function update(Request $request, Product $product)
{
    // Validate the request data
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'category_id' => 'required|exists:categories,id', // Validate category
        'about' => 'nullable|string',
        'price' => 'nullable|numeric',
        'discounted_price' => 'nullable|numeric',
        'rating' => 'nullable|numeric|max:5',
        'thumbnail' => 'nullable|image|max:2048',
    ]);

    // Handle thumbnail upload if exists
    if ($request->hasFile('thumbnail')) {
        Storage::disk('public')->delete($product->thumbnail);  // Delete old thumbnail
        $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');  // Store new thumbnail
    }

    // Update the course with the validated data
    $product->update($data);

    return redirect()->route('product.index')->with('success', 'Course updated successfully!');
}


    public function destroy(Product $product)
    {
        Storage::disk('public')->delete($product->thumbnail);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Course deleted successfully!');
    }
}
