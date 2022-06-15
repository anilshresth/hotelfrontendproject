@extends('frontend.homemaster')

@section('css')
<link rel="stylesheet" href="{{'public/css/gallery.css'}}">
@endsection('css')

@section('content')
<div class="container-fluid d-flex align-items-end gallery-banner" style="background-image:url({{asset('public/images/hotelswimming.jpg')}})">
    <div class="container">
        <p class="text-uppercase">
            Gallery
        </p>
    </div>
</div>
 

<div class="container mt-3 mb-3 ">
    <div id="galleryBtnContainer">
        <button class="btn  active" onclick="filterSelection('all')">show all</button>
        <button class="btn" onclick="filterSelection('nature')">nature</button>
        <button class="btn" onclick="filterSelection('cars')">cars</button>
        <button class="btn" onclick="filterSelection('people')">people</button>
    </div>
    <div class="row">

        <div class="col-md-4">
            <div class="gallery-box hall">
                <img src="{{asset('public/images/conference1.jpg')}}" class="img-fluid" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="gallery-box hall">
                <img src="{{asset('public/images/conference1.jpg')}}" class="img-fluid" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="gallery-box hall">
                <img src="{{asset('public/images/conference1.jpg')}}" class="img-fluid" alt="">
            </div>

        </div>

    </div>
        <div class="row">

        <div class="col-md-4">
            <div class="gallery-box nature">
                <img src="{{asset('public/images/aboutus1.jpg')}}" class="img-fluid" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="gallery-box nature">
                <img src="{{asset('public/images/aboutus2.jpg')}}" class="img-fluid" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="gallery-box nature">
                <img src="{{asset('public/images/aboutus3.jpg')}}" class="img-fluid" alt="">
            </div>

        </div>

    </div>
    <div class="row">

        <div class="col-md-4">
            <div class="gallery-box cars">
                <img src="{{asset('public/images/dining.jpg')}}" class="img-fluid" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="gallery-box cars">
                <img src="{{asset('public/images/dining1.jpg')}}" class="img-fluid" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="gallery-box cars">
                <img src="{{asset('public/images/dining3.jpg')}}" class="img-fluid" alt="">
            </div>

        </div>

    </div>
    
    <div class="row">
    <div class="col-md-4">
        <div class="gallery-box people">
            <img src="{{asset('public/images/booking.jpg')}}" class="img-fluid" alt="">
        </div>
    </div>

    <div class="col-md-4">
        <div class="gallery-box people">
            <img src="{{asset('public/images/executiveking.jpg')}}" class="img-fluid" alt="">
        </div>
    </div>

    <div class="col-md-4">
        <div class="gallery-box people">
            <img src="{{asset('public/images/deluxking.jpg')}}" class="img-fluid" alt="">
        </div>

    </div>

</div>
</div>

@endsection('content')

@section('js')
    <script src="{{'public/js/galleryview.js'}}"> </script>
@endsection('js')