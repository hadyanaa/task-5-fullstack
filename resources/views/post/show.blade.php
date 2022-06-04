@extends('layouts.master')

@section('post')
<h2> Show Post {{$post->id}}</h2>
<h4>{{$post->title}}</h4>
<p>{{$post->content}}</p>
@endsection