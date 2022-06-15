@extends('frontend.homemaster')
@section('css')
<link rel="stylesheet" href="{{'public/css/contact.css'}}">
@endsection('css')



@section('content')
<div class="container-fluid map-wrapper">
    <iframe id="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.0736739448594!2d85.3170029144339!3d27.68411773312063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b6652b15fd%3A0x81876f28dbf7f39f!2sHotel%20Himalaya!5e0!3m2!1sen!2snp!4v1579190971211!5m2!1sen!2snp" allowfullscreen="" width="100%" height="400" frameborder="0"></iframe>
        

</div>
<div class="container-fluid contact-info-container">
    <div class="container">
        <form id="contact-form" method="get" role="form" action="">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-info-wrapper">
                        <div class="contact-content">
                            <h2>Contact info</h3>
                            <p class="pt-3 pb-3">
                            Have any Queries? Let us know. We will clear it for you at the best.
                            </p>
                            <li><i class="fa-solid fa-location-dot"></i>Sahid Sukra Marg-10, Lalitpur, Nepal</li>
                            <li><i class="fa-solid fa-message"></i>form@hotelhimalaya.com.np</li>
                            <li><i class="fa-solid fa-phone"></i>97787235595</li>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact-intro">
                        <p class="text-justify">
                        We are being involved in below social media an excellent platform to enhance communication and understanding. Please do see our post, comment on it , like it and share it and more. It will help us to improve our services and extend customer satisfaction.
                        </p>
                        <div class="contact-icons">
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-solid fa-plane-departure"></i>

                        </div>

                    </div>



                </div>

            </div>
            <div class="row pt-2">
                <div class="col-sm-12 text-center">
                    <h3 class="fw-bold text-uppercase p-2">send message</h3>
                    <p class="text-center p-2 text-justify">Our team is happy to answer any enquiries. Please take a moment to fill up the below form. We will try our best to entertain your any inquiries, feedback or request of special services.</p>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form-group">
                        <input type="text" class="form-control form-control-lg " placeholder="YOUR NAME" required="required" data-error="first name is required">
                        <input type="text" class="form-control form-control-lg " placeholder="YOUR EMAIL" required="required" data-error="email address is required">
                        <input type="text" class="form-control form-control-lg " placeholder="PHONE" required="required" data-error="phone number is required">
                    </div>
                </div>
                <div class="col-md-6">
                    <textarea name="" class="form-control mt-3" id="" cols="20" rows="8" placeholder="YOUR MESSAGE" data-error="messages are required"></textarea>

                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
       
                    <div class="g-recaptcha" data-sitekey="6LcuFg8gAAAAAMzFH_Th2vOEu2TuIcw_etT_ZhAP"></div>
                    <br/>
                    



                </div>
                <div class="col-md-6">
                    <a href="#" class=" messageform float-right btn-lg "  > <button type="submit" value="submit">submit</button></a>

                </div>

            </div>

        
        </form>
        
        <p class="text-muted">
            <strong>*</strong> These fields are required. Contact form template by
            <a href="#" target="_blank">digipal technology</a>.
        </p>
    </div>

</div>

@endsection('content')

@section('js')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

@endsection('js')