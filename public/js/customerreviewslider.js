$(".customer-review-slider").owlCarousel({
    autoplay:false,
    margin:4,
    autoHeight:true,
    dots:false,
    items:2,
    nav:false,
    // autoWidth:true,
    responsive:{
        320:{
            items:1
        },
        767:{
            items:2
        },
        1000:{
            items:2
        }
    }
    
});