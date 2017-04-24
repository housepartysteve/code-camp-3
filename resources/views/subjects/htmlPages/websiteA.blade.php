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
                <h1 class="display-3">What is on a website?</h1><br><br>
            </div>
            <div class="col-md-3" id="sidebar">
                <div class="list-group">
                    <a href="{{ url('/intro-html') }}" class="list-group-item">Step 1 - Introduction</a>
                    <a href="{{ url('/website-what') }}" class="list-group-item">Step 2 - What is a website?</a>
                    <a href="{{ url('/website-is') }}" class="list-group-item active">Step 3 - What is on a website?</a>
                    <a href="{{ url('/html-syntax') }}" class="list-group-item">Step 4 - Errors and syntax</a>
                    <a href="{{ url('/test-html') }}" class="list-group-item">Step 5 - Test your knowledge with a quiz</a>
                </div>
            </div>

            <div class="col-md-8" id="whatMain">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>What is on a website?</strong></h4>
                    </div>
                    <div class="card-block">
                        <p class="card-text">
                            A website is made up of HTML tags, these tags allow for you to create instructions that will be read by the internet.
                            This is what a HTML tag looks like.<br>
                            <br>
                            This is what a HTML tag looks like <strong style="font-size: 24px;">&lt;html&gt;.</strong><br>
                            <br>
                            All tags need these brackets <strong style="font-size: 24px;"> < > </strong><br>
                            <br>
                            All tags are in pairs, the content is held in between the tags.</strong><br>
                            <br>
                            An opening tag looks like<strong style="font-size: 24px;"> &lt;body&gt;</strong><br>
                            <br>
                            A closing tag looks like<strong style="font-size: 24px;"> &lt;/body&gt;</strong><br>
                            <br>
                            Html pages are setup in a certain way.<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-3" id="whatMain">
                    <div class="card">
                        <div class="card-header">
                            <h4><strong>Tags used in the layout</strong></h4>
                        </div>
                        <div class="card-block">
                            <p class="card-text">
                                <strong style="font-size: 24px;">&lt;!DOCTYPE html&gt;</strong> --> This allows the document to be understood as HTML and not just plain text.<br>
                                <strong style="font-size: 24px;" >&lt;html&gt;</strong>  ----> This is the opening HTML tag.<br>
                                <strong style="font-size: 24px;">&lt;head&gt;</strong>  ----> Top of Head<br>
                                <br>
                                <strong style="font-size: 24px;">&lt;head&gt;</strong>  ----> Bottom of Head <br>
                                <strong style="font-size: 24px;">&lt;body&gt;</strong>  ----> Start of chest<br>
                                <br>
                                <strong style="font-size: 24px;">&lt;body&gt;</strong>  ----> end of stomach<br>
                                <strong style="font-size: 24px;">&lt;/html&gt;</strong>  ----> Feet<br>
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-3" id="whatMain">
                    <div class="card">
                        <div class="card-header">
                            <h4><strong>Tags related to human body</strong></h4>
                        </div>
                        <div class="card-block">
                            <p class="card-text">
                                An easy way to remember this layout is that it is similar to the body.<br>
                                <strong style="font-size: 24px;">&lt;!DOCTYPE html&gt;</strong> ----> Brain <br>
                                <strong style="font-size: 24px;" >&lt;html&gt;</strong>  ----> Top of head<br>
                                <strong style="font-size: 24px;">&lt;head&gt;</strong>  ---->  Top of Head<br>
                                <br>
                                <strong style="font-size: 24px;">&lt;head&gt;</strong>  ----> Bottom of Head <br>
                                <strong style="font-size: 24px;">&lt;body&gt;</strong>  ----> Start of chest<br>
                                <br>
                                <strong style="font-size: 24px;">&lt;body&gt;</strong>  ----> end of stomach<br>
                                <strong style="font-size: 24px;">&lt;/html&gt;</strong>  ----> Feet<br>
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-3" id="whatMain">
                    <div class="card">
                        <div class="card-header">
                            <h4><strong>Description of Tags</strong></h4>
                        </div>
                        <div class="card-block">
                            <p class="card-text">
                                NEEDS IMAGE OF SKELETON/HUMAN BODY<br>
                                <br>
                                <strong style="font-size: 24px;" >&lt;html&gt;&lt;/html&gt;</strong><br>
                                Everything contained within these tags is html text.<br>
                                <strong style="font-size: 24px;" >&lt;head&gt;&lt;/head&gt;</strong><br>
                                Head contains information about the document such as the title, this will be seen on the webpage<br>
                                <strong style="font-size: 24px;" >&lt;body&gt;&lt;/body&gt;</strong><br>
                                This contains everything that is unique to the page.<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-3" id="whatsOnAMain">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Tags that are used in the body</strong></h4>
                    </div>
                    <div class="card-block">
                        <p class="card-text">
                            These are some of the tags that are placed within the body tags to create things.<br>
                            <br>
                            This tag represents a paragraph of text<br>
                            <strong style="font-size: 24px;" >&lt;p&gt;&lt;/p&gt;</strong><br>
                            <br>
                            The br tag represents a line break to skip a line.<br>
                            <strong style="font-size: 24px;" >&lt;br&gt;&lt;</strong><br>
                            <br>
                            The h stands for heading in this tag. Makes text stand out.<br>
                            <strong style="font-size: 24px;" >&lt;h&gt;&lt;/h&gt;</strong><br>
                            <br>
                            The strong tags make all the text bold thats place in between them.<br>
                            <strong style="font-size: 24px;" >&lt;strong&gt;&lt;/strong&gt;</strong><br>
                            <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
     </div>



@endsection