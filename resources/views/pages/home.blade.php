@extends('plantilla')

@section('contenido')
@php 
    foreach($personas as $persona){
        echo "$persona <br>";
    }
@endphp
<p>Home con blade</p>
@endsection