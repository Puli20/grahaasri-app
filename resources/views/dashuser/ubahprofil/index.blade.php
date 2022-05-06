@extends('dashuser.index')

@section('ubahprofil')



<div class="d-flex justify-content-between flew-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2" style="margin-top: 25px">Ubah Profil</h1>
</div>

<div class="col-lg-6">
    <form method="post" action="/puser/{{ auth()->user()->id }}">
        @method('put')
        @csrf
        <div class="mb-3">
          <strong><label for="name" class="form-label">Nama</label></strong>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ auth()->user()->name }}">
          @error('name')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <strong><label for="username" class="form-label">Username</label></strong>
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required value="{{ auth()->user()->username }}">
          @error('username')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <strong><label for="email" class="form-label">Email</label></strong>
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ auth()->user()->email }}">
          @error('email')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
            <strong><label for="tanggal_lahir" class="form-label">Tanggal Lahir</label></strong>
            <input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" required value="{{ auth()->user()->tanggal_lahir }}">
            @error('tanggal_lahir')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div><div class="mb-3">
            <strong><label for="alamat" class="form-label">Alamat</label></strong>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required value="{{ auth()->user()->alamat }}">
            @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div><div class="mb-3">
            <strong><label for="desa" class="form-label">Desa</label></strong>
            <input type="text" class="form-control @error('desa') is-invalid @enderror" id="desa" name="desa" required value="{{ auth()->user()->desa }}">
            @error('desa')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div><div class="mb-3">
            <strong><label for="kecamatan" class="form-label">Kecamatan</label></strong>
            <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan" name="kecamatan" required value="{{ auth()->user()->kecamatan }}">
            @error('kecamatan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div><div class="mb-3">
            <strong><label for="kabupaten" class="form-label">Kabupaten</label></strong>
            <input type="text" class="form-control @error('kabupaten') is-invalid @enderror" id="kabupaten" name="kabupaten" required value="{{ auth()->user()->kabupaten }}">
            @error('kabupaten')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
        {{-- <div class="mb-3">
            <strong><label for="password" class="form-label">Password</label></strong>
            <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" 
            name="password" required value="{{ old('password', $customer->password) }}">
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div> --}}
        <div class="my-4">
            <a href="/puser" class="btn btn-outline-secondary"><span data-feather="x"></span> Kembali ke Profile</a>
          <button type="submit" class="btn btn-success"><span data-feather="edit"></span> Ubah Data</button>
        </div>
    </form>
</div>

@endsection