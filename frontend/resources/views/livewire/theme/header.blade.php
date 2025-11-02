<header class="main-navbar">
    <div class="container">
        <!-- Header Navigation -->
        <nav class="d-flex justify-content-between align-items-center py-3">
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center gap-5">

                    <div class="logo">
                        <a href="{{ route('home')}}" wire:navigate>
                            <img src="assets/images/logo.png" alt="JobHunty Logo">
                        </a>
                    </div>
                    <div>
                        <a href="{{ route('job.index') }}" wire:navigate class="text-dark me-4 fw-semibold text-decoration-none">Find Jobs</a>
                        <a href="{{ route('company.index') }}" wire:navigate class="text-dark me-4 fw-semibold text-decoration-none">Browse Companies</a>

                    </div>
                </div>
            </div>
            <div>
                <a href="{{ route('login')}}" wire:navigate class="text-decoration-none text-primary me-3 login">Login</a>
                <a href="{{ route('register')}}" wire:navigate class="btn btn-primary px-4">Sign Up</a>
            </div>
        </nav>
    </div>
</header>