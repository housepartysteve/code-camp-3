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
                <h1 class="display-3">Syntax CSS </h1><br><br>
            </div>
            <div class="col-md-3" id="sidebar">
                <div class="list-group">
                    <a href="{{ url('/csstyle') }}" class="list-group-item">Step 1 - Introduction</a>
                    <a href="{{ url('/css-is') }}" class="list-group-item">Step 2 - What is CSS?</a>
                    <a href="{{ url('/css-do') }}" class="list-group-item">Step 3 - What does CSS do?</a>
                    <a href="{{ url('/css-work') }}" class="list-group-item">Step 4 - How does CSS work with HTML?</a>
                    <a href="{{ url('/css-syntax') }}" class="list-group-item active">Step 5 - Errors and syntax</a>
                    <a href="{{ url('/test-css') }}" class="list-group-item">Step 6 - Test your knowledge with a quiz</a>
                </div>
            </div>

            <div class="col-md-8" id="syntaxCssMain">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Syntax</strong></h4>
                    </div>
                    <div class="card-block">
                        <p class="card-text">
                            CSS syntax happens in two ways. First you can put style onto a html tag directly which i have shown you in the past step.
                            The next way would be to put all the style onto a separate page and link the page in. This allows for better syntax.<br>
                            <br>
                            <Strong>Syntax for tag:</Strong><br>
                            <br>
                            <strong style="font-size: 24px;" >&lt;p style="font-size: 5px;"&gt;&lt;/p&gt;</strong><br>
                            <br>
                            <Strong>Tip:</strong><br>
                            px stands for pixel, don't worry about this now more advanced tutorials will teach you about this.<br>
                            <br>
                            <strong>Syntax for CSS document:</strong><br>
                            <br>
                            . p { font-size: 5px;} <br>
                            <br>
                            The document syntax does the exact same as the tag method. Its just layout differently in the CSS document.<br>
                            <br>
                            The dot <strong style="font-size: 24px;">.</strong>
                            selects the tags. After you have done this you will need to name the tag like in the past method.<br>
                            <br>
                            Now onto the brackets  <strong style="font-size: 24px;"> {CSS in here}</strong>  that need to be around the CSS you want to add.<br>
                            <br>
                            Finally add the CSS that you have learnt using the other syntax and you will have cracked it.
                            Remember to check for errors as it won't work if there is any.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-3" id="syntaxCssMain">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Errors</strong></h4>
                    </div>
                    <div class="card-block">
                        <p class="card-text">
                            Errors in CSS are similar to HTML.
                            <ul>
                                <li>Make sure to remember the brackets</li>
                                <li>Ensure that there is no missing semi colon or colon</li>
                                <li>Spelling mistakes are the on of the most common errors</li>
                                <li>Double check these over and over if it doesn't work!</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>


@endsection