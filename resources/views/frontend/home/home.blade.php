@extends('frontend.homemaster')

@section('css')
<link rel="stylesheet" href="{{'public/css/home.css'}}">
@endsection('css')

@section('content')

<!-- carousel starts -->
 
<section id="home-carousel">
    <div class="home-slider text-center owl-carousel">
        <div class="box-area">
            <div class="img-area">
                <img src="{{asset('public/images/hotelswimming.jpg')}}" alt="swiming pool">
                    
            </div>
 
        </div>
        <div class="box-area">
            <div class="img-area">
                <img src="{{asset('public/images/night-garden.jpg')}}" alt="swiming pool">
                    
            </div>

        </div>
        <div class="box-area">
            <div class="img-area">
                <img src="{{asset('public/images/bedroom.jpg')}}" alt="swiming pool">
                    
            </div>

        </div>

    </div>

</section>
<!-- carousel-ends -->



 <div class="container pt-4 pb-4 intro ">
    <div class="row">
        <div class="col-md-6 ">
            <h3 class="pt-5">Welcome to <span class="intro-text" >Hotel Himalaya</span>  </h3>
            <p>
            Nestled within 10 acres of exquisitely landscaped grounds, Hotel Himalaya is conveniently located 8 km away from the Tribhuban International Airport and only 2 km from the Kathmandu city centre. We have always been an ideal haven for business and leisure travelers alike, offering resort ambience with an intimate touch. Since many of the distinguished NGO’s and INGO’s in Kathmandu are in the vicinity and the UN head office is only a few minutes walking distance. </p>

            <p>  We provide a perfect place for our valued guests to rest, work or socialize. Come and stay with us and allow us to make you feel at home with true Nepalese hospitality! </p>
            
        </div>
        <div class="col-md-6">
            <div class="embed-responsive embed-responsive-4by3 ">
                <video src="{{asset('public/videos/videohimal.m4v')}}" type="video/mp4" autoplay loop muted></video>

            </div>
        </div>

    </div>

</div>


<div class="container-fluid accomodation">


<div class="container ">
    <h4>ACCOMODATION</h4>
    <div class="row">
        <div class=" col-md-3">
            <div class="box-content">
                <div class="accomodation-image">
                    <img src="{{'public/images/deluxking.jpg'}}" alt="" class="img-fluid">

                </div>
                <div class="box-detail">    
                    <p class="room-name">Delux king bed</p>
                    <p class="room-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                     </p>
                    <a href="#" class="room-detail" >Details <i class="fa-solid fa-circle-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
        <div class="box-content">
                <div class="accomodation-image">
                    <img src="{{'public/images/deluxtwin.jpg'}}" alt="" class="img-fluid">

                </div>
                <div class="box-detail">
                    <p class="room-name">Delux Twin bed</p>
                    <p class="room-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                     </p>
                    <a href="#" class="room-detail" >Details <i class="fa-solid fa-circle-arrow-right"></i></a>
                </div>
            </div>

        </div>
        <div class="col-md-3">
        <div class="box-content">
                <div class="accomodation-image">
                    <img src="{{'public/images/executiveking.jpg'}}" alt="" class="img-fluid">

                </div>
                <div class="box-detail">
                    <p class="room-name">Executive King bed</p>
                    <p class="room-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                     </p>
                    <a href="#" class="room-detail" >Details <i class="fa-solid fa-circle-arrow-right"></i></a>
                </div>
            </div>

        </div>
        <div class="col-md-3">
        <div class="box-content">
                <div class="accomodation-image">
                    <img src="{{'public/images/juniorsuite.jpg'}}" alt="" class="img-fluid">

                </div>
                <div class="box-detail">
                    <p class="room-name">Junior suite</p>
                    <p class="room-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                     </p>
                    <a href="#" class="room-detail" >Details <i class="fa-solid fa-circle-arrow-right"></i></a>
                </div>
            </div>


        </div>

    </div>

</div>
</div>





<!-- facilities section starts -->
 <div class="container-fluid p-0 services-wrapper">
    
    <div class="service-slider owl-carousel ">

   
    <div class="row ">
        <div class="col-md-6 p-0"  >
            <div class="image-fluid-box">
                <img src="{{'public/images/healthclub.jpg'}}" alt="swimming pool" class="img-fluid services-image" >

            </div>
        </div>
        <div class="col-md-6 p-0 services-promotion-content" >
            <div class="services-content-box" >
                <h2>
                    Health Club 
                </h2>
                <h2>
                    and recreation
                </h2>
                <p class="service-short-header">
                    fully excercise equipment
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus possimus doloremque natus ut, aspernatur voluptates, saepe, quas iusto cum ducimus ab quidem maiores voluptate ad. Veritatis, maiores dolorem. Voluptatibus, eaque.
                </p>
                <div class="availabel-services d-flex flex-row flex-wrap">

                    <div class="services-block d-inline-flex  flex-column">
                   
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/sauna.png')}})">

                        
                        </div>
                        <div class="services-name">sauna</div>
                        
                    </div>
                    <div class="services-block-bg-changed d-inline-flex flex-column">
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/steam.png')}})">

                        
                        </div>
                        <div class="services-name">sauna</div>                       

                    </div>
                    <div class="services-block d-inline-flex flex-column">
                   
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/weightlift.png')}})">

                        
                        </div>
                        <div class="services-name">sauna</div>
                        
                    </div>
                    <div class="services-block-bg-changed d-inline-flex flex-column">
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/spa.png')}})">

                        
                        </div>
                        <div class="services-name">sauna</div>                       

                    </div>



                   
                </div>


            </div>

        </div>

    </div>

    <div class="row ">
        <div class="col-md-6 p-0"  >
            <div class="image-fluid-box">
                <img src="{{'public/images/tennis-court.jpg'}}" alt="swimming pool" class="img-fluid services-image" >

            </div>
        </div>
        <div class="col-md-6 p-0 services-promotion-content" >
            <div class="services-content-box" >
            <h2>
                    Tennis Court
                </h2>
                <p class="service-short-header">
                    well maintained clay court
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus possimus doloremque natus ut, aspernatur voluptates, saepe, quas iusto cum ducimus ab quidem maiores voluptate ad. Veritatis, maiores dolorem. Voluptatibus, eaque.
                </p>
                <div class="availabel-services d-flex flex-row flex-wrap">

                    <div class="services-block d-inline-flex flex-column">
                   
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/court.png')}})">

                        
                        </div>
                        <div class="services-name">sauna</div>
                        
                    </div>
                    <div class="services-block-bg-changed d-inline-flex flex-column">
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/plant.png')}})">

                        
                        </div>
                        <div class="services-name">sauna</div>                       

                    </div>
                    <div class="services-block d-inline-flex flex-column">
                   
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/racket.png')}})">

                        
                        </div>
                        <div class="services-name">sauna</div>
                        
                    </div>
                    <div class="services-block-bg-changed d-inline-flex flex-column">
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/player.png')}})">

                        
                        </div>
                        <div class="services-name">sauna</div>                       

                    </div>
                    <div class="services-block d-inline-flex flex-column">
                   
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/health.png')}})">

                        
                        </div>
                        <div class="services-name">sauna</div>
                        
                    </div>
                    <div class="services-block-bg-changed d-inline-flex flex-column">
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/heartbeat.png')}})">

                        
                        </div>
                        <div class="services-name">sauna</div>                       

                    </div>
                    <div class="services-block d-inline-flex flex-column">
                   
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/body.png')}})">

                        
                        </div>
                        <div class="services-name">sauna</div>
                        
                    </div>
                </div>



            </div>

        </div>

    </div>
    <div class="row ">
        <div class="col-md-6 p-0"  >
            <div class="image-fluid-box">
                <img src="{{'public/images/night-garden.jpg'}}" alt="swimming pool" class="img-fluid services-image" >

            </div>
        </div>
        <div class="col-md-6 p-0 services-promotion-content" >
            <div class="services-content-box" >
            <h2>
                   Garden
                </h2>
                <p class="service-short-header">
                   landscaped ground
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus possimus doloremque natus ut, aspernatur voluptates, saepe, quas iusto cum ducimus ab quidem maiores voluptate ad. Veritatis, maiores dolorem. Voluptatibus, eaque.
                </p>
                <div class="availabel-services d-flex flex-row flex-wrap">

                    <div class="services-block d-inline-flex flex-column">
                   
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/gardenimage1.png')}})">

                        
                        </div>
                        <div class="services-name">happiness</div>
                        
                    </div>
                    <div class="services-block-bg-changed d-inline-flex flex-column">
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/gardenimage2.png')}})">

                        
                        </div>
                        <div class="services-name">flowers</div>                       

                    </div>
                    <div class="services-block d-inline-flex flex-column">
                   
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/gardenimage3.png')}})">

                        
                        </div>
                        <div class="services-name">freash air</div>
                        
                    </div>
                    <div class="services-block-bg-changed d-inline-flex flex-column">
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/gardenimage4.png')}})">

                        
                        </div>
                        <div class="services-name">greenary</div>                       

                    </div>

 
    
                </div>



            </div>

        </div>

    </div>



    <div class="row ">
        <div class="col-md-6 p-0"  >
            <div class="image-fluid-box">
                <img src="{{'public/images/meetinghall.jpg'}}" alt="swimming pool" class="img-fluid services-image" >

            </div>
        </div>
        <div class="col-md-6 p-0 services-promotion-content" >
            <div class="services-content-box" >
            <h2>
                   Metting and Events
                </h2>
                <p class="service-short-header">
                  Fuly Furnished Rooms
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus possimus doloremque natus ut, aspernatur voluptates, saepe, quas iusto cum ducimus ab quidem maiores voluptate ad. Veritatis, maiores dolorem. Voluptatibus, eaque.
                </p>
                <div class="availabel-services d-flex flex-row flex-wrap">

                    <div class="services-block d-inline-flex flex-column">
                   
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/hotelimage1.png')}})">

                        
                        </div>
                        <div class="services-name">podium</div>
                        
                    </div>
                    <div class="services-block-bg-changed d-inline-flex flex-column">
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/hotelimage2.png')}})">

                        
                        </div>
                        <div class="services-name">Air conditioner</div>                       

                    </div>
                    <div class="services-block d-inline-flex flex-column">
                   
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/hotelimage3.png')}})">

                        
                        </div>
                        <div class="services-name">meeting lights</div>
                        
                    </div>
                    <div class="services-block-bg-changed d-inline-flex flex-column">
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/hotelimage4.png')}})">

                        
                        </div>
                        <div class="services-name">Projector</div>                       

                    </div>
                    <div class="services-block d-inline-flex flex-column">
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/hotelimage5.png')}})">

                        
                        </div>
                        <div class="services-name">wifi</div>                       

                    </div>
                    <div class="services-block-bg-changed d-inline-flex flex-column">
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/hotelimage6.png')}})">

                        
                        </div>
                        <div class="services-name">temperature</div>                       

                    </div>
                    <div class="services-block d-inline-flex flex-column">
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/hotelimage7.png')}})">

                        
                        </div>
                        <div class="services-name">mike</div>                       

                    </div>
                    <div class="services-block-bg-changed d-inline-flex flex-column">
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/hotelimage8.png')}})">

                        
                        </div>
                        <div class="services-name">Mineral water</div>                       

                    </div>                                                            

 
    
                </div>



            </div>

        </div>

    </div>

    <div class="row ">
        <div class="col-md-6 p-0"  >
            <div class="image-fluid-box">
                <img src="{{'public/images/hotelswimming.jpg'}}" alt="swimming pool" class="img-fluid services-image" >

            </div>
        </div>
        <div class="col-md-6 p-0 services-promotion-content" >
            <div class="services-content-box" >
            <h2>
                   Swimming Pool
                </h2>
                <p class="service-short-header">
                  Commited to better health
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus possimus doloremque natus ut, aspernatur voluptates, saepe, quas iusto cum ducimus ab quidem maiores voluptate ad. Veritatis, maiores dolorem. Voluptatibus, eaque.
                </p>
                <div class="availabel-services d-flex flex-row flex-wrap">

                    <div class="services-block d-inline-flex flex-column">
                   
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/swimimage1.png')}})">

                        
                        </div>
                        <div class="services-name" >sparkling water</div>
                        
                    </div>
                    <div class="services-block-bg-changed d-inline-flex flex-column">
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/swimimage2.png')}})">

                        
                        </div>
                        <div class="services-name">Mineral water</div>                       

                    </div>
                    <div class="services-block d-inline-flex flex-column">
                   
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/swimimage3.png')}})">

                        
                        </div>
                        <div class="services-name">umbrella</div>
                        
                    </div>
                    <div class="services-block-bg-changed d-inline-flex flex-column">
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/swimimage4.png')}})">

                        
                        </div>
                        <div class="services-name">sleeping table</div>                       

                    </div>
                    <div class="services-block d-inline-flex flex-column">
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/swimimage5.png')}})">

                        
                        </div>
                        <div class="services-name">wifi</div>                       

                    </div>
                    <div class="services-block-bg-changed d-inline-flex flex-column">
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/swimimage5.png')}})">

                        
                        </div>
                        <div class="services-name">wifi</div>                       

                    </div>
                    <div class="services-block d-inline-flex flex-column">
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/swimimage7.png')}})">

                        
                        </div>
                        <div class="services-name">mike</div>                       

                    </div>
                    <div class="services-block-bg-changed d-inline-flex flex-column">
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/swimimage7.png')}})">

                        
                        </div>
                        <div class="services-name">ball</div>                       

                    </div>    
                    <div class="services-block-bg-changed d-inline-flex flex-column">
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/swimimage9.png')}})">

                        
                        </div>
                        <div class="services-name">Towels</div>                       

                    </div> 
                    <div class="services-block-bg-changed d-inline-flex flex-column">
                        <div class="service-image" style="background-image:url({{asset('public/images/pngimages/swimimage10.png')}})">

                        
                        </div>
                        <div class="services-name">Nice view</div>                       

                    </div>                                                             

 
    
                </div>



            </div>

        </div>

    </div>




    </div>

   
</div>  
<!-- facilities section end -->



<!-- photo gallery starts -->
<div class="container-fluid photo-gallery-section">
   
    <div class="container gallery-wrapper">
        <h3>photo gallery</h3>
        <div class="photo-gallery-slider owl-carousel owl-theme">
            <div class="photo-box">
                <div class="photo-cover">
                    <img src="{{asset('public/images/tennis-court.jpg')}}"  alt="">
                    <div class="photo-hover">
                        <div class="photo-cover-inner">
                            <a href="{{asset('public/images/tennis-court.jpg')}}" data-lightbox="tenniscourt" data-title="wide tennis court">
                            <i class="fa-solid fa-up-right-and-down-left-from-center float-right pt-2"></i>
                            </a>
                            <div class="photo-text d-flex align-items-center">
                                <p>Tennis Court</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="photo-box">
                
            <div class="photo-cover">
                    <img src="{{asset('public/images/mirror.jpg')}}"  alt="">
                    <div class="photo-hover">
                        <div class="photo-cover-inner">
                            <a href="{{asset('public/images/mirror.jpg')}}" data-lightbox="tenniscourt" data-title="wide tennis court">
                            <i class="fa-solid fa-up-right-and-down-left-from-center float-right pt-2"></i>
                            </a>
                            <div class="photo-text d-flex align-items-center">
                                <p>Excellent wardrobe</p>
                            </div>
                        </div>
                    </div>
                </div>
            
             

            </div>
            <div class="photo-box">
                
            <div class="photo-cover">
                    <img src="{{asset('public/images/meetinghall.jpg')}}"  alt="">
                    <div class="photo-hover">
                        <div class="photo-cover-inner">
                            <a href="{{asset('public/images/meetinghall.jpg')}}" data-lightbox="tenniscourt" data-title="meeting hall" >
                            <i class="fa-solid fa-up-right-and-down-left-from-center float-right pt-2"></i>
                            </a>
                            <div class="photo-text d-flex align-items-center">
                                <p>Spacious Wardrobe</p>
                            </div>
                        </div>
                    </div>
                </div>
            
               

            </div>
            <div class="photo-box">
                
            <div class="photo-cover">
                    <img src="{{asset('public/images/dining-table.jpg')}}"  alt="">
                    <div class="photo-hover">
                        <div class="photo-cover-inner">
                            <a href="{{asset('public/images/dining-table.jpg')}}" data-lightbox="tenniscourt" data-title="dining-table">
                            <i class="fa-solid fa-up-right-and-down-left-from-center float-right pt-2"></i>
                            </a>
                            <div class="photo-text d-flex align-items-center">
                                <p>Large Dining hall</p>
                            </div>
                        </div>
                    </div>
                </div>
            
         

            </div>
            <div class="photo-box">
                
            <div class="photo-cover">
                    <img src="{{asset('public/images/dininghall.jpg')}}"  alt="">
                    <div class="photo-hover">
                        <div class="photo-cover-inner">
                            <a href="{{asset('public/images/dininghall.jpg')}}" data-lightbox="tenniscourt" data-title="dining hall">
                            <i class="fa-solid fa-up-right-and-down-left-from-center float-right pt-2"></i>
                            </a>
                            <div class="photo-text d-flex align-items-center">
                                <p>Dining hall</p>
                            </div>
                        </div>
                    </div>
                </div>
            


            </div>
            <div class="photo-box">

            <div class="photo-cover">
                    <img src="{{asset('public/images/hotelswimming.jpg')}}"  alt="">
                    <div class="photo-hover">
                        <div class="photo-cover-inner">
                            <a href="{{asset('public/images/hotelswimming.jpg')}}" data-lightbox="tenniscourt" data-title="hotel swimming">
                            <i class="fa-solid fa-up-right-and-down-left-from-center float-right pt-2"></i>
                            </a>
                            <div class="photo-text d-flex align-items-center">
                                <p>Clean Swimming Pool</p>
                            </div>
                        </div>
                    </div>
                </div>
            

            </div>
            <div class="photo-box">

            <div class="photo-cover">
                    <img src="{{asset('public/images/healthclub.jpg')}}"  alt="">
                    <div class="photo-hover">
                        <div class="photo-cover-inner">
                            <a href="{{asset('public/images/healthclub.jpg')}}" data-lightbox="tenniscourt" data-title="health club">
                            <i class="fa-solid fa-up-right-and-down-left-from-center float-right pt-2"></i>
                            </a>
                            <div class="photo-text d-flex align-items-center">
                                <p>Physical fitness</p>
                            </div>
                        </div>
                    </div>
                </div>
            

            </div>
            <div class="photo-box">

            <div class="photo-cover">
                    <img src="{{asset('public/images/night-garden.jpg')}}"  alt="">
                    <div class="photo-hover">
                        <div class="photo-cover-inner">
                            <a href="{{asset('public/images/night-garden.jpg')}}" data-lightbox="tenniscourt" data-title="night garden">
                            <i class="fa-solid fa-up-right-and-down-left-from-center float-right pt-2"></i>
                            </a>
                            <div class="photo-text d-flex align-items-center">
                                <p>Garden and flowers</p>
                            </div>
                        </div>
                    </div>
                </div>
            

            </div>
            <div class="photo-box">

            <div class="photo-cover">
                    <img src="{{asset('public/images/bedroom.jpg')}}"  alt="">
                    <div class="photo-hover">
                        <div class="photo-cover-inner">
                            <a href="{{asset('public/images/bedroom.jpg')}}" data-lightbox="tenniscourt" data-title="nightlamp">
                            <i class="fa-solid fa-up-right-and-down-left-from-center float-right pt-2"></i>
                            </a>
                            <div class="photo-text d-flex align-items-center">
                                <p>Decorations </p>
                            </div>
                        </div>
                    </div>
                </div>
            

            </div>
 


        </div>
    </div>
</div>
<!-- photo gallery ends -->

<!-- customer section starts -->
<div class="container-fluid customer-section">
    <div class="container">
        <div class="row">    
            <div class="col-md-9">
                <div class="row">
                    <div class="col-sm-12">
                       <h3>Customer Review</h3>

                    </div>

                </div>
                <div class=" customer-review-slider owl-carousel owl-theme">
                    <div class=" customer-review-box" >
                        <div class="review-text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex officia delectus placeat porro magni molestias voluptatum libero nisi qui quam quibusdam accusantium, saepe fuga adipisci. Delectus error repellat odit in!
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione voluptates voluptatum illum in sunt quisquam amet saepe, magnam modi nobis.
                        </div>
                        <div class="triangle">
                        </div>
                        <div class="reviewers d-flex flex-row">
                            <a href="#">
                                <img src="{{asset('public/images/expedia-logo.jpg')}}" alt="expedia image">
                            </a>
                            <div class="p-2">
                                <p>Yogesh</p>
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>

                            </div>




                        </div>
                    </div>
                    <div class=" customer-review-box"  >
                        <div class="review-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum maxime ad porro, numquam nulla earum illum! Non perspiciatis aperiam vero tempora repellat aspernatur nihil facilis accusantium labore consectetur, repellendus quos porro, quasi illum esse eos quis illo distinctio, fugiat quas.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id asperiores officiis nihil libero aliquid assumenda molestiae impedit qui, sit earum dignissimos iusto voluptatem magnam provident est nostrum. Consequuntur, provident nulla!
                        </div>
                        <div class="triangle">
                        </div>
                        <div class="reviewers d-flex flex-row">
                            <a href="#">
                                <img src="{{asset('public/images/booking.jpg')}}" alt="expedia image">
                            </a>
                            <div class="p-2">
                                <p>Fabian</p>
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>

                            </div>




                        </div>                       

                    </div>
                </div>
                <div class="customer-btn">
                    <a href="#"> view more <span><i class="fa fa-arrow-right"></i></span></a>

                </div>                
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-sm-12">
                        <h3>special offers</h3>

                    </div>
                </div>
                <div class="row">
                    <div class=" special-offer-slider owl-carousel">
                        <div class="items">
                            <a href="#">
                                <img src="{{asset('public/images/children.jpg')}}" alt="children park">
                            </a>

                        </div>
                        <div class="items">
                            <a href="#">
                                <img src="{{asset('public/images/hotelswimming.jpg')}}" alt="children park">
                            </a>

                        </div>
                        <div class="items">
                            <a href="#">
                                <img src="{{asset('public/images/mirror.jpg')}}" alt="children park">
                            </a>

                        </div>
                        <div class="items">
                            <a href="#">
                                <img src="{{asset('public/images/meetinghall.jpg')}}" alt="children park">
                            </a>

                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>

</div>
<!-- customer section ends -->

<!-- blog section starts -->
<div class=" container-fluid blog-section">
    <div class="container">
        <h3>
            from the blog
        </h3>
        <div class="row">
            <div class="col-md-4 blog-padding">
                <div class="blog-content">
                    <div class="blog-image">
                        <img src="{{asset('public/images/bbq.jpg')}}" class="img-fluid" alt="">

                    </div>
                    <div class="blog-text-wrapper">
                        <div class="blog-date text-muted">
                            01 Mar 2020

                        </div>
                        <div class="blog-title">
                            Oriental bbq night

                        </div>
                        <div class="blog-text text-muted">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure laudantium obcaecati excepturi eligendi asperiores recusandae voluptates optio quae tenetur facere.
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum, harum.
                        </div>



                    </div>


                </div>

            </div>

            <div class="col-md-4 blog-padding">
                
                <div class="blog-content">
                    <div class="blog-image">
                        <img src="{{asset('public/images/healthclub.jpg')}}" class="img-fluid" alt="">

                    </div>
                    <div class="blog-text-wrapper">
                        <div class="blog-date text-muted">
                            01 Mar 2020

                        </div>
                        <div class="blog-title">
                            physical fitness

                        </div>
                        <div class="blog-text text-muted">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure laudantium obcaecati excepturi eligendi asperiores recusandae voluptates optio quae tenetur facere.
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum, harum.
                        </div>



                    </div>


                </div>

            

            </div>
            <div class="col-md-4 blog-padding">
                
                <div class="blog-content">
                    <div class="blog-image">
                        <img src="{{asset('public/images/swimmingpool.jpg')}}" class="img-fluid" alt="">

                    </div>
                    <div class="blog-text-wrapper">
                        <div class="blog-date text-muted">
                            01 Mar 2020

                        </div>
                        <div class="blog-title">
                           Swimming pool

                        </div>
                        <div class="blog-text text-muted">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure laudantium obcaecati excepturi eligendi asperiores recusandae voluptates optio quae tenetur facere.
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum, harum.
                        </div>



                    </div>


                </div>

            

            </div>


        </div>

    </div>
 


</div>
<!-- blog section ends -->





@endsection('content')

@section('js')
<script src="{{'public/js/homecarousel.js'}}"></script>
<script src="{{'public/js/services-carousel.js'}}"></script>
<script src="{{'public/js/photogalleryslider.js'}}"></script>
<script src="{{'public/js/customerreviewslider.js'}}"></script>
<script src="{{'public/js/specialoffer-carousel.js'}}"></script>
@endsection('js')