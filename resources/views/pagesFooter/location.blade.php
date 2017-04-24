@extends ('layouts.master')

@section ('content')
    <div class="jumbotron">
        <div class="container text-center">
            <br><br>
            <h1 class="display-3">The location</h1>
            <p>We are based in Leeds in the United Kingdom!</p>
        </div>
    </div>

    <div class="container text-center">
        <div class="row">
            <div class= "col-md-7 text-center">
                <h3>Find us!</h3>
                <div id="map">
                    <script>
                        function initMap() {
                            var uluru = {lat: 53.81884, lng: -1.585727};
                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 4,
                                center: uluru
                            });

                            var marker = new google.maps.Marker({
                                position: uluru,
                                map: map
                            });
                        }
                    </script>
                </div>
                <br><br>
            </div>
        </div>
    </div>

@endsection