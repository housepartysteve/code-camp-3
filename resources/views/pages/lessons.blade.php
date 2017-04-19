@extends ('layouts.master')

@section ('content')
    <div class="jumbotron">
        <div class="container text-center">
            <h1 class="display-3">Campers Help Page</h1>
            <p>Step by step guides on how to use the website!</p>
            <p>Follow each section to get up and running and become one of the best code campers around!</p>
        </div>
    </div>

    <div class="container text-center">
        <!-- row of columns -->
        <div class="row">
            <div class="col-md-4">
                <img class="rounded-circle" src="#" alt="Generic placeholder image" width="140" height="140">
                <h2>Adventure</h2>
                <p>Progress your profile to gain different badges and become the best in your class!</p>
                <p><a class="btn btn-primary" href="{{ url('/register') }}" role="button">Start camping now! &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <img class="rounded-circle" src="#" alt="Generic placeholder image" width="140" height="140">
                <h2>Learn code</h2>
                <p>Learning code has never been so fun.</p>
                <p><a class="btn btn-primary" href="{{ url('/learn') }}" role="button">This way! &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <img class="rounded-circle" src="#" alt="Generic placeholder image" width="140" height="140">
                <h2>Take lessons</h2>
                <p>After learning a section you will then be jumping into a quiz or game to allow you to dive deeper into the forest of coding!</p>
                <p><a class="btn btn-primary" href="{{ url('/lessons') }}" role="button">Start lessons now! &raquo;</a></p>
            </div>
        </div>
    </div>


@endsection