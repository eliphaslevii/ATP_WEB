@extends('layouts.login')

@section('content')
    <div class="container" id="rowclass">
        <div class="valign-wrapper row login-box margintop" style="margin-top:18%;">
            <div class="col card  hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12 m12">
                                    <div class="row">
                                        <div class="col s6 m6">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <img class="card-title center"  src="{{asset('img/html5.png')}}" >
                                        </div>
                                    </div>
                                    <br>
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                            <input placeholder="Email" id="email" type="email"
                                                   class="fd-input validate @error('email') is-invalid @enderror" name="email"
                                                   value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                    <br>
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>
                                            <input id="password" placeholder="Senha" type="password"
                                                   class="fd-input @error('password') is-invalid @enderror" name="password"
                                                   required autocomplete="current-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror


                                </div>
                            </div>
                        </div>
                        <div class="card-action right-align">
                                <a href="register">
                                    <button type="button" id="hrefregister"class="btn green darken-5 white-text waves-effect waves-light"
                                        value="Login">
                                        Register
                                    </button>
                                </a>
                            <button type="submit" class="btn blue darken-5 white-text waves-effect waves-light"
                                    value="Login" id="">
                                LOGIN
                            </button>

                        </div>

                    </form>
            </div>
        </div>
    </div>

<style>
</style>

@endsection
