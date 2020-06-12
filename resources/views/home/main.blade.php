@extends('app')

@section('content')


    <h1>Aco Business</h1>
    <hr>

    <div id="choose">
        <div class="selection">
            <a href="">
                <img src="{{ asset('images/badge.jpg') }}" alt="">
                <div class="selection-title">DS Candidates</div>
            </a>
        </div>
        <div class="selection">
            <a href="">
                <img src="{{ asset('images/dueouts.png') }}" alt="">
                <div class="selection-title">Metrics</div>
            </a>
        </div>
        <div class="selection">
            <a href="">
                <img src="{{ asset('images/ncoer_meme.jpg') }}" alt="">
                <div class="selection-title">NCOERs</div>
            </a>
        </div>
        <div class="selection">
            <a href="">
                <img src="{{ asset('images/classes.jfif') }}" alt="">
                <div class="selection-title">Classes</div>
            </a>
        </div>
    </div>
    </div>



@endsection
