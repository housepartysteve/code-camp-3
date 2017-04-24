@extends ('layouts.master')

@section ('content')
    <div class="jumbotron" style="background-image:url({{ asset('img/forest.jpeg') }});background-size: auto 100%">
        <div class="container text-center">
            <br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="display-3">Getting started with CSS</h1><br><br>
            </div>
            <div class="col-md-3" id="sidebar">
                <div class="list-group">
                    <a href="{{ url('/csstyle') }}" class="list-group-item active">Step 1 - Introduction</a>
                    <a href="{{ url('/css-is') }}" class="list-group-item">Step 2 - What is CSS?</a>
                    <a href="{{ url('/css-do') }}" class="list-group-item">Step 3 - What does CSS do?</a>
                    <a href="{{ url('/css-work') }}" class="list-group-item">Step 4 - How does CSS work with HTML?</a>
                    <a href="{{ url('/css-syntax') }}" class="list-group-item">Step 5 - Errors and syntax</a>
                    <a href="{{ url('/test-css') }}" class="list-group-item">Step 6 - Test your knowledge with a quiz</a>
                </div>
            </div>

            <div class="col-md-8" id="cssSubjectMain">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Getting started with CSS</strong></h4>
                    </div>
                    <div class="card-block">
                        <p class="card-text">
                            HTML and CSS go hand in hand when creating websites. HTML can exist on it's own,
                            but if it did it would be plain and boring text. css is what makes websites attractive and inviting.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection