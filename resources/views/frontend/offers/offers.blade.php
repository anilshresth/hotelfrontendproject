@extends('frontend.homemaster')

@section('css')
<link rel="stylesheet" href="{{'public/css/offers.css'}}">
@endsection('css')


@section('content')
<div class="container-fluid offer-background d-flex align-items-end " style="background-image:url({{url('public/images/offerlist.jpg')}}) ">
    <div class="container">
        <p>
            offer list
        </p>

    </div>
</div>
<div class="container offer-images-wrapper">
    <div class="row">
        <div class="col-md-4">
            <img src="{{asset('public/images/newyeareve.jpg')}}" class="offer-images img-fluid" alt="">
            <div class="text-center offer-text">New year eve</div>

        </div>
        <div class="col-md-4">
            <img src="{{asset('public/images/meetandwork.jpg')}}" class="offer-images img-fluid" alt="">
            <div class="text-center offer-text">Business lunch at cafe horizon</div>
        </div>
        <div class="col-md-4">
            <img src="{{asset('public/images/offers2.jpg')}}" class="offer-images img-fluid ">
            <div class="text-center offer-text">Escape to the himalaya</div>
        </div>

    </div>

    <div class="row justify-content-end">

        <div class="col-md-4">
            <img src="{{asset('public/images/meetandwork.jpg')}}" alt="meet and work" class="offer-images img-fluid">
            <div class="text-center offer-text">
                work from the himalayas
            </div>

        </div>

        
    </div> 

    <div class="row">
        <div class="col-md-4">
            <img src="{{asset('public/images/meetandwork.jpg')}}" alt="meet and work" class="offer-images img-fluid">
            <div class="text-center offer-text">
                Meet and work package
            </div>
           

        </div>
        <div class="col-md-4">
            <img src="{{asset('public/images/boardroom.jpg')}}" alt="meet and work" class="offer-images img-fluid">
            <div class="text-center offer-text">
                spaces for meeting 
            </div>
           

        </div>

    </div>

</div>
@endsection