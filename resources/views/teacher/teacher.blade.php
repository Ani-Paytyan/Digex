@extends('layouts/layoutTeacher')
@section('content')

    <div class="row">
{{--        <div class="row py-5 px-4">--}}
            <div class="col-md-5 mx-auto">
                <!-- Profile widget -->
                <div class="bg-white shadow rounded overflow-hidden">
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
                    <div class="py-4 px-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="mb-0">Teachers</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                        </div>
                        <div class="row">
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive p-0">

                                    <table class="table align-items-center mb-0">
                                        <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">First Name</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Last Name</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if (!empty($teachers))
                                            @foreach ($teachers as $teacher)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <p class="text-xs text-secondary mb-0">{{$teacher->username}}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="text-xs text-secondary mb-0">{{$teacher->first_name}}</p>
                                                    </td>
                                                    <td>
                                                        <p class="text-xs text-secondary mb-0">{{$teacher->last_name}}</p>
                                                    </td>
                                                    <td>
                                                        <p class="text-xs text-secondary mb-0">{{$teacher->phone}}</p>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <a href="{{url('/teacher/edit/'.$teacher->id)}}" title="edit icons"><img src="https://img.icons8.com/material-outlined/24/000000/edit--v1.png"/></a>
                                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">

                                                        </a>
                                                        <form method="post" action="{{url('/teacher/delete/'.$teacher->id)}}">
                                                            {{ csrf_field()}}
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
{{--                            <div class="col-lg-6 mb-2 pr-lg-1"><img src="https://images.unsplash.com/photo-1469594292607-7bd90f8d3ba4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>--}}
{{--                            <div class="col-lg-6 mb-2 pl-lg-1"><img src="https://images.unsplash.com/photo-1493571716545-b559a19edd14?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>--}}
{{--                            <div class="col-lg-6 pr-lg-1 mb-2"><img src="https://images.unsplash.com/photo-1453791052107-5c843da62d97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" class="img-fluid rounded shadow-sm"></div>--}}
{{--                            <div class="col-lg-6 pl-lg-1"><img src="https://images.unsplash.com/photo-1475724017904-b712052c192a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>--}}
                        </div>
                    </div>
                </div>
            </div>
{{--        </div>--}}


{{--        <div class="col-12">--}}
{{--          <div class="card my-4">--}}
{{--            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">--}}
{{--              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">--}}
{{--                <h6 class="text-white text-capitalize ps-3">Teacher table</h6>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--              <div class="card-body px-0 pb-2">--}}
{{--                  <div class="table-responsive p-0">--}}

{{--                      <table class="table align-items-center mb-0">--}}
{{--                          <thead>--}}
{{--                            <tr>--}}
{{--                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>--}}
{{--                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">First Name</th>--}}
{{--                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Last Name</th>--}}
{{--                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>--}}
{{--                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>--}}
{{--                            </tr>--}}
{{--                          </thead>--}}
{{--                          <tbody>--}}
{{--                            @if (!empty($teachers))--}}
{{--                                @foreach ($teachers as $teacher)--}}
{{--                                    <tr>--}}
{{--                                      <td>--}}
{{--                                        <div class="d-flex px-2 py-1">--}}
{{--                                          <div class="d-flex flex-column justify-content-center">--}}
{{--                                            <p class="text-xs text-secondary mb-0">{{$teacher->username}}</p>--}}
{{--                                          </div>--}}
{{--                                        </div>--}}
{{--                                      </td>--}}
{{--                                      <td>--}}
{{--                                        <p class="text-xs text-secondary mb-0">{{$teacher->first_name}}</p>--}}
{{--                                      </td>--}}
{{--                                        <td>--}}
{{--                                            <p class="text-xs text-secondary mb-0">{{$teacher->last_name}}</p>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <p class="text-xs text-secondary mb-0">{{$teacher->phone}}</p>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle text-center text-sm">--}}
{{--                                          <a href="{{url('/teacher/edit/'.$teacher->id)}}" title="edit icons"><img src="https://img.icons8.com/material-outlined/24/000000/edit--v1.png"/></a>--}}
{{--                                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">--}}

{{--                                          </a>--}}
{{--                                          <form method="post" action="{{url('/teacher/delete/'.$teacher->id)}}">--}}
{{--                                              {{ csrf_field()}}--}}
{{--                                                  @method('DELETE')--}}
{{--                                                  <button class="btn btn-danger" type="submit">Delete</button>--}}
{{--                                              </form>--}}
{{--                                      </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                            @endif--}}
{{--                          </tbody>--}}
{{--                      </table>--}}
{{--                  </div>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--        </div>--}}
      </div>
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
        background: #654ea3;
        background: linear-gradient(to right, #e96443, #904e95);
        min-height: 100vh;
        overflow-x: hidden
    }
</style>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
