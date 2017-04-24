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
                <h1 class="display-3">Syntax for HTML</h1><br><br>
            </div>
            <div class="col-md-3" id="sidebar">
                <div class="list-group">
                    <a href="{{ url('/intro-html') }}" class="list-group-item">Step 1 - Introduction</a>
                    <a href="{{ url('/website-what') }}" class="list-group-item">Step 2 - What is a website?</a>
                    <a href="{{ url('/website-is') }}" class="list-group-item">Step 3 - What is on a website?</a>
                    <a href="{{ url('/html-syntax') }}" class="list-group-item active">Step 4 - Errors and syntax</a>
                    <a href="{{ url('/test-html') }}" class="list-group-item">Step 5 - Test your knowledge with a quiz</a>
                </div>
            </div>

            <div class="col-md-8" id="syntaxHtmlMain">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Syntax</strong></h4>
                    </div>
                    <div class="card-block">
                        <p class="card-text">
                            Syntax is a word you would not have heard before. Its basically grammar for programming.
                            It is used to make sure that the HTML is written correctly so that the web can read it properly.<br>
                            <br>
                            <strong>Examples:</strong><br>
                            <br>
                            <strong>Good Syntax:</strong><br>
                            <strong style="font-size: 24px;">&lt;p&gt;</strong>
                            This is the syntax for HTML tags. All tags NEED to be written in this way
                            <strong style="font-size: 24px;">&lt;/p&gt;</strong><br>
                            <br>
                            <strong>Bad Syntax:</strong><br>
                            <strong style="font-size: 24px;">&lt;P &gt;</strong>
                            This a bad way of syntax making it harder for the computer to read and for you.
                            <strong style="font-size: 24px;">&lt;/  p&gt;</strong><br>

                        </p>
                    </div>
                </div>
            </div>
        </div>
         <div class="row">
             <div class="col-md-8 col-md-offset-3" id="syntaxHtmlMain">
                 <div class="card">
                     <div class="card-header">
                         <h4><strong>Errors</strong></h4>
                     </div>
                     <div class="card-block">
                         <p class="card-text">
                             Errors are what happen when the syntax of the tags is not correct.
                             If there are errors the page will not be read correctly and therefore not be displayed correctly.<br>
                             Examples:<br>
                             <br>
                             <strong>Examples:</strong><br>
                             <br>
                             <strong>Error 1:</strong><br>
                             <strong style="font-size: 24px;">&lt;pp&gt;</strong>
                             This error is a misspelling of the paragraph tag.
                             <strong style="font-size: 24px;">&lt;/p&gt;</strong><br>
                             <br>
                             <strong>Error 2:</strong><br>
                             <strong style="font-size: 24px;">&lt;h&gt;</strong>
                             The heading tag here is incorrect as it is missing a bracket.
                             <strong style="font-size: 24px;">&lt;/h</strong><br>
                             <br>
                             <strong>Error 3:</strong><br>
                             <strong style="font-size: 24px;">&lt;p&gt;</strong>
                             The paragraph tag here is missing the slash to close the tag.
                             <strong style="font-size: 24px;">&lt;p&gt;</strong><br>
                             <br>
                             These are some of the common errors you will face when using html tags. Be sure to ALWAYS check your code.
                         </p>
                     </div>
                 </div>
             </div>
         </div>
    </div>


@endsection