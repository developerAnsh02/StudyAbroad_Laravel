@extends('layouts.app')

@section('content')
<section class="contact-section">
    <div class="container">
        <h2>Contact Us</h2>
        <p>We would love to hear from you! Fill out the form below and we'll get back to you soon.</p>

        

        <div class="contact-content">
            <!-- Contact Form -->
            <form class="contact-form" method="POST" id="contact_us_form">
                @csrf

                <div class="form-group">
                    <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required />
                </div>

                <div class="form-group">
                    <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required />
                </div>

                <div class="form-group">
                    <input type="tel" name="phone_number[main]" id="phone_number" />
                </div>

                <div class="form-group">
                    <textarea name="message" placeholder="Your Message" rows="5" required>{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="submit-btn">Send Message</button>
            </form>

            <!-- Contact Details -->
            <div class="contact-info">
                <h3>Contact Info</h3>
                <p><strong>Email:</strong> info.wtsvisaconsultancy@gmail.com</p>
                <p><strong>Phone:</strong> +91 8000915743</p>
                <p><strong>Address:</strong>4th floor, Ashoka palace, 410, Shobhagpura, Udaipur, Rajasthan 313001</p>
                <!-- Map Integration -->
                <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3627.7051881377574!2d73.7094346!3d24.5993686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3967e538f33055ef%3A0xa94746794fe9e6e2!2sWTS%20Visa%20Consultancy!5e0!3m2!1sen!2sin!4v1743228666404!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Include jQuery, SweetAlert and intl-tel-input libraries -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>

<script>
    // Initialize the intl-tel-input library for phone number input
    var phone_number = window.intlTelInput(document.querySelector("#phone_number"), {
        separateDialCode: true,
        preferredCountries: ["in"],
        hiddenInput: "full",
        utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
    });
    $("form").submit(function(e) {
        e.preventDefault(); // Prevent the default form submission

        // Disable the submit button to prevent multiple submissions
        $('button[type="submit"]').prop('disabled', true).text('Please wait...');

        // Get the full phone number in E164 format
        var full_number = phone_number.getNumber(intlTelInputUtils.numberFormat.E164);
        $("input[name='phone_number[full]']").val(full_number); // Store the full phone number in a hidden input

        var formData = $(this).serialize(); // Get all form data

        // Use AJAX to submit the form
        $.ajax({
            url: "{{ route('contact.submit') }}", // Your form submission URL
            method: "POST",
            data: formData,
            success: function(response) {
                // Success: Show a success message using SweetAlert
                Swal.fire({
                    icon: 'success',
                    title: 'Thank you for contacting us!',
                    text: 'We will get back to you soon.',
                    showConfirmButton: true,
                }).then(function() {
                    // Optionally, reset the form after success
                    $('#contact_us_form')[0].reset();
                    // Re-enable the submit button after success
                    $('button[type="submit"]').prop('disabled', false).text('Send Message');
                });
            },
            error: function(xhr) {
                // Handle errors from the backend
                var errors = xhr.responseJSON.errors;
                var errorMessage = '';
                
                if (errors) {
                    // Construct error message to show in SweetAlert
                    $.each(errors, function(key, value) {
                        errorMessage += value[0] + '<br>';
                    });
                }

                // Show SweetAlert with the error messages
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    html: errorMessage,
                    showConfirmButton: true
                }).then(function() {
                    // Re-enable the submit button after error
                    $('button[type="submit"]').prop('disabled', false).text('Send Message');
                });
            }
        });
    });
</script>
<style>
    .iti {
        width: -webkit-fill-available !important;
    }
    .iti--separate-dial-code .iti__selected-dial-code {
        color: white !important;
    }
    .iti__country-name, .iti__flag-box {
        color: black;
    }
</style>
@endsection
