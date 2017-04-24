@extends ('layouts.master')

@section ('content')
    <div class="jumbotron" style="background-image:url({{ asset('img/forest.jpeg') }});background-size: auto 100%">
        <div class="container text-center">
            <br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>

    <div class="container">
        <!-- row of columns -->
        <h1 class="display-3">Campers Help Page</h1>
        <p>Step by step guides on how to use the website!</p>
        <p>Follow each section to get up and running and become one of the best code campers around!</p>
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
                <h2 class="text-center">Subject Help</h2>
                <ul>
                    <li><b>Step 1</b> - Click on the Introduction to get started. This page will help with how the website works.</li>
                    <li><b>Step 2</b> - Once you understand the website, move onto the first subject which is html.</li>
                    <li><b>Step 3</b> - The HTML section will give you every detail as long as you follow it through step by step.</li>
                    <li><b>Step 4</b> - Complete the quiz on HTML.</li>
                    <li>Its important to complete the HTML subject before moving onto CSS </li>
                    <li><b>Step 5</b> - The next section is CSS and will repeat the same tasks as the last subject but with different information.</li>
                    <li><b>Step 6</b> - Complete the quiz on CSS</li>
                    <li><b>Step 7</b> - Now after completing all these sections you have knowledge about HTML and CSS, you can now build a basic webpage.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Quiz help</h2>
                <p><b>HTML quiz</b></p>
                <ul>
                    <li><b>Question 1</b> - What is HTML? HTML is a language used to build ....</li>
                    <li><b>Question 2</b> - Which of these is a HTML tag? Look very closely at the brackets.</li>
                    <li><b>Question 3</b> - Select the code with good HTML syntax - Good syntax is not spelling mistakes, no spaces and no capital letters</li>
                    <li><b>Question 4</b> - Spot the error paragraph tag - The paragraph uses the letter p</li>
                    <li><b>Question 5</b> - Spot the error heading tag - The Heading uses the letter H and ends with a number</li>
                </ul>
                <p><b>CSS quiz</b></p>
                <ul>
                    <li><b>Question 1</b> - What is CSS? Styles something</li>
                    <li><b>Question 2</b> - Which is the correct way to change background colour? remember colour is spelt color</li>
                    <li><b>Question 3</b> - Select the code with good CSS syntax - Good syntax is not spelling mistakes, no spaces and no capital letters</li>
                    <li><b>Question 4</b> - Spot the error with font color  - Remember the syntax section and look very carefully at brackets, spelling and unmatching tags</li>
                    <li><b>Question 5</b> - Spot the error for background colour - Remember the syntax section and look very carefully at brackets, spelling and unmatching tags </li>
                </ul>
            </div>
        </div>
    </div>



@endsection