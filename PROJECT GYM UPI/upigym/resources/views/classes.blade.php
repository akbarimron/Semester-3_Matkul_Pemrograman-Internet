@extends('layouts.app')

@section('title', 'Fitness Classes - UPI Gym')

@section('content')
<div class="hero-section text-white d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">Fitness Classes</h1>
                <p class="lead mb-4">Join our variety of group fitness classes designed for all levels</p>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <!-- Class Schedule -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="text-center mb-4">Weekly Schedule</h2>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Time</th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold">06:00 - 07:00</td>
                            <td class="table-success">Morning Yoga<br><small>Sari Indah</small></td>
                            <td class="table-warning">HIIT Training<br><small>Maya Puspita</small></td>
                            <td class="table-success">Morning Yoga<br><small>Sari Indah</small></td>
                            <td class="table-warning">HIIT Training<br><small>Maya Puspita</small></td>
                            <td class="table-success">Morning Yoga<br><small>Sari Indah</small></td>
                            <td class="table-primary">Strength Training<br><small>Ahmad Fitri</small></td>
                            <td class="table-light">Rest Day</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">08:00 - 09:00</td>
                            <td class="table-primary">Strength Training<br><small>Ahmad Fitri</small></td>
                            <td class="table-info">Functional Fitness<br><small>Budi Santoso</small></td>
                            <td class="table-primary">Strength Training<br><small>Ahmad Fitri</small></td>
                            <td class="table-info">Functional Fitness<br><small>Budi Santoso</small></td>
                            <td class="table-primary">Strength Training<br><small>Ahmad Fitri</small></td>
                            <td class="table-warning">Zumba Dance<br><small>Maya Puspita</small></td>
                            <td class="table-success">Relaxing Yoga<br><small>Sari Indah</small></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">18:00 - 19:00</td>
                            <td class="table-warning">Cardio Blast<br><small>Maya Puspita</small></td>
                            <td class="table-success">Evening Yoga<br><small>Sari Indah</small></td>
                            <td class="table-warning">Cardio Blast<br><small>Maya Puspita</small></td>
                            <td class="table-success">Evening Yoga<br><small>Sari Indah</small></td>
                            <td class="table-warning">Zumba Dance<br><small>Maya Puspita</small></td>
                            <td class="table-info">Functional Fitness<br><small>Budi Santoso</small></td>
                            <td class="table-light">Rest Day</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">19:30 - 20:30</td>
                            <td class="table-info">Functional Fitness<br><small>Budi Santoso</small></td>
                            <td class="table-primary">Evening Strength<br><small>Ahmad Fitri</small></td>
                            <td class="table-info">Functional Fitness<br><small>Budi Santoso</small></td>
                            <td class="table-primary">Evening Strength<br><small>Ahmad Fitri</small></td>
                            <td class="table-success">Pilates<br><small>Sari Indah</small></td>
                            <td class="table-warning">Weekend HIIT<br><small>Maya Puspita</small></td>
                            <td class="table-light">Rest Day</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Class Types -->
    <div class="row g-4">
        <div class="col-12">
            <h2 class="text-center mb-4">Our Class Types</h2>
        </div>
        
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <div class="bg-success rounded-circle mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fas fa-leaf text-white fa-2x"></i>
                        </div>
                    </div>
                    <h5 class="card-title text-center">Yoga Classes</h5>
                    <p class="card-text">Improve flexibility, balance, and mental wellness with our yoga sessions.</p>
                    <ul class="list-unstyled small">
                        <li><i class="fas fa-circle text-success me-2" style="font-size: 0.5rem;"></i>Hatha Yoga</li>
                        <li><i class="fas fa-circle text-success me-2" style="font-size: 0.5rem;"></i>Vinyasa Flow</li>
                        <li><i class="fas fa-circle text-success me-2" style="font-size: 0.5rem;"></i>Restorative Yoga</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">Duration: 60 min</small>
                        <button class="btn btn-success btn-sm">Book Class</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <div class="bg-primary rounded-circle mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fas fa-dumbbell text-white fa-2x"></i>
                        </div>
                    </div>
                    <h5 class="card-title text-center">Strength Training</h5>
                    <p class="card-text">Build muscle and increase strength with guided weight training sessions.</p>
                    <ul class="list-unstyled small">
                        <li><i class="fas fa-circle text-primary me-2" style="font-size: 0.5rem;"></i>Free Weights</li>
                        <li><i class="fas fa-circle text-primary me-2" style="font-size: 0.5rem;"></i>Machine Training</li>
                        <li><i class="fas fa-circle text-primary me-2" style="font-size: 0.5rem;"></i>Progressive Loading</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">Duration: 60 min</small>
                        <button class="btn btn-primary btn-sm">Book Class</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <div class="bg-danger rounded-circle mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fas fa-heart text-white fa-2x"></i>
                        </div>
                    </div>
                    <h5 class="card-title text-center">Cardio Classes</h5>
                    <p class="card-text">Boost your cardiovascular health with high-energy cardio workouts.</p>
                    <ul class="list-unstyled small">
                        <li><i class="fas fa-circle text-danger me-2" style="font-size: 0.5rem;"></i>HIIT Training</li>
                        <li><i class="fas fa-circle text-danger me-2" style="font-size: 0.5rem;"></i>Cardio Blast</li>
                        <li><i class="fas fa-circle text-danger me-2" style="font-size: 0.5rem;"></i>Fat Burning</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">Duration: 45 min</small>
                        <button class="btn btn-danger btn-sm">Book Class</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <div class="bg-warning rounded-circle mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fas fa-music text-white fa-2x"></i>
                        </div>
                    </div>
                    <h5 class="card-title text-center">Zumba Dance</h5>
                    <p class="card-text">Fun, energetic dance fitness combining Latin rhythms with easy moves.</p>
                    <ul class="list-unstyled small">
                        <li><i class="fas fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>Latin Dance Moves</li>
                        <li><i class="fas fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>High Energy Music</li>
                        <li><i class="fas fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>Full Body Workout</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">Duration: 60 min</small>
                        <button class="btn btn-warning btn-sm">Book Class</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <div class="bg-info rounded-circle mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fas fa-running text-white fa-2x"></i>
                        </div>
                    </div>
                    <h5 class="card-title text-center">Functional Fitness</h5>
                    <p class="card-text">Real-world movements to improve daily activities and sports performance.</p>
                    <ul class="list-unstyled small">
                        <li><i class="fas fa-circle text-info me-2" style="font-size: 0.5rem;"></i>Movement Patterns</li>
                        <li><i class="fas fa-circle text-info me-2" style="font-size: 0.5rem;"></i>Core Stability</li>
                        <li><i class="fas fa-circle text-info me-2" style="font-size: 0.5rem;"></i>Balance Training</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">Duration: 50 min</small>
                        <button class="btn btn-info btn-sm">Book Class</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <div class="bg-secondary rounded-circle mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fas fa-spa text-white fa-2x"></i>
                        </div>
                    </div>
                    <h5 class="card-title text-center">Pilates</h5>
                    <p class="card-text">Low-impact exercises focusing on core strength, flexibility, and posture.</p>
                    <ul class="list-unstyled small">
                        <li><i class="fas fa-circle text-secondary me-2" style="font-size: 0.5rem;"></i>Core Strengthening</li>
                        <li><i class="fas fa-circle text-secondary me-2" style="font-size: 0.5rem;"></i>Flexibility</li>
                        <li><i class="fas fa-circle text-secondary me-2" style="font-size: 0.5rem;"></i>Body Alignment</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">Duration: 55 min</small>
                        <button class="btn btn-secondary btn-sm">Book Class</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Class Booking Info -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card bg-light">
                <div class="card-body p-4">
                    <h5 class="card-title text-center mb-3">Class Booking Information</h5>
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <i class="fas fa-clock text-primary fa-2x mb-2"></i>
                            <h6>Book in Advance</h6>
                            <p class="small text-muted">Classes can be booked up to 7 days in advance</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fas fa-users text-success fa-2x mb-2"></i>
                            <h6>Limited Spots</h6>
                            <p class="small text-muted">Each class has limited capacity to ensure quality instruction</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fas fa-undo text-warning fa-2x mb-2"></i>
                            <h6>Free Cancellation</h6>
                            <p class="small text-muted">Cancel up to 2 hours before class starts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection