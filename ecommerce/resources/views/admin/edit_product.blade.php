@extends('admin.layouts.app')

@section('content')

<div class="container-fluid bg-gradient-primary">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mt-8">
                <div class="card-header">
                    <h3 class="mb-0">Edit product</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- product Name -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Product Name</label>
                                    <input type="text" name="name" class="form-control" id="name" value="{{ $product->name }}" required />
                                </div>
                            </div>
                        </div>

                        <!-- product Category Dropdown -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="category">Product Category</label>
                                    <select name="category_id" class="form-control" id="category" required>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- About product -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="about">About product</label>
                                    <input type="text" name="about" class="form-control" id="about" value="{{ $product->about }}" />
                                </div>
                            </div>
                        </div>

                        <!-- Price and Discounted Price -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">Original Price</label>
                                    <input type="text" name="price" class="form-control" id="price" value="{{ $product->price }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="discounted_price">Discounted Price</label>
                                    <input type="text" name="discounted_price" class="form-control" id="discounted_price" value="{{ $product->discounted_price }}" />
                                </div>
                            </div>
                        </div>

                        <!-- Rating -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="rating">Rating (out of 5)</label>
                                    <input type="number" step="0.1" max="5" min="0" name="rating" class="form-control" id="rating" value="{{ $product->rating }}" />
                                </div>
                            </div>
                        </div>



                        <!-- Video Thumbnail and URL -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="thumbnail">Video Thumbnail</label>
                                    <input type="file" name="thumbnail" class="form-control-file" id="thumbnail" />
                                    @if($product->thumbnail)
                                    <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="Current Thumbnail" width="100">
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Save Button -->
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection