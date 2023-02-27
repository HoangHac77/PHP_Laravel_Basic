@extends('layouts.app')

@section('content')
    <h1>Edit food pages</h1>

    <form action="/foods/{{ $food->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="name" class="form-label">Name food</label>
          <input type="text" class="form-control" value="{{ $food->name }}" name="name">
        </div>
        <div class="mb-3">
          <label for="descriptions" class="form-label">Description food</label>
          <input type="text" class="form-control" value="{{ $food->descriptions }}" name="descriptions">
        </div>
        <div class="mb-3">
          <label for="count" class="form-label">count food</label>
          <input type="text" class="form-control" value="{{ $food->count }}" name="count">
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection