@extends('layouts.app')

@section('content')
    <h1>this is foods create pages</h1>

    <form action="/foods" method="POST">
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
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection