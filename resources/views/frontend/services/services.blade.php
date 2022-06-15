@extends('frontend.homemaster')

@section('css')
<link rel="stylesheet" href="{{'public/css/services.css'}}">
@endsection('css')


@section('content')

<div class="container-fluid dining-banner d-flex align-items-end" style="background-image:url({{asset('public/images/diningbannerpage.jpg')}})">
    <div class="container d-flex align-items-end">
        <p>
            Our awesome services
        </p>

    </div>

</div>

<div class="container dining-padding">
    <div class="text-center dining-title">
        <span>Our</span> awesome services
    </div>
    <div>
        <p class="dining-intro text-center">
        Hotel Himalaya established an incomparable reputation for providing gracious hospitality and exacting service to our valued customers. We offers a wide range of facilities to make our guests stay easy and comfortable.
        </p>
    </div>
    
    <div class="row services-padding">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="services-wrapper">
                <div class="services-box ">
                    <div class="services-content">
                        <img src="{{asset('public/images/pngimages/doctor.png')}}" alt="">
                        
                    </div>
                    <p class="services-name">
                    doctor on call
                   
                </p>
                    
                </div>

              
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="services-wrapper">
                <div class="services-box ">
                    <div class="services-content">
                        <img src="{{asset('public/images/pngimages/services2.png')}}" alt="">
                        
                    </div>
                    <p class="services-name">
                    campfire
                   
                </p>
                    
                </div>

              
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="services-wrapper">
                <div class="services-box ">
                    <div class="services-content">
                        <img src="{{asset('public/images/pngimages/services2.png')}}" alt="">
                        
                    </div>
                    <p class="services-name">
                    Transportation
                   
                </p>
                    
                </div>

              
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="services-wrapper">
                <div class="services-box ">
                    <div class="services-content">
                        <img src="{{asset('public/images/pngimages/services3.png')}}" alt="">
                        
                    </div>
                    <p class="services-name">
                    Credit card accepted
                   
                </p>
                    
                </div>

              
            </div>
        </div>

    </div>
    <div class="row services-padding">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="services-wrapper">
                <div class="services-box ">
                    <div class="services-content">
                        <img src="{{asset('public/images/pngimages/services4.png')}}" alt="">
                        
                    </div>
                    <p class="services-name">
                    Tour information 
                   
                </p>
                    
                </div>

              
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="services-wrapper">
                <div class="services-box ">
                    <div class="services-content">
                        <img src="{{asset('public/images/pngimages/services5.png')}}" alt="">
                        
                    </div>
                    <p class="services-name">
                    safety locker
                   
                </p>
                    
                </div>

              
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="services-wrapper">
                <div class="services-box ">
                    <div class="services-content">
                        <img src="{{asset('public/images/pngimages/services6.png')}}" alt="">
                        
                    </div>
                    <p class="services-name">
                    24 hour room services
                   
                </p>
                    
                </div>

              
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="services-wrapper">
                <div class="services-box ">
                    <div class="services-content">
                        <img src="{{asset('public/images/pngimages/services7.png')}}" alt="">
                        
                    </div>
                    <p class="services-name">
                    resturant and services
                   
                </p>
                    
                </div>

              
            </div>
        </div>

    </div>
    <div class="row services-padding">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="services-wrapper">
                <div class="services-box ">
                    <div class="services-content">
                        <img src="{{asset('public/images/pngimages/services8.png')}}" alt="">
                        
                    </div>
                    <p class="services-name">
                   laundry services
                   
                </p>
                    
                </div>

              
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="services-wrapper">
                <div class="services-box ">
                    <div class="services-content">
                        <img src="{{asset('public/images/pngimages/services9.png')}}" alt="">
                        
                    </div>
                    <p class="services-name">
                    complementary waters
                   
                </p>
                    
                </div>

              
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="services-wrapper">
                <div class="services-box ">
                    <div class="services-content">
                        <img src="{{asset('public/images/pngimages/services10.png')}}" alt="">
                        
                    </div>
                    <p class="services-name">
                    Elevators
                   
                </p>
                    
                </div>

              
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="services-wrapper">
                <div class="services-box ">
                    <div class="services-content">
                        <img src="{{asset('public/images/pngimages/services11.png')}}" alt="">
                        
                    </div>
                    <p class="services-name">
                    airpot shuttle
                   
                </p>
                    
                </div>

              
            </div>
        </div>

    </div>
    <div class="row services-padding">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="services-wrapper">
                <div class="services-box ">
                    <div class="services-content">
                        <img src="{{asset('public/images/pngimages/services12.png')}}" alt="">
                        
                    </div>
                    <p class="services-name">
                    doctor on call
                   
                </p>
                    
                </div>

              
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="services-wrapper">
                <div class="services-box ">
                    <div class="services-content">
                        <img src="{{asset('public/images/pngimages/services13.png')}}" alt="">
                        
                    </div>
                    <p class="services-name">
                    doctor on call
                   
                </p>
                    
                </div>

              
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="services-wrapper">
                <div class="services-box ">
                    <div class="services-content">
                        <img src="{{asset('public/images/pngimages/services14.png')}}" alt="">
                        
                    </div>
                    <p class="services-name">
                    doctor on call
                   
                </p>
                    
                </div>

              
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="services-wrapper">
                <div class="services-box ">
                    <div class="services-content">
                        <img src="{{asset('public/images/pngimages/services18.png')}}" alt="">
                        
                    </div>
                    <p class="services-name">
                 
                   wifi
                </p>
                    
                </div>

              
            </div>
        </div>

    </div>
   

</div>
@endsection('content')


