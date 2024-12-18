@extends('admin.layouts.app')

@section('content')

<div class="container-fluid bg-gradient-primary">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mt-8">
                <div class="card-header">
                    <h3 class="mb-0">Add - Product</h3>
                </div>
                
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Course Name -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Product Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required />
                                </div>
                            </div>
                        </div>

                        <!-- Course Category Dropdown -->
                        <!-- Category Dropdown -->
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-control" required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">
                                  {{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>


                        <!-- About Course -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="about">About Product</label>
                                    <input type="text" name="about" class="form-control" id="about" />
                                </div>
                            </div>
                        </div>

                        <!-- Price and Discounted Price -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">Original Price</label>
                                    <input type="text" name="price" class="form-control" id="price" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="discounted_price">Discounted Price</label>
                                    <input type="text" name="discounted_price" class="form-control" id="discounted_price" />
                                </div>
                            </div>
                        </div>

                        <!-- Rating -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="rating">Rating (out of 5)</label>
                                    <input type="number" step="0.1" max="5" min="0" name="rating" class="form-control" id="rating" />
                                </div>
                            </div>
                        </div>

                      

                        <!-- Video Thumbnail and URL -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="thumbnail">Product Image</label>
                                    <input type="file" name="thumbnail" class="form-control-file" id="thumbnail" />
                                </div>
                            </div>
                        </div>
                        <!-- Save Button -->
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection