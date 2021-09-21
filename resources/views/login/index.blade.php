@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center ">Please Login</h1>
                <form>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="Username">
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">login</button>
                    <small class="d-block text-center">Not Registred? <a href="/register">Regist now</a></small>
                </form>
            </main>
        </div>
    </div>
@endsection
