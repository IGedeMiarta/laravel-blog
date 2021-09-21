@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">

            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center mt-5">Registration Form</h1>
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="name"
                            class="form-control rounded-top @error('name')
                            is-invalid
                        @enderror"
                            id="name" placeholder="Name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username"
                            class="form-control @error('username')
                            is-invalid
                        @enderror"
                            id="username" placeholder="Username" value="{{ old('username') }}">
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email"
                            class="form-control @error('email')
                            is-invalid
                        @enderror"
                            id="email" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password"
                            class="form-control rounded-bottom @error('password')
                            is-invalid
                        @enderror"
                            id="floatingPassword" placeholder="Password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                    <small class="d-block text-center">Alredy Registred? <a href="/login">Login</a></small>
                </form>
            </main>
        </div>
    </div>
@endsection
