@extends('layouts.app')
{{-- noi dung ; body --}}
@section('content')
<h1>this is foods pages </h1>

<a href="foods/create"
    class="btn btn-primary btn-lg"
    role="button"
>
    Create a new food
</a>

{{-- <ul class="list-group list-group-flush">
    <li class="list-group-item">{{ $food->name }}</li>
    <li class="list-group-item">{{ $food->descriptions }}</li>
    <li class="list-group-item">{{ $food->count }}</li>
</ul> --}}

@foreach ($foods as $item)
<ol class="list-group list-group-numbered">
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">{{ $item->name }}</div>
        {{ $item->descriptions }}
      </div>
      <span class="badge bg-primary rounded-pill">{{ $item->count }}</span>
      <a class="ms-2 me-2" href="foods/{{ $item->id }}/edit">
        Edit
    </a>
      <a class="me-3" href="foods/{{ $item->id }}">
        Details
    </a>
    <form action="/foods/{{ $item->id }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">
            Delete
        </button>
    </form>
    </li>
    
</ol>

@endforeach
<img src="{{ asset('storage/vietnam.png') }}" alt="">
@endsection
