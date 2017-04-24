@extends ('layouts.master')

@section ('content')
    <div class="jumbotron">
        <div class="container text-center">
            <h1 class="display-3"><br>Welcome to the Code Camp team!</h1>
            <p>Below you will see details about each and every member that develops and maintains the code camp!</p>
        </div>
    </div>


    <div class="container text-center">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 col-md-offset-3">
            <h3>Developer</h3>
            <img src="{{URL::asset('/img/me.jpg')}}" alt="profile Pic" height="200" width="200">
            <h4>Name: Stephen McCarrick</h4>
            <h4>Location: Leeds, UK</h4>
            <p>
                Hi, I'm Stephen McCarrick.
                I've been studying Computing at Leeds Beckett University for the past 4 years.
                Over the years i've been involved with various different projects.
                Therefore I have a great understanding of each aspect of Computing.
            </p>
            </div>
        </div>
    </div>




@endsection