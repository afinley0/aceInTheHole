<?php define('ACE_URL', '/cas222/final/'); ?>

<header>
    <!-- Automatic Slideshow -->
    <div class="automaticSlideshow">
        <img class="mySlides" src="<?php echo ACE_URL; ?>images/logo1.png" style="width:100%">
        <img class="mySlides" src="<?php echo ACE_URL; ?>images/ace3.jpg" style="width:100%">
        <img class="mySlides" src="<?php echo ACE_URL; ?>images/ace6.jpg" style="width:100%">
        <img class="mySlides" src="<?php echo ACE_URL; ?>images/ace15.jpg" style="width:100%">
    </div>
    <!-- Javascript For Header Carousel -->
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 3000); // Change image every 5 seconds
        }

        function myFunction() {
            var x = document.getElementById("myLinks");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>

