@extends('layouts.admin')

@section('content')

    <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-0">Users</h3>
                </div>
            </div>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                @if ($users)
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td class="table-user"><b>{{$user->name}}</b></td>
                            <td><span class="text-muted">{{$user->email}}</span> </td>
                            <td> {{$user->role ? $user->role->name : 'User has no role'}}</td>

                            <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                            <td>{{$user->created_at->diffForHumans()}}</td>
                            <td>{{$user->updated_at->diffForHumans()}}</td>
                            <td class="table-actions">
                                <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                                    <i class="fas fa-user-edit"></i>
                                </a>
                                <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                     @endforeach
                @endif

                </tbody>
            </table>
        </div>
    </div>
@stop
