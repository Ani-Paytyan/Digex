@extends('layouts/layoutHome')
@section('content')
    <section class="featured-product section-padding">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class=" my-4">
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <div class="container-fluid py-4">
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
            </div>
        </div>
    </section>
@endsection


