@extends('layouts.app')

@section('title', 'Our Trainers - UPI Gym')

@section('content')
<div class="hero-section text-white d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">Professional Trainers</h1>
                <p class="lead mb-4">Meet our certified fitness professionals ready to guide your journey</p>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <!-- Trainers Grid -->
    <div class="row g-4">
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 feature-card border-0 shadow">
                <div class="card-body text-center p-4">
                    <div class="bg-primary rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i class="fas fa-dumbbell text-white fa-2x"></i>
                    </div>
                    <h5 class="card-title">Ahmad Fitri</h5>
                    <p class="text-muted mb-2">Strength Training Specialist</p>
                    <p class="card-text small">8 years of experience in bodybuilding and strength training. Certified personal trainer passionate about helping clients achieve their fitness goals.</p>
                    <div class="mb-3">
                        <span class="badge bg-primary me-1">Strength Training</span>
                        <span class="badge bg-primary me-1">Bodybuilding</span>
                        <span class="badge bg-primary">Weight Loss</span>
                    </div>
                    <button class="btn btn-outline-primary">Book Session</button>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card h-100 feature-card border-0 shadow">
                <div class="card-body text-center p-4">
                    <div class="bg-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i class="fas fa-leaf text-white fa-2x"></i>
                    </div>
                    <h5 class="card-title">Sari Indah</h5>
                    <p class="text-muted mb-2">Yoga & Pilates Instructor</p>
                    <p class="card-text small">Internationally certified yoga instructor specializing in various yoga styles from Hatha to Vinyasa Flow. Focus on mind-body connection.</p>
                    <div class="mb-3">
                        <span class="badge bg-success me-1">Yoga</span>
                        <span class="badge bg-success me-1">Pilates</span>
                        <span class="badge bg-success">Flexibility</span>
                    </div>
                    <button class="btn btn-outline-success">Book Session</button>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card h-100 feature-card border-0 shadow">
                <div class="card-body text-center p-4">
                    <div class="bg-warning rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i class="fas fa-running text-white fa-2x"></i>
                    </div>
                    <h5 class="card-title">Budi Santoso</h5>
                    <p class="text-muted mb-2">Functional Training Expert</p>
                    <p class="card-text small">Former athlete specializing in functional training and rehabilitation. Expert in sports performance and injury recovery programs.</p>
                    <div class="mb-3">
                        <span class="badge bg-warning me-1">Functional Training</span>
                        <span class="badge bg-warning me-1">Rehabilitation</span>
                        <span class="badge bg-warning">Sports Performance</span>
                    </div>
                    <button class="btn btn-outline-warning">Book Session</button>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card h-100 feature-card border-0 shadow">
                <div class="card-body text-center p-4">
                    <div class="bg-danger rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i class="fas fa-heart text-white fa-2x"></i>
                    </div>
                    <h5 class="card-title">Maya Puspita</h5>
                    <p class="text-muted mb-2">Cardio & Dance Specialist</p>
                    <p class="card-text small">Energetic cardio specialist and Zumba instructor. Passionate about helping clients achieve optimal cardiovascular fitness through fun workouts.</p>
                    <div class="mb-3">
                        <span class="badge bg-danger me-1">Cardio Training</span>
                        <span class="badge bg-danger me-1">Zumba</span>
                        <span class="badge bg-danger">HIIT</span>
                    </div>
                    <button class="btn btn-outline-danger">Book Session</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Training Programs -->
    <div class="row mt-5">
        <div class="col-12">
            <h2 class="text-center mb-4">Training Programs</h2>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-user text-primary fa-3x"></i>
                    </div>
                    <h5 class="card-title text-center">Personal Training</h5>
                    <p class="text-muted text-center">One-on-one sessions tailored to your specific goals and fitness level.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-success me-2"></i>Customized workout plans</li>
                        <li><i class="fas fa-check text-success me-2"></i>Nutrition guidance</li>
                        <li><i class="fas fa-check text-success me-2"></i>Progress tracking</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-users text-success fa-3x"></i>
                    </div>
                    <h5 class="card-title text-center">Group Classes</h5>
                    <p class="text-muted text-center">Fun and energetic group sessions with professional instruction.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-success me-2"></i>Motivating group environment</li>
                        <li><i class="fas fa-check text-success me-2"></i>Variety of class types</li>
                        <li><i class="fas fa-check text-success me-2"></i>All fitness levels welcome</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-calendar-alt text-warning fa-3x"></i>
                    </div>
                    <h5 class="card-title text-center">Flexible Scheduling</h5>
                    <p class="text-muted text-center">Book sessions that fit your busy lifestyle and schedule.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-success me-2"></i>Online booking system</li>
                        <li><i class="fas fa-check text-success me-2"></i>Early morning & evening slots</li>
                        <li><i class="fas fa-check text-success me-2"></i>Weekend availability</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection