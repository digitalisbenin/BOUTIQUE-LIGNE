@extends('layouts.signup_layout')

@section('signup content')
    <!-- navigation -->
    <div class="border-bottom shadow-sm">
        <nav class="navbar navbar-light py-2">
            <div class="container justify-content-center justify-content-lg-between">
                <a class="navbar-brand" href="{{ url('accueil') }}">
                    <img src="https://freshcart.codescandy.com/assets/images/logo/freshcart-logo.svg" alt="" class="d-inline-block align-text-top">
                </a>
                <span class="navbar-text">
        Already have an account? <a href="{{ url('signin') }}">Sign in</a>
      </span>
            </div>
        </nav>
    </div>


    <main>
        <!-- section -->

        <section class="my-lg-14 my-8">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                        <!-- img -->
                        <img src="https://freshcart.codescandy.com/assets/images/svg-graphics/signup-g.svg" alt="" class="img-fluid" />
                    </div>
                    <!-- col -->
                    <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
                        <div class="mb-lg-9 mb-5">
                            <h1 class="mb-1 h2 fw-bold">Get Start Shopping</h1>
                            <p>Welcome to FreshCart! Enter your email to get started.</p>
                        </div>
                        <!-- form -->
                        <form class="needs-validation" novalidate>
                            <div class="row g-3">
                                <!-- col -->
                                <div class="col">
                                    <!-- input -->
                                    <label for="formSignupfname" class="form-label visually-hidden">First Name</label>
                                    <input type="text" class="form-control" id="formSignupfname" placeholder="First Name" required />
                                    <div class="invalid-feedback">Please enter first name.</div>
                                </div>
                                <div class="col">
                                    <!-- input -->
                                    <label for="formSignuplname" class="form-label visually-hidden">Last Name</label>
                                    <input type="text" class="form-control" id="formSignuplname" placeholder="First Name" required />
                                    <div class="invalid-feedback">Please enter last name.</div>
                                </div>
                                <div class="col-12">
                                    <!-- input -->
                                    <label for="formSignupEmail" class="form-label visually-hidden">Email address</label>
                                    <input type="email" class="form-control" id="formSignupEmail" placeholder="Email" required />
                                    <div class="invalid-feedback">Please enter email.</div>
                                </div>
                                <div class="col-12">
                                    <div class="password-field position-relative">
                                        <label for="formSignupPassword" class="form-label visually-hidden">Password</label>
                                        <div class="password-field position-relative">
                                            <input type="password" class="form-control fakePassword" id="formSignupPassword" placeholder="*****" required />
                                            <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                            <div class="invalid-feedback">Please enter password.</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- btn -->
                                <div class="col-12 d-grid"><button type="submit" class="btn btn-primary">Register</button></div>

                                <!-- text -->
                                <p>
                                    <small>
                                        By continuing, you agree to our
                                        <a href="#!">Terms of Service</a>
                                        &
                                        <a href="#!">Privacy Policy</a>
                                    </small>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection