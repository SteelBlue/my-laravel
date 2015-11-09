
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script>
        // DOCUMENT READY
        $(document).ready(function() {
            $('.wrapper').animate({
                opacity: 1
            }, 1000);
        });

        // Make the page slideOut to the left
        $('a').on('click', function() {
//            var windowW = $(window).width() + 2000;
//            $('#holder').animate({
//                left: "-" + windowW
//            }, 750);
            $('#holder').toggle('slide');

            var href = $(this).attr('href');

            // Delay setting the location for one second
            setTimeout(function() {window.location = href}, 300);
            return false;
        });
    </script>
</body>
</html>