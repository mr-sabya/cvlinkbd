@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-text">
            <div class="header-text">
                <h1>Discover<br>more than <span class="highlight">5000+ Jobs</span></h1>
                <img src="assets/images/under-line.svg" alt="" class="underline">
            </div>
            <p>Great platform for the job seeker that searching for new career heights and passionate about
                startups.
            </p>
        </div>

        <div class="search-box d-flex flex-wrap justify-content-center align-items-center gap-2">
            <div class="d-flex align-items-center flex-grow-1 px-2">
                <i class="bi bi-search me-2 text-muted"></i>
                <input type="text" class="form-control border-0" placeholder="Job title or keyword">
            </div>
            <div class="d-flex align-items-center px-2">
                <i class="bi bi-geo-alt me-2 text-muted"></i>
                <select class="form-select border-0">
                    <option>Florence, Italy</option>
                    <option>Rome, Italy</option>
                    <option>Paris, France</option>
                </select>
            </div>
            <button class="btn search-btn">Search my job</button>
        </div>

        <p class="popular">Popular :
            <span>UI Designer, UX Researcher, Android, Admin</span>
        </p>
    </div>

    <div class="shape">
        <img src="assets/images/rectangle-2732.svg" alt="Decorative Shape">
    </div>
</section>

<!-- Companies Section -->
<section class="companies-section bg-white">
    <div class="container">
        <p class="text-muted mb-4">Companies we helped grow</p>
        <div class="d-flex flex-wrap justify-content-between align-items-center">
            <img src="assets/images/partners/vodafone-2017-logo.png" alt="Vodafone" class="company-logo">
            <img src="assets/images/partners/intel-3.png" alt="Intel" class="company-logo">
            <img src="assets/images/partners/tesla-9-1.png" alt="Tesla" class="company-logo">
            <img src="assets/images/partners/amd-logo-1.png" alt="AMD" class="company-logo">
            <img src="assets/images/partners/talkit-1.png" alt="Talkit" class="company-logo">
        </div>
    </div>
</section>

<!-- Explore by Category Section -->
<section class="category-section bg-white">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="section-title">Explore by <span class="text-secondary">category</span></h2>
            <a href="#" class="text-decoration-none">Show all jobs <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="row g-4">
            <!-- Category Cards will be inserted here -->
            <div class="col-md-3">
                <div class="card category-card h-100">
                    <div class="card-body">
                        <i class="bi bi-vector-pen fs-2 text-primary"></i>
                        <h5 class="card-title mt-3">Design</h5>
                        <p class="card-text text-muted">235 jobs available <i class="bi bi-arrow-right"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card category-card h-100">
                    <div class="card-body">
                        <i class="bi bi-graph-up fs-2 text-primary"></i>
                        <h5 class="card-title mt-3">Sales</h5>
                        <p class="card-text text-muted">756 jobs available <i class="bi bi-arrow-right"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card category-card h-100">
                    <div class="card-body">
                        <i class="bi bi-megaphone fs-2"></i>
                        <h5 class="card-title mt-3">Marketing</h5>
                        <p class="card-text">140 jobs available <i class="bi bi-arrow-right"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card category-card h-100">
                    <div class="card-body">
                        <i class="bi bi-cash-stack fs-2 text-primary"></i>
                        <h5 class="card-title mt-3">Finance</h5>
                        <p class="card-text text-muted">325 jobs available <i class="bi bi-arrow-right"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card category-card h-100">
                    <div class="card-body">
                        <i class="bi bi-pc-display fs-2 text-primary"></i>
                        <h5 class="card-title mt-3">Technology</h5>
                        <p class="card-text text-muted">436 jobs available <i class="bi bi-arrow-right"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card category-card h-100">
                    <div class="card-body">
                        <i class="bi bi-code-slash fs-2 text-primary"></i>
                        <h5 class="card-title mt-3">Engineering</h5>
                        <p class="card-text text-muted">542 jobs available <i class="bi bi-arrow-right"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card category-card h-100">
                    <div class="card-body">
                        <i class="bi bi-briefcase fs-2 text-primary"></i>
                        <h5 class="card-title mt-3">Business</h5>
                        <p class="card-text text-muted">211 jobs available <i class="bi bi-arrow-right"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card category-card h-100">
                    <div class="card-body">
                        <i class="bi bi-people fs-2 text-primary"></i>
                        <h5 class="card-title mt-3">Human Resource</h5>
                        <p class="card-text text-muted">346 jobs available <i class="bi bi-arrow-right"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta-section text-white bg-white">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="pb-5">
            <h2 class="display-4 fw-bold">Start posting<br>jobs today</h2>
            <p>Start posting jobs for only $10.</p>
            <a href="#" class="btn btn-light">Sign Up For Free</a>
        </div>
        <div>
            <img src="assets/images/dashboard-company.png" alt="Dashboard Preview" class="img-fluid">
        </div>
    </div>
</section>

<!-- Featured Jobs Section -->
<section class="featured-jobs-section bg-white">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="section-title">Featured <span class="text-secondary">jobs</span></h2>
            <a href="#" class="text-decoration-none">Show all jobs <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="row g-4">
            <!-- Job Cards will be inserted here -->
            <div class="col-md-3">
                <div class="card job-card">
                    <div class="card-body">
                        <div class="company-info">

                            <img src="assets/images/companies/r-logo.png" alt="Company Logo" class="job-logo">
                            <div class="mb-2">
                                <h5 class="company-title mb-1">Email Marketing</h5>
                                <p class="text-muted mb-1">Revolut • Madrid, Spain</p>
                            </div>
                            <span class="tag">Full Time</span>
                        </div>
                        <p class="card-text mt-3">Revolut is looking for Email Marketing to help team ma...</p>
                        <div>
                            <span class="tag-badge tag-yellow">Marketing</span>
                            <span class="tag-badge tag-green">Design</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card job-card">
                    <div class="card-body">
                        <div class="company-info">

                            <img src="assets/images/companies/dropbox.png" alt="Company Logo" class="job-logo">
                            <div class="mb-2">
                                <h5 class="company-title mb-1">Email Marketing</h5>
                                <p class="text-muted mb-1">Revolut • Madrid, Spain</p>
                            </div>
                            <span class="tag">Full Time</span>
                        </div>
                        <p class="card-text mt-3">Revolut is looking for Email Marketing to help team ma...</p>
                        <div>
                            <span class="tag-badge tag-red">Marketing</span>
                            <span class="tag-badge tag-blue">Design</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card job-card">
                    <div class="card-body">
                        <div class="company-info">

                            <img src="assets/images/companies/r-logo.png" alt="Company Logo" class="job-logo">
                            <div class="mb-2">
                                <h5 class="company-title mb-1">Email Marketing</h5>
                                <p class="text-muted mb-1">Revolut • Madrid, Spain</p>
                            </div>
                            <span class="tag">Full Time</span>
                        </div>
                        <p class="card-text mt-3">Revolut is looking for Email Marketing to help team ma...</p>
                        <div>
                            <span class="tag-badge tag-yellow">Marketing</span>
                            <span class="tag-badge tag-green">Design</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card job-card">
                    <div class="card-body">
                        <div class="company-info">

                            <img src="assets/images/companies/r-logo.png" alt="Company Logo" class="job-logo">
                            <div class="mb-2">
                                <h5 class="company-title mb-1">Email Marketing</h5>
                                <p class="text-muted mb-1">Revolut • Madrid, Spain</p>
                            </div>
                            <span class="tag">Full Time</span>
                        </div>
                        <p class="card-text mt-3">Revolut is looking for Email Marketing to help team ma...</p>
                        <div>
                            <span class="tag-badge tag-yellow">Marketing</span>
                            <span class="tag-badge tag-green">Design</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card job-card">
                    <div class="card-body">
                        <div class="company-info">

                            <img src="assets/images/companies/r-logo.png" alt="Company Logo" class="job-logo">
                            <div class="mb-2">
                                <h5 class="company-title mb-1">Email Marketing</h5>
                                <p class="text-muted mb-1">Revolut • Madrid, Spain</p>
                            </div>
                            <span class="tag">Full Time</span>
                        </div>
                        <p class="card-text mt-3">Revolut is looking for Email Marketing to help team ma...</p>
                        <div>
                            <span class="tag-badge tag-yellow">Marketing</span>
                            <span class="tag-badge tag-green">Design</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card job-card">
                    <div class="card-body">
                        <div class="company-info">

                            <img src="assets/images/companies/r-logo.png" alt="Company Logo" class="job-logo">
                            <div class="mb-2">
                                <h5 class="company-title mb-1">Email Marketing</h5>
                                <p class="text-muted mb-1">Revolut • Madrid, Spain</p>
                            </div>
                            <span class="tag">Full Time</span>
                        </div>
                        <p class="card-text mt-3">Revolut is looking for Email Marketing to help team ma...</p>
                        <div>
                            <span class="tag-badge tag-yellow">Marketing</span>
                            <span class="tag-badge tag-green">Design</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card job-card">
                    <div class="card-body">
                        <div class="company-info">

                            <img src="assets/images/companies/r-logo.png" alt="Company Logo" class="job-logo">
                            <div class="mb-2">
                                <h5 class="company-title mb-1">Email Marketing</h5>
                                <p class="text-muted mb-1">Revolut • Madrid, Spain</p>
                            </div>
                            <span class="tag">Full Time</span>
                        </div>
                        <p class="card-text mt-3">Revolut is looking for Email Marketing to help team ma...</p>
                        <div>
                            <span class="tag-badge tag-yellow">Marketing</span>
                            <span class="tag-badge tag-green">Design</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- latest Jobs Section -->
<section class="latest-jobs-section">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="section-title">Latest <span class="text-secondary">jobs open</span></h2>
            <a href="#" class="text-decoration-none">Show all jobs <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="row g-4">
            <!-- Job Cards will be inserted here -->
            <div class="col-md-6">
                <div class="card latest-job-card">
                    <div class="card-body">
                        <div class="d-flex gap-4">
                            <div class="brand-logo">
                                <img src="assets/images/companies/nomad.png" alt="Company Logo" class="job-logo">

                            </div>
                            <div class="text">
                                <h5 class="company-title mb-1">Social Media Assistant</h5>
                                <p class="text-muted mb-1">Revolut • Madrid, Spain</p>

                                <div class="mt-3">
                                    <span class="tag-badge tag-green right-bar">Full Time</span>
                                    <span class="tag-badge tag-yellow">Design</span>
                                    <span class="tag-badge tag-red">Design</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card latest-job-card">
                    <div class="card-body">
                        <div class="d-flex gap-4">
                            <div class="brand-logo">
                                <img src="assets/images/companies/netlify-logo.png" alt="Company Logo" class="job-logo">

                            </div>
                            <div class="text">
                                <h5 class="company-title mb-1">Social Media Assistant</h5>
                                <p class="text-muted mb-1">Revolut • Madrid, Spain</p>

                                <div class="mt-3">
                                    <span class="tag-badge tag-green right-bar">Full Time</span>
                                    <span class="tag-badge tag-blue">Design</span>
                                    <span class="tag-badge tag-yellow">Marketing</span>
                                    <span class="tag-badge tag-red">Developer</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card latest-job-card">
                    <div class="card-body">
                        <div class="d-flex gap-4">
                            <div class="brand-logo">
                                <img src="assets/images/companies/nomad.png" alt="Company Logo" class="job-logo">

                            </div>
                            <div class="text">
                                <h5 class="company-title mb-1">Social Media Assistant</h5>
                                <p class="text-muted mb-1">Revolut • Madrid, Spain</p>

                                <div class="mt-3">
                                    <span class="tag-badge tag-green right-bar">Full Time</span>
                                    <span class="tag-badge tag-yellow">Design</span>
                                    <span class="tag-badge tag-red">Design</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card latest-job-card">
                    <div class="card-body">
                        <div class="d-flex gap-4">
                            <div class="brand-logo">
                                <img src="assets/images/companies/netlify-logo.png" alt="Company Logo" class="job-logo">

                            </div>
                            <div class="text">
                                <h5 class="company-title mb-1">Social Media Assistant</h5>
                                <p class="text-muted mb-1">Revolut • Madrid, Spain</p>

                                <div class="mt-3">
                                    <span class="tag-badge tag-green right-bar">Full Time</span>
                                    <span class="tag-badge tag-blue">Design</span>
                                    <span class="tag-badge tag-yellow">Marketing</span>
                                    <span class="tag-badge tag-red">Developer</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card latest-job-card">
                    <div class="card-body">
                        <div class="d-flex gap-4">
                            <div class="brand-logo">
                                <img src="assets/images/companies/nomad.png" alt="Company Logo" class="job-logo">

                            </div>
                            <div class="text">
                                <h5 class="company-title mb-1">Social Media Assistant</h5>
                                <p class="text-muted mb-1">Revolut • Madrid, Spain</p>

                                <div class="mt-3">
                                    <span class="tag-badge tag-green right-bar">Full Time</span>
                                    <span class="tag-badge tag-yellow">Design</span>
                                    <span class="tag-badge tag-red">Design</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card latest-job-card">
                    <div class="card-body">
                        <div class="d-flex gap-4">
                            <div class="brand-logo">
                                <img src="assets/images/companies/netlify-logo.png" alt="Company Logo" class="job-logo">

                            </div>
                            <div class="text">
                                <h5 class="company-title mb-1">Social Media Assistant</h5>
                                <p class="text-muted mb-1">Revolut • Madrid, Spain</p>

                                <div class="mt-3">
                                    <span class="tag-badge tag-green right-bar">Full Time</span>
                                    <span class="tag-badge tag-blue">Design</span>
                                    <span class="tag-badge tag-yellow">Marketing</span>
                                    <span class="tag-badge tag-red">Developer</span>
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