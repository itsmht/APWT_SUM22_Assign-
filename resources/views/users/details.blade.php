@extends('layouts.loginlay')
@section('content')
<h1> User Details</h1>
Id: {{$users->id}}</br>
Name:  {{$users->name}}</br>
Email: {{$users->email}}</br>
Type: {{$users->type}}</br>
@endsection