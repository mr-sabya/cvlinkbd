@extends('layouts.auth')

@section('content')
<style>
    body {
        background: #f9f9fc;
        font-family: 'Inter', sans-serif;
    }

    .signup-wrapper {
        display: flex;
        min-height: 100vh;
    }

    .signup-left {
        flex: 1;
        background: #f5f6ff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 40px;
        position: relative;
        text-align: center;
    }

    .signup-left img {
        max-width: 300px;
        border-radius: 8px;
    }

    .testimonial-box {
        background: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        border-radius: 8px;
        padding: 20px;
        margin-top: 30px;
        max-width: 320px;
    }

    .testimonial-box p {
        font-size: 15px;
        color: #333;
        margin-bottom: 10px;
    }

    .testimonial-user {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .testimonial-user img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }

    .signup-right {
        flex: 1;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .signup-form {
        width: 100%;
        max-width: 400px;
    }

    .signup-form h3 {
        font-weight: 700;
        margin-bottom: 25px;
    }

    .google-btn {
        border: 1px solid #dcdcdc;
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 10px;
        font-weight: 500;
        color: #333;
        text-decoration: none;
    }

    .google-btn img {
        width: 20px;
    }

    .divider {
        text-align: center;
        margin: 20px 0;
        position: relative;
    }

    .divider::before,
    .divider::after {
        content: '';
        position: absolute;
        height: 1px;
        width: 40%;
        background: #ddd;
        top: 50%;
    }

    .divider::before {
        left: 0;
    }

    .divider::after {
        right: 0;
    }

    .form-control {
        border-radius: 8px;
        padding: 12px;
    }

    .btn-primary {
        background-color: #4f46e5;
        border: none;
        border-radius: 8px;
        padding: 12px;
        font-weight: 600;
    }

    .btn-primary:hover {
        background-color: #4338ca;
    }

    .login-text {
        text-align: center;
        margin-top: 15px;
    }

    .login-text a {
        color: #4f46e5;
        text-decoration: none;
        font-weight: 600;
    }

    .login-text a:hover {
        text-decoration: underline;
    }
</style>

<div class="signup-wrapper">
    <div class="signup-left">
        <img src="https://via.placeholder.com/300x350.png?text=Professional+Photo" alt="User">
        <div class="testimonial-box">
            <p>“Great platform for job seekers searching for new career heights.”</p>
            <div class="testimonial-user">
                <img src="https://via.placeholder.com/40x40.png" alt="User">
                <div>
                    <strong>Adam Sandler</strong><br>
                    <small>Lead Engineer at Canva</small>
                </div>
            </div>
        </div>
    </div>

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

            <div class="divider">Or sign up with email</div>

            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email address" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Continue</button>

            <div class="login-text">
                Already have an account? <a href="{{ route('login') }}">Login</a>
            </div>

            <p class="text-muted mt-3 small text-center">
                By clicking 'Continue', you acknowledge that you have read and accept the
                <a href="#" class="text-decoration-none">Terms of Service</a> and
                <a href="#" class="text-decoration-none">Privacy Policy</a>.
            </p>
        </form>
    </div>
</div>
@endsection