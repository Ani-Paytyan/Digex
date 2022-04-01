@extends('layouts/layoutHomeIn')
    @section('content')
        <section class="sront-product">
            <div class="container">
                <div class="row">
                    <div class="mx-auto">
                            <div class="bg-white rounded overflow-hidden">
                                <div class="px-4 pt-0 pb-4 cover">
                                    <div class="media align-items-end profile-head">
                                        <div class="profile mr-3">
                                            <img src="{{Storage::url($user->image) }}" alt="..." width="130" class="rounded mb-2 img-thumbnail">
                                            <a href="{{url('teacher/edit/'.$user->id)}}" class="btn btn-outline-dark btn-sm btn-block">Edit profile</a>
                                        </div>
                                        <div class="media-body mb-5 text-white">

                                            <h4 class="mt-0 mb-0">{{$user->username}}</h4>
                                            <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>New York</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-light p-5 d-flex text-center"></div>
                                <div class="px-4 py-3">

                                    <h5 class="mb-0">About</h5>
                                    <div class="p-4 rounded shadow-sm bg-light">
                                        <p class="font-italic mb-0">First Name: {{$user->first_name}}</p>
                                        <p class="font-italic mb-0">Last Name: {{$user->last_name}}</p>
                                        <p class="font-italic mb-0">Profession: {{$user->profession}}</p>
                                    </div>
                                </div>
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
                                        <img src="{{URL::asset('img/homePage/chess.jpg')}}" class="img-fluid" alt="">
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
                    @if (!empty($courses))
                        <?php  $i = 0; ?>
                        @foreach ($courses as $course)
                            <?php $i++; ?>
                            @if ($i<4)
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
                                                    <a href="product-detail.html" class="product-title-link">{{$course->title}}</a>
                                                </h5>

                                                <p class="product-p">Original package design from house</p>
                                            </div>

                                            <small class="product-price text-muted ms-auto mt-auto mb-5">$25</small>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                    <div class="col-12 text-center">
                        <a href="{{url('/teacher/course')}}" class="view-all">View All Courses</a>
                    </div>
                </div>
            </div>
        </section>
    @endsection

