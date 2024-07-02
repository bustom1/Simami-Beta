@extends('layouts.user-app')

@section('content')
    <div class="row justify-content-center mt-5 pt-md-5 pt-5">
        <div class="col-lg-6 col-10 col-sm-7">
            <div class="authentication-wrapper authentication-basic container-p-y">
                <div class="authentication-inner">
                    <div class="card">
                        <div class="card-body">
                            <!-- Logo -->
                            <div class="app-brand justify-content-center mb-3">
                                <a href="#" class="app-brand-link gap-2">
                                    <img src="{{ asset('images/logo-simami.png') }}" style="max-width: 150px; height: auto;"
                                        alt="logo" />
                                </a>
                            </div>
                            <!-- /Logo -->
                            <h4 class="mb-2">Welcome to Simami! 👋</h4>
                            <p class="mb-4">Please sign-in to your account and start the adventure</p>

                            {{-- <form id="formAuthentication" class="mb-3" action="index.html" method="POST"> --}}
                            <form method="POST" action="{{ route('login') }}" class="mb-3">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>

                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" placeholder="Enter your email"
                                        value="{{ old('email') }}" autofocus />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3 form-password-toggle">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="password">Password</label>

                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">
                                                <small>Forgot Password?</small>
                                            </a>
                                        @endif
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" required />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
