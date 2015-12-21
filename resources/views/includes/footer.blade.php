                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

    <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp();

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

        // DOCUMENT READY
        $(document).ready(function() {

            // Page Transition
            // FadeIn the .wrapper Content
            $('.wrapper').animate({
                opacity: 1
            }, 1000);
            $('.left_top_nav').animate({
                opacity: 1
            }, 1000);
        });

        // Page Transition
        // SlideOut to the Left and FadeOut Nav
        $('a').on('click', function() {
            $('.left_top_nav').animate({
                opacity: 0
            }, 300);
            $('#holder').toggle('slide');

            var href = $(this).attr('href');

            // Delay setting the location for 300ms
            setTimeout(function() {window.location = href}, 300);
            return false;
        });
    </script>
</body>
</html>