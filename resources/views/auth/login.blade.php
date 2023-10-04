@extends('layouts.auth')

@section('main-content')
<section class="background-section" style="background-image: url('{{ asset('img/cafe-bar.png') }}');"; >
    <form action="{{ route('login.attempt') }}" method="POST">
        @csrf
        <div class="container">

            <div class="row justify-content-letf">
                <div class="col-lg-5">
                <h1 class="text-center font-weight-light my-4 text-uppercase row justify-content-center">Coffe Time</h1>
                <h3 class="text-center font-weight-light my-4 text-uppercase row justify-content-center">Prueba nuestra nueva cadena<br>
                                                                                                         100% artesanal<br>100% Chilena<br>
                                                                                                         100% olor a cafe </h3>
                    <div class="card border-0 rounded-lg mt-5">
                        <div class="card-header bg-light">
                            <h3 class="text-center font-weight-light my-4 text-uppercase">Iniciar sesión</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" type="text" placeholder="Email"
                                        name="email" />
                                    <label for="email">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputPassword" type="password"
                                    placeholder="password" name="password" />
                                    <label for="inputPassword">Contraseña</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" id="inputRememberPassword" type="checkbox"
                                        name="remember" />
                                    <label class="form-check-label" for="inputRememberPassword">Recordarme</label>
                                </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="d-flex justify-content-center mt-4 mb-0">
                                    <button class="btn btn-dark px-4" type="submit">Acceder</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3 bg-light">
                            <div class="fs-6"><a href="{{ route('register') }}">Crear una cuenta</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </section>
@endsection

<style>


h1{
    color: deepskyblue;
}
h3{
    color: deepskyblue;
}


</style>

