@extends('layouts/layoutHome')
@section('content')
    <section class="featured-product section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="mb-5">Courses</h2>
                    <div style ='float:right;padding: 2px 15px'>
                        <a href="{{url('teacher/course/createCourse')}}"><img src="https://img.icons8.com/material-rounded/48/fa314a/add.png"/></a>
                    </div>
                </div>

                <div class="col-lg-4 col-12 mb-3">
                    <div class="product-thumb">
                        <a href="product-detail.html">
                            <img src="{{URL::asset('img/homePage/images/product/evan-mcdougall-qnh1odlqOmk-unsplash.jpeg')}}" class="img-fluid product-image" alt="">
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

                <div class="col-lg-4 col-12 mb-3">
                    <div class="product-thumb">
                        <a href="product-detail.html">
                            <img src="{{URL::asset('img/homePage/images/product/jordan-nix-CkCUvwMXAac-unsplash.jpeg')}}" class="img-fluid product-image" alt="">

                        </a>

                        <div class="product-top d-flex">
                            <span class="product-alert">Low Price</span>

                            <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                        </div>

                        <div class="product-info d-flex">
                            <div>
                                <h5 class="product-title mb-0">
                                    <a href="product-detail.html" class="product-title-link">Fashion Set</a>
                                </h5>

                                <p class="product-p">Costume Package</p>
                            </div>

                            <small class="product-price text-muted ms-auto mt-auto mb-5">$35</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12">
                    <div class="product-thumb">
                        <a href="product-detail.html">
                            <img src="{{URL::asset('img/homePage/images/product/nature-zen-3Dn1BZZv3m8-unsplash.jpeg')}}" class="img-fluid product-image" alt="">

                        </a>

                        <div class="product-top d-flex">
                            <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                        </div>

                        <div class="product-info d-flex">
                            <div>
                                <h5 class="product-title mb-0">
                                    <a href="product-detail.html" class="product-title-link">Juice Drinks</a>
                                </h5>

                                <p class="product-p">Nature made another world</p>
                            </div>

                            <small class="product-price text-muted ms-auto mt-auto mb-5">$45</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    {{--    <div class="row">--}}
{{--        <div class="col-12">--}}
{{--            <div class="card my-4">--}}
{{--                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">--}}
{{--                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">--}}
{{--                        <h6 class="text-white text-capitalize ps-3">Course table</h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-body px-0 pb-2">--}}
{{--                    <div class="table-responsive p-0">--}}
{{--                        <div style ='float:right;padding: 2px 15px'>--}}
{{--                            <a href="{{url('teacher/course/createCourse')}}"><img src="https://img.icons8.com/material-rounded/48/fa314a/add.png"/></a>--}}
{{--                        </div>--}}
{{--                        <table class="table align-items-center mb-0">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Course Title</th>--}}
{{--                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Course Description</th>--}}
{{--                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>--}}
{{--                                --}}{{--                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>--}}
{{--                                --}}{{--                      <th class="text-secondary opacity-7"></th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @if (!empty($courses))--}}
{{--                                @foreach ($courses as $course)--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex px-2 py-1">--}}
{{--                                                <div class="d-flex flex-column justify-content-center">--}}
{{--                                                    <p class="text-xs text-secondary mb-0">{{$course->title}}</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex px-2 py-1">--}}
{{--                                                <div class="d-flex flex-column justify-content-center">--}}
{{--                                                    <p class="text-xs text-secondary mb-0 text-dots-20">{{$course->description}}</p>--}}
{{--                                                    <a href="{{url('/teacher/course/detailsCourse/'.$course->id )}}">--}}
{{--                                                        <p class="text-xs text-secondary mb-0">Read more</p>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}

{{--                                        <td class="align-middle text-center text-sm">--}}
{{--                                            <a href="{{url('/teacher/course/edit/'.$course->id)}}" title="edit icons"><img src="https://img.icons8.com/material-outlined/24/000000/edit--v1.png"/></a>--}}
{{--                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">--}}

{{--                                            </a>--}}
{{--                                            <form method="post" action="{{url('/teacher/course/delete/'.$course->id)}}">--}}
{{--                                                {{ csrf_field()}}--}}
{{--                                                @method('DELETE')--}}
{{--                                                <button class="btn btn-danger" type="submit">Delete</button>--}}
{{--                                            </form>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                            @endif--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection


