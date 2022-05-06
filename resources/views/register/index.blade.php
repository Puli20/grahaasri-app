@extends ('layout/main')

@include('part.nav')

@section ('home')
<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center" style="color: white">Registrasi</h1>
            <form action="/register" method="post">
              @csrf
                <div class="form-floating">
                    <input type="text" name='name' class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Nama" required value="{{ old('name') }}">
                    <label for="name">Nama</label>
                    @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="text" name='username' class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
              <div class="form-floating">
                <input type="email" name='email' class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email</label>
                @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
              </div>
              <div class="form-floating">
                <input type="password" name='password' class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required >
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Registrasi</button>
            </form>
            <small class="d-block text-center mt-2" style="color: white">
                Sudah punya akun ? <a href="/login">Silahkan login</a>
            </small>
        </main>
    </div>
</div>

@endsection