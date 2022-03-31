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
                                        @if (session('error'))
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        <form method="post" class="container-fluid col-lg-7 col-12" action="{{url('/teacher/passwordReset/'.$teacher->id)}}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-group {{ $errors->has('current-password') ? ' has-error' : '' }}">
                                                <label for="new-password" class="col-md-4 control-label">Current Password</label>
                                                <div class="col-md-6">
                                                    <input id="current-password" type="password" class="form-control" name="current-password" required>
                                                    @if ($errors->has('current-password'))
                                                        <span class="help-block">
                                                        <strong>{{ $errors->first('current-password') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group {{ $errors->has('new-password') ? ' has-error' : '' }}">
                                                <label for="new-password" class="col-md-4 control-label">New Password</label>

                                                <div class="col-md-6">
                                                    <input id="new-password" type="password" class="form-control" name="new-password" required>

                                                    @if ($errors->has('new-password'))
                                                        <span class="help-block">
                                                        <strong>{{ $errors->first('new-password') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>
                                                <div class="col-md-6">
                                                    <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Change Password
                                                    </button>
                                                </div>
                                            </div>
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
