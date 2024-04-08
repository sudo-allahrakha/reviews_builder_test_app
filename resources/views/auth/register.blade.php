@extends('layouts.app')
@section('content')
    <section class="p-2 p-md-3 p-xl-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xxl-11">
                    <div class="">
                        <div class="row g-0">
                            <div class="col-12 col-md-6 align-self-center">
                                <img class="img-fluid rounded-start object-fit-cover" loading="lazy"
                                    src="/assets/placeholder/auth.png" alt="Welcome back you've been missed!" />
                            </div>
                            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                                <div class="col-12 col-lg-11 col-xl-10">
                                    <div class="card border-light-subtle shadow-sm card-body p-3 p-md-4 p-xl-5">

                                        <div class="row">
                                            <div class="col-12">
                                                @if (session('error'))
                                                    <div class="alert alert-danger alert-dismissible fade show"
                                                        role="alert">

                                                        <strong class="mx-1"><i
                                                                class="fs-3 bi bi-exclamation-octagon mx-2"></i> Server
                                                            Error !</strong>
                                                        <br />
                                                        {{ session('error') }}
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                            aria-label="Close"></button>

                                                    </div>
                                                @endif
                                                <div class="d-flex gap-3 flex-column">
                                                    <a href="#!" class="btn btn-md btn-outline-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-google"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                                        </svg>
                                                        <span class="ms-2 fs-6">
                                                            Signup with Google
                                                        </span>
                                                    </a>
                                                </div>
                                                <p class="text-center mt-4 mb-5">
                                                    Or enter your details to register
                                                </p>
                                            </div>
                                        </div>
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf



                                            <div class="row gy-3 overflow-hidden">
                                                <div class="col-6">
                                                    <div class="form-floating ">
                                                        <input type="text" name="first_name" id="first_name"
                                                            placeholder="First Name"
                                                            class="form-control @error('first_name') is-invalid @enderror"
                                                            value="{{ old('first_name') }}" autocomplete="first_name"
                                                            autofocus />
                                                        <label for="first_name" class="form-label">
                                                            First Name
                                                        </label>
                                                        @error('first_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-floating ">
                                                        <input type="text" name="last_name" id="last_name"
                                                            placeholder="Last name"
                                                            class="form-control @error('last_name') is-invalid @enderror"
                                                            value="{{ old('last_name') }}" autocomplete="last_name"
                                                            autofocus />
                                                        <label for="last_name" class="form-label">
                                                            Last Name
                                                        </label>
                                                        @error('last_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <input type="email" name="email" id="email"
                                                            placeholder="name@example.com"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            value="{{ old('email') }}" autocomplete="email" autofocus />
                                                        <label for="email" class="form-label">
                                                            Email
                                                        </label>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="password" name="password" id="password"
                                                            placeholder="Password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            value="{{ old('password') }}" autocomplete="password"
                                                            autofocus />
                                                        <label for="password" class="form-label">
                                                            Password
                                                        </label>
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="password" name="password_confirmation"
                                                            id="password_confirmation" placeholder="Confirm password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            value="{{ old('password_confirmation') }}"
                                                            autocomplete="password_confirmation" autofocus />
                                                        <label for="password_confirmation" class="form-label">
                                                            Confirm Password
                                                        </label>
                                                        @error('password_confirmation')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="col-12">
                                                    <small class="text-muted">
                                                        By clicking Sign Up, you agree to our
                                                        <a href="#!"
                                                            class="link-primary text-decoration-none">Terms</a>,
                                                        <a href="#!"
                                                            class="link-primary text-decoration-none">Privacy Policy</a>
                                                        and
                                                        <a href="#!"
                                                            class="link-primary text-decoration-none">Cookies Policy</a>.
                                                        You may receive SMS notifications from us and can opt out at any
                                                        time.
                                                    </small>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button class="btn btn-primary btn-sm" type="submit">
                                                            Sign up
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="mb-0 mt-5 text-primary text-center">
                                                    Already have an account?
                                                    <a
                                                        href="{{ route('login') }}"class="link-primary text-decoration-none fw-bolder">Login</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
