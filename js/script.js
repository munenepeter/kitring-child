    jQuery(document).ready(function () {
        var currentIndex = 0;
        var items = jQuery('.carousel-item');
        var totalItems = items.length;

        jQuery('.indicator').click(function () {
            var index = jQuery(this).data('slide-to');
            currentIndex = index;
            updateCarousel();
        });

        function updateCarousel() {
            var newTransformValue = -(currentIndex * 100) + '%';
            jQuery('.carousel-inner').css('transform', 'translateX(' + newTransformValue + ')');

            // Update indicators
            jQuery('.indicator').removeClass('active');
            jQuery('.indicator[data-slide-to="' + currentIndex + '"]').addClass('active');
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalItems;
            updateCarousel();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalItems) % totalItems;
            updateCarousel();
        }

        setInterval(nextSlide, 5000); // Change slide every 5 seconds
    });

