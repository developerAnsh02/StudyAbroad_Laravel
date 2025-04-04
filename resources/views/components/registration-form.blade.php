<div class="registration-form">
    <h2 style="margin: 0px;">Register for Visa Assistance</h2>
    <form id="registrationForm" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" id="name" name="name" required placeholder="Your Name">
        </div>
        <div class="form-group">
            <input type="tel" name="phone_number[main]" id="phone_number" />
        </div>
        <div class="form-group">
            <input type="email" id="email" name="email" required placeholder="Email">
        </div>
        
        <div class="form-group">
            <input type="text" id="visa-country" name="visa_country" required placeholder="Visa Required Country">
        </div>
        <div class="form-group">
            <select id="visa-type" name="visa_type" required>
                <option value="" disabled selected>Select Visa Type</option>
                <option value="Tourist Visa">Tourist Visa</option>
                <option value="Work Visa">Work Visa</option>
                <option value="Student Visa">Student Visa</option>
                <option value="Business Visa">Business Visa</option>
            </select>
        </div>
        <button type="submit" class="submit-btn">Submit</button>
    </form>
</div>

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
        $('button[type="submit"]').prop('disabled', true);

        // Get the full phone number in E164 format
        var full_number = phone_number.getNumber(intlTelInputUtils.numberFormat.E164);
        $("input[name='phone_number[full]']").val(full_number); // Store the full phone number in a hidden input

        var formData = $(this).serialize(); // Get all form data

        // Use AJAX to submit the form
        $.ajax({
            url: "{{ route('submit.registration') }}", // Your form submission URL
            method: "POST",
            data: formData,
            success: function(response) {
                // Success: Show a success message using SweetAlert
                Swal.fire({
                    icon: 'success',
                    title: 'Form Submitted!',
                    text: 'Your form has been successfully submitted.',
                    showConfirmButton: true,
                }).then(function() {
                    // Optionally, reset the form after success
                    $('#registrationForm')[0].reset();
                    // Re-enable the submit button after success
                    $('button[type="submit"]').prop('disabled', false);
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
                    $('button[type="submit"]').prop('disabled', false);
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

    /* Responsive Design */
@media (max-width: 768px) {
    .registration-form {
        width: 90%;
        padding: 18px;
        margin: auto;
    }
    
    .form-group input,
    .form-group select {
        font-size: 14px;
        padding: 10px;
    }

    .submit-btn {
        font-size: 14px;
        padding: 10px;
    }
}

@media (max-width: 480px) {
    .registration-form h2 {
        font-size: 18px;
    }

    .form-group input,
    .form-group select {
        font-size: 13px;
        padding: 8px;
    }

    .submit-btn {
        font-size: 14px;
        padding: 10px;
    }
}

/* Fix Phone Input UI */
.iti {
    width: 100% !important; /* Ensures full width on all devices */
}

/* Adjust input styles for smaller screens */
.iti--separate-dial-code {
    width: 100%;
}

.iti--separate-dial-code .iti__selected-flag {
    padding: 10px;
}

.iti--separate-dial-code .iti__selected-dial-code {
    font-size: 14px;
}

/* Ensure proper spacing for mobile */
@media (max-width: 480px) {
    .iti--separate-dial-code .iti__selected-flag {
        padding: 8px;
    }
    .iti input[type="tel"] {
        padding-left: 70px !important;
        
    }

    .iti--separate-dial-code .iti__selected-dial-code {
        font-size: 13px;
    }

    .form-group input {
        padding: 10px !important;
        font-size: 14px !important;
    }
}

</style>
