@extends('layouts/layoutHomeIn')
    @section('content')
        <section class="featured-product section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div style ='float:left;padding: 2px 15px'>
                            <a href="{{ url('/teacher/course')}}">
                                <button class="btn btn-danger" type="submit">Back</button>
                            </a>
                        </div>
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
                                                <label>Course Avatar:</label>
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
                                            <button type="submit" class="btn btn-danger">create</button>
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
