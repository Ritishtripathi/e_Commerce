@extends('admin.layouts.app')

@section('content')
<div class="container-fluid bg-gradient-primary">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mt-8">
                <div class="card-header">
                    <h3 class="mb-0">Manage Product</h3>
                </div>
                <div class="card-body">
                    <a href="{{route ('product.create')}}" class="btn btn-primary mb-3">Add New Product</a>
                                           
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category (ID - Name)</th>
                                    <th>About</th>
                                    <th>Price</th>
                                    <th>Discounted Price</th>
                                    <th>Rating</th>
                                    <th>Thumbnail</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->category ? $product->category->id . ' - ' . $product->category->name : 'No Category' }}</td>
                                        <td>{{ $product->about }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->discounted_price }}</td>
                                        <td>{{ $product->rating }}</td>
                                        <td><img src="{{ asset('storage/' . $product->thumbnail) }}" alt="Thumbnail" width="100"></td>
                                        <td>{{ $product->created_at }}</td>
                                        <td>
                                            <!-- Edit Button -->
                                           <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <!-- Delete Form -->
                                            <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                            </form>
                                         
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')

<style>
    /* Optional: Customizing the table rows on hover */
    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }

    /* Optional: Styling for the table heading */
    .table-dark th {
        background-color: #343a40;
        color: black;
    }
</style>
@endsection
