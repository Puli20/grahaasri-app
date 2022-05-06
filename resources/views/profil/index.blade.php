@extends('dashboard.layout.main')

@section('profil')

<div class="container mt-3">
    <link rel="stylesheet" href="/css/profil.css">
    <div class="row justify-content-center" style="width: 100%">
        <div class="panel" style="width:100%;max-width:100%;">
            <div class="aqua-panel-content">
            <table width="100%" cellpadding="5" class="table table-bordered table-responsive">
                <tbody><tr>
                    <td colspan="2"><b style="font-family:helvetica; font-size: 20pt; color: #4C5B5C">Profil</b></td>
                </tr>
                <tr>
                    <td width="23%"><b>Nama</b></td>
                    <td>{{ auth()->user()->name }}</td>
                </tr>
                <tr>
                    <td><b>Username</b></td>
                    <td> {{ auth()->user()->username }}</td>
                </tr>
                <tr>
                    <td><b>Email</b></td>
                    <td> {{ auth()->user()->email }}</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

@endsection
