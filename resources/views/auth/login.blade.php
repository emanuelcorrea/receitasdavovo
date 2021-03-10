@extends('layouts.app')

@section('content')
<main class="login-content">
    <div class="container center">
        <div class="login">
            <div class="login__content">
                <div class="login__title">
                    <h2>Entrar</h2>
                </div>
                <div class="login__form center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <input aria-label="Digite o seu e-mail" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Digite o seu email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input aria-label="Digite sua senha" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Digite a sua senha">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn">
                            {{ __('Entrar') }}
                        </button>

                        @if (Route::has('password.request'))
                            <div class="login__request">
                                <a href="{{ route('password.request') }}">
                                    {{ __('Esqueceu sua senha?') }}
                                </a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
        <div class="login-content__or">
            <h2>Ou</h2>
        </div>
        <div class="register">
            <div class="register__content">
                <div class="register__title">
                    <h2>Cadastrar-se</h2>
                </div>
                <div class="register__subtitle">
                    <p>Crie uma conta para benefícios adicionais de usuários e direitos de postagem de receitas!</p>
                </div>
                <a href="{{ route('register') }}" class="btn">Criar conta</a>
            </div>
        </div>
    </div>
</main>
@endsection
