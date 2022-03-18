@extends('layouts.layout')
@section('content')
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Category <panel></panel></h6>
              </div>
            </div>
              <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">
                      <div style ='float:right;padding: 2px 15px'>
                          <a href="{{url('/admin/addCategory')}}"><img src="https://img.icons8.com/material-rounded/48/fa314a/add.png"/></a>
                      </div>
                  </div>
              </div>
              <div class="business-gallery">
                  @if (!empty($categories))
                      @foreach ($categories as $category)
                          <div class="gallery">
                          {{$category->name}}
                              <img class="iconClose" onclick="document.getElementById('image').style.display='block'" src="https://img.icons8.com/material-sharp/24/000000/delete-sign.png"/ >
                                  <a href="{{url('/admin/category/task/'.$category->id)}}" class="post-gallery">
                                      <div class="image">
                                          <img class="catImage" src="{{ URL::asset('uploads/categories_photo/'.$category->image) }}" alt="Second image" />
                                          <div class="image-extras"></div>
                                      </div>
                                  </a>
                          </div>
                      @endforeach
                  @endif
              </div>
          </div>
        </div>

          <!-- Modla -->
          <div id="image" class="modal">
              <form class="modal-content" action="">
                  <span onclick="document.getElementById('image').style.display='none'" class="close" title="Close Modal">×</span>
                  <div class="container">
                      <h5>Delete Account</h5>
                      <p>Are you sure you want to delete your account?</p>
                      <div class="clearfix">
                          <button type="button" onclick="document.getElementById('image').style.display='none'" class="cancelbtn">Cancel</button>
                          <button type="button" onclick="document.getElementById('image').style.display='none'" class="deletebtn">Delete</button>
                      </div>
                  </div>
              </form>
          </div>

      </div>
      @endsection




