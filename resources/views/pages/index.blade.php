@extends ('layouts.master')

@section ('content')
    <div class="jumbotron" style="background-image:url({{ asset('img/forest.jpeg') }});background-size: auto 100%">
        <div class="container text-center">
            <br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>

    <div class="container text-center">
        <div class="row">
            <h1 class="display-3">Welcome Fellow Campers!</h1>
            <p>Are you ready for an adventure into the wonderful forest of coding?</p>
            <p>To get started on your journey into the wilderness please follow the link below</p>
            <p><a class="btn btn-success btn-lg" href="{{ url('/register') }}" role="button">Sign up! &raquo;</a></p>
        </div>
        <br><br>
        <!-- row of columns -->
        <div class="row">
            <div class="col-md-4">
                <i class="fa fa-binoculars fa-5x" aria-hidden="true"></i>
                <h2>Adventure</h2>
                <p>Progress your profile to gain different badges and become the best in your class!</p>
                <p><a class="btn btn-success" href="{{ url('/register') }}" role="button">Start camping now! &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <i class="fa fa-code fa-5x" aria-hidden="true"></i>
                <h2>Learn code</h2>
                <p>Learning code has never been so fun.</p><br>
                <p><a class="btn btn-success" href="{{ url('/lessons') }}" role="button">This way! &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
                <h2>Take lessons</h2>
                <p>After learning a section you will then be jumping into a quiz or game to allow you to dive deeper into the forest of coding!</p>
                <p><a class="btn btn-success" href="{{ url('/lessons') }}" role="button">Start lessons now! &raquo;</a></p>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection