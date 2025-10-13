@extends('layouts.app')

@section('title', 'Contact Us - UPI Gym')

@section('content')
<div class="hero-section text-white d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">Contact Us</h1>
                <p class="lead mb-4">Get in touch with us for any questions or to start your fitness journey</p>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <!-- Contact Information -->
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0 shadow">
                <div class="card-body p-4">
                    <h5 class="card-title mb-4">Get In Touch</h5>
                    
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <h6 class="mb-1">Address</h6>
                            <p class="text-muted mb-0">Jl. Dr. Setiabudhi No. 229<br>Bandung, Jawa Barat 40154<br>Indonesia</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-success rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="fas fa-phone text-white"></i>
                        </div>
                        <div>
                            <h6 class="mb-1">Phone</h6>
                            <p class="text-muted mb-0">+62 22 2013 163<br>+62 812 3456 789</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-warning rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <div>
                            <h6 class="mb-1">Email</h6>
                            <p class="text-muted mb-0">info@upigym.com<br>support@upigym.com</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-info rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="fas fa-clock text-white"></i>
                        </div>
                        <div>
                            <h6 class="mb-1">Operating Hours</h6>
                            <p class="text-muted mb-0">Mon-Fri: 05:00 - 23:00<br>Sat-Sun: 06:00 - 22:00</p>
                        </div>
                    </div>

                    <hr>
                    
                    <h6 class="mb-3">Follow Us</h6>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="btn btn-outline-info btn-sm">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-outline-danger btn-sm">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="btn btn-outline-success btn-sm">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="col-lg-8">
            <div class="card border-0 shadow">
                <div class="card-body p-4">
                    <h5 class="card-title mb-4">Send us a Message</h5>
                    
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName" class="form-label">First Name *</label>
                                <input type="text" class="form-control" id="firstName" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName" class="form-label">Last Name *</label>
                                <input type="text" class="form-control" id="lastName" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject *</label>
                            <select class="form-select" id="subject" required>
                                <option value="">Choose a subject...</option>
                                <option value="membership">Membership Inquiry</option>
                                <option value="classes">Class Information</option>
                                <option value="personal-training">Personal Training</option>
                                <option value="facility">Facility Tour</option>
                                <option value="complaint">Complaint</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message *</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Tell us how we can help you..." required></textarea>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="newsletter">
                            <label class="form-check-label" for="newsletter">
                                I'd like to receive updates about gym programs and promotions
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane me-2"></i>Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Quick Contact Cards -->
            <div class="row mt-4 g-3">
                <div class="col-md-4">
                    <div class="card border-0 bg-primary text-white text-center">
                        <div class="card-body p-3">
                            <i class="fas fa-question-circle fa-2x mb-2"></i>
                            <h6 class="card-title">General Inquiry</h6>
                            <p class="card-text small mb-2">Questions about our services?</p>
                            <small>info@upigym.com</small>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card border-0 bg-success text-white text-center">
                        <div class="card-body p-3">
                            <i class="fas fa-id-card fa-2x mb-2"></i>
                            <h6 class="card-title">Membership</h6>
                            <p class="card-text small mb-2">Ready to join UPI Gym?</p>
                            <small>membership@upigym.com</small>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card border-0 bg-warning text-white text-center">
                        <div class="card-body p-3">
                            <i class="fas fa-headset fa-2x mb-2"></i>
                            <h6 class="card-title">Support</h6>
                            <p class="card-text small mb-2">Need technical help?</p>
                            <small>support@upigym.com</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card border-0 shadow">
                <div class="card-body p-0">
                    <div class="bg-light p-4 text-center">
                        <h5 class="mb-1">Visit Our Location</h5>
                        <p class="text-muted">We're located in the heart of Bandung, easily accessible by public transport</p>
                    </div>
                    <div class="bg-secondary text-center py-5" style="min-height: 300px;">
                        <i class="fas fa-map fa-5x text-white mb-3"></i>
                        <p class="text-white">Interactive Map Coming Soon</p>
                        <p class="text-light small">UPI Gym - Jl. Dr. Setiabudhi No. 229, Bandung</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection