// Custom JS here.

// const jquery = require("jquery");

 

/**************************************************************************************************/
jQuery(document).ready(function(){



	img2svg('.replaceSvg');

    /*
    * Applying img2svg to grid builder filter events so icons won't lose
    *
    *
    * */

    // console.log(slideUpObs);
    
    // if(jQuery('.wpgb-inline-list').length){
    //     var wpgb = WP_Grid_Builder.instances[1].facets;
    // }
    // console.dir( wpgb ); // Holds all instances.

	// wpgb.on('change', function(args) {
	//     // img2svg('.replaceSvg');
    //     animatePropertyCards = gsap.utils.toArray('.card-property:not(.animated)');
    //     animatePostCards = gsap.utils.toArray('.card-post:not(.animated)');

    //     animatePropertyCards.forEach(card => {

    //         slideUpObs.observe(card);
            
    //     });
        
    //     animatePostCards.forEach(card => {
    //         slideUpObs.observe(card);
    //     });
	// });

	// wpgb.on('appended', function(args) {

	//     // img2svg('.replaceSvg');
    //     animatePropertyCards.forEach(card => {

    //         slideUpObs.observe(card);
            
    //     });
        
    //     animatePostCards.forEach(card => {
    //         slideUpObs.observe(card);
    //     });

	// });

    var scrollbarWidth = getScrollbarWidth();
    // console.log(scrollbarWidth);

    var $body = jQuery(window.document.body);
    var disableScroll = false;

    // function bodyFreezeScroll() {
    //     var bodyWidth = $body.innerWidth();
    //     $body.css('overflow', 'hidden');
    //     $body.css('paddingRight', )
    // }

    // function bodyUnfreezeScroll() {
    //     var bodyWidth = $body.innerWidth();
    //     $body.css('paddingRight', '-=' + (bodyWidth - $body.innerWidth()))
    //     $body.css('overflow', 'auto');
    // }

    jQuery(".navbar-toggler").click(function(){
        jQuery(".navbar").toggleClass("open");
        jQuery(this).toggleClass("open");
        jQuery("body").toggleClass("overflow-hidden");

        if(!disableScroll) {
            jQuery(".navbar").css("paddingRight", scrollbarWidth + "px");
            jQuery("body").css("paddingRight", scrollbarWidth + "px");
            disableScroll = true;
        } else {
            jQuery(".navbar").css("paddingRight", "0px");
            jQuery("body").css("paddingRight", "0px");
            disableScroll = false;
        }
        // console.log(disableScroll)
    });

    gallerySlider();
    
    if(jQuery(".hero-slide").length > 1) {

        var total = jQuery(".hero-slide").length;

        jQuery(".hero-slide").each(function(index){
            jQuery(this).find(".swiper-pagination-current").html((index + 1) + "");
        });

        jQuery(".hero-slide").each(function(index){
            jQuery(this).find(".swiper-pagination-total").html(total + "");
        });
        
        heroSlider();
    }
	
    jQuery(".basis").addClass("active");
    

    var swiper = new Swiper(".graph-swiper", {
        loop: false,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    readmoreCustom();
    readmoreCustomBig();
    navbarScroll();
});


/**************************************************************************************************/

jQuery(window).on("load", function() {

});

/**************************************************************************************************/
jQuery(window).scroll(function() {
    navbarScroll();
});

/**************************************************************************************************/
var a;

jQuery(window).resize(function() {

	clearTimeout(a);
	a = setTimeout(function(){


	}, 250);

});

/**************************************************************************************************/
jQuery(window).scroll(function(){
    navbarScroll();
  });





