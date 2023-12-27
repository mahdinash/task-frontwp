jQuery(function () {
    $('[data-toggle="tooltip"]').tooltip();
  })


jQuery('.products-t-wrap').owlCarousel({
    loop:true,
    dots:false,
    margin:10,
    rtl:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:2,
        }
    }
});



jQuery('.cat-slider').owlCarousel({
    dots:false,
    loop:true,
    margin:15,
    rtl:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
           
        },
        600:{
            items:4,
            
        },
        1000:{
            items:6,
            
        }
    }
});




jQuery('.latest-products-slider').owlCarousel({
    dots:true,
    autoplay:true,
    loop:true,
    margin:15,
    rtl:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
           
        },
        600:{
            items:4,
            
        },
        1000:{
            items:5,
            
        }
    }
});



jQuery('.offer-slider').owlCarousel({
    dots:true,
    loop:true,
    margin:15,
    rtl:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
           
        },
        600:{
            items:2,
            
        },
        1000:{
            items:3,
            
        }
    }
});

jQuery('.blog-slider').owlCarousel({
    dots:true,
    loop:true,
    margin:4,
    rtl:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
           
        },
        600:{
            items:1,
            
        },
        1000:{
            items:2,
            
        }
    }
});

jQuery('.gallery-items').owlCarousel({
    dots:true,
    loop:true,
    margin:4,
    rtl:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
           
        },
        600:{
            items:3,
            
        },
        1000:{
            items:4,
            
        }
    }
});

jQuery('.releated-slider').owlCarousel({
    dots:true,
    loop:true,
    margin:4,
    rtl:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
           
        },
        600:{
            items:3,
            
        },
        1000:{
            items:4,
            
        }
    }
});



jQuery("#pro_zoom").elevateZoom();

