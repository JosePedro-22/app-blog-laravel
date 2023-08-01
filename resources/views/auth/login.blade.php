<x-guest-layout>
    <div class="login-box">
        @if(session()->has('status'))
            <div class="alert-danger mb-2 p-2 rounded">
                {{session('status')}}
            </div>
        @endif
        <div class="card card-outline card-primary">

            <div class="card-header text-center">
                <a href="#" class="h1"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
{{--                <p class="login-box-msg">Conecte-se</p>--}}
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="E-mail">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('email')
                        <span class="alert-danger rounded p-1">
                                {{$message}}
                        </span>
                    @enderror
                    <div class="input-group mb-3 mt-2">
                        <input type="password" name="password" class="form-control" placeholder="Senha">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error('password')
                        <span class="alert-danger rounded p-1">
                            {{$message}}
                        </span>
                    @enderror

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember">
                                    Manter conectado
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                        </div>
                    </div>
                </form>
                <div class="social-auth-links text-center mt-2 mb-3">
                    <span class="mt-2 mb-3"><h6>- OU -</h6></span>
                    <a href="#" class="btn btn-block btn-dark">
                        <i class="fab fa-github mr-2"></i> Entre usando o GitHub
                    </a>
{{--                    <a href="#" class="btn btn-block btn-danger">--}}
{{--                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+--}}
{{--                    </a>--}}
                </div>
{{--                <p class="mb-1">--}}
{{--                    <a href="forgot-password.html">I forgot my password</a>--}}
{{--                </p>--}}
{{--                <p class="mb-0">--}}
{{--                    <a href="register.html" class="text-center">Register a new membership</a>--}}
{{--                </p>--}}
            </div>
        </div>
    </div>
</x-guest-layout>
