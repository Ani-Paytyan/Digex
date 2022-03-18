@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Task table</h6>
              </div>
            </div>
              <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">
                      <div style ='float:right;padding: 2px 15px'>
                          <a href="{{url('/admin/category/createTask')}}"><img src="https://img.icons8.com/material-rounded/48/fa314a/add.png"/></a>
                      </div>
                      <table class="table align-items-center mb-0">
                          <thead>
                            <tr>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
        {{--                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>--}}
        {{--                      <th class="text-secondary opacity-7"></th>--}}
                            </tr>
                          </thead>
                          <tbody>
                    @if (!empty($tasks))
                        @foreach ($tasks as $task)
                            <tr>
                              <td>
                                <div class="d-flex px-2 py-1">
                                  <div class="d-flex flex-column justify-content-center">
                                    <p class="text-xs text-secondary mb-0">{{$task->name}}</p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p class="text-xs text-secondary mb-0">{{$task->description}}</p>
                              </td>
                              <td class="align-middle text-center text-sm">
                                  <a href="{{url('/admin/category/task/edit/'.$task->id)}}" title="edit icons"><img src="https://img.icons8.com/material-outlined/24/000000/edit--v1.png"/></a>
                                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                  </a>
                                  <form method="post" action="{{url('/admin/category/task/delete/'.$task->id)}}">
                                      {{ csrf_field()}}
                                          @method('DELETE')
                                          <button class="btn btn-danger" type="submit">Delete</button>
                                      </form>
                              </td>
                            </tr>
                        @endforeach
                    @endif
        {{--                    <tr>--}}
        {{--                      <td>--}}
        {{--                        <div class="d-flex px-2 py-1">--}}
        {{--                          <div>--}}
        {{--                            <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user3">--}}
        {{--                          </div>--}}
        {{--                          <div class="d-flex flex-column justify-content-center">--}}
        {{--                            <h6 class="mb-0 text-sm">Laurent Perrier</h6>--}}
        {{--                            <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>--}}
        {{--                          </div>--}}
        {{--                        </div>--}}
        {{--                      </td>--}}
        {{--                      <td>--}}
        {{--                        <p class="text-xs font-weight-bold mb-0">Executive</p>--}}
        {{--                        <p class="text-xs text-secondary mb-0">Projects</p>--}}
        {{--                      </td>--}}
        {{--                      <td class="align-middle text-center text-sm">--}}
        {{--                        <span class="badge badge-sm bg-gradient-success">Online</span>--}}
        {{--                      </td>--}}
        {{--                      <td class="align-middle text-center">--}}
        {{--                        <span class="text-secondary text-xs font-weight-bold">19/09/17</span>--}}
        {{--                      </td>--}}
        {{--                      <td class="align-middle">--}}
        {{--                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">--}}
        {{--                          Edit--}}
        {{--                        </a>--}}
        {{--                      </td>--}}
        {{--                    </tr>--}}
        {{--                    <tr>--}}
        {{--                      <td>--}}
        {{--                        <div class="d-flex px-2 py-1">--}}
        {{--                          <div>--}}
        {{--                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user4">--}}
        {{--                          </div>--}}
        {{--                          <div class="d-flex flex-column justify-content-center">--}}
        {{--                            <h6 class="mb-0 text-sm">Michael Levi</h6>--}}
        {{--                            <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>--}}
        {{--                          </div>--}}
        {{--                        </div>--}}
        {{--                      </td>--}}
        {{--                      <td>--}}
        {{--                        <p class="text-xs font-weight-bold mb-0">Programator</p>--}}
        {{--                        <p class="text-xs text-secondary mb-0">Developer</p>--}}
        {{--                      </td>--}}
        {{--                      <td class="align-middle text-center text-sm">--}}
        {{--                        <span class="badge badge-sm bg-gradient-success">Online</span>--}}
        {{--                      </td>--}}
        {{--                      <td class="align-middle text-center">--}}
        {{--                        <span class="text-secondary text-xs font-weight-bold">24/12/08</span>--}}
        {{--                      </td>--}}
        {{--                      <td class="align-middle">--}}
        {{--                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">--}}
        {{--                          Edit--}}
        {{--                        </a>--}}
        {{--                      </td>--}}
        {{--                    </tr>--}}
        {{--                    <tr>--}}
        {{--                      <td>--}}
        {{--                        <div class="d-flex px-2 py-1">--}}
        {{--                          <div>--}}
        {{--                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user5">--}}
        {{--                          </div>--}}
        {{--                          <div class="d-flex flex-column justify-content-center">--}}
        {{--                            <h6 class="mb-0 text-sm">Richard Gran</h6>--}}
        {{--                            <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>--}}
        {{--                          </div>--}}
        {{--                        </div>--}}
        {{--                      </td>--}}
        {{--                      <td>--}}
        {{--                        <p class="text-xs font-weight-bold mb-0">Manager</p>--}}
        {{--                        <p class="text-xs text-secondary mb-0">Executive</p>--}}
        {{--                      </td>--}}
        {{--                      <td class="align-middle text-center text-sm">--}}
        {{--                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>--}}
        {{--                      </td>--}}
        {{--                      <td class="align-middle text-center">--}}
        {{--                        <span class="text-secondary text-xs font-weight-bold">04/10/21</span>--}}
        {{--                      </td>--}}
        {{--                      <td class="align-middle">--}}
        {{--                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">--}}
        {{--                          Edit--}}
        {{--                        </a>--}}
        {{--                      </td>--}}
        {{--                    </tr>--}}
        {{--                    <tr>--}}
        {{--                      <td>--}}
        {{--                        <div class="d-flex px-2 py-1">--}}
        {{--                          <div>--}}
        {{--                            <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user6">--}}
        {{--                          </div>--}}
        {{--                          <div class="d-flex flex-column justify-content-center">--}}
        {{--                            <h6 class="mb-0 text-sm">Miriam Eric</h6>--}}
        {{--                            <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>--}}
        {{--                          </div>--}}
        {{--                        </div>--}}
        {{--                      </td>--}}
        {{--                      <td>--}}
        {{--                        <p class="text-xs font-weight-bold mb-0">Programator</p>--}}
        {{--                        <p class="text-xs text-secondary mb-0">Developer</p>--}}
        {{--                      </td>--}}
        {{--                      <td class="align-middle text-center text-sm">--}}
        {{--                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>--}}
        {{--                      </td>--}}
        {{--                      <td class="align-middle text-center">--}}
        {{--                        <span class="text-secondary text-xs font-weight-bold">14/09/20</span>--}}
        {{--                      </td>--}}
        {{--                      <td class="align-middle">--}}
        {{--                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">--}}
        {{--                          Edit--}}
        {{--                        </a>--}}
        {{--                      </td>--}}
        {{--                    </tr>--}}
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
        </div>
      </div>
@endsection


