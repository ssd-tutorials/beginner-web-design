$(document).ready(function() {
    
    "use strict";
   
    $(document).on(
        'click', 
        '#navigationTrigger', 
        function(event) {
            
            event.preventDefault();
            
            $('#navigation nav').toggle();
            
        }
    );
    
    
    function slideShow() {
        
        var slideShow = $('#slideShow'),
            slideShowItems = $('#slideShow li');
     
        /*
            If only one item
            simply display image without
            engaging slideshow
            same if no slideshow is present
        */
        if (slideShowItems.length < 2) {
         
            return;
            
        }
        
        function setUp() {
         
            var deferredObject = new $.Deferred,
                height = 0;
            
            slideShowItems
                .css({ height: '' })
                .each(function(index) {
                
                var thisHeight = $(this).height();
                
                if (thisHeight > height) {
                 
                    height = thisHeight;
                    
                }
                
                if ((index+1) === slideShowItems.length) {
                    
                    slideShowItems.height(thisHeight);
                 
                    deferredObject.resolve();
                    
                }
                
            });
            
            return deferredObject.promise();
            
        }
        
        function getNext(active) {
            
            if (active.next().length > 0) {
                
                return active.next();
                
            } else {
                
                return slideShowItems.first();
                
            }
            
        }
        
        function processSlide() {
         
            var timeout = setTimeout(function() {
            
                var active = slideShow.find('li.active'),
                    next = getNext(active);

                next.css({ zIndex : 2 });

                active.fadeOut(500, function() {

                    $(this)
                        .css({ zIndex : 1 })
                        .removeClass('active')
                        .show();

                    next
                        .css({ zIndex : 3 })
                        .addClass('active');
                
                });

                clearTimeout(timeout);

                processSlide();

            }, 5000);

        }
        
        function resizeSlides() {
            
            var resizeId;
            
            $(window).resize(function() {
                
                /*
                
                    if resize is called
                    the previous resizeId timeout
                    is terminated using clearTimeout
                
                */
                clearTimeout(resizeId);
                
                resizeId = setTimeout(function() {
                 
                    setUp();
                    
                }, 500);
                
            });
            
        }
        
        
        $.when(setUp()).then(function() {
            
            processSlide();
            resizeSlides();
            
        });
        
    }
    
    slideShow();
    
    
});