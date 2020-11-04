@extends('layouts.login')

@section('content')
<div class="container" id="">
    <div class="valign-wrapper row login-box margintop" style="margin-top:5%;">
        <div class="col card  hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
            <form method="POST" action="{{ route('register') }}">
                @csrf
            <div class="card-content">
                <div class="row">
                    <div class="col s12 m12">
                        <img class="card-title center"  src="{{asset('img/html5.png')}}" >
                    </div>
                </div>
                <div class="row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome Completo') }}</label>

                    <div class="col-md-4">
                        <input id="name" type="text" class="fd-input validate @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                    <div class="col-md-4">
                        <input id="email" type="email" class="fd-input  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>

                    <div class="col-md-4">
                        <input id="contact" type="contact" class="fd-input phone  @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="email">
                        @error('contact')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <label for="born" class="col-md-4 col-form-label text-md-right">{{ __('Data de nascimento') }}</label>

                    <div class="col-md-4">
                        <input id="born" name="born" type="date" class="fd-input  @error('born') is-invalid @enderror" value="{{ old('born') }}" required>
                        @error('born')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                    <div class="col-md-4">
                        <input id="password" type="password" class="fd-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar senha') }}</label>

                    <div class="col-md-4">
                        <input id="password-confirm" type="password" class="fd-input" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="card-action center">

                    <button type="submit" class="btn blue darken-5 white-text waves-effect waves-light"
                            value="Registrar" id="">
                        Registrar
                    </button>
                </div>

            </div>

            </form>
        </div>
    </div>
</div>
@endsection
