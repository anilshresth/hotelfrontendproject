@extends('frontend.homemaster')

@section('css')
<link rel="stylesheet" href="{{'public/css/dining.css'}}">
@endsection('css')


@section('content')

<div class="container-fluid dining-banner d-flex align-items-end" style="background-image:url({{asset('public/images/diningbannerpage.jpg')}})">
    <div class="container d-flex align-items-end">
        <p>
            Dinings
        </p>

    </div>

</div>

<div class="container dining-padding">
    <div class="text-center dining-title">
        <span>refined</span> dining experience
    </div>
    <div>
        <p class="dining-intro text-center">
        Our employees are happy to serve you in the comfort of your room at any time of day or night. Our extensive Room Service menu features a wide, international selection of the finest dishes and snacks our kitchen has to offer. Whatever your desire, we will deliver to your room. We also offer convenient breakfast menus that you fill-in and simply hang on your door knob before you go to sleep and then wake up to breakfast in bed!
        </p>
    </div>
    <div class="row dining-row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <img src="{{asset('public/images/dining1.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 dining-brief">
            <div class="dining-image-title">
                <p>
                    cafe horizon
                </p>
            </div>
            <p>
                Café Horizon is your first port of call on a culinary journey that spans the globe. Indulge in our lavish buffet breakfast and lunch or delight in exquisite dishes from our international a la carte menu. You can enjoy the view from inside or bask in the sunshine. 
            </p>
            <div class="float-right">
                <div class="dining-btn">
                    <a href="#" class="btn  ">Enquiry</a>
                </div>
                    <span class="dining-detail">Details <i class="fa fa-arrow-right"></i></span>

            </div>

            
        </div>

    </div>
    <div class="row dining-row">
        <div class="col-xs-12 col-sm-12  col-md-6">
            <img src="{{asset('public/images/dining.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class=" col-xs-12 col-sm-12 col-md-6 dining-brief">
            <div class="dining-image-title">
                <p>
                    cafe horizon
                </p>
            </div>
            <p>
                Café Horizon is your first port of call on a culinary journey that spans the globe. Indulge in our lavish buffet breakfast and lunch or delight in exquisite dishes from our international a la carte menu. You can enjoy the view from inside or bask in the sunshine. 
            </p>
            <div class="float-right">
                <div class="dining-btn">
                    <a href="#" class="btn  ">Enquiry</a>
                </div>
                    <span class="dining-detail">Details <i class="fa fa-arrow-right"></i></span>

            </div>

            
        </div>

    </div>
    <div class="row dining-row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <img src="{{asset('public/images/dining3.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 dining-brief">
            <div class="dining-image-title">
                <p>
                    cafe horizon
                </p>
            </div>
            <p>
                Café Horizon is your first port of call on a culinary journey that spans the globe. Indulge in our lavish buffet breakfast and lunch or delight in exquisite dishes from our international a la carte menu. You can enjoy the view from inside or bask in the sunshine. 
            </p>
            <div class="float-right">
                <div class="dining-btn">
                    <a href="#" class="btn">Enquiry</a>
                </div>
                    <span class="dining-detail">Details <i class="fa fa-arrow-right"></i></span>

            </div>

            
        </div>

    </div>
    

</div>
@endsection('content')


