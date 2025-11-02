@extends('layouts.app')


@section('content')
<div class="dashboard-page">
    <!-- ============================================= -->
    <!-- ========= START: NEW BANNER SECTION ========= -->
    <!-- ============================================= -->
    <section class="dashboard-banner ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <h2 class="banner-title">Hello! <span>Sabya Roy</span></h2>
                    <p class="banner-text">Welcome back to your dashboard.</p>
                    <a href="#" class="btn btn-primary px-4">Find you dream Job</a>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================================= -->
    <!-- ========== END: NEW BANNER SECTION ========== -->
    <!-- ============================================= -->

    <section class="bg-white">

        <div class="container dashboard-container">
            <!-- ******************** Sidebar ******************** -->
            <aside class="sidebar">

                <nav class="sidebar-nav">
                    <ul>
                        <li class="nav-item active">
                            <a href="#"><i class="bi bi-house-door-fill"></i> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="#"><i class="bi bi-chat-left-dots-fill"></i> Messages <span class="badge">1</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#"><i class="bi bi-chat-left-dots-fill"></i> Notifications <span class="badge">1</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#"><i class="bi bi-file-earmark-text-fill"></i> My Applications</a>
                        </li>
                        <li class="nav-item">
                            <a href="#"><i class="bi bi-search"></i> Find Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a href="#"><i class="bi bi-building-fill"></i> Browse Companies</a>
                        </li>
                        <li class="nav-item">
                            <a href="#"><i class="bi bi-person-fill"></i> My Public Profile</a>
                        </li>
                    </ul>

                    <hr>
                    <div class="settings-nav">
                        <p class="settings-title">SETTINGS</p>
                        <ul>
                            <li class="nav-item">
                                <a href="#"><i class="bi bi-gear-fill"></i> Settings</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"><i class="bi bi-question-circle-fill"></i> Help Center</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="sidebar-footer">

                    <div class="user-profile">
                        <img src="https://i.imgur.com/w82b2Vv.png" alt="User Avatar" class="user-avatar">
                        <div class="user-info">
                            <span class="user-name">Jake Gyll</span>
                            <span class="user-email">jakegyll@email.com</span>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- ******************** Main Content ******************** -->
            <main class="main-content pt-0">
                <!-- Main Header -->


                <!-- Greeting Subheader -->
                <div class="subheader">
                    <div class="greeting">
                        <h2>Good morning, Jake</h2>
                        <p>Here is what's happening with your job search applications from July 19 - July 25.</p>
                    </div>
                    <div class="date-range">
                        <i class="bi bi-calendar3"></i>
                        <span>Jul 19 - Jul 25</span>
                    </div>
                </div>

                <!-- Stats and Interviews Row -->
                <div class="row gx-4 gy-4">
                    <!-- Stats Cards -->
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="stat-card">
                                    <p>Total Jobs Applied</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="stat-number">45</span>
                                        <i class="bi bi-file-earmark-text card-icon"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="stat-card">
                                    <p>Interviewed</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="stat-number">18</span>
                                        <i class="bi bi-chat-square-quote card-icon"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="stat-card chart-card">
                                    <h3 class="card-title">Jobs Applied Status</h3>
                                    <div class="chart-container">
                                        <div class="donut-chart">
                                            <span class="chart-center-text">60%<br><small>Unsuitable</small></span>
                                        </div>
                                        <div class="chart-legend">
                                            <div class="legend-item">
                                                <span class="legend-dot unsuitable"></span>
                                                <div>
                                                    <p class="legend-value">60%</p>
                                                    <p class="legend-label">Unsuitable</p>
                                                </div>
                                            </div>
                                            <div class="legend-item">
                                                <span class="legend-dot interviewed"></span>
                                                <div>
                                                    <p class="legend-value">40%</p>
                                                    <p class="legend-label">Interviewed</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="view-all-link">View All Applications <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Upcoming Interviews -->
                    <div class="col-lg-4">
                        <div class="interviews-card">
                            <div class="interviews-header">
                                <h3 class="card-title">Upcoming Interviews</h3>
                                <div class="nav-arrows">
                                    <i class="bi bi-chevron-left"></i>
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </div>
                            <p class="interview-date">Today, 26 November</p>
                            <ul class="timeline">
                                <li class="timeline-item">
                                    <span class="timeline-time">10:00 AM</span>
                                    <div class="timeline-content"></div>
                                </li>
                                <li class="timeline-item">
                                    <span class="timeline-time">10:30 AM</span>
                                    <div class="timeline-content active">
                                        <img src="https://i.imgur.com/w82b2Vv.png" alt="Joe Bartmann" class="interview-avatar">
                                        <div class="interview-details">
                                            <p class="interviewer-name">Joe Bartmann</p>
                                            <p class="interviewer-title">HR Manager at Divvy</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <span class="timeline-time">11:00 AM</span>
                                    <div class="timeline-content"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recent Applications History -->
                <div class="application-history-container mt-4">
                    <h2 class="section-title">Recent Applications History</h2>
                    <!-- Application Items will be dynamically inserted or statically placed here -->
                    <div class="application-item">
                        <img src="https://i.imgur.com/8lSOi33.png" alt="Nomad Logo" class="company-logo">
                        <div class="application-details">
                            <h3 class="job-title">Social Media Assistant</h3>
                            <p class="company-info">Nomad • Paris, France • Full-Time</p>
                        </div>
                        <div class="date-applied">
                            <p class="date-label">Date Applied</p>
                            <p class="date-value">24 July 2021</p>
                        </div>
                        <div class="application-status">
                            <span class="status-badge status-in-review">In Review</span>
                        </div>
                        <div class="more-options">
                            <i class="bi bi-three-dots"></i>
                        </div>
                    </div>
                    <div class="application-item">
                        <img src="https://i.imgur.com/M3eLE62.png" alt="Udacity Logo" class="company-logo">
                        <div class="application-details">
                            <h3 class="job-title">Social Media Assistant</h3>
                            <p class="company-info">Udacity • New York, USA • Full-Time</p>
                        </div>
                        <div class="date-applied">
                            <p class="date-label">Date Applied</p>
                            <p class="date-value">23 July 2021</p>
                        </div>
                        <div class="application-status">
                            <span class="status-badge status-shortlisted">Shortlisted</span>
                        </div>
                        <div class="more-options">
                            <i class="bi bi-three-dots"></i>
                        </div>
                    </div>
                    <div class="application-item">
                        <img src="https://i.imgur.com/w82b2Vv.png" alt="Packer Logo" class="company-logo">
                        <div class="application-details">
                            <h3 class="job-title">Social Media Assistant</h3>
                            <p class="company-info">Packer • Madrid, Spain • Full-Time</p>
                        </div>
                        <div class="date-applied">
                            <p class="date-label">Date Applied</p>
                            <p class="date-value">22 July 2021</p>
                        </div>
                        <div class="application-status">
                            <span class="status-badge status-declined">Declined</span>
                        </div>
                        <div class="more-options">
                            <i class="bi bi-three-dots"></i>
                        </div>
                    </div>
                    <div class="view-all-history-link">
                        <a href="#" class="view-all-link">View all applications history <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </main>
        </div>
    </section>
</div>
@endsection