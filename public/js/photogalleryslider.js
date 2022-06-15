$(".photo-gallery-slider").owlCarousel({
    autoplay:true,
    slideSpeed:10,
    margin:4,
    nav:true,
    autoplayHoverPause:true,
    autoHeight:true,
    dots:false,
    items:4,
    navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        320:{
            items:1
        },
        767:{
            items:2
        },
        1000:{
            items:4
        }
    }
    
});