@extends('admin.partials.log')
@section('title') Login @endsection
@section('content')
<!-- Section -->
<section class="vh-lg-100 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center form-bg-image" data-background-lg="/backend/assets/img/illustrations/signin.svg">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="signin-inner my-3 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="mb-0 h3">Sign in to our platform</h1>
                    </div>
                    <form action="{{ route('admin.login.post') }}" class="mt-4" method="POST" role="form">
                        <!-- Form -->
                        @csrf
                        <div class="form-group mb-4">
                            <label for="email">Your Email</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><span class="fas fa-envelope"></span></span>
                                <input type="email" class="form-control" placeholder="example@company.com" id="email" name="email" autofocus required>
                            </div>
                        </div>
                        <!-- End of Form -->
                        <div class="form-group">
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="password">Your Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2"><span class="fas fa-unlock-alt"></span></span>
                                    <input type="password" placeholder="Password" class="form-control" id="password" name="password" required>
                                </div>
                            </div>
                            <!-- End of Form -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                                    <label class="form-check-label" for="defaultCheck5">
                                        Remember me
                                    </label>
                                </div>
                                <div><a href="#" class="small text-right">Lost password?</a></div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                    </form>
                    <div class="mt-3 mb-4 text-center">
                        <span class="font-weight-normal">or login with</span>
                    </div>
                    <div class="btn-wrapper my-4 text-center">
                        <button class="btn btn-icon-only btn-pill btn-outline-light text-facebook mr-2" type="button" aria-label="facebook button" title="facebook button">
                            <span aria-hidden="true" class="fab fa-facebook-f"></span>
                        </button>
                        <button class="btn btn-icon-only btn-pill btn-outline-light text-twitter mr-2" type="button" aria-label="twitter button" title="twitter button">
                            <span aria-hidden="true" class="fab fa-twitter"></span>
                        </button>
                        <button class="btn btn-icon-only btn-pill btn-outline-light text-facebook" type="button" aria-label="github button" title="github button">
                            <span aria-hidden="true" class="fab fa-github"></span>
                        </button>
                    </div>
                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <span class="font-weight-normal">
                            Not registered?
                            <a href="{{ route('admin.register') }}" class="font-weight-bold">Create account</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection