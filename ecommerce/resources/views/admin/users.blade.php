@extends('admin.layouts.app')

@section('content')
<div class="container-fluid bg-gradient-primary">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mt-8">
                <div class="card-header">
                    <h3 class="mb-0">Registerd Users</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary mb-3">Back to Home</a>

                    @if($users->isEmpty())
                    <p>No users found</p>
                    @else
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Sr.No</th>
                                    <th>user name</th>
                                    <th>user email</th>
                                    <th>password</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->password }}</td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection