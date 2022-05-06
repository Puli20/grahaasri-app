@extends('dashuser.index')

@section('profil')

<div class="container mt-3">
    <link rel="stylesheet" href="/css/profil.css">
    <div class="row  style="width: 100%">
        <div class="panel" style="width:50%;">
            <div class="aqua-panel-content">
            <h1><b style="font-family:helvetica; font-size: 20pt; color: #4C5B5C">Profil</b></h1>
            <table width="100%" cellpadding="5" class="table table-bordered table-responsive">
                <tbody>
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
                <tr>
                    <td><b>Tanggal Lahir</b></td>
                    <td> {{ auth()->user()->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <td><b>Alamat</b></td>
                    <td> {{ auth()->user()->alamat }}</td>
                </tr>
                <tr>
                    <td><b>Desa</b></td>
                    <td> {{ auth()->user()->desa }}</td>
                </tr>
                <tr>
                    <td><b>Kecamatan</b></td>
                    <td> {{ auth()->user()->kecamatan }}</td>
                </tr>
                <tr>
                    <td><b>kabupaten</b></td>
                    <td> {{ auth()->user()->kabupaten }}</td>
                </tr>
                </tbody>
            </table>
            <div class="nav-item-fluid text-nowrap" style="margin-left:78%;">
                <form action="/ubahprofil" method="get">
                  @csrf
                  <button type="submit" class="nav-link px-3 bg-ligt border-0 rounded-3" style="color: green;" href="#"><span data-feather="edit"></span> Ubah Data
                  </button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
