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
        border-radius: 8px;
        height: 100%; /* Ensure full height */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }

    .sec-title {
        margin-bottom: 30px;
    }

    .sec-title .sub-text.new-text {
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

    /* .address-icon removed as per request */

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
    }

    .address-text a:hover {
        color: #fff;
        text-decoration: underline;
    }

    /* Contact Widget/Form Area */
    .contact-widget {
        background-color: #ffffff;
        padding: 40px;
        border-radius: 8px;
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

    /* Responsive Adjustments */
    @media (max-width: 991px) {
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

    @media (max-width: 767px) {
        .rs-contact {
            padding: 50px 0;
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
            padding: 25px 20px;
        }

        .address-box {
            flex-direction: column;
            align-items: flex-start;
        }

        /* .address-icon {
            margin-bottom: 10px;
            margin-right: 0;
        } */

        .readon.learn-more.submit {
            width: 100%;
        }
    }
</style>

@section('content')
<div class="contact-page-wrapper">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img3">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">Contact</h1>
            <ul>
                <li>
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
                            <span class="sub-text new-text">Let's Talk</span>
                            <h2 class="title">Speak With Us</h2>
                            <!-- Optional: Add a brief intro text -->
                            <!-- <p class="mt-3">We're here to assist you. Reach out using the information below or send us a message.</p> -->
                        </div>
                        <div class="address-box">
                            <!-- <div class="address-icon">
                                <i class="fa fa-phone"></i>
                            </div> -->
                            <div class="address-text">
                                <span class="label">Phone:</span>
                                <a href="tel:{{ env('SITEPHONE') }}">{{ env('SITEPHONE') }}</a>
                            </div>
                        </div>
                        <div class="address-box">
                            <!-- <div class="address-icon">
                                <i class="fa fa-envelope"></i>
                            </div> -->
                            <div class="address-text">
                                <span class="label">Email:</span>
                                <a href="mailto:{{ env('SITEEMAIL') }}">{{ env('SITEEMAIL') }}</a>
                            </div>
                        </div>
                        <div class="address-box">
                            <!-- <div class="address-icon">
                                <i class="fa fa-map-marker"></i>
                            </div> -->
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

<script>
    function validateForm(fields) {
        let isValid = true;
        $('.error').text(''); // Clear previous errors
        fields.forEach(field => {
            const value = $(`#${field.id}`).val();
            // Trim whitespace for validation
            const trimmedValue = value ? value.trim() : '';

            if (!trimmedValue) {
                $(`#error-${field.id}`).text(`${field.label} is required`);
                isValid = false;
            } else if (field.type === 'email' && !validateEmail(trimmedValue)) {
                $(`#error-${field.id}`).text(`Please enter a valid email`);
                isValid = false;
            } else if (field.type === 'tel' && !/^\d{10}$/.test(trimmedValue)) {
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
            return false; // Stop submission if validation fails
        }
        // Show loading spinner
        $('.readon').addClass('loading-show');
        const action = $('#feedback-form').data('action');
        $.ajax({
            type: 'POST',
            url: action,
            data: $('#feedback-form').serialize(),
            success: function (data) {
                $('#success-message').html(`${data.message}`);
                $('#success-alert').fadeIn();
                $('.readon').removeClass('loading-show'); // Hide spinner
                $('#feedback-form')[0].reset(); // Reset form
                // Clear previous errors on successful submission
                $('.error').text('');
                // Auto-hide success message after 5 seconds
                setTimeout(() => {
                    $('#success-alert').fadeOut();
                }, 5000);
            },
            error: function (xhr, status, error) {
                // Handle error response
                let errorMessage = 'An error occurred while submitting the form. Please try again.';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMessage = xhr.responseJSON.message;
                }
                $('#success-message').html(errorMessage);
                // Temporarily change alert style to danger (optional)
                const originalClass = $('#success-alert').attr('class');
                $('#success-alert').removeClass('alert-success-2').addClass('alert-danger').fadeIn();
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
</script>
@endsection