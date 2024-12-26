<!-- resources/views/page.blade.php -->
@extends('layouts.welcome')

@section('title', $page->title)

@section('content')
    <div class="container">
        <h1>{{ $page->title }}</h1>
        <div>{!! $page->content !!}</div>
    </div>
@endsection
