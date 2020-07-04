@extends('layouts.app')

@section('title-block') Main page @endsection

@section('content')
    <h1>Main page</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
     Aperiam at nemo earum ab, aliquam aspernatur nostrum officiis 
     laudantium autem explicabo non quos est numquam ipsam et beatae 
     libero recusandae. Facilis!</p>
@endsection

@section('aside')
    @parent
    <p>Aditional text</p>
@endsection