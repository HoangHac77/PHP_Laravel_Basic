@extends('layouts.app')

@section('content')
    <h1>this is foods create pages</h1>

    <form action="/foods" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- the key is generated at evety session start --}}
        {{-- only apply to non-read routes --}}
        {{-- if some hacker acces to this site from hists/her site --}}
        <div class="mb-3">
            <label for="name" class="form-label">Name food</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="descriptions" class="form-label">Description food</label>
            <input type="text" class="form-control" name="descriptions">
        </div>
        <div class="mb-3">
            <label for="count" class="form-label">count food</label>
            <input type="text" class="form-control" name="count">
        </div>
        <div class="mb-3">
            <label for="">Choose a categories:</label>
            <select class="form-select" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                {{-- <option selected>Open this select  menu</option> --}}
                {{-- <option value="Italy foods">Italy foods</option> --}}
                {{-- <option value="Vegetables">Vegetables</option> --}}
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Choose file</label>
            <input type="file" class="form-control" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p class="text-danger">
                    {{ $error }}
                </p>
            @endforeach
        </div>
    @endif
@endsection
