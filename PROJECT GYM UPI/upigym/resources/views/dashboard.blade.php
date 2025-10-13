@extends('layouts.app')

@section('title', 'Dashboard - UPI Gym')

@section('content')
<div class="container mt-4">
    <!-- Welcome Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h2 class="mb-0">Welcome back, {{ $user->name }}! 👋</h2>
                    <p class="mb-0">Ready for your fitness journey today?</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="card text-center border-primary">
                <div class="card-body">
                    <i class="fas fa-calendar-check text-primary fa-2x mb-2"></i>
                    <h5 class="card-title">Today's Classes</h5>
                    <h3 class="text-primary mb-0">3</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card text-center border-success">
                <div class="card-body">
                    <i class="fas fa-fire text-success fa-2x mb-2"></i>
                    <h5 class="card-title">Workouts This Week</h5>
                    <h3 class="text-success mb-0">5</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card text-center border-warning">
                <div class="card-body">
                    <i class="fas fa-trophy text-warning fa-2x mb-2"></i>
                    <h5 class="card-title">Achievement Points</h5>
                    <h3 class="text-warning mb-0">1,250</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card text-center border-info">
                <div class="card-body">
                    <i class="fas fa-users text-info fa-2x mb-2"></i>
                    <h5 class="card-title">Training Sessions</h5>
                    <h3 class="text-info mb-0">12</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Membership Status -->
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-id-card me-2"></i>Membership Status</h5>
                </div>
                <div class="card-body">
                    <div class="alert alert-info">
                        <h6 class="alert-heading">Premium Member</h6>
                        <p class="mb-2">Your membership is active until: <strong>December 31, 2025</strong></p>
                        <div class="progress mb-2">
                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="text-muted">75 days remaining</small>
                    </div>
                    <a href="{{ route('membership') }}" class="btn btn-primary">
                        <i class="fas fa-upgrade me-2"></i>Upgrade Plan
                    </a>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-rocket me-2"></i>Quick Actions</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('classes') }}" class="btn btn-outline-primary">
                            <i class="fas fa-calendar-plus me-2"></i>Book a Class
                        </a>
                        <a href="{{ route('trainers') }}" class="btn btn-outline-success">
                            <i class="fas fa-user-tie me-2"></i>Find a Trainer
                        </a>
                        <button class="btn btn-outline-warning">
                            <i class="fas fa-dumbbell me-2"></i>Start Workout
                        </button>
                        <button class="btn btn-outline-info">
                            <i class="fas fa-chart-line me-2"></i>View Progress
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-history me-2"></i>Recent Activity</h5>
                </div>
                <div class="card-body">
                    <div class="timeline">
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <div class="bg-primary rounded-circle p-2 text-white text-center" style="width: 40px; height: 40px;">
                                    <i class="fas fa-dumbbell"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Completed Strength Training</h6>
                                <p class="text-muted mb-0">2 hours ago</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <div class="bg-success rounded-circle p-2 text-white text-center" style="width: 40px; height: 40px;">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Booked Yoga Class</h6>
                                <p class="text-muted mb-0">Yesterday at 3:30 PM</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="bg-warning rounded-circle p-2 text-white text-center" style="width: 40px; height: 40px;">
                                    <i class="fas fa-trophy"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Achievement Unlocked: 7-Day Streak!</h6>
                                <p class="text-muted mb-0">3 days ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection