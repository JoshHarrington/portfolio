var PAGE;

(function ($) {
    "use strict";
    PAGE = (function () {
        
        function initRemoveOverlayPlayVideo(){

            $('.videoContainer').each(function () {
                var embedVideoOverlay = $(this).find('img');
                var embedVideo = $(this).find('iframe');
                var embedVideoSrc = $(embedVideo).attr('src');

                var embedVideoSrcOriginal = $(embedVideo).attr('src');
                $(embedVideo).attr('src', '');


                $(this).click(function(){
                    $(embedVideo).attr('src', embedVideoSrcOriginal);
                    embedVideo.css('z-index', 2);
                    $(embedVideo).attr('src', embedVideoSrc + '&autoplay=1');
                    if($('.demoOverlay').hasClass('demoOverlay--close')){
                        $('.demoOverlay').toggleClass('demoOverlay--close');
                    }
                    if(!$('.videoContainer').hasClass('videoContainer-large')){
                        $('.videoContainer').toggleClass('videoContainer-large');
                    }
                });

            });


        }

        function initCloseDemoApply(){
            $('.icon-cross, .demoTitle').click(function(){
                $('.demoOverlay').toggleClass('demoOverlay--close');
            });
        }
        
        function inithambgrMenuBtn() {
            $('.hamburgerIcon').click(function(){
                $('.hambgrMenu').toggleClass('hambgrMenu--closed');
            });
        }
        
        function initSidebarDropdown() {
            $('.sidebar h3').click(function(){
                $(this).parent().toggleClass('sidebar-li--open');
            });
        }
        
        function initFixSidebar() {
            
            var sidebar = $('.sidebar');
            
            var contentBottom = 0;
            contentBottom = $('.contentPage-textBlock').offset().top + $('.contentPage-textBlock').outerHeight();
            $(window).resize(function() {
                contentBottom = $('.contentPage-textBlock').offset().top + $('.contentPage-textBlock').outerHeight();
            });
            
                        

            
            $(window).scroll(function() {
                            
                var windowBottom = $(window).scrollTop() + $(window).height();
                

                contentBottom = $('.contentPage-textBlock').offset().top + $('.contentPage-textBlock').outerHeight();
                
                var scroll = $(window).scrollTop() - $('.banner').height() - $('.bannerNav').height();
                
                
                var scrollBottom = contentBottom - windowBottom;
                

                if (scroll >= 10) {
                    if(!$('.sidebar').hasClass('sidebar--fixed')){
                        sidebar.toggleClass('sidebar--fixed');
                    }
                    if (scrollBottom <= -20) {
                        if(!$('.sidebar').hasClass('sidebar--fixed-bottom')){
                            sidebar.toggleClass('sidebar--fixed-bottom');
                        }
                    } else {
                        sidebar.removeClass('sidebar--fixed-bottom');
                    }
                } else {
                    sidebar.removeClass('sidebar--fixed');
                }
                
            });
            
        }
        
        
        

        
        return {
            // public members
            init: function() {
                initRemoveOverlayPlayVideo();
                initCloseDemoApply();
                inithambgrMenuBtn();
                initSidebarDropdown();
                initFixSidebar();
            }
        };
    }());
    
        $(function() {
        PAGE.init();
    });
}(jQuery));
