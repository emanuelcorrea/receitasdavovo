@extends('layouts.app')

@section('content')
<main class="account register form">
    <div class="container">
        <div class="center">
            <div class="login">
                <div class="form-content">
                    <div class="titulo">
                        <h2 class="title">Cadastrar-se</h2>
                    </div>
                    <div class="center">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col">
                                    <label for="nome">Nome</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Digite o seu nome">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="email">Email</label>

                                    <input id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Digite o seu email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- <div class="col">
                                    <label for="sobrenome">Sobrenome</label>
                                    <input type="text" name="sobrenome" id="sobrenome" placeholder="Digite o seu sobrenome" required>
                                </div> --}}
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="email">Senha</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Digite a sua senha">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="email">Senha</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme a sua senha">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="sexo">
                                <label>Sexo</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="radio" name="sexo" id="sexoF" value="1" checked required>
                                        <label for="sexoF">Feminino</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" name="sexo" id="sexoM" value="2" required>
                                        <label for="sexoM">Másculino</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" name="sexo" id="sexoI" value="3" required>
                                        <label for="sexoI">Outro</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" style="margin: 0 auto;">
                                    <input type="file" name="img" id="img">
                                    <label for="img" class="img">
                                        Escolha uma imagem
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                {{ __('Cadastrar') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
