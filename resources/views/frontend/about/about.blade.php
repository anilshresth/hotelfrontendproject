@extends('frontend.homemaster')

@section('css')
 <link rel="stylesheet" href="{{'public/css/about.css'}}">
@endsection('css')


@section('content')
 
<div class="container-fluid about-image d-flex align-items-end" style="background-image:url({{asset('public/images/aboutus2.jpg')}})">
        <div class="container">
            About us
        </div>
</div>
<div class="container"> 
    <div class="about-us-title text-center">
       <h3> <span> True </span>nepalese hospitality</h3>


    </div>
    <div class="short-intro-about text-center">
    Situated in the epicenter of Kathmandu valley, offering great value for money with superb rooms and wonderful dining experience. Come and stay with us and allow us to make you feel at home with true Nepalese hospitability!

    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12 image-container">
            <div class="img-wrapper">

          
                    <div>
                        <img src="{{'public/images/aboutus1.jpg'}}"  alt="">
                    </div>
                    
                    <img src="{{'public/images/aboutus3.jpg'}}" class="image2"  alt="">
                    <img src="{{'public/images/palmtree.jpg'}}"  class="image3" alt="">

             </div>

        </div>
        <div class="col-md-6 col-sm-12 about-us-intro ">
            <p> Nestled within 10 acres of exquisitely landscaped grounds, Hotel Himalaya is conveniently located 8 km away from the Tribhuban International Airport and only 2 km from the Kathmandu city centre. We have always been an ideal haven for business and leisure travelers alike, offering resort ambience with an intimate touch. Since many of the distinguished NGO’s and INGO’s in Kathmandu are in the vicinity and the UN head office is only a few minutes walking distance. We provide a perfect place for our valued guests to rest, work or socialize.</p>

            <p>Our 125 well-appointed rooms offer every comfort the traveler may need and we have a full range of amenities for our distinguished guests. You can enjoy a 180 degree panoramic view of the majestic Himalayan range from our garden. We offer the finest cuisine in our international restaurant ‘Café Horizon’ as well as In-Room dining for a more private meal. For our active guests, we have a superb tennis court, swimming pool and health club to keep you in shape and tone your body.</p>
             <p>The food served are hygienic and timely. The culinary chef use their best skills to serve a delight on your table. You can enjoy the delicious recipes of Indian, Continental and Chinese Cuisine.</p>
  
        </div>

    </div>
    <div class="row">
        <div class="col-md-9 col-sm-12 about-us-intro">
            <p>
            We are surrounded by a multitude of shopping centers, Bhatbhateni departmental store, Nepalese ethnic gift shops and entertainment options, offering an exhilarating combination of activities for a memorable holiday. Patan Durbar Square and the ancient palace city of the Malla Kings, listed in UNESCO World Heritage Site, is 10 minutes walk from the hotel.

            </p>
            <p>
            Our employees are happy to serve you in the comfort of your room at any time of day or night. Our extensive Room Service menu features a wide, international selection of the finest dishes and snacks our kitchen has to offer. Whatever your desire, we will deliver to your room. We also offer convenient breakfast menus that you fill-in and simply hang on your door knob before you go to sleep and then wake up to breakfast in bed!
            </p>

        </div>
        <div class="col-md-3">

        </div>

    </div>

</div>

@endsection