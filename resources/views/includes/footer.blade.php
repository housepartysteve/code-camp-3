<footer style="background-color:#D1E8E2;">
<div class="container">
            <div class="col-md-3">
                <h5>
                    About
                </h5>
                <ul>
                    <li><a href="{{ url('/team') }}">The Team</a></li>
                    <li><a href="{{ url('/location') }}">The Location</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>
                    Contact
                </h5>
                <ul>
                    <li><a href="{{ url('/contactForm') }}">Send us a message!</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>
                    Connect With Us
                </h5>
                <ul>
                    <li><a href="https://twitter.com/?lang=en">Twitter  <i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.facebook.com/">Facebook  <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.linkedin.com/feed/">LinkedIn  <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/?hl=en">Instagram  <i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    <div class="text-center">
        <p>&copy; Code Camp 2017</p>
    </div>
    </div>
</footer>
<!-- Latest compiled and minified JS -->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmT5W2T5EUXgyGLLgtNuJK8puvjUg_qRQ&&callback=initMap">
</script>
<script>
    //new vue({
        //el: '#app',
        //data: {
           // 'subject_items' : ['','','']

        //}
    //});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{{ asset('js/jquery-ui.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
