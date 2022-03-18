@extends('layouts/layout')
@section('content')
    <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">create admin</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <div class="container-fluid py-4">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{$error}}</li>
                                                @endforeach
                                            </ul>
                                        </div><br />
                                    @endif
                                    <form method="post" action="{{url('/admin/teacher/editTeacher/'.$teacher->id)}}">
                                        {{ csrf_field()}}
                                        @method('PATCH')
                                        <div class="form-group">
                                            <label for="stock_name">Username:*</label>
                                            <input type="text" class="form-control" value="{{$teacher->username}}" name="username"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="stock_name">First Name:*</label>
                                            <input type="text" class="form-control" value="{{$teacher->first_name}}" name="firstName"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="stock_name">Last Name:*</label>
                                            <input type="text" class="form-control" value="{{$teacher->last_name}}" name="lastName"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="stock_name">Phone:*</label>
                                            <input type="text" class="form-control" value="{{$teacher->phone}}" name="phone"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="ticket">Email:*</label>
                                            <input type="text" class="form-control" value ="{{$teacher->email}} " name="email"/>
                                        </div>
                                        <button type="submit" class="btn btn-primary">update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
