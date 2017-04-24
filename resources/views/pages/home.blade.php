@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default text-center">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>You are logged in!</p>
                    <p>From this page you can click on the introduction or if you have already started a module select it below</p><br>
                    <b>Introduction:</b><br>
                    <a href="{{ url('/intro') }}" class="btn btn-success">Begin The Learning Adventure</a><br><br>
                    <b>HTML: </b><br>
                    <a href="{{ url('/intro-html') }}" class="btn btn-success">Begin The HTML Adventure</a><br><br>
                    <b>CSS: </b><br>
                    <a href="{{ url('/csstyle') }}" class="btn btn-success">Begin The CSS Adventure</a><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
