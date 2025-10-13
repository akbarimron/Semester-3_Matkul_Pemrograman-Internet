@extends('layouts.app')

@section('title', 'Membership Plans - UPI Gym')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="container text-center text-white">
        <h1 class="display-4 fw-bold mb-4">Membership Plans</h1>
        <p class="lead">Choose the perfect plan to start your fitness journey</p>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <!-- Basic Plan -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-lg border-0 h-100">
                    <div class="card-header bg-light text-center py-4">
                        <h4 class="fw-bold">Basic</h4>
                        <div class="display-4 fw-bold text-primary">Rp 150k</div>
                        <small class="text-muted">per month</small>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Gym access (6 AM - 10 PM)</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Basic equipment access</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Locker room access</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Free WiFi</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>No personal trainer</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>No group classes</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent p-4">
                        <button class="btn btn-outline-primary btn-lg w-100">Choose Basic</button>
                    </div>
                </div>
            </div>

            <!-- Premium Plan -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-lg border-0 h-100 border-primary" style="transform: scale(1.05);">
                    <div class="card-header bg-primary text-white text-center py-4">
                        <div class="badge bg-warning text-dark mb-2">Most Popular</div>
                        <h4 class="fw-bold">Premium</h4>
                        <div class="display-4 fw-bold">Rp 250k</div>
                        <small>per month</small>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>24/7 gym access</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All equipment access</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Locker room access</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Free WiFi</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All group classes</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>2 personal training sessions</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Nutrition consultation</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent p-4">
                        <button class="btn btn-primary btn-lg w-100">Choose Premium</button>
                    </div>
                </div>
            </div>

            <!-- VIP Plan -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-lg border-0 h-100">
                    <div class="card-header bg-dark text-white text-center py-4">
                        <h4 class="fw-bold">VIP</h4>
                        <div class="display-4 fw-bold">Rp 400k</div>
                        <small>per month</small>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>24/7 gym access</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All equipment access</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>VIP locker room</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Free WiFi</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All group classes</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Unlimited personal training</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Nutrition consultation</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Free protein shake</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Priority booking</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent p-4">
                        <button class="btn btn-dark btn-lg w-100">Choose VIP</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Membership Benefits</h2>
            <p class="lead text-muted">What you get with every membership plan</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="text-center p-4">
                    <i class="fas fa-shield-alt text-primary mb-3" style="font-size: 3rem;"></i>
                    <h5>Safety First</h5>
                    <p class="text-muted">24/7 security and safety protocols</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="text-center p-4">
                    <i class="fas fa-heart text-primary mb-3" style="font-size: 3rem;"></i>
                    <h5>Health Monitoring</h5>
                    <p class="text-muted">Regular health checkups and progress tracking</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="text-center p-4">
                    <i class="fas fa-mobile-alt text-primary mb-3" style="font-size: 3rem;"></i>
                    <h5>Mobile App</h5>
                    <p class="text-muted">Track workouts and book classes via app</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="text-center p-4">
                    <i class="fas fa-parking text-primary mb-3" style="font-size: 3rem;"></i>
                    <h5>Free Parking</h5>
                    <p class="text-muted">Complimentary parking for all members</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection