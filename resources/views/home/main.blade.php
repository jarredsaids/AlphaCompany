@extends('app.base')

@section('content')
    <div class="container">

        <div class="jumbotron">
            <h1>Alpha Company</h1>
            <p>This application is intended to serve as a landing page for soldiers belonging to A Company of the
                3rd-518th
                Regiment in Hickory, NC</p>
            <p>Select a section below or use the navigation to find what you're looking for.</p>
        </div>

        <div id="row">
            <div class="col-md-3">
                <a href="#">
                    <img src="{{ asset('images/badge.jpg') }}" alt="">
                    <div class="selection-title">DS Candidates</div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#">
                    <img src="{{ asset('images/dueouts.png') }}" alt="">
                    <div class="selection-title">Metrics</div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#">
                    <img src="{{ asset('images/ncoer_meme.jpg') }}" alt="">
                    <div class="selection-title">NCOERs</div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#">
                    <img src="{{ asset('images/classes.jfif') }}" alt="">
                    <div class="selection-title">Classes</div>
                </a>
            </div>
        </div>
    </div>



@endsection
