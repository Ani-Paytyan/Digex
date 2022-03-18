@extends('layouts.layout')
@section('content')
    <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">add category</h6>
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
                                        <form method="post" action="{{url('/admin/category')}} " enctype="multipart/form-data">
                                            {{ csrf_field()}}
                                            <div class="form-group">
                                                <label for="stock_name">Name:*</label>
                                                <input type="text" class="form-control" name="name"/>
                                            </div>

                                            <div class="form-group">
                                                <label>Image:</label>
                                                <input type="file" name="image" class="form-control" placeholder="Image">
                                            </div>
                                            <button type="submit" class="btn btn-primary">create</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
