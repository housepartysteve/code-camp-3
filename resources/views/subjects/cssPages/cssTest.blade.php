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
                <h1 class="display-3">CSS Test</h1><br><br>
            </div>
            <div class="col-md-3" id="sidebar">
                <div class="list-group">
                    <a href="{{ url('/csstyle') }}" class="list-group-item">Step 1 - Introduction</a>
                    <a href="{{ url('/css-is') }}" class="list-group-item">Step 2 - What is CSS?</a>
                    <a href="{{ url('/css-do') }}" class="list-group-item">Step 3 - What does CSS do?</a>
                    <a href="{{ url('/css-work') }}" class="list-group-item">Step 4 - How does CSS work with HTML?</a>
                    <a href="{{ url('/css-syntax') }}" class="list-group-item">Step 5 - Errors and syntax</a>
                    <a href="{{ url('/test-css') }}" class="list-group-item active">Step 6 - Test your knowledge with a quiz</a>
                </div>
            </div>

            <div class="col-md-8" id="testCssMain">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>CSS Test</strong></h4>
                    </div>
                    <div class="card-block">
                        <p class="card-text">
                        <img src="{{URL::asset('/img/owl.jpeg')}}" alt="profile Pic" height="150" width="200"><br>
                            Here you will test what you have learned throughout the CSS Module.
                            Be sure to learn everything before you start this quiz! Good luck.
                        </p>
                        <p class="question">1. What is CSS?</p>
                        <ul class="answers">
                            <input type="radio" name="q1" value="a" id="q1a"><label for="q1a">Answer 1: HTML</label><br/>
                            <input type="radio" name="q1" value="b" id="q1b"><label for="q1b">Answer 2: Style for HTML pages</label><br/>
                            <input type="radio" name="q1" value="c" id="q1c"><label for="q1c">Answer 3: A Computer</label><br/>
                            <input type="radio" name="q1" value="d" id="q1d"><label for="q1d">Answer 4: The internet</label><br/>
                        </ul>
                        <p class="question">2. Which is the correct way to change background colour?</p>
                        <ul class="answers">
                            <input type="radio" name="q2" value="a" id="q2a"><label for="q2a">Answer 1: background-color</label><br/>
                            <input type="radio" name="q2" value="b" id="q2b"><label for="q2b">Answer 2: background-colour</label><br/>
                            <input type="radio" name="q2" value="c" id="q2c"><label for="q2c">Answer 3: bkground-color</label><br/>
                            <input type="radio" name="q2" value="d" id="q2d"><label for="q2d">Answer 4: color</label><br/>
                        </ul>
                        <p class="question">3. Select the code with good CSS syntax:</p>
                        <ul class="answers">
                            <input type="radio" name="q3" value="a" id="q3a"><label for="q3a">Answer 1: &lt;p style="font-size: 5px;"&gt;&lt;/p&gt;</label><br/>
                            <input type="radio" name="q3" value="b" id="q3b"><label for="q3b">Answer 2: &lt;p style="font-SIZE: 5px;"&gt;&lt;/p&gt;</label><br/>
                            <input type="radio" name="q3" value="c" id="q3c"><label for="q3c">Answer 3: &lt;p style="  font-size : 5px;"&gt;&lt;/p&gt;</label><br/>
                            <input type="radio" name="q3" value="d" id="q3d"><label for="q3d">Answer 4: &lt;p style="font-size: 5px;"&gt;&lt;/P&gt;</label><br/>
                        </ul>
                        <p class="question">4. Spot the error for font colour:</p>
                        <ul class="answers">
                            <input type="radio" name="q4" value="a" id="q4a"><label for="q4a">Answer 1: &lt;p style="font-color: 5px;"&gt;&lt;/&gt;</label><br/>
                            <input type="radio" name="q4" value="b" id="q4b"><label for="q4b">Answer 2: &lt;p style="font-color: red;"&gt;&lt;/p&gt;</label><br/>
                            <input type="radio" name="q4" value="c" id="q4c"><label for="q4c">Answer 3: &lt;p stye="font-color: red;"&gt;&lt;/p&gt;</label><br/>
                            <input type="radio" name="q4" value="d" id="q4d"><label for="q4d">Answer 4: &lt;p style="font-color: 5x;"&gt;&lt;/p&gt;</label><br/>
                        </ul>
                        <p class="question">5. Spot the error for background colour:</p>
                        <ul class="answers">
                            <input type="radio" name="q5" value="a" id="q5a"><label for="q5a">Answer 1: &lt;p style="background-color: blue;"&gt;&lt;p&gt;</label><br/>
                            <input type="radio" name="q5" value="b" id="q5b"><label for="q5b">Answer 2: &lt;p style="background-color: bluie"&gt;&lt;/p&gt;</label><br/>
                            <input type="radio" name="q5" value="c" id="q5c"><label for="q5c">Answer 3: &lt;p style="background---color: blue;"&gt;&lt;/p&gt;</label><br/>
                            <input type="radio" name="q5" value="d" id="q5d"><label for="q5d">Answer 4: &lt;p style="background-color: blue;"&gt;&lt;/p&gt;</label><br/>
                        </ul>

                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Answers</strong></h4>
                    </div>
                    <div class="card-block">
                        <p class="card-text">
                        <div id="category1">
                            <h6 style="display: none;"><strong>Question 1:</strong> The answer is the <strong>Answer 2</strong>.</h6>
                        </div>
                        <div id="category2">
                            <h6 style="display: none;"><strong>Question 2:</strong> The answer is the <strong>Answer 1</strong>.</h6>
                        </div>
                        <div id="category3">
                            <h6 style="display: none;"><strong>Question 3:</strong> The answer is the <strong>Answer 1</strong>.</h6>
                        </div>
                        <div id="category4">
                            <h6 style="display: none;"><strong>Question 4:</strong> The answer is the <strong>Answer 2</strong>.</h6>
                        </div>
                        <div id="category5">
                            <h6 style="display: none;"><strong>Question 5:</strong> The answer is the <strong>Answer 4</strong>.</h6>
                        </div>

                        <button id="hide">Hide</button>
                        <button id="show">Show</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection