@extends('layouts/layoutHomeIn')
    @section('content')
        <section class="featured-product section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="mb-5">Courses</h2>
                        <div style ='float:left;padding: 2px 15px'>
                            <a href="{{ url('/teacher')}}">
                                <button class="btn btn-danger" type="submit">Back</button>
                            </a>
                        </div>
                        <div style ='float:right;padding: 2px 15px'>
                            <a href="{{url('teacher/course/createCourse')}}"><img src="https://img.icons8.com/material-rounded/48/fa314a/add.png"/></a>
                        </div>
                    </div>
                    @if (!empty($courses))
                        @foreach ($courses as $course)
                            <div class="col-lg-4 col-12 mb-3">
                                <div class="product-thumb">
                                    <a href="{{url('/teacher/course/detailsCourse/'.$course->id)}}">
                                        <img src="{{Storage::url($course->image) }}" class="img-fluid product-image" alt="">
                                    </a>
                                    <div class="product-top d-flex">
                                        <span class="product-alert me-auto">New Arrival</span>
                                        <a href="#" class="bi-heart-fill product-icon"></a>
                                    </div>
                                    <div class="product-info d-flex">
                                        <div>
                                            <h5 class="product-title mb-0">
                                                <a href="product-detail.html" class="product-title-link">Tree pot</a>
                                            </h5>
                                            <p class="product-p">Original package design from house</p>
                                        </div>
                                        <small class="product-price text-muted ms-auto mt-auto mb-5">$25</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
    @endsection


