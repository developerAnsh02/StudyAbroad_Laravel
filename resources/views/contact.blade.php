@extends('layouts.app')

@section('content')
<section class="contact-section">
    <div class="container">
        <h2>Contact Us</h2>
        <p>We would love to hear from you! Fill out the form below and we'll get back to you soon.</p>

        

        <div class="contact-content">
            <!-- Contact Form -->
            <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf

                <div class="form-group">
                    <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required />
                    @error('name')
                        <small class="error-message">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required />
                    @error('email')
                        <small class="error-message">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone') }}" required />
                    @error('phone')
                        <small class="error-message">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <textarea name="message" placeholder="Your Message" rows="5" required>{{ old('message') }}</textarea>
                    @error('message')
                        <small class="error-message">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="submit-btn">Send Message</button>
            </form>

            <!-- Contact Details -->
            <div class="contact-info">
                <h3>Contact Info</h3>
                <p><strong>Email:</strong> support@wtsvisa.com</p>
                <p><strong>Phone:</strong> +91 92578 74994</p>
                <p><strong>Address:</strong>4th floor, Ashoka palace, 410, Shobhagpura, Udaipur, Rajasthan 313001</p>
                <!-- Map Integration -->
                <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3627.7051881377574!2d73.7094346!3d24.5993686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3967e538f33055ef%3A0xa94746794fe9e6e2!2sWTS%20Visa%20Consultancy!5e0!3m2!1sen!2sin!4v1743228666404!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@if(session('success'))
    <div id="successToast" class="toast-message show">
        <p>{{ session('success') }}</p>
    </div>

    <script>
        // Automatically hide the toast after 3 seconds
        setTimeout(() => {
            document.getElementById('successToast').classList.remove('show');
        }, 3000);
    </script>

    <style>
        .toast-message {
            position: fixed;
            bottom: 20px;
            right: 40%;
            background-color: #28a745;
            color: white;
            padding: 15px 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            opacity: 0;
            transition: opacity 0.5s, transform 0.5s;
            transform: translateY(20px);
        }

        .toast-message.show {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
@endif

<style>
    .error-message {
        color: red;
        font-size: 14px;
        margin-top: 5px;
        display: block;
    }
</style>
@endsection
