@extends('layouts/layoutHomeIn')
    @section('content')
        <section class="featured-product section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="mb-5">Manage Your Profile</h2>
                    </div>
                    <div class="col-md-6 text-center">
                        <p>Change personal info</p>
                        <div class="product-thumb">
                            <a href="{{url("/teacher/personalInfo/".$teacher->id)}}">
                                <img src="{{URL::asset('img/settings/download.png')}}" class="img-fluid product-image" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <p>Change password</p>
                        <div class="product-thumb">
                            <a href="{{url("/teacher/passwordReset/".$teacher->id)}}">
                                <img src="{{URL::asset('img/settings/images.jpeg')}}" class="img-fluid product-image" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
