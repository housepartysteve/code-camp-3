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
                <h1 class="display-3">Working together with HTML and CSS.</h1><br><br>
            </div>
            <div class="col-md-3" id="sidebar">
                <div class="list-group">
                    <a href="{{ url('/csstyle') }}" class="list-group-item">Step 1 - Introduction</a>
                    <a href="{{ url('/css-is') }}" class="list-group-item">Step 2 - What is CSS?</a>
                    <a href="{{ url('/css-do') }}" class="list-group-item">Step 3 - What does CSS do?</a>
                    <a href="{{ url('/css-work') }}" class="list-group-item active">Step 4 - How does CSS work with HTML?</a>
                    <a href="{{ url('/css-syntax') }}" class="list-group-item">Step 5 - Errors and syntax</a>
                    <a href="{{ url('/test-css') }}" class="list-group-item">Step 6 - Test your knowledge with a quiz</a>
                </div>
            </div>


            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>HTML and CSS, how do they work together?</strong></h4>
                    </div>
                    <div class="card-block">
                        <p class="card-text">
                            HTML and CSS can do many creative things together.
                            The previous example of background colour is a good example of CSS and HTML working together.
                            If you created a paragraph and you want it to be styled you would have to do this.<br>
                            <br>
                            <strong>Example:</strong><br>
                            <br>
                            <strong style="font-size: 24px;" >&lt;p style="font-color: blue;"&gt;&lt;/p&gt;</strong><br>
                            <br>
                            The example above wants to style the font in the paragraph to the colour blue. This shows that you can style any tag rather than just the body.
                            The possibilities are endless with HTML and CSS.<br>
                            <br>
                            <strong>Tip</strong>:</strong><br>
                            <br>
                            Remember that when using CSS you must have tags which are using the correct syntax and don't contain any errors.<br>
                            <br>
                            <strong>For example</strong> - Missing brackets, misspell tags and missing slashes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection