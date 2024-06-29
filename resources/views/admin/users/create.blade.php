@extends('admin.layouts.app')

@section('title', 'Create User')

@section('content')
<h1>Create User</h1>

<x-alert />

<form action="{{ route('users.store') }}" method="post">
    @csrf

    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ old('name')}}">

    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{ old('email')}}">

    <label for="password">Password</label>
    <input type="password" name="password" id="password">

    <button type="submit">Create User</button>
</form>
@endsection