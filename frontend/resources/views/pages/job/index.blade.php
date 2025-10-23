@extends('layouts.app')

@section('content')

<div class="banner">
    <div class="container">
        <div class="hero-text">
            <div class="header-text">
                <h1>Find your
                    <span class="highlight">
                        Dream Job
                        <img src="assets/images/under-line-2.svg" alt="" class="underline">
                    </span>
                </h1>
                <div class="shape">

                </div>
            </div>
            <p>Great platform for the job seeker that searching for new career heights and passionate about
                startups.
            </p>
        </div>

        <div class="search-box ">
            <div class="search-input">
                <i class="bi bi-search me-2 text-muted"></i>
                <input type="text" class="form-control border-0" placeholder="Job title or keyword">
            </div>
            <div class="search-input">
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

</div>


<section class="job-section bg-white">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="filter-section">
                        <h5 class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#typeOfEmployment" role="button" aria-expanded="true">
                            Type of Employment <i class="bi bi-chevron-up"></i>
                        </h5>
                        <div class="collapse show" id="typeOfEmployment">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="full-time">
                                <label class="form-check-label" for="full-time">Full-time (3)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="part-time">
                                <label class="form-check-label" for="part-time">Part-Time (5)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="remote">
                                <label class="form-check-label" for="remote">Remote (2)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="internship">
                                <label class="form-check-label" for="internship">Internship (24)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="contract">
                                <label class="form-check-label" for="contract">Contract (3)</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-section">
                        <h5 class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#categories" role="button" aria-expanded="true">
                            Categories <i class="bi bi-chevron-up"></i>
                        </h5>
                        <div class="collapse show" id="categories">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="design">
                                <label class="form-check-label" for="design">Design (24)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="sales">
                                <label class="form-check-label" for="sales">Sales (3)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="marketing">
                                <label class="form-check-label" for="marketing">Marketing (3)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="business" checked>
                                <label class="form-check-label" for="business">Business (3)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="human-resource">
                                <label class="form-check-label" for="human-resource">Human Resource (6)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="finance">
                                <label class="form-check-label" for="finance">Finance (4)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="engineering">
                                <label class="form-check-label" for="engineering">Engineering (4)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="technology" checked>
                                <label class="form-check-label" for="technology">Technology (5)</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-section">
                        <h5 class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#jobLevel" role="button" aria-expanded="true">
                            Job Level <i class="bi bi-chevron-up"></i>
                        </h5>
                        <div class="collapse show" id="jobLevel">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="entry">
                                <label class="form-check-label" for="entry">Entry Level (57)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="mid">
                                <label class="form-check-label" for="mid">Mid Level (3)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="senior">
                                <label class="form-check-label" for="senior">Senior Level (5)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="director" checked>
                                <label class="form-check-label" for="director">Director (12)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="vp">
                                <label class="form-check-label" for="vp">VP or Above (8)</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-section">
                        <h5 class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#salaryRange" role="button" aria-expanded="true">
                            Salary Range <i class="bi bi-chevron-up"></i>
                        </h5>
                        <div class="collapse show" id="salaryRange">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="range1">
                                <label class="form-check-label" for="range1">$700 - $1000 (4)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="range2">
                                <label class="form-check-label" for="range2">$100 - $1500 (6)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="range3">
                                <label class="form-check-label" for="range3">$1500 - $2000 (10)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="range4" checked>
                                <label class="form-check-label" for="range4">$3000 or above (4)</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Job Listings -->
            <div class="col-lg-9">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h2 class="title">All Jobs</h2>
                        <p class="text-muted">Showing 73 results</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="sort-by d-flex align-items-center">
                            <label for="sort" class="text-muted me-2">Sort by:</label>
                            <select class="form-select" id="sort">
                                <option selected>Most relevant</option>
                                <option value="1">Newest</option>
                                <option value="2">Oldest</option>
                            </select>
                        </div>
                        <div class="view-options">
                            <button class="btn btn-light"><i class="bi bi-grid-fill"></i></button>
                            <button class="btn "><i class="bi bi-list"></i></button>
                        </div>
                    </div>
                </div>

                <div class="job-listings">
                    <!-- Job Card 1 -->
                    <div class="card job-card mb-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="company">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/companies/r-logo.png" alt="Company Logo" class="company-logo">
                                        <div class="ms-3">
                                            <h5 class="card-title">Social Media Assistant</h5>
                                            <p class="card-text text-muted">Nomad • Paris, France</p>
                                        </div>
                                    </div>
                                    <div class="tags mt-3">
                                        <span class="tag-badge tag-green right-bar">Full Time</span>
                                        <span class="tag-badge tag-yellow">Marketing</span>
                                        <span class="tag-badge tag-green">Design</span>
                                        <span class="tag-badge tag-blue">Developer</span>
                                    </div>
                                </div>
                                <div class="apply">
                                    <a href="#" class="btn  apply-btn">Apply</a>
                                    <div class="application-status mt-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="10"></div>
                                        </div>
                                        <small class="text-muted"><b>5 applied</b> of 10 capacity</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card job-card mb-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="company">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/companies/dropbox.png" alt="Company Logo" class="company-logo">
                                        <div class="ms-3">
                                            <h5 class="card-title">Social Media Assistant</h5>
                                            <p class="card-text text-muted">Nomad • Paris, France</p>
                                        </div>
                                    </div>
                                    <div class="tags mt-3">
                                        <span class="tag-badge tag-green right-bar">Full Time</span>
                                        <span class="tag-badge tag-yellow">Marketing</span>
                                        <span class="tag-badge tag-green">Design</span>
                                        <span class="tag-badge tag-blue">Developer</span>
                                    </div>
                                </div>
                                <div class="apply">
                                    <a href="#" class="btn  apply-btn">Apply</a>
                                    <div class="application-status mt-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="10"></div>
                                        </div>
                                        <small class="text-muted"><b>5 applied</b> of 10 capacity</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card job-card mb-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="company">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/companies/nomad.png" alt="Company Logo" class="company-logo">
                                        <div class="ms-3">
                                            <h5 class="card-title">Social Media Assistant</h5>
                                            <p class="card-text text-muted">Nomad • Paris, France</p>
                                        </div>
                                    </div>
                                    <div class="tags mt-3">
                                        <span class="tag-badge tag-green right-bar">Full Time</span>
                                        <span class="tag-badge tag-yellow">Marketing</span>
                                        <span class="tag-badge tag-green">Design</span>
                                        <span class="tag-badge tag-blue">Developer</span>
                                    </div>
                                </div>
                                <div class="apply">
                                    <a href="#" class="btn  apply-btn">Apply</a>
                                    <div class="application-status mt-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="10"></div>
                                        </div>
                                        <small class="text-muted"><b>5 applied</b> of 10 capacity</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card job-card mb-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="company">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/companies/netlify-logo.png" alt="Company Logo" class="company-logo">
                                        <div class="ms-3">
                                            <h5 class="card-title">Social Media Assistant</h5>
                                            <p class="card-text text-muted">Nomad • Paris, France</p>
                                        </div>
                                    </div>
                                    <div class="tags mt-3">
                                        <span class="tag-badge tag-green right-bar">Full Time</span>
                                        <span class="tag-badge tag-yellow">Marketing</span>
                                        <span class="tag-badge tag-green">Design</span>
                                        <span class="tag-badge tag-blue">Developer</span>
                                    </div>
                                </div>
                                <div class="apply">
                                    <a href="#" class="btn  apply-btn">Apply</a>
                                    <div class="application-status mt-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="10"></div>
                                        </div>
                                        <small class="text-muted"><b>5 applied</b> of 10 capacity</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card job-card mb-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="company">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/companies/dropbox.png" alt="Company Logo" class="company-logo">
                                        <div class="ms-3">
                                            <h5 class="card-title">Social Media Assistant</h5>
                                            <p class="card-text text-muted">Nomad • Paris, France</p>
                                        </div>
                                    </div>
                                    <div class="tags mt-3">
                                        <span class="tag-badge tag-green right-bar">Full Time</span>
                                        <span class="tag-badge tag-yellow">Marketing</span>
                                        <span class="tag-badge tag-green">Design</span>
                                        <span class="tag-badge tag-blue">Developer</span>
                                    </div>
                                </div>
                                <div class="apply">
                                    <a href="#" class="btn  apply-btn">Apply</a>
                                    <div class="application-status mt-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="10"></div>
                                        </div>
                                        <small class="text-muted"><b>5 applied</b> of 10 capacity</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card job-card mb-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="company">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/companies/netlify-logo.png" alt="Company Logo" class="company-logo">
                                        <div class="ms-3">
                                            <h5 class="card-title">Social Media Assistant</h5>
                                            <p class="card-text text-muted">Nomad • Paris, France</p>
                                        </div>
                                    </div>
                                    <div class="tags mt-3">
                                        <span class="tag-badge tag-green right-bar">Full Time</span>
                                        <span class="tag-badge tag-yellow">Marketing</span>
                                        <span class="tag-badge tag-green">Design</span>
                                        <span class="tag-badge tag-blue">Developer</span>
                                    </div>
                                </div>
                                <div class="apply">
                                    <a href="#" class="btn  apply-btn">Apply</a>
                                    <div class="application-status mt-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="10"></div>
                                        </div>
                                        <small class="text-muted"><b>5 applied</b> of 10 capacity</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card job-card mb-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="company">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/companies/nomad.png" alt="Company Logo" class="company-logo">
                                        <div class="ms-3">
                                            <h5 class="card-title">Social Media Assistant</h5>
                                            <p class="card-text text-muted">Nomad • Paris, France</p>
                                        </div>
                                    </div>
                                    <div class="tags mt-3">
                                        <span class="tag-badge tag-green right-bar">Full Time</span>
                                        <span class="tag-badge tag-yellow">Marketing</span>
                                        <span class="tag-badge tag-green">Design</span>
                                        <span class="tag-badge tag-blue">Developer</span>
                                    </div>
                                </div>
                                <div class="apply">
                                    <a href="#" class="btn  apply-btn">Apply</a>
                                    <div class="application-status mt-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="10"></div>
                                        </div>
                                        <small class="text-muted"><b>5 applied</b> of 10 capacity</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Other Job Cards... -->
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="bi bi-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">33</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

@endsection