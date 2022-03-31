@extends('layouts/layoutHomeIn')
    @section('content')
        <section class="featured-product section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-center">Edit Course</h4>
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
                                        <form method="post" class="container-fluid col-lg-7 col-12" action="{{url('/teacher/course/courseDetails/edit/'.$course->id)}}" enctype="multipart/form-data">
                                            {{ csrf_field()}}
                                            @method('PATCH')
                                            <div class="form-group">
                                                <img id="outputCourse" class="img-fluid product-image" src="{{ Storage::url($course->image)}}"/>
                                                <input type="file"  name="image" class="form-control" accept="image/*" onchange="loadFile(event)">
                                            </div>
                                            <div class="form-group">
                                                <label for="stock_name">Course Title:*</label>
                                                <input type="text" class="form-control" value="{{$course->title}}" name="title"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="stock_name">Course Description:*</label>
                                                <input type="text" class="form-control" value="{{$course->description}}" name="description"/>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Edit</button>

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
        var output = document.getElementById('outputCourse');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
