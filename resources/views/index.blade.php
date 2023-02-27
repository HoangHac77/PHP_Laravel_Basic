{{-- Tai su dung --}}
{{-- Ke thua --}}
@extends('layouts.app')

{{-- noi dung chinh la code duoi --}}
@section('content')
<h1>this is index pages </h1>

{{-- check url --}}
{{-- {{ print_r(URL('')) }} --}}

{{-- import images --}}
{{-- <img src="{{ URL('images/vietnam.png') }}" alt=""> --}}

<img src="{{ asset('storage/vietnam.png') }}" alt="">
@endsection
