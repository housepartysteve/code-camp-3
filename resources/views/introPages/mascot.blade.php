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
                <h1 class="display-3">The Coding Owl</h1><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" id="sidebar">
                <div class="list-group">
                    <a href="{{ url('/intro') }}" class="list-group-item">Step 1 - Introduction</a>
                    <a href="{{ url('/mascot') }}" class="list-group-item active">Step 2 - Meet the coding owl</a>
                    <a href="{{ url('/coding') }}" class="list-group-item">Step 3 - What is coding?</a>
                    <a href="{{ url('/skills') }}" class="list-group-item">Step 4 - Why coding?</a>
                    <a href="{{ url('/recap') }}" class="list-group-item">Step 5 - Recap</a>
                    <a href="{{ url('/intro-html') }}" class="list-group-item">Step 6 - Enter the forest and begin the adventure</a>
                </div>
            </div>

            <div class="col-md-8" id="mascotMain">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Meet Harold The Owl</strong></h4>
                    </div>
                    <div class="card-block">
                        <p class="card-text">
                            Here at code camp we have our very own coding owl.
                            When you start learning the owl will be there to talk you through it and offer help.
                        </p>
                        <img src="{{URL::asset('/img/owl.jpeg')}}" alt="profile Pic" height="200" width="300">
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection