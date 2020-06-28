@extends('layout')

@section('index')
<h1>Provjeravamo da li je niz B podniz niza A</h1>

<div class="container">
@foreach ($podnizs as $podniz )

    <p>Niz A: {{ $podniz->niz_a }}</p>
    <p>Niz B: {{ $podniz->niz_b }}</p>
    <p>Uzastopni: {{ $podniz->uzastopni }}</p>
    @endforeach

</div>

@endsection
