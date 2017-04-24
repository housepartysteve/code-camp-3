@extends ('layouts.master')

@section ('content')
    @if (Auth::check())
        <div class="jumbotron" style="background-image:url({{ asset('img/forest1.jpeg') }});background-size: auto 100%">
        <div class="container text-center">
            <br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>

    <div class="container text-center">
        <h1 class="display-3">Choose a subject</h1>
        <p>Each subject has different difficulties.</p>
        <h2>Subjects</h2>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card" style="background-color: #D1E8E2;">
                    <div class="card-block">
                        <h3 class="card-title">Introduction</h3>
                        <h4>Part 1</h4>
                        <p>
                            HTML is the language that is spoken to build all your favourite websites such as youtube, facebook and netflix. <br>
                            The list goes on, without this language you would not have these websites! <br>
                            This subject will teach html from beginner to expert!
                        </p>
                        <a href="{{ url('/intro') }}" class="btn btn-success">Begin The Learning Adventure</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="row text-center">
            <div class="col-md-5">
                <div class="card" style="background-color: #D1E8E2;">
                    <i class="fa fa-html5 fa-5x" aria-hidden="true"></i>
                    <div class="card-block">
                        <h3 class="card-title">HTML</h3>
                        <h4>Part 2</h4>
                        <p>
                            HTML is the language that is spoken to build all your favourite websites such as youtube, facebook and netflix. <br>
                            The list goes on, without this language you would not have these websites! <br>
                            This subject will teach html from beginner to expert!
                        </p>
                        <a href="{{ url('/intro-html') }}" class="btn btn-success">Begin Course</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-md-offset-2" >
                <div class="card" style="background-color: #D1E8E2;">
                    <i class="fa fa-css3 fa-5x" aria-hidden="true"></i>
                    <div class="card-block">
                        <h3 class="card-title">CSS</h3>
                        <h4>Part 3</h4>
                        <p>
                            CSS is used to style HTML it enables the websites to look pretty and beautiful! <br>
                            Learning this language will allow you to customise and personalise The HTML you have learn't in the past subject<br>
                            Progress on your learning adventure now!
                        </p>
                        <a href="{{ url('/csstyle') }}" class="btn btn-success">Begin Course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @else
        <div class="jumbotron" style="background-image:url({{ asset('img/forest1.jpeg') }});background-size: auto 100%">
            <div class="container text-center">
                <br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h1 class="display-3">Choose a subject</h1>
                    <p>Each subject has different difficulties.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <h3 class="text-center">To gain access to the subjects you must first have an account!</h3>
                </div>
                <div class="col-md-4 col-md-offset-2">
                    <h3>Register</h3>
                      <p><a class="btn btn-success" href="{{ url('/register') }}" role="button">Register</a></p>
                </div>
                <div class="col-md-4 col-md-offset-2">
                    <h3>Login</h3>
                    <p><a class="btn btn-success" href="{{ url('/login') }}" role="button">Login</a></p>
                </div>
            </div>
        </div>

        <br><br>
    @endif
@endsection