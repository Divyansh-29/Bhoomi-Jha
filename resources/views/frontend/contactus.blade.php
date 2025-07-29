@extends('frontend.layout.base')
<style>
    /* Base styles for the contact page */
    .contact-page-wrapper {
        background-color: #f8f9fa; /* Light background similar to GRC India */
    }

    /* Breadcrumb Styling */
    .rs-breadcrumbs.img3 {
        background: linear-gradient(135deg, #156e68, #0d4b46); /* Use your theme colors */
        padding: 60px 0;
        color: white;
        text-align: center;
    }

    .breadcrumbs-inner h1.page-title {
        font-size: 2.2rem;
        margin-bottom: 15px;
        color: white;
    }

    .breadcrumbs-inner ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: center;
        flex-wrap: wrap; /* Allow wrapping on small screens */
        gap: 8px;
    }

    .breadcrumbs-inner ul li {
        color: rgba(255, 255, 255, 0.85);
        font-size: 1rem;
    }

    .breadcrumbs-inner ul li a {
        color: rgba(255, 255, 255, 0.85);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .breadcrumbs-inner ul li a:hover,
    .breadcrumbs-inner ul li a.active {
        color: white;
        text-decoration: underline;
    }

    .breadcrumbs-inner ul li:not(:last-child)::after {
        content: "/";
        margin-left: 8px;
        color: rgba(255, 255, 255, 0.7);
    }

    /* Main Contact Section */
    .rs-contact {
        padding: 80px 0; /* Consistent padding */
    }

    /* Contact Info Box */
    .contact-box {
        background-color: #156e68; /* Use primary color for info box */
        color: white;
        padding: 40px 30px;
        border-radius: 12px;
        height: 100%; /* Ensure full height */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }

    .sec-title {
        margin-bottom: 30px;
    }

    .sec-title .sub-text.style-bg {
        display: inline-block;
        padding: 5px 15px;
        background: rgba(255, 255, 255, 0.2); /* Semi-transparent background */
        color: #fff;
        border-radius: 30px;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .sec-title .title {
        color: #fff;
        font-weight: 700;
        font-size: 1.8rem;
        margin-top: 10px;
        margin-bottom: 15px;
    }

    /* Address Box */
    .address-box {
        display: flex;
        align-items: flex-start;
        margin-bottom: 25px;
    }

    .address-text {
        flex-grow: 1;
    }

    .address-text .label {
        display: block;
        font-weight: 600;
        color: #fff; /* White text for labels */
        margin-bottom: 5px;
        font-size: 1rem;
    }

    .address-text a,
    .address-text .desc {
        color: rgba(255, 255, 255, 0.9); /* Slightly softer white for details */
        text-decoration: none;
        font-size: 1rem;
        line-height: 1.5;
        display: block;
        margin: 0 0 5px 0; /* Add bottom margin for spacing between lines */
    }

    .address-text a:hover {
        color: #fff;
        text-decoration: underline;
    }

    /* Contact Widget/Form Area */
    .contact-widget {
        background-color: #ffffff;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        height: 100%;
    }

    .sec-title2 {
        margin-bottom: 30px;
    }

    .sec-title2 .sub-text.contact {
        color: #156e68; /* Primary color for subtitle */
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 14px;
        display: block;
        margin-bottom: 10px;
    }

    .sec-title2 .title.testi-title {
        color: #343a40;
        font-weight: 700;
        font-size: 1.7rem;
        margin-top: 0;
        margin-bottom: 15px;
    }

    .sec-title2 .title.testi-title + p {
        color: #6c757d;
        font-size: 1rem;
        line-height: 1.6;
        margin-top: 0;
    }

    /* Alert Styles */
    .alert-success-2 {
        background: linear-gradient(135deg, #177169, #45dfac);
        color: #fff;
        border: none;
        border-radius: 6px;
        padding: 15px 20px;
        margin-bottom: 20px;
    }

    /* Form Field Styling */
    .form-control {
        width: 100%;
        padding: 12px 15px;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 6px;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        height: auto;
        margin-bottom: 5px; /* Space for error message */
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #156e68;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(21, 110, 104, 0.25);
    }

    textarea.form-control {
        min-height: 150px;
        resize: vertical;
    }

    .error {
        display: block;
        width: 100%;
        margin-top: 0.25rem;
        margin-bottom: 0.5rem; /* Space below error */
        font-size: 0.875rem;
        color: #dc3545;
    }

    /* Button Enhancement */
    .readon.learn-more.submit {
        padding: 12px 30px;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 30px;
        border: none;
        background: linear-gradient(135deg, #156e68, #0d4b46);
        color: white;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: auto; /* Don't force full width unless needed */
    }

    .readon.learn-more.submit:hover {
        background: linear-gradient(135deg, #0d4b46, #0a3a35);
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(21, 110, 104, 0.3);
    }

    .readon.learn-more.submit:active {
        transform: translateY(0);
        box-shadow: 0 2px 5px rgba(21, 110, 104, 0.2);
    }

    /* Loading Spinner */
    .loading {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 2px solid #fff;
        border-top: 2px solid transparent;
        animation: spin 0.8s linear infinite;
        display: none;
    }

    .loading-show {
        display: inline-block;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* Responsive Design */
    @media (max-width: 1199px) {
        .rs-contact {
            padding: 60px 0;
        }

        .md-mb-60 {
            margin-bottom: 40px !important;
        }

        .pl-70 {
            padding-left: 15px !important;
        }

        .contact-box,
        .contact-widget {
            padding: 30px 25px;
        }
    }

    @media (max-width: 991px) {
        .col-lg-4, .col-lg-6, .col-lg-3 {
            margin-bottom: 30px;
        }

        .rs-contact {
            padding: 50px 0;
        }

        .contact-box,
        .contact-widget {
            padding: 25px 20px;
        }

        .sec-title .title {
            font-size: 1.7rem;
        }

        .sec-title2 .title.testi-title {
            font-size: 1.6rem;
        }

        .address-box {
            flex-direction: column;
            align-items: flex-start;
        }

        .address-text .label {
            margin-bottom: 8px;
        }

        .address-text a,
        .address-text .desc {
            margin-bottom: 10px;
        }

        .readon.learn-more.submit {
            width: 100%;
        }
    }

    @media (max-width: 767px) {
        .rs-contact {
            padding: 40px 0;
        }

        .breadcrumbs-inner h1.page-title {
            font-size: 1.8rem;
        }

        .breadcrumbs-inner ul {
            font-size: 0.9rem;
        }

        .sec-title .title {
            font-size: 1.5rem;
        }

        .sec-title2 .title.testi-title {
            font-size: 1.4rem;
        }

        .contact-box,
        .contact-widget {
            padding: 20px 15px;
            margin-bottom: 20px;
        }

        .address-text .label {
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .address-text a,
        .address-text .desc {
            font-size: 0.9rem;
            margin-bottom: 8px;
        }

        .form-control {
            font-size: 0.9rem;
            padding: 10px 12px;
        }

        textarea.form-control {
            min-height: 120px;
        }

        .readon.learn-more.submit {
            padding: 10px 25px;
            font-size: 0.9rem;
        }
    }

    /* Enhanced section styling */
    .sec-title .sub-text.style-bg {
        color: #156e68;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 14px;
    }

    .sec-title .title {
        color: #333;
        font-weight: 700;
        margin-top: 10px;
        margin-bottom: 15px;
    }

    .sec-title .desc {
        color: #666;
        font-size: 16px;
        line-height: 1.6;
        max-width: 800px;
        margin: 0 auto;
    }

    /* Equal height for all cards - SCOPED TO SERVICES SECTION ONLY */
    .rs-services .row, .rs-about .row {
        display: flex;
        flex-wrap: wrap;
    }

    .h-100 {
        height: 100%;
    }

    @media (min-width: 992px) {
        .rs-services .row > [class*="col-"], .rs-about .row > [class*="col-"] {
            display: flex;
        }
    }

    /* Specific banner adjustment if needed */
    .rs-breadcrumbs.img1 {
        background-size: cover !important;
        background-position: center !important;
    }

    /* Process Step Indicators */
    .process-step-indicator {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #156e68, #aec944);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
        font-size: 18px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        z-index: 1;
    }

    /* Benefits Section - Simplified without icons */
    .services-item.d-flex.flex-column.align-items-center.text-center .services-content .title,
    .services-item.d-flex.flex-column.align-items-center.text-center .services-content .desc {
        text-align: center;
    }

    /* Ensure benefit cards also try to be equal height */
    .rs-services.style2.gray-color .services-item {
        height: 100%;
    }
</style>

@section('content')
<div class="contact-page-wrapper">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img3">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">Contact</h1>
            <ul>
                <li title="Bhoomija - Environmental Consultancy Services">
                    <a class="active" href="{{ route('home') }}">Home</a>
                </li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Main Contact Content Start -->
    <div class="rs-contact">
        <div class="container">
            <div class="row">
                <!-- Contact Information Section -->
                <div class="col-lg-5 md-mb-60">
                    <div class="contact-box">
                        <div class="sec-title">
                            <span class="sub-text style-bg">Let's Talk</span>
                            <h2 class="title">Speak With Us</h2>
                            <p class="mt-3">We're here to assist you. Reach out to us using the information below or send us a message.</p>
                        </div>
                         <div class="address-box">
                            <div class="address-text">
                                <span class="label">Telephone:</span>
                                <span>011-25-05-6683</span>
                            </div>
                        </div>
                        <div class="address-box">
                            <div class="address-text">
                                <span class="label">Phone:</span>
                                @php
                                    // Split the phone numbers from the .env variable (assuming comma separated)
                                    $phoneNumbers = explode(',', env('SITEPHONE'));
                                @endphp
                                @foreach($phoneNumbers as $phoneNumber)
                                    <a href="tel:{{ str_replace(['+', ' ', '-', '(', ')'], ['', '', '', '', ''], trim($phoneNumber)) }}">{{ trim($phoneNumber) }}</a>
                                @endforeach
                            </div>
                        </div>
                       
                        <div class="address-box">
                            <div class="address-text">
                                <span class="label">Email:</span>
                                <a href="mailto:{{ env('SITEEMAIL') }}">{{ env('SITEEMAIL') }}</a>
                            </div>
                        </div>
                        <div class="address-box">
                            <div class="address-text">
                                <span class="label">Address:</span>
                                <div class="desc">{{ env('SITEADDRESS') }}</div>
                            </div>
                        </div>
                        <!-- Add more address boxes if needed (Branch offices etc.) -->
                    </div>
                </div>

                <!-- Contact Form Section -->
                <div class="col-lg-7 pl-70 md-pl-15">
                    <div class="contact-widget">
                        <div class="sec-title2">
                            <span class="sub-text contact">Get In Touch</span>
                            <h2 class="title testi-title">We'd Love to Hear From You</h2>
                            <p>Send us a message and our team will get back to you as soon as possible.</p>
                        </div>

                        <!-- Display success or error messages -->
                        <div id="form-messages"></div>
                        <div class="alert alert-success-2 alert-dismissible fade show" role="alert"
                            id="success-alert" style="display: none;">
                            <strong>Success!</strong> <span id="success-message"></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <!-- Feedback Form Start -->
                        <form data-action="{{ route('contact-us.post') }}" method="POST" id="feedback-form">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Your Name *" required>
                                        <small class="text-danger error" id="error-name"></small>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="Email *" required>
                                        <small class="text-danger error" id="error-email"></small>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <input type="tel" id="phone" maxlength="10" pattern="[0-9]{10}"
                                            name="phone" class="form-control" placeholder="Phone (10 digits) *"
                                            required
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,10)">
                                        <small class="text-danger error" id="error-phone"></small>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <input type="text" id="subject" name="subject" class="form-control"
                                            placeholder="Subject *" required>
                                        <small class="text-danger error" id="error-subject"></small>
                                    </div>
                                    <div class="col-lg-12 mb-4">
                                        <textarea name="message" id="message" rows="6" class="form-control"
                                            placeholder="Your Message *" required></textarea>
                                        <small class="text-danger error" id="error-message"></small>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="readon learn-more submit"
                                                onclick="submitFeedback(event)">
                                                <span class="loading"></span> Submit Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                        </form>
                        <!-- Feedback Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Map section removed as per request -->
    </div>
    <!-- Main Contact Content End -->
</div>

{{-- <script>
    function validateForm(fields) {
        let isValid = true;
        $('.error').text(''); // Clear old errors
        fields.forEach(field => {
            const value = $(`#${field.id}`).val() || null;
            // if (value != null) {
            //     value.trim(); // Trim whitespace
            // }
            // Basic required check
            if (!value || value.trim() === '') { // Check for null/empty/whitespace
                $(`#error-${field.id}`).text(`${field.label} is required`);
                isValid = false;
            } else if (field.type === 'email' && !validateEmail(value.trim())) { // Validate email format
                $(`#error-${field.id}`).text(`Please enter a valid email`);
                isValid = false;
            } else if (field.type === 'tel' && !/^\d{10}$/.test(value.trim())) { // Validate phone format (10 digits)
                $(`#error-${field.id}`).text(`Phone must be 10 digits`);
                isValid = false;
            }
        });
        return isValid;
    }

    function validateEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    function submitFeedback(event) {
        event.preventDefault();
        const fields = [
            { id: 'name', label: 'Name' },
            { id: 'email', label: 'Email', type: 'email' },
            { id: 'phone', label: 'Phone', type: 'tel' },
            { id: 'subject', label: 'Subject' },
            { id: 'message', label: 'Message' }
        ];
        if (!validateForm(fields)) {
            return false; // stop submission if validation fails
        }
        // Show loading spinner
        $('.readon').addClass('loading-show');
        const action = $('#feedback-form').data('action');
        $.ajax({
            type: 'POST',
            url: action,
             $('#feedback-form').serialize(),
            success: function (data) {
                $('#success-message').html(`${data.message}`);
                $('#success-alert').fadeIn();
                $('.readon').removeClass('loading-show'); // Hide spinner
                $('#feedback-form')[0].reset(); // Reset form
                // Clear previous errors on success
                 $('.error').text('');
                // Auto-hide success message after 5 seconds
                setTimeout(() => {
                    $('#success-alert').fadeOut();
                }, 5000);
            },
            error: function (xhr, status, error) {
                // Handle error response (optional but good practice)
                let errorMessage = 'An error occurred while submitting the form. Please try again.';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMessage = xhr.responseJSON.message;
                }
                $('#success-message').html(errorMessage); // Reuse success alert for errors, or create a separate one
                $('#success-alert').removeClass('alert-success-2').addClass('alert-danger').fadeIn(); // Change style to danger
                $('.readon').removeClass('loading-show'); // Hide spinner

                 // Auto-hide error message after 5 seconds
                setTimeout(() => {
                    $('#success-alert').fadeOut(() => {
                         // Reset class after fade out if needed elsewhere
                         $('#success-alert').removeClass('alert-danger').addClass('alert-success-2');
                    });
                }, 5000);
            }
        });
    }
</script> --}}
<script>
    // Email validation helper function
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(String(email).toLowerCase());
    }

    // Generic form validation function
    function validateForm() {
        let isValid = true;
        // Clear previous error messages
        $('.error').text('');

        // Define fields and their validation rules
        const fields = [
            { id: 'name', label: 'Name', required: true },
            { id: 'email', label: 'Email', required: true, type: 'email' },
            { id: 'phone', label: 'Phone', required: true, type: 'tel', pattern: /^\d{10}$/ },
            { id: 'subject', label: 'Subject', required: true },
            { id: 'message', label: 'Message', required: true }
        ];

        fields.forEach(field => {
            const $field = $(`#${field.id}`);
            const value = $field.val() ? $field.val().trim() : '';

            // Required field check
            if (field.required && (!value || value === '')) {
                $(`#error-${field.id}`).text(`${field.label} is required.`);
                isValid = false;
                return; // Exit forEach iteration early
            }

            // Specific validations (only if field has a value)
            if (value) {
                if (field.type === 'email' && !validateEmail(value)) {
                    $(`#error-${field.id}`).text('Please enter a valid email address.');
                    isValid = false;
                } else if (field.type === 'tel' && field.pattern && !field.pattern.test(value)) {
                    $(`#error-${field.id}`).text('Phone number must be exactly 10 digits.');
                    isValid = false;
                }
                // Add more specific validations here if needed (e.g., subject length)
            }
        });

        return isValid;
    }

    // Main form submission function
    function submitFeedback(event) {
        event.preventDefault(); // Prevent default form submission

        // Perform client-side validation
        if (!validateForm()) {
            return; // Stop if validation fails
        }

        // Get form element and action URL
        const $form = $('#feedback-form');
        const actionUrl = $form.attr('action'); // Use the form's native action attribute

        // Show loading indicator on submit button
        const $submitButton = $('.readon.learn-more.submit');
        $submitButton.addClass('loading-show');

        // Prepare form data for AJAX submission
        const formData = $form.serialize();

        // Perform AJAX POST request
        $.ajax({
            url: actionUrl,
            type: 'POST',
            data: formData,
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include CSRF token
            },
            success: function(response) {
                // Hide loading indicator
                $submitButton.removeClass('loading-show');

                // Handle successful response
                if (response.status === 'success') {
                    // Display success message
                    $('#success-message').text(response.message);
                    $('#success-alert')
                        .removeClass('alert-danger')
                        .addClass('alert-success')
                        .fadeIn();

                    // Reset the form
                    $form[0].reset();

                    // Clear any lingering error messages (good practice)
                    $('.error').text('');

                    // Optionally, scroll to the success message
                    // $('html, body').animate({ scrollTop: $("#success-alert").offset().top - 100 }, 500);

                    // Auto-hide success message after a few seconds
                    setTimeout(function() {
                        $('#success-alert').fadeOut();
                    }, 5000); // Hide after 5 seconds

                } else {
                    // Handle unexpected success response structure (shouldn't happen with standard controller)
                    console.warn('Unexpected success response structure:', response);
                    $('#success-message').text('Form submitted, but received an unexpected response.');
                    $('#success-alert')
                        .removeClass('alert-success')
                        .addClass('alert-warning') // Use warning class if available, otherwise danger
                        .fadeIn();

                    setTimeout(function() {
                        $('#success-alert').fadeOut();
                    }, 5000);
                }
            },
            error: function(xhr, status, error) {
                // Hide loading indicator
                $submitButton.removeClass('loading-show');

                // Handle error response
                console.error("AJAX Error:", status, error);
                console.error("XHR Object:", xhr);

                let errorMessage = 'An error occurred while submitting the form. Please try again.';

                // Try to parse JSON error response from Laravel validation or exceptions
                if (xhr.responseJSON) {
                    if (xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message; // General error message from controller
                    }
                    // Handle Laravel validation errors specifically
                    if (xhr.responseJSON.errors) {
                        // Clear previous errors first
                        $('.error').text('');
                        $.each(xhr.responseJSON.errors, function(key, messages) {
                            // Map the error key (e.g., 'name') to the corresponding error element ID (e.g., 'error-name')
                            const errorElementId = `error-${key}`;
                            if ($(`#${errorElementId}`).length) {
                                // Display the first validation error message for this field
                                $(`#${errorElementId}`).text(messages[0]);
                            }
                        });
                        errorMessage = 'Please correct the highlighted errors.'; // Generic message for validation errors
                    }
                }

                // Display error message in the main alert area
                $('#success-message').text(errorMessage);
                $('#success-alert')
                    .removeClass('alert-success') // Ensure it's not green
                    .addClass('alert-danger')       // Make it red
                    .fadeIn();

                // Auto-hide error message after a few seconds
                setTimeout(function() {
                    $('#success-alert').fadeOut();
                }, 7000); // Hide error after 7 seconds
            }
        });
    }

    // Optional: Real-time phone number formatting (restricts input to digits and limits to 10)
    $(document).ready(function() {
        $('#phone').on('input', function() {
            let value = $(this).val().replace(/\D/g, ''); // Remove non-digit characters
            if (value.length > 10) {
                value = value.substring(0, 10); // Limit to 10 digits
            }
            $(this).val(value); // Update the input field value
        });
    });
</script>
@endsection