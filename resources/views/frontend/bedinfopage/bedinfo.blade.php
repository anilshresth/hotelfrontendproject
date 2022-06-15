@extends('frontend.homemaster')
@section('js')
<link rel="stylesheet" href="{{'public/css/bedinfo.css'}}">
@endsection('js')

@section('content')
<div class="container-fluid d-flex align-items-end bedinfobanner" style="background-image:url({{asset('public/images/bedinfobanner.jpg')}})">
    <p class="container">Delux Twin Bed</p>
</div>

<div class="container-fluid py-3 checkstatus">
    <div class="container ">

        <form action="" method="get">
            <div class="row">
                <div class="col-md-2 d-flex flex-column">
                    <p class="m-0 text-capitalize">best price garaunted </p>
                    <p class="m-0 text-uppercase">book online</p>

                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="date" name="checkindate" id="" class="form-control">
                        <i class="fa-solid fa-calendar-days float-right"></i>

                    </div>

                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="date" name="checkoutdate" id="" class="form-control">
                        <i class="fa-solid fa-calendar-days float-right"></i>

                    </div>

                </div>
                <div class="col-md-2">
                    <button type="submit"  value="">check availabilty</button>

                </div>

            </div>
        </form>

    </div>

</div>
@section('endcontent')

@section('js')
@endsection('js')