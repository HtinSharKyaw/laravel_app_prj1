@extends('layout')

@section('content')
<h3>contact page</h3>

@foreach($data as $key=>$value)
    {{$key."==".$value}} <br>
@endforeach

@endsection