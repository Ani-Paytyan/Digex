@extends('layouts/layoutHome')
@section('content')
    <section class="featured-product section-padding">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h4 class="text-center">Create Course</h4>
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
                                    <form method="post" class="container-fluid col-lg-7 col-12" action="{{url('teacher/course/createCourse')}}" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                        <div class="form-group">
                                            {{--                                            <div class="product-thumb">--}}
                                            <img id="outputCourse" class="img-fluid product-image" src=""/>
                                            {{--                                            <img id="output" class="img-fluid product-image" src="{{ URL::asset('uploads/teachers_photo/'.$teacher->image) }}"/>--}}
                                            {{--                                            </div>--}}
                                        </div>
                                        <div class="form-group">
                                            <label>Course Avatar:</label>
                                            {{--                                            <input type="file" name="image" class="form-control" placeholder="Image">--}}
                                            <input type="file"  name="image" class="form-control" accept="image/*" onchange="loadFile(event)">
                                        </div>
                                        <div class="form-group">
                                            <label for="stock_name">Course Title:*</label>
                                            <input type="text" class="form-control" value="" name="title"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="stock_name">Course Description:*</label>
                                            <input type="text" class="form-control" value="" name="description"/>
                                        </div>
                                        <button type="submit" class="btn btn-primary">create</button>

                                       </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="card my-4">--}}
{{--                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">--}}
{{--                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">--}}
{{--                                <h6 class="text-white text-capitalize ps-3">create course</h6>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="card-body px-0 pb-2">--}}
{{--                            <div class="table-responsive p-0">--}}
{{--                                <div class="container-fluid py-4">--}}
{{--                                    @if ($errors->any())--}}
{{--                                        <div class="alert alert-danger">--}}
{{--                                            <ul>--}}
{{--                                                @foreach ($errors->all() as $error)--}}
{{--                                                    <li>{{$error}}</li>--}}
{{--                                                @endforeach--}}
{{--                                            </ul>--}}
{{--                                        </div><br />--}}
{{--                                    @endif--}}
{{--                                    <form method="post" action="{{url('/admin/course/createCourse')}}">--}}
{{--                                            {{ csrf_field()}}--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="stock_name">Title:*</label>--}}
{{--                                            <input type="text" class="form-control" value="" name="title"/>--}}
{{--                                        </div>--}}

{{--                                        <div class="form-group">--}}
{{--                                            <label for="ticket">Description:*</label>--}}
{{--                                            <input type="text" class="form-control wrap-text" value ="" name="description"/>--}}
{{--                                        </div>--}}
{{--                                        <button type="submit" class="btn btn-primary">create</button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

@endsection
<script>
    var loadFile = function(event) {
        var output = document.getElementById('outputCourse');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
