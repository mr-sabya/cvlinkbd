@extends('layouts.auth')

@section('content')


<div class="signup-right">
    <form class="signup-form" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="d-flex justify-content-center mb-4">
            <a href="#" class="me-2 fw-bold text-primary">Job Seeker</a>
            <a href="#" class="fw-bold text-dark">Company</a>
        </div>
        <h3>Get more opportunities</h3>

        <a href="#" class="google-btn mb-3">
            <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google">
            Sign Up with Google
        </a>

        <div class="divider">Or Login with email</div>


        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email address" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
        </div>

        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="remember" checked>
                <label class="form-check-label" for="remember">
                    Remember Me
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary w-100">Continue</button>

        <div class="login-text">
            Already have an account? <a href="{{ route('register') }}" wire:navigate>Register</a>
        </div>

        <p class="text-muted mt-3 small text-center">
            By clicking 'Continue', you acknowledge that you have read and accept the
            <a href="#" class="text-decoration-none">Terms of Service</a> and
            <a href="#" class="text-decoration-none">Privacy Policy</a>.
        </p>
    </form>
</div>

@endsection