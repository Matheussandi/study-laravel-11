@extends('admin.layouts.app')

@section('title', 'Edit User')

@section('content')
<h1>Edit User {{ $user->name }}</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ $user->name }}">

    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{ $user->email }}">

    <label for="password">Password</label>
    <input type="password" name="password" id="password">

    <button type="submit">Create User</button>
</form>
@endsection