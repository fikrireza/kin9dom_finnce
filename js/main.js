$(document).ready(function() {
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();
            // Store hash
            var hash = this.hash;
            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top - 68
            }, 800, function() {
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
    var windowOffset = 100;
    if (window.pageYOffset >= windowOffset) {
        $(".nav2").addClass('active');
    }
    $(window).scroll(function() {
        if (window.pageYOffset <= windowOffset) {
            $(".nav2").removeClass('active');
        } else {
            $(".nav2").addClass('active');
        }
    });
    $(".drawer-menu").click(function() {
        if ($(".menu").hasClass('active')) {
            $(".menu").slideUp();
            $(".menu").removeClass('active');
        } else {
            $(".menu").slideDown();
            $(".menu").addClass('active');
        }
    });
});