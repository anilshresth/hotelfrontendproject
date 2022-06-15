
<header class="container-fluid navigations   ">
<!-- topnavbar starts -->
<div class="container-fluid top-navbar   d-none d-md-block">
   <div class="container p-0 ">
       <i class="fa-solid fa-location-dot p-1"></i>
       Sahid Sukra Marga-10,Lalitpur,Nepal
       <i class="fa-solid fa-phone pl-2"></i>
       <i class="fa-solid fa-envelope pl-2 "></i>

       <div class="float-right">

            <i class="fa-brands fa-facebook "></i>
            <i class="fa-brands fa-instagram pl-2"></i>

       </div>

   </div>


</div>
<!-- topnavbar ends -->

<!-- navigation bar starts -->

<div class="container-fluid fixed-top   p-0 ">
  <div class="container-fluid  second-navbar ">
    <div class="container  p-0">
    <nav class="navbar  navbar-expand-lg navbar-light navbar-padding">
        <a href="#" class="navbar-brand">Hotel Himalaya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto second-navbar-links">
          <li class="nav-item ">
            <a class="nav-link" href="{{route('home')}}">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('offers')}}">offer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('dining')}}">dining</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('meetings')}}">meeting and events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('services')}}">Services</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="{{route('gallery')}}">gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">contact</a>
          </li>


        </ul>

      </div>

    </nav>

    </div>

  </div>
 
</div>   
<!-- navigation bar ends starts -->

</header>






@section('js')
<script src="{{'public/js/homecarousel.js'}}"></script>
@endsection('js')