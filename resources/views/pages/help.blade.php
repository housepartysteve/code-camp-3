@extends ('layouts.master')

@section ('content')
    <div class="jumbotron">
        <div class="container text-center">
            <h1 class="display-3">Campers Help Page</h1>
            <p>Step by step guides on how to use the website!</p>
            <p>Follow each section to get up and running and become one of the best code campers around!</p>
        </div>
    </div>

    <div class="container">
        <!-- row of columns -->
        <div class="row">
            <div class="col-md-4">
                <h2 class="text-center">Getting Started</h2>
                <h5 class="text-center"><b>Account creation</b></h5>
                <ul>
                    <li><b>Step 1</b> - To create an account click register in the top right corner or <a href="{{ url('/register') }}">click here</a>.</li><br>
                    <li><b>Step 2</b>  - Fill out a username.<br></li>
                    <li><b>Step 3</b>  - Next up, type in your email address.<br></li>
                    <li><b>Step 4</b>  - Finally, Enter a password must meet the requirements of:</li>
                    <li>The password must be at least 6 characters.</li>
                    <li>The passwords must match each other<br></li>
                    <li><b>Step 5</b>  - Click register at the bottom of the page,
                        and your all set and ready to use code camp<br></li>
                    <li>Once created you will be automatically logged in to
                        your account and taken to your personal homepage<br></li>
                    <li>Enjoy your newly created account! Happy coding.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Learning</h2>
                <p></p>

            </div>
            <div class="col-md-4">
                <h2 class="text-center">Subject help</h2>
                <p></p>
            </div>
        </div>
    </div>

    <hr>


@endsection