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
                            <form method="post" action="{{url('/admin/category/task/edit/'.$task->id)}}">
                                {{ csrf_field()}}
                                @method('PATCH')

                                <div class="form-group">
                                    <label for="stock_name">Name:*</label>
                                    <input type="text" class="form-control" value="{{$task->name}}" name="name"/>
                                </div>

                                <div class="form-group">
                                    <label for="ticket">Description:*</label>
                                    <input type="text" class="form-control" value ="{{$task->description}} " name="description"/>
                                </div>

                                <div class="form-group">
                                    <label>Categories:</label>
{{--                                    <select name="categoryId" id="cars" class="form-control" >--}}
{{--                                        @if ($categories)--}}
{{--                                            @foreach ($categories as $category)--}}
{{--                                                <option value="{{$category->id}}" {{($category->id == $task->categoryId)? 'selected': ''}}>{{$category->name}}</option>--}}
{{--                                            @endforeach--}}
{{--                                        @endif--}}
{{--                                    </select>--}}

                                    <select name="category_id" id="cars" class="form-control" >
                                        <option value="">Select category</option>
                                        @if ($categories)
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}" {{($category->id == $task->categoryId)? 'selected': ''}}>{{$category->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
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
