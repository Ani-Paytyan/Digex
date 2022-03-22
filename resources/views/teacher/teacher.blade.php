@extends('layouts/layoutHome')
@section('content')
    <!-- Authentication -->
{{--    <form method="POST" action="{{ url('teacher/logout') }}">--}}
{{--        @csrf--}}
{{--        <button>log out</button>--}}

{{--    </form>--}}
    <section class="sront-product">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                    <div class="bg-white rounded overflow-hidden">
                        <div class="px-4 pt-0 pb-4 cover">
                            <div class="media align-items-end profile-head">
                                <div class="profile mr-3"><img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" alt="..." width="130" class="rounded mb-2 img-thumbnail"><a href="{{url('teacher/edit')}}" class="btn btn-outline-dark btn-sm btn-block">Edit profile</a></div>
                                <div class="media-body mb-5 text-white">

                                    <h4 class="mt-0 mb-0">Mark Williams</h4>
                                    <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>New York</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light p-4 d-flex justify-content-end text-center">
                        </div>
                        <div class="px-4 py-3">
                            <h5 class="mb-0">About</h5>
                            <div class="p-4 rounded shadow-sm bg-light">
                                <p class="font-italic mb-0">Web Developer</p>
                                <p class="font-italic mb-0">Lives in New York</p>
                                <p class="font-italic mb-0">Photographer</p>
                            </div>
                        </div>
{{--                        <div class="py-4 px-4">--}}
{{--                            <div class="d-flex align-items-center justify-content-between mb-3">--}}
{{--                                <h5 class="mb-0">Teachers</h5><a href="#" class="btn btn-link text-muted">Show all</a>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="card-body px-0 pb-2">--}}
{{--                                    <div class="table-responsive p-0">--}}
{{--                                        <table class="table align-items-center mb-0">--}}
{{--                                            <thead>--}}
{{--                                            <tr>--}}
{{--                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>--}}
{{--                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">First Name</th>--}}
{{--                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Last Name</th>--}}
{{--                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>--}}
{{--                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>--}}
{{--                                            </tr>--}}
{{--                                            </thead>--}}
{{--                                            <tbody>--}}
{{--                                            @if (!empty($teachers))--}}
{{--                                                @foreach ($teachers as $teacher)--}}
{{--                                                    <tr>--}}
{{--                                                        <td>--}}
{{--                                                            <div class="d-flex px-2 py-1">--}}
{{--                                                                <div class="d-flex flex-column justify-content-center">--}}
{{--                                                                    <p class="text-xs text-secondary mb-0">{{$teacher->username}}</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            <p class="text-xs text-secondary mb-0">{{$teacher->first_name}}</p>--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            <p class="text-xs text-secondary mb-0">{{$teacher->last_name}}</p>--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            <p class="text-xs text-secondary mb-0">{{$teacher->phone}}</p>--}}
{{--                                                        </td>--}}
{{--                                                        <td class="align-middle text-center text-sm">--}}
{{--                                                            <a href="{{url('/teacher/edit/'.$teacher->id)}}" title="edit icons"><img src="https://img.icons8.com/material-outlined/24/000000/edit--v1.png"/></a>--}}
{{--                                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">--}}

{{--                                                            </a>--}}
{{--                                                            <form method="post" action="{{url('/teacher/delete/'.$teacher->id)}}">--}}
{{--                                                                {{ csrf_field()}}--}}
{{--                                                                @method('DELETE')--}}
{{--                                                                <button class="btn btn-danger" type="submit">Delete</button>--}}
{{--                                                            </form>--}}
{{--                                                        </td>--}}
{{--                                                    </tr>--}}
{{--                                                @endforeach--}}
{{--                                            @endif--}}
{{--                                            </tbody>--}}
{{--                                        </table>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                    <div class="col-lg-6 mb-2 pr-lg-1"><img src="https://images.unsplash.com/photo-1469594292607-7bd90f8d3ba4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>--}}
{{--                                    <div class="col-lg-6 mb-2 pl-lg-1"><img src="https://images.unsplash.com/photo-1493571716545-b559a19edd14?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>--}}
{{--                                    <div class="col-lg-6 pr-lg-1 mb-2"><img src="https://images.unsplash.com/photo-1453791052107-5c843da62d97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" class="img-fluid rounded shadow-sm"></div>--}}
{{--                                    <div class="col-lg-6 pl-lg-1"><img src="https://images.unsplash.com/photo-1475724017904-b712052c192a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
          </div>
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="mb-5">Get started with <span>Little</span> Fashion</h2>
            </div>
            <div class="col-lg-10 col-12">
                <div class="tab-content mt-2" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <img src="{{URL::asset('img/homePage/images/chess.jpg')}}" class="img-fluid" alt="">

                            </div>

                            <div class="col-lg-5 col-12">
                                <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                    <h4 class="mb-3">Good <span>Design</span> <br>Ideas for <span>your</span> fashion</h4>

                                    <p>Little Fashion templates comes with <a href="sign-in.html">sign in</a> / <a href="sign-up.html">sign up</a> pages, product listing / product detail, about, FAQs, and contact page.</p>

                                    <p>Since this HTML template is based on Boostrap 5 CSS library, you can feel free to add more components as you need.</p>

                                    <div class="mt-2 mt-lg-auto">
                                        <a href="{{route('login')}}" class="custom-link mb-2">
                                            Learn more about us
                                            <i class="bi-arrow-right ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-youtube" role="tabpanel" aria-labelledby="pills-youtube-tab">

                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube-nocookie.com/embed/f_7JqPDWhfw?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>

                            <div class="col-lg-5 col-12">
                                <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                    <h4 class="mb-3">Life at Studio</h4>

                                    <p>Over three years in business, We’ve had the chance to work on a variety of projects, with companies</p>

                                    <p>Custom work is branding, web design, UI/UX design</p>

                                    <div class="mt-2 mt-lg-auto">
                                        <a href="contact.html" class="custom-link mb-2">
                                            Work with us
                                            <i class="bi-arrow-right ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-skill" role="tabpanel" aria-labelledby="pills-skill-tab">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <img src="{{URL::asset('img/homePage/images/chess.jpg')}}" class="img-fluid" alt="">

                            </div>

                            <div class="col-lg-5 col-12">
                                <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                    <h4 class="mb-3">What can help you?</h4>

                                    <p>Over three years in business, We’ve had the chance on projects</p>

                                    <div class="skill-thumb mt-3">

                                        <strong>Branding</strong>
                                        <span class="float-end">90%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                        </div>

                                        <strong>Design & Stragety</strong>
                                        <span class="float-end">70%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                        </div>

                                        <strong>Online Platform</strong>
                                        <span class="float-end">80%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                        </div>

                                    </div>

                                    <div class="mt-2 mt-lg-auto">
                                        <a href="products.html" class="custom-link mb-2">
                                            Explore products
                                            <i class="bi-arrow-right ms-2"></i>
                                        </a>
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
    <section class="about section-padding">
        <div class="container">
            <div class="row">

                <div class="col-12 text-center">
                    <h2 class="mb-5">Get started with <span>Little</span> Fashion</h2>
                </div>

                <div class="col-lg-2 col-12 mt-auto mb-auto">
                    <ul class="nav nav-pills mb-5 mx-auto justify-content-center align-items-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Introduction</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-youtube-tab" data-bs-toggle="pill" data-bs-target="#pills-youtube" type="button" role="tab" aria-controls="pills-youtube" aria-selected="true">How we work?</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-skill-tab" data-bs-toggle="pill" data-bs-target="#pills-skill" type="button" role="tab" aria-controls="pills-skill" aria-selected="false">Capabilites</button>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-10 col-12">
                    <div class="tab-content mt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col-lg-7 col-12">
                                    <img src="{{URL::asset('img/homePage/images/chess.jpg')}}" class="img-fluid" alt="">

                                </div>

                                <div class="col-lg-5 col-12">
                                    <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                        <h4 class="mb-3">Good <span>Design</span> <br>Ideas for <span>your</span> fashion</h4>

                                        <p>Little Fashion templates comes with <a href="sign-in.html">sign in</a> / <a href="sign-up.html">sign up</a> pages, product listing / product detail, about, FAQs, and contact page.</p>

                                        <p>Since this HTML template is based on Boostrap 5 CSS library, you can feel free to add more components as you need.</p>

                                        <div class="mt-2 mt-lg-auto">
                                            <a href="{{route('login')}}" class="custom-link mb-2">
                                                Learn more about us
                                                <i class="bi-arrow-right ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-youtube" role="tabpanel" aria-labelledby="pills-youtube-tab">
                            <div class="row">
                                <div class="col-lg-7 col-12">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube-nocookie.com/embed/f_7JqPDWhfw?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-12">
                                    <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                        <h4 class="mb-3">Life at Studio</h4>

                                        <p>Over three years in business, We’ve had the chance to work on a variety of projects, with companies</p>

                                        <p>Custom work is branding, web design, UI/UX design</p>

                                        <div class="mt-2 mt-lg-auto">
                                            <a href="contact.html" class="custom-link mb-2">
                                                Work with us
                                                <i class="bi-arrow-right ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-skill" role="tabpanel" aria-labelledby="pills-skill-tab">
                            <div class="row">
                                <div class="col-lg-7 col-12">
                                    <img src="{{URL::asset('img/homePage/images/chess.jpg')}}" class="img-fluid" alt="">

                                </div>

                                <div class="col-lg-5 col-12">
                                    <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                        <h4 class="mb-3">What can help you?</h4>

                                        <p>Over three years in business, We’ve had the chance on projects</p>

                                        <div class="skill-thumb mt-3">

                                            <strong>Branding</strong>
                                            <span class="float-end">90%</span>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                            </div>

                                            <strong>Design & Stragety</strong>
                                            <span class="float-end">70%</span>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                            </div>

                                            <strong>Online Platform</strong>
                                            <span class="float-end">80%</span>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                            </div>

                                        </div>

                                        <div class="mt-2 mt-lg-auto">
                                            <a href="products.html" class="custom-link mb-2">
                                                Explore products
                                                <i class="bi-arrow-right ms-2"></i>
                                            </a>
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
    <section class="featured-product section-padding">
        <div class="container">
            <div class="row">

                <div class="col-12 text-center">
                    <h2 class="mb-5">Featured Products</h2>
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

                <div class="col-12 text-center">
                    <a href="products.html" class="view-all">View All Products</a>
                </div>

            </div>
        </div>
    </section>

@endsection


<style>
    .profile-head {
        transform: translateY(5rem)
    }
    .col-md-5 {
        flex: 0 0 auto!important;
        width: 104.666667%!important;
    }
    .cover {
        background-image: url(https://images.unsplash.com/photo-1530305408560-82d13781b33a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80);
        background-size: cover;
        background-repeat: no-repeat
    }

    body {
        /*background: #654ea3;*/
        background: linear-gradient(to right, #e96443, #904e95);
        min-height: 100vh;
        overflow-x: hidden
    }
</style>
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">--}}
