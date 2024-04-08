@extends('layouts.app')

@section('content')
    <main>
        <!--Security profile Start-->
        <section class="py-lg-7 py-5 bg-light-subtle">
            <div class="container">
                <div class="row">
                    @include('layouts.sidebar')
                    <div class="col-lg-9 col-md-8">
                        <div class="mb-4">
                            <h1 class="mb-0 h3">Security</h1>
                        </div>
                        <!-- To change Email  -->
                        <!-- <div class="card border-0 mb-4 shadow-sm">
                            <div class="card-body p-lg-5">
                               <div class="mb-5">
                                  <h4 class="mb-1">Email Address</h4>
                                  <p class="mb-0 fs-6">
                                     Change the email address for your account. Currently You account is
                                     <a href="#" class="text-primary">blocktheme@example.com</a>
                                  </p>
                               </div>
                               <form class="row needs-validation" novalidate="">
                                  <div class="col-lg-7">
                                     <div class="mb-3">
                                        <label for="securityEmailInput" class="form-label">New Email Address</label>
                                        <input type="email" class="form-control" id="securityEmailInput" placeholder="blocktheme@example.cpm" required="">
                                        <div class="invalid-feedback">Please enter email address.</div>
                                     </div>
                                     <div>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                     </div>
                                  </div>
                               </form>
                            </div>
                         </div> -->
                        <div class="card border-0 mb-4 shadow-sm">
                            <div class="card-body p-lg-5">
                                <div class="mb-5">
                                    <h4 class="mb-1">Change Password</h4>
                                    <p class="mb-0 fs-6">We will email you a confirmation when changing your password, so
                                        please expect that email after submitting.</p>
                                </div>
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">

                                        <strong class="mx-1"><i class="fs-3 bi bi-check-circle-fill mx-2"></i> Good
                                            !</strong>
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>

                                    </div>
                                @endif





                                <form class="row gy-3" method="POST" action="{{ route('change-password') }}">
                                    @csrf
                                    <div class="col-lg-7">
                                        <label for="old_password" class="form-label">Old Password</label>
                                        <input type="password" name="old_password" id="old_password"
                                            class="form-control @error('old_password') is-invalid @enderror"
                                            value="{{ old('old_password') }}" autocomplete="old_password" autofocus />
                                        @error('old_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-7">
                                        <label for="new_password" class="form-label">New Password</label>
                                        <input type="password" name="new_password" id="new_password"
                                            class="form-control @error('new_password') is-invalid @enderror"
                                            value="{{ old('new_password') }}" autocomplete="new_password" autofocus />


                                        @error('new_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="form-text ">Make sure it's at least 8
                                            characters including a number,lowercase letter and a captical case.</div>
                                    </div>

                                    <div class="col-lg-7">
                                        <label for="new_password_confirmation" class="form-label">Confirm New
                                            Password</label>
                                        <input type="password" name="new_password_confirmation"
                                            id="new_password_confirmation" placeholder="Confirm password"
                                            class="form-control @error('new_password') is-invalid @enderror"
                                            value="{{ old('new_password_confirmation') }}"
                                            autocomplete="new_password_confirmation" autofocus />

                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary me-2" type="submit">Save Changes</button>
                                        <a class="btn btn-light" href="{{route('dashboard')}}">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Delete Account -->
                        <!-- <div class="card border-danger bg-danger bg-opacity-10 mb-4 shadow-sm">
                            <div class="card-body p-lg-5">
                               <div class="mb-4">
                                  <h5 class="mb-0">Danger Zone</h5>
                                  <small>Deleting your account will</small>
                               </div>
                               <ul class="list-unstyled mb-3">
                                  <li class="mb-2">1. Permanently delete your profile, along with your authentication associations.</li>
                                  <li class="mb-2">2. Permanently delete all your content, including your articles, bookmarks, comments, upvotes, etc.</li>
                                  <li class="mb-2">3. Allow your username to become available to anyone.</li>
                               </ul>
                               <p class="mb-0">
                                  Important: deleting your account is unrecoverable and cannot be undone. Feel free to contact
                                  <a href="#" class="text-danger">support@blockthemeexample.com</a>
                                  with any questions.
                               </p>
                               <div class="mt-3">
                                  <a href="#" class="btn btn-danger">Delete Account</a>
                               </div>
                            </div>
                         </div> -->



                    </div>
                </div>
            </div>
        </section>
        <!--Account profile end-->
    </main>
@endsection
