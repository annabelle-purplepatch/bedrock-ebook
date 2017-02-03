/*-----------------------------------------------------------------------------------*/
/*	DOC READY JS
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function() { 
    "use strict";

    /************** Divider Scripts **************/
    jQuery('.background-image-holder').each(function() {
        //var imgSrc = jQuery(this).children('.background-image').attr('src');
        //jQuery(this).css('background', 'url("' + imgSrc + '")');
        jQuery(this).children('.background-image').hide();
        jQuery(this).css('height', '100% !important');
        jQuery(this).css('top', '0% !important');
    });

    /************** Fullscreen Elements **************/
    jQuery('section.full').each(function() {
        if (jQuery(window).height() < 768) {
            jQuery(this).css('height', 900);
        } else {
            jQuery(this).css('height', jQuery(window).height());
        }
    });

}); 


/* Custom Code */

/* Custom Code */

/*-----------------------------------------------------------------------------------*/
/*	WINDOW LOAD JS
/*-----------------------------------------------------------------------------------*/
jQuery(window).load(function() { 
	"use strict";

    // var navHeight = jQuery('nav').outerHeight();
    // jQuery('.nav-container a[href^="#"], a[href^="#"].btn').not('a[href="#"], .wpb_accordion a, .wpb_tabs a, .wpb_tour a').smoothScroll({
    //     offset: -navHeight,
    //     speed: 800
    // });

    /************** Parallax Scripts **************/
    var isFirefox = typeof InstallTrigger !== 'undefined';
    var isIE = /*@cc_on!@*/ false || !!document.documentMode;
    var isChrome = !!window.chrome;
    var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
    var prefix;

    if (isFirefox) {
        prefix = '-moz-';
    } else if (isIE) {

    } else if (isChrome || isSafari) {
        prefix = '-webkit-';
    }

    jQuery('.parallax-background').each(function() {
        jQuery(this).attr('data-bottom-top', prefix + 'transform: translate3d(0px,-100px, 0px)');
        jQuery(this).attr('data-center', prefix + 'transform: translate3d(0px,0px, 0px)');
        jQuery(this).attr('data-top-bottom', prefix + 'transform: translate3d(0px,100px, 0px)');
    });

    if (!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)) {
        skrollr.init({
            forceHeight: false
        });
        
        jQuery('a.js-activated').not('a.js-activated[href^="#"]').click(function(){
        	var url = jQuery(this).attr('href');
        	window.location.href = url;
        	return true;
        });
    }

}); 