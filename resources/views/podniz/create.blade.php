@extends('layout')

@section('forma')
<div class="container">
<h2>Da li je niz B podniz niza A ?</h2>
<br>
<form action="/podniz" method="POST">
  <div class="form-group">
    <label for="niz_a">Niz A:</label>
    <input type="niz_a" class="form-control" id="niz_a" placeholder="Unesi niz A.." name="niz_a">
  </div>
  <div class="form-group">
    <label for="niz_b">Niz B:</label>
    <input type="niz_b" class="form-control" id="niz_b" placeholder="Unesi niz B.." name="niz_b">
  </div>

  <div class="checkbox">
    <label><input type="checkbox" name="uzastopni"> Uzastopni</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@include('flash::message')
</div>
</div>
@endsection
