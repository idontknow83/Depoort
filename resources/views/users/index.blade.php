@extends('layout')

@section('title')
    <title>Users</title>
@endsection

@section('content')

@if (session('success'))
<x-success-msg message="{{ session('message') }}" color="green" />
@elseif (session('error'))
<x-success-msg message="{{ session('message') }}" color="red" />
@endif
    
<table>
    <tr>
        <th>id</th>
        <th>naam</th>
        <th>telnummer</th>
        <th>email</th>
        <th>adres</th>
        <th>land</th>
        <th>postcode</th>
        <th>woonplaats</th>
        <th>gender</th>
        <th>geboortedatum</th>
        @permission('users-delete')
        <th>delete</th>
        @endpermission

        @permission('users-update')
        <th>update</th>
        @endpermission
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->naam }}</td>
        <td>{{ $user->telnummer }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->adres }}</td>
        <td>{{ $user->land }}</td>
        <td>{{ $user->postcode }}</td>
        <td>{{ $user->woonplaats }}</td>
        <td>{{ $user->gender }}</td>
        <td>{{ $user->geboortedatum }}</td>
        @permission('users-delete')
        <td><a href="{{ env('app_url') }}/public/users/delete/{{ $user->id }} " style="color:#0077B6; text-decoration: none;">Delete</a></td>
        @endpermission

        @permission('users-update')
        <td><a href="{{ env('app_url') }}/public/account/info/{{$user->id}}" style="color:#0077B6; text-decoration: none;">Update </a></td>
        @endpermission
        </tr>
    @endforeach
</table>
@endsection