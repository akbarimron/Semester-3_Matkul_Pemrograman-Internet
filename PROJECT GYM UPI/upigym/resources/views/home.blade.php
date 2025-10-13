@extends('layouts.app')

@section('title', 'Home - UPI Gym')

@section('content')
<!-- Hero Section -->
<section class="hero-section bg-primary text-white py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 70vh; display: flex; align-items: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">Transform Your Body at UPI GYM</h1>
                <p class="lead mb-4">Join the premier fitness center with state-of-the-art equipment, professional trainers, and a community dedicated to your success.</p>
                <div class="d-flex gap-3">
                    <a href="{{ route('membership') }}" class="btn btn-light btn-lg px-4">
                        <i class="fas fa-star me-2"></i>Join Now
                    </a>
                    <a href="{{ route('classes') }}" class="btn btn-outline-light btn-lg px-4">
                        <i class="fas fa-play me-2"></i>View Classes
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <i class="fas fa-dumbbell" style="font-size: 15rem; opacity: 0.3;"></i>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="display-5 fw-bold">Why Choose UPI GYM?</h2>
                <p class="lead text-muted">Experience the difference with our premium facilities and services</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-dumbbell text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <h5 class="card-title">Modern Equipment</h5>
                        <p class="card-text">State-of-the-art fitness equipment from leading brands to help you achieve your goals.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-user-tie text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <h5 class="card-title">Expert Trainers</h5>
                        <p class="card-text">Certified personal trainers to guide you through your fitness journey safely and effectively.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-users text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <h5 class="card-title">Group Classes</h5>
                        <p class="card-text">Variety of fitness classes including yoga, aerobics, and strength training for all levels.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 mb-4">
                <div class="p-4">
                    <h3 class="display-4 fw-bold text-primary mb-2">500+</h3>
                    <p class="text-muted mb-0">Happy Members</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="p-4">
                    <h3 class="display-4 fw-bold text-primary mb-2">15+</h3>
                    <p class="text-muted mb-0">Expert Trainers</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="p-4">
                    <h3 class="display-4 fw-bold text-primary mb-2">20+</h3>
                    <p class="text-muted mb-0">Fitness Classes</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="p-4">
                    <h3 class="display-4 fw-bold text-primary mb-2">5</h3>
                    <p class="text-muted mb-0">Years Experience</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-dark text-white">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-bold mb-4">Ready to Start Your Fitness Journey?</h2>
                <p class="lead mb-4">Join hundreds of members who have transformed their lives at UPI GYM. Get started today!</p>
                <a href="{{ route('membership') }}" class="btn btn-primary btn-lg px-5">
                    <i class="fas fa-rocket me-2"></i>Get Started Now
                </a>
            </div>
        </div>
    </div>
</section>
@endsection