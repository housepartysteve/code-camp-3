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
                <h1 class="display-3">What does CSS do?</h1><br><br>
            </div>
            <div class="col-md-3" id="sidebar">
                <div class="list-group">
                    <a href="{{ url('/csstyle') }}" class="list-group-item">Step 1 - Introduction</a>
                    <a href="{{ url('/css-is') }}" class="list-group-item">Step 2 - What is CSS?</a>
                    <a href="{{ url('/css-do') }}" class="list-group-item active">Step 3 - What does CSS do?</a>
                    <a href="{{ url('/css-work') }}" class="list-group-item">Step 4 - How does CSS work with HTML?</a>
                    <a href="{{ url('/css-syntax') }}" class="list-group-item">Step 5 - Errors and syntax</a>
                    <a href="{{ url('/test-css') }}" class="list-group-item">Step 6 - Test your knowledge with a quiz</a>
                </div>
            </div>

            <div class="col-md-8" id="isCssMain">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>What does CSS do?</strong></h4>
                    </div>
                    <div class="card-block">
                        <p class="card-text">
                            Here we are going to learn how to add a background colour to the page.
                            It will talk you through each step of the code below. So don't be afraid if at first you don't understand.<br>
                            <br>
                            This is done:<br>
                            <br>
                            <strong style="font-size: 24px;">&lt;body style="background-color: red;"&gt;&lt;/body&gt;</strong><br>
                            <br>
                            The code above will make the background red for all the section of body.<br>
                            <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-3">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Style</strong></h4>
                    </div>
                    <div class="card-block">
                        <p class="card-text">
                            This is where we see HTML and CSS work together.
                            Style needs to be used in the html tag to show that you want to perform styling.
                            We will talk about how HTML and CSS work together in the next step.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-3">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Background-color</strong></h4>
                    </div>
                    <div class="card-block">
                        <p class="card-text">
                            This is what will tell the HTML tag that it wants a background colour change.
                            We have it on the body tag so it will change the colour of the entire body
                            You can change the background colour of most HTML tags and even separate tags to show different colours.<br>
                            <br>
                            <strong>Tip:</strong><br>
                            <br>
                            "color" is not written as you would spell it. Is written using the american way. You need to spell it this way for this to work.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-3">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Red</strong></h4>
                    </div>
                    <div class="card-block">
                        <p class="card-text">
                            This is the colour that the HTML tag will change to. You can choose from many colours to change the tags to, all the colours in the rainbow!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection