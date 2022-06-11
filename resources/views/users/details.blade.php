@extends('layouts.loginlay')
@section('content')
<h1> User Details</h1>
Id: {{$users->id}}</br>
Name:  {{$users->name}}</br>
Email: {{$students->email}}</br>
@endsection