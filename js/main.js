(function($) {

    'use strict'; 

    new WOW().init();

        /*-----------------------------------------------------------------------------------*/
        /*  Preloader
        /*-----------------------------------------------------------------------------------*/

        $(window).load(function() { 
            $('#status').fadeOut(); 
            $('#preloader').delay(350).fadeOut('fast'); 
            $('body').delay(350).css({'overflow':'visible'});

        });

        /*-----------------------------------------------------------------------------------*/
        /*  Search
        /*-----------------------------------------------------------------------------------*/

        $('.search').on('click', function () {
            $('.search-input input').toggleClass('show');
        });

        /*-----------------------------------------------------------------------------------*/
        /*  Slider Home
        /*-----------------------------------------------------------------------------------*/
        $('.flexslider').flexslider({
            animation: "fade"
        });

        var windowWidth = $(window).width();

        function sliderEqualHeight() {
            var slideHeight = $('#slider.home-slider ul li.slide-item');
            var slideWrap = $('#slider.home-slider .caption-wrap').height();

                slideHeight.css('min-height', slideWrap + 450);
        }

        function logisticsEqualHeight() {
            if( windowWidth > 789 ) {
            var postLeft = $('.services-calculator-wrap .form-section form');
            var postRight = $('.services-calculator-wrap').height();

                postLeft.css('height', postRight);
            }
        }

        function pagetitleEqualHeight() {
            var titleHeight = $('.page-title');
            var titleWrap = $('.page-title .title-wrap').height();

                titleHeight.css('min-height', titleWrap + 300);
        }

        window.onload = function() {
            logisticsEqualHeight()
            sliderEqualHeight()
            pagetitleEqualHeight();
        };

        window.onresize = function() {
            logisticsEqualHeight()
            sliderEqualHeight()
            pagetitleEqualHeight();
        };

        var siteHeaderHeight = $('.site-header').height(),
            backgroundSlider = $('.home-slider'),
            pageTitle = $('.page-title');

        backgroundSlider.css('margin-top', -siteHeaderHeight);
        pageTitle.css('margin-top', -siteHeaderHeight);

        /*-----------------------------------------------------------------------------------*/
        /*  Slider
        /*-----------------------------------------------------------------------------------*/
        
        $('.company-slider').flexslider({
            animation: "slide",
            autoplay: true
        });

        /*-----------------------------------------------------------------------------------*/
        /*  Services
        /*-----------------------------------------------------------------------------------*/

        $('.services-wrap-carousel').owlCarousel({
            stagePadding: 50,
            loop:true,
            margin:10,
            nav:true,
            dots:false,
            navText: [
              "<i class='icon icon-ios-arrow-thin-left'></i>",
              "<i class='icon icon-ios-arrow-thin-right'></i>"
              ],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                },
                1200:{
                    items:2
                }
            }
        })

        /*-----------------------------------------------------------------------------------*/
        /*  Testimonial
        /*-----------------------------------------------------------------------------------*/

        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:30,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:2
                }
            }
        })

        /*-----------------------------------------------------------------------------------*/
        /*  Latest Post & Team Member
        /*-----------------------------------------------------------------------------------*/

        $('.post-wrap, .team-wrap').owlCarousel({
            loop:true,
            margin:30,
            nav:true,
            navText: [
              "<i class='icon icon-arrow-left'></i>",
              "<i class='icon icon-arrow-right'></i>"
              ],
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:3
                }
            }
        })

        /*-----------------------------------------------------------------------------------*/
        /*  Number Counter
        /*-----------------------------------------------------------------------------------*/

        $('.counter').counterUp({
            delay: 20,
            time: 3000
        });

        /*-----------------------------------------------------------------------------------*/
        /*  Mobile Menu
        /*-----------------------------------------------------------------------------------*/

        var slideRight = new Menu({
            wrapper: '#main-wrapper',
            type: 'slide-right',
            menuOpenerClass: '.slide-button',
            maskId: '#slide-overlay'
        });

        var slideRightBtn = document.querySelector('#slide-buttons');
      
        slideRightBtn.addEventListener('click', function(e) {
            e.preventDefault;
            slideRight.open();
        });

        $(".slide-menu-items li.has-sub").click(function () {
            $('.slide-menu-items li.has-sub ul').not($(this).children("ul").slideToggle()).hide();  
        });
        

        $('#login-form-link').click(function(e) {
            $("#login-form").delay(100).fadeIn(100);
             $("#register-form").fadeOut(100);
            $('#register-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });
        $('#register-form-link').click(function(e) {
            $("#register-form").delay(100).fadeIn(100);
             $("#login-form").fadeOut(100);
            $('#login-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });


        $('#register-form').on('submit', function(event) {
            event.preventDefault();
            let formData = new FormData(this);
            console.log(formData);
        
            $.ajax({
                type: "POST",
                url: "back/validerInscription.php",
                data: formData, // Pass the FormData directly here
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    if (data === "invalid") {
                        alert('No success');
                    } else {
                        alert('success');
                        document.location.href = "index.php";
                    }
                },
                error: function(e) {
                    alert('error');
                }
            });
        });


        var myStepper =new Stepper($('#stepper-example'))



        $(document).ready(function () {
            var navListItems = $('div.setup-panel div a'),
                    allWells = $('.setup-content'),
                    allNextBtn = $('.nextBtn'),
                      allPrevBtn = $('.prevBtn');
          
            allWells.hide();
          
            navListItems.click(function (e) {
                e.preventDefault();
                var $target = $($(this).attr('href')),
                        $item = $(this);
          
                if (!$item.hasClass('disabled')) {
                    navListItems.removeClass('btn-primary').addClass('btn-default');
                    $item.addClass('btn-primary');
                    allWells.hide();
                    $target.show();
                    $target.find('input:eq(0)').focus();
                }
            });
            
            allPrevBtn.click(function(){
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");
          
                    prevStepWizard.removeAttr('disabled').trigger('click');
            });
          
            allNextBtn.click(function(){
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;
          
                $(".form-group").removeClass("has-error");
                for(var i=0; i<curInputs.length; i++){
                    if (!curInputs[i].validity.valid){
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }
          
                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            });
          
            $('div.setup-panel div a.btn-primary').trigger('click');
          });

        
})(jQuery); 