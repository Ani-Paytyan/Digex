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
                                        <div style ='float:right;padding: 2px 15px'>
                                            <div class="col-12 text-center">
                                                <a href="{{url('/teacher/lesson/createLesson/'.$course->id)}}" class="view-all">Create Lesson</a>
                                            </div>
                                        </div>
                                        <h1 class="text-center">{{$course->title}}</h1>
                                        <div class="container-fluid col-lg-7 col-12" >
                                            <div class="form-group">
                                                <img id="outputCourse" class="img-fluid product-image" src="{{Storage::url($course->image) }}"/>
                                            </div>
                                            <div class="form-group">
                                                <span>{{$course->description}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <a href="{{url('/teacher/course/courseDetails/edit/'.$course->id)}}" >
                            <button class="btn btn-danger" type="submit">Edit course</button>
                        </a>
                        <a href="{{ url('/teacher/course/')}}">
                            <button class="btn btn-danger" type="submit">Back</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endsection


