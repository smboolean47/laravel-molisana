@extends('layouts.base')

@section('pageTitle')
    Home
@endsection

@section('pageContent')
<div class="container">
    <section>
        <h2>Le Lunghe</h2>
        <div class="cards">
            @foreach ($lunghe as $pasta)
                <div class="card">
                    <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                    <h3>{{$pasta['titolo']}}</h3>
                </div>
            @endforeach
        </div>
    </section>
    <section>    
        <h2>Le Corte</h2>
        <div class="cards">
            @foreach ($corte as $pasta)
                <div class="card">
                    <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                    <h3>{{$pasta['titolo']}}</h3>
                </div>
            @endforeach
        </div>
    </section>
    <section> 
        <h2>Le Cortissime</h2>
        <div class="cards">
            @foreach ($cortissime as $pasta)
                <div class="card">
                    <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                    <h3>{{$pasta['titolo']}}</h3>
                </div>
            @endforeach
        </div>
    </section>

</div>
@endsection