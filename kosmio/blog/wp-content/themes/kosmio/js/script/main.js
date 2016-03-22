// Js & JQuery



// // overlay menu
// $('.header').click(function() {
// 	$('.nav').toggleClass('visible');
// });

// // anim menu icon

// $('.header').click(function() {
// 	$(this).toggleClass('active');
// });

// one page scroll init
// $(".main").onepage_scroll({
//    sectionContainer: "section",     // sectionContainer accepts any kind of selector in case you don't want to use section
//    easing: "ease",                  // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
//                                     // "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
//    animationTime: 1000,             // AnimationTime let you define how long each section takes to animate
//    pagination: true,                // You can either show or hide the pagination. Toggle true for show, false for hide.
//    updateURL: false,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
//    beforeMove: function(index) {},  // This option accepts a callback function. The function will be called before the page moves.
//    afterMove: function(index) {},   // This option accepts a callback function. The function will be called after the page moves.
//    loop: false,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
//    keyboard: true,                  // You can activate the keyboard controls
//    responsiveFallback: 3000,        // You can fallback to normal page scroll by defining the width of the browser in which
//                                     // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
//                                     // the browser's width is less than 600, the fallback will kick in.
//    direction: "vertical"            // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".  
// });

// back to top

$('.backtotop').click(function () {
    $('html, body').animate({
        scrollTop: 0
    }, 1000);
    return false;
});

// Subscribe input

$(document).ready(function(){
        ajaxMailChimpForm($("#mc-embedded-subscribe-form"), $("#subscribe-result"));

        // Turn the given MailChimp form into an ajax version of it.
        // If resultElement is given, the subscribe result is set as html to
        // that element.
        function ajaxMailChimpForm($form, $resultElement){

            // Hijack the submission. We'll submit the form manually.
            $form.submit(function(e) {
                e.preventDefault();

                if (!isValidEmail($form)) {
                    var error =  "A valid email address must be provided.";
                    $resultElement.html(error);
                    $resultElement.css("color", "#FF1451");
                } else {
                    $resultElement.css("color", "lightgray");
                    $resultElement.html("Subscribing...");
                    submitSubscribeForm($form, $resultElement);
                }
            });
        }

        // Validate the email address in the form
        function isValidEmail($form) {
            // If email is empty, show error message.
            // contains just one @
            var email = $form.find("input[type='email']").val();
            if (!email || !email.length) {
                return false;
            } else if (email.indexOf("@") == -1) {
                return false;
            }

            return true;
        }

        // Submit the form with an ajax/jsonp request.
        // Based on http://stackoverflow.com/a/15120409/215821
        function submitSubscribeForm($form, $resultElement) {
            $.ajax({
                type: "GET",
                url: $form.attr("action"),
                data: $form.serialize(),
                cache: false,
                dataType: "jsonp",
                jsonp: "c", // trigger MailChimp to return a JSONP response
                contentType: "application/json; charset=utf-8",

                error: function(error){
                    // According to jquery docs, this is never called for cross-domain JSONP requests
                },

                success: function(data){
                    if (data.result != "success") {
                        var message = data.msg || "Sorry. Unable to subscribe. Please try again later.";
                        $resultElement.css("color", "#FF1451");

                        if (data.msg && data.msg.indexOf("already subscribed") >= 0) {
                            message = "You're already subscribed. Thank you.";
                            $resultElement.css("color", "lightgray");
                        }

                        $resultElement.html(message);

                    } else {
                        $resultElement.css("color", "lightgray");
                        $resultElement.html("Thank you!<br>You must confirm the subscription in your inbox.");
                    }
                }
            });
        }

    });

// Social sharing

// Get all elements with the class social--button
var social = document.querySelectorAll('.share--button');
// If social is not null/empty -> Add event for the click
if( social != null ){
    Array.prototype.forEach.call(social, function(el, i){
        el.addEventListener("click", function(el){
            //prevent default
            el.preventDefault;
            openWindow(el);
        });
    })
}

function openWindow(el){
    var url = '';
    switch (el.path[0].dataset.network){
        case 'facebook':
            url = 'http://www.facebook.com/sharer.php?u='+ window.location.href +'&title=' + document.title +''
        break;
        case 'twitter':
            url = 'https://twitter.com/intent/tweet?url='+ window.location.href +'&text='+ document.title +'&via=kosmio'
        break;
        case 'pinterest':
            url = 'http://pinterest.com/pin/create/button/?url='+ window.location.href +'&title='+ document.title +''
        break;
        case 'googleplus':
            url = 'http://plus.google.com/share?url=URL'+ window.location.href +'&title='+ document.title +''
        break;
        default:
            console.log(el);
        break;
    }
    window.open(
        url, 
        'sharewindow','height=450,width=550, top=' + ( window.innerHeight / 2 - 275) + ', left=' + ( window.innerWidth / 2 - 225) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0'
        );
    return false;
}