@extends('layouts.app') 
@section('title', '123 Title') 
@section('sidebar') @parent

<p>This is appended to the master sidebar.</p>
<h1 class="text-red">Hello World</h1>
@endsection
 
@section('content')
<p>This is my body content.</p>
@endsection