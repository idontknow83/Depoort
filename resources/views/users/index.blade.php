@extends('layout')

@section('title')
    <title>Users</title>
@endsection

@section('content')
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
        </tr>
    @endforeach
</table>
@endsection