@extends('layouts/layoutHomeIn')
@section('content')
    <section class="featured-product section-padding">
        <div class="container">

    <div class="row">
                <div class="col-12">
                    <div class=" my-4">
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
                                    <form method="post" class="container-fluid col-lg-7 col-12" action="{{url('/teacher/edit/'.$teacher->id)}}" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                        @method('PATCH')
                                        <div class="form-group">
{{--                                            <div class="product-thumb">--}}
                                            <img id="output" class="img-fluid product-image" src="}"/>
{{--                                            <img id="output" class="img-fluid product-image" src="{{ URL::asset('uploads/teachers_photo/'.$teacher->image) }}"/>--}}
{{--                                            </div>--}}
                                        </div>
                                        <div class="form-group">
                                            <label>Image:</label>
{{--                                            <input type="file" name="image" class="form-control" placeholder="Image">--}}
                                            <input type="file"  name="image" class="form-control" accept="image/*" onchange="loadFile(event)">
                                        </div>
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
                                            <label for="stock_name">Email:*</label>
                                            <input type="email" class="form-control" value="{{$teacher->email}}" name="email"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="stock_name">Phone:*</label>
                                            <input type="text" class="form-control" value="{{$teacher->phone}}" name="phone"/>
                                        </div>
                                        <button type="submit" class="btn btn-primary">update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
{{  Storage::url($teacher->image) }
