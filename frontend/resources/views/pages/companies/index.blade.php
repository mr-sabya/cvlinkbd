@extends('layouts.app')

@section('content')

<div class="banner">
    <div class="container">
        <div class="hero-text">
            <div class="header-text">
                <h1>Find your
                    <span class="highlight">
                        Dream Companies
                        <img src="assets/images/under-line-2.svg" alt="" class="underline bottom-30">
                    </span>
                </h1>
            </div>
            <p class="mt-5">Great platform for the job seeker that searching for new career heights and passionate about
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


<section class="comapny-section bg-white">
    <div class="container">

        <!-- Section Header -->
        <div class="mb-4 text-center text-md-start">
            <h4 class="fw-bold mb-1">Recommended Companies</h4>
            <p class="text-muted mb-0">Based on your profile, company preferences, and recent activity</p>
        </div>

        <!-- Company Cards -->
        <div class="row g-4">
            @php
            $companies = [
            [
            'logo' => 'assets/images/companies/r-logo.png',
            'name' => 'Nomad',
            'desc' => 'Nomad is located in Paris, France. Nomad has generates $728,000 in sales (USD).',
            'tags' => ['Business Service']
            ],
            [
            'logo' => 'https://cdn.worldvectorlogo.com/logos/discord-6.svg',
            'name' => 'Discord',
            'desc' => 'We’d love to work with someone like you. We care about creating a delightful experience.',
            'tags' => ['Business Service']
            ],
            [
            'logo' => 'https://cdn.worldvectorlogo.com/logos/maze.svg',
            'name' => 'Maze',
            'desc' => 'We’re a passionate bunch working from all over the world to build the future of rapid testing together.',
            'tags' => ['Business Service']
            ],
            [
            'logo' => 'https://cdn.worldvectorlogo.com/logos/udacity-1.svg',
            'name' => 'Udacity',
            'desc' => 'Udacity is a new type of online university that teaches the actual programming skills.',
            'tags' => ['Business Service']
            ],
            [
            'logo' => 'https://cdn.worldvectorlogo.com/logos/webflow.svg',
            'name' => 'Webflow',
            'desc' => 'Webflow is the first design and hosting platform built from the ground up for the mobile age.',
            'tags' => ['Business Service', 'Technology']
            ],
            [
            'logo' => 'https://cdn.worldvectorlogo.com/logos/foundation.svg',
            'name' => 'Foundation',
            'desc' => 'Foundation helps creators mint and auction their digital artworks as NFTs on the Ethereum blockchain.',
            'tags' => ['Business Service', 'Crypto']
            ],
            ];
            @endphp

            @foreach ($companies as $company)
            <div class="col-md-6 col-lg-4">
                <div class="card company-card h-100 position-relative">
                    <span class="badge job-count position-absolute">3 Jobs</span>
                    <div class="card-body text-center text-md-start">
                        <div class=" mb-3">
                            <img src="{{ $company['logo'] }}" alt="{{ $company['name'] }}" class="company-logo me-3">
                            <h6 class="fw-bold mb-0 mt-3">{{ $company['name'] }}</h6>
                        </div>
                        <p class="text-muted small mb-3">{{ $company['desc'] }}</p>
                        @foreach ($company['tags'] as $tag)
                        <span class="badge category-badge">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="comapny-category">
    <div class="container">

        <!-- Section Header -->
        <div class="mb-4">
            <h4 class="fw-bold mb-1">Companies by Category</h4>
        </div>

        <!-- Category Buttons -->
        <div class="row">
            @php
            $categories = [
            ['name' => 'Design', 'icon' => 'bi-brush', 'active' => true],
            ['name' => 'Fintech', 'icon' => 'bi-credit-card', 'active' => false],
            ['name' => 'Hosting', 'icon' => 'bi-hdd', 'active' => false],
            ['name' => 'Business Service', 'icon' => 'bi-briefcase', 'active' => false],
            ['name' => 'Development', 'icon' => 'bi-code-slash', 'active' => false],
            ];
            @endphp

            @foreach($categories as $cat)
            <div class="col-lg-3">
                <div class="category-box">
                    <div class="icon"><i class="bi {{ $cat['icon'] }} me-2"></i></div>
                    <p>
                        <a href="#">
                            {{ $cat['name'] }}
                        </a>
                    </p>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Result Count -->
        <div class="d-flex align-items-center mb-4 mt-5">
            <div class="me-2 rounded-circle bg-light d-flex align-items-center justify-content-center" style="width:32px;height:32px;">
                <i class="bi bi-brush text-primary"></i>
            </div>
            <span class="fw-bold">24 Results</span>
        </div>

        <!-- Company Grid -->
        <div class="row g-4">
            @php
            $companies = [
            ['logo' => 'assets/images/companies/pentagram.png', 'name' => 'Pentagram'],
            ['logo' => 'assets/images/companies/pentagram.png', 'name' => 'Wolff Olins'],
            ['logo' => 'assets/images/companies/pentagram.png', 'name' => 'Clay'],
            ['logo' => 'assets/images/companies/pentagram.png', 'name' => 'MediaMonks'],
            ['logo' => 'assets/images/companies/pentagram.png', 'name' => 'Packer'],
            ['logo' => 'assets/images/companies/pentagram.png', 'name' => 'Square'],
            ['logo' => 'assets/images/companies/pentagram.png', 'name' => 'Divy'],
            ['logo' => 'assets/images/companies/pentagram.png', 'name' => 'WebFlow'],
            ];
            @endphp

            @foreach ($companies as $company)
            <div class="col-md-3 col-sm-6">
                <div class="card company-card h-100 text-center">
                    <div class="card-body">
                        <img src="{{ $company['logo'] }}" alt="{{ $company['name'] }}" class="company-logo mb-3">
                        <h6 class="fw-semibold mb-3">{{ $company['name'] }}</h6>
                        <span class="badge job-badge">3 Jobs</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- View More -->
        <div class="mt-4">
            <a href="#" class="text-primary fw-semibold">View more Design companies <i class="bi bi-arrow-right ms-1"></i></a>
        </div>

    </div>
</section>

@endsection