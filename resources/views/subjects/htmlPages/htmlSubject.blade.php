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
                <h1 class="display-3">HTML Introduction</h1><br><br>
            </div>
            <div class="col-md-3" id="sidebar">
                <div class="list-group">
                    <a href="{{ url('/intro-html') }}" class="list-group-item active">Step 1 - Introduction</a>
                    <a href="{{ url('/website-what') }}" class="list-group-item">Step 2 - What is a website?</a>
                    <a href="{{ url('/website-is') }}" class="list-group-item">Step 3 - What is on a website?</a>
                    <a href="{{ url('/html-syntax') }}" class="list-group-item">Step 4 - Errors and syntax</a>
                    <a href="{{ url('/test-html') }}" class="list-group-item">Step 5 - Test your knowledge with a quiz</a>
                </div>
            </div>

            <div class="col-md-8" id="introMain">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Getting Started with HTML</strong></h4>
                    </div>
                    <div class="card-block">
                        <p class="card-text">
                            HTML is a language, just like English and French, except HTML is the language used to build websites.
                            Without the use of this language websites would not exist. HTML stands for Hypertext Markup Language.
                            HTML is easy to learn so don't worry, you will have great fun learning it as well.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection