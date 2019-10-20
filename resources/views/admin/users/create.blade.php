@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col">
            <div class="card-wrapper">
                <!-- Custom form validation -->
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">Create Users</h3>
                       @include('layouts._partial.formerrors')
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                            {!! Form::open(['action' => 'AdminUsersController@store', 'method' => 'post', 'class' => 'needs-validations', 'files' => true]) !!}

                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label class="form-control-label" >Full name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Full Name" value="" >
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-control-label">Email</label>
                                    <input type="email" name="email" class="form-control"  placeholder="Enter a valid Email" >
                                </div>
                                <div class="col-md-12 mb3">
                                    <label for="" class="form-control-label">Role</label>
                                     {!! Form::select('role_id', ['' => 'Choose your option'] + $roles , null , ['class' => 'form-control']) !!}
{{--                                    <select class="form-control" name="role_id" >--}}
{{--                                        <option value="" disabled selected>Choose your option</option>--}}
{{--                                                @foreach ($roles as $user)--}}

{{--                                            <option value="{{$user->role->id}}">{{$user->role->name}}</option>--}}
{{--                                        @endforeach--}}

{{--                                    </select>--}}
                                </div>
                                 <div class="col-md-12 mb3">
                                     <label for="" class="form-control-label">Status</label>
                                     <select class="form-control" name="is_active" >
                                         <option value="0" disabled selected>Choose your option</option>
                                         <option value="1">Activate</option>
                                         <option value="0">Deactivate</option>

                                     </select>
                                 </div>

                                <div class="col-md-12 mb3">
                                    <label for="" class="form-control-label">Profile Picture</label>
                                        <input type="file" name="photo_id" class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-control-label">Password</label>
                                    <input type="password" name="password" class="form-control"  placeholder="Enter password" >
                                </div>
                            </div>



                        <hr>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                            {!! Form::close() !!}


                    </div>
                </div>


            </div>
        </div>
    </div>
@stop
