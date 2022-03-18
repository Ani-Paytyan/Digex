@extends('layouts/layout')
@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Admin table</h6>
              </div>
            </div>
              <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">
                      <div style ='float:right;padding: 2px 15px'>
                          <a href="{{url('/admin/create')}}"><img src="https://img.icons8.com/material-rounded/48/fa314a/add.png"/></a>
                      </div>
                      <table class="table align-items-center mb-0">
                          <thead>
                            <tr>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
        {{--                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>--}}
        {{--                      <th class="text-secondary opacity-7"></th>--}}
                            </tr>
                          </thead>
                          <tbody>
                            @if (!empty($admins))
                                @foreach ($admins as $admin)
                                    <tr>
                                      <td>
                                        <div class="d-flex px-2 py-1">
                                          <div class="d-flex flex-column justify-content-center">
                                            <p class="text-xs text-secondary mb-0">{{$admin->username}}</p>
                                          </div>
                                        </div>
                                      </td>
                                      <td>
                                        <p class="text-xs text-secondary mb-0">{{$admin->email}}</p>
                                      </td>
                                      <td class="align-middle text-center text-sm">
                                          <a href="{{url('admin/edit/'.$admin->id)}}" title="edit icons"><img src="https://img.icons8.com/material-outlined/24/000000/edit--v1.png"/></a>
                                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">

                                          </a>
                                          <form method="post" action="{{url('/admin/delete/'.$admin->id)}}">
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
          </div>
        </div>
      </div>
@endsection


