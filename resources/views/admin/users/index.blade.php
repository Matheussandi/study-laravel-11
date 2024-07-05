@extends('admin.layouts.app')

@section('title', 'Users')

@section('content')
<h1>Users</h1>

<a href="{{ route('users.create') }}">Create User</a>

<x-alert />

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                    <a href="{{ route('users.show', $user->id) }}">Detail</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No users found</td>
            </tr>
        @endforelse
    </tbody>
</table>

{{ $users->links() }}
@endsection