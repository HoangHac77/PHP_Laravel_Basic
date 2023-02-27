@extends('layouts.app')

@section('content')
    <h1>Show detail food</h1>
    <h3>Food name: {{ $food->name }}</h3>
    <img src="{{ asset('images/' . $food->image_path) }}" alt="">
    <h3>Food number: {{ $food->count }}</h3>
    <h3>Description: {{ $food->descriptions }}</h3>
    <h3>CategoryId: {{ $food->category_id }}</h3>
    <h3>Category_name: {{ $food->category->name }}</h3>
@endsection
