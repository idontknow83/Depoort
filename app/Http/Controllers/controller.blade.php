@extends('layout')

@section('title')
    <title>Consultatie Permissies - Huisartsen De Poort</title>
@endsection

@section('content')
<div class="container">
    <h1>Consultatie Permissies</h1>
    <p>Beheer de rechten voor administratieve toegang tot consultatieteksten.</p>

    <table class="table">
        <thead>
            <tr>
                <th>Consultatie ID</th>
                <th>Datum</th>
                <th>Beschrijving</th>
                <th>Toestemming voor Admin</th>
                <th>Actie</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($consultations as $consult)
                <tr>
                    <td>{{ $consult->id }}</td>
                    <td>{{ $consult->created_at->format('d-m-Y') }}</td>
                    <td>{{ $consult->description }}</td>
                    <td>{{ $consult->view_permission_for_admin ? 'Ja' : 'Nee' }}</td>
                    <td>
                        @if ($consult->view_permission_for_admin)
                            <form action="{{ route('consults.revokePermission', $consult->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Intrekken</button>
                            </form>
                        @else
                            <form action="{{ route('consults.grantPermission', $consult->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success">Toestemming geven</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection