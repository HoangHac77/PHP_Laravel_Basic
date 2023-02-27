{{-- Tai su dung --}}
{{-- Ke thua --}}
@extends('layouts.app')

{{-- noi dung chinh la code duoi --}}
@section('content')
<h1>this is about pages </h1>
{{-- {{ $x = 1 }}
@if ($x > 2) 
    <h3>yes</h3>
@elseif($x < 10)
    <h3>no</h3>
@else
    <h3>not</h3>    
@endif --}}

{{-- unless = "if not" --}}
{{-- @unless (empty($name))
    <h3>name in not empty</h3>
@endunless --}}
{{-- @if (!empty($name))
    <h3>name in not empty</h3>
@endif --}}
{{-- @empty(!$name)
    <h3>name in not empty</h3>
@endempty --}}
{{-- @empty($age)
    <h3>age in not empty</h3>
@endempty --}}

{{-- check variable have set ? kiem tra bien duoc gan chua --}}
{{-- @isset($name)
    <h3>name has been set</h3>
@endisset --}}

{{-- @switch($name)
    @case('hoang')
        <h3>Thi is {{ $name }}</h3>
        @break
    @default
        <h3>No one has this name</h3>
@endswitch --}}

{{-- @for ($i = 0; $i < 20; $i++)
    <h1>i = {{ $i }}</h1>
@endfor --}}

{{-- @for ($i = 0; $i < count($name_array) ; $i++)
    <h3>name : {{ $name_array[$i] }}</h3>
@endfor --}}

{{-- @foreach ($name_array as $item)
    <h3>name : {{ $item }}</h3>
@endforeach --}}

{{-- @forelse ($name_array1 as $item)
    <h3>name : {{ $item }}</h3>
@empty
    <h3>This array is empty</h3>    
@endforelse --}}

{{-- {{ $i = 0 }}
@while ($i < 10)
    <h3>i = {{ $i }}</h3>
    {{ $i++; }}    
@endwhile --}}

@endsection

