@extends('frontend.layout.base')
<style>
    /* CLEAN CONTACT PAGE - DEBUG BORDERS REMOVED */
    
    /* Base styles */
    .contact-page-wrapper {
        background-color: #f8f9fa;
        position: relative;
    }

    /* Main Contact Section */
    .rs-contact {
        padding: 100px 0;
        position: relative;
    }

    /* CONTACT INFO BOX - CLEAN VERSION */
    .contact-box {
        background: linear-gradient(135deg, #156e68, #1a7a73);
        color: white;
        padding: 50px 40px;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(21, 110, 104, 0.2);
        position: relative;
        overflow: hidden;
        opacity: 1;
        transform: translateX(0);
        animation: slideInLeft 0.8s ease forwards 0.3s;
    }

    /* Shimmer effect */
    .contact-box::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
        transform: translateX(-100%);
        animation: contactShimmer 4s infinite;
        animation-delay: 1s;
    }

    @keyframes contactShimmer {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Section Title */
    .sec-title {
        margin-bottom: 40px;
        opacity: 0;
        animation: fadeIn 0.8s ease forwards 0.5s;
        position: relative;
        z-index: 2;
    }

    .sec-title .sub-text.style-bg {
        display: inline-block;
        padding: 8px 20px;
        background: rgba(255, 255, 255, 0.2);
        color: #fff;
        border-radius: 25px;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
        opacity: 0;
        transform: scale(0.8);
        animation: badgePop 0.6s ease forwards 0.7s;
    }

    @keyframes badgePop {
        from {
            opacity: 0;
            transform: scale(0.8);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .sec-title .title {
        color: #fff;
        font-weight: 700;
        font-size: 2rem;
        margin-top: 10px;
        margin-bottom: 20px;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.8s ease forwards 0.9s;
    }

    .sec-title p {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.8s ease forwards 1.1s;
        color: rgba(255, 255, 255, 0.9);
    }

    /* Address Boxes */
    .address-box {
        display: flex;
        align-items: flex-start;
        margin-bottom: 25px;
        padding: 20px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        opacity: 0;
        transform: translateY(20px);
        animation: addressSlideUp 0.6s ease forwards;
        transition: all 0.3s ease;
        position: relative;
        z-index: 2;
    }

    .address-box:nth-child(2) { animation-delay: 1.3s; }
    .address-box:nth-child(3) { animation-delay: 1.5s; }
    .address-box:nth-child(4) { animation-delay: 1.7s; }
    .address-box:nth-child(5) { animation-delay: 1.9s; }

    @keyframes addressSlideUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .address-box:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .address-text {
        flex-grow: 1;
    }

    .address-text .label {
        display: block;
        font-weight: 700;
        color: #fff;
        margin-bottom: 8px;
        font-size: 1.1rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .address-text a,
    .address-text .desc,
    .address-text span {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        font-size: 1rem;
        line-height: 1.6;
        display: block;
        margin: 0 0 5px 0;
        transition: all 0.3s ease;
    }

    .address-text a:hover {
        color: #fff;
        text-shadow: 0 0 10px rgba(255,255,255,0.3);
        transform: translateX(5px);
    }

    /* Contact Form */
    .contact-widget {
        background: linear-gradient(135deg, #ffffff, #f8f9fa);
        padding: 50px 40px;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
        opacity: 0;
        transform: translateX(30px);
        animation: slideInRight 0.8s ease forwards 0.5s;
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .contact-widget::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, rgba(21, 110, 104, 0.05) 0%, transparent 70%);
        animation: formBackgroundFloat 8s ease-in-out infinite;
    }

    @keyframes formBackgroundFloat {
        0%, 100% { transform: rotate(0deg) scale(1); }
        50% { transform: rotate(180deg) scale(1.1); }
    }

    .sec-title2 {
        margin-bottom: 40px;
        position: relative;
        z-index: 2;
        opacity: 0;
        animation: fadeIn 0.8s ease forwards 0.7s;
    }

    .sec-title2 .sub-text.contact {
        color: #156e68;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 14px;
        display: block;
        margin-bottom: 15px;
        opacity: 0;
        transform: translateY(-10px);
        animation: fadeInDown 0.6s ease forwards 0.9s;
    }

    .sec-title2 .title.testi-title {
        color: #333;
        font-weight: 700;
        font-size: 2rem;
        margin-top: 0;
        margin-bottom: 20px;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.8s ease forwards 1.1s;
    }

    .sec-title2 .title.testi-title + p {
        color: #666;
        font-size: 1.1rem;
        line-height: 1.6;
        margin-top: 0;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.8s ease forwards 1.3s;
    }

    /* Form Fields */
    .form-control {
        width: 100%;
        padding: 15px 20px;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        border: 2px solid #e9ecef;
        border-radius: 12px;
        transition: all 0.3s ease;
        margin-bottom: 5px;
        opacity: 0;
        transform: translateY(20px);
        animation: formFieldSlideUp 0.6s ease forwards;
        position: relative;
        z-index: 2;
    }

    .form-control:nth-of-type(1) { animation-delay: 1.5s; }
    .form-control:nth-of-type(2) { animation-delay: 1.6s; }
    .form-control:nth-of-type(3) { animation-delay: 1.7s; }
    .form-control:nth-of-type(4) { animation-delay: 1.8s; }
    .form-control:nth-of-type(5) { animation-delay: 1.9s; }

    @keyframes formFieldSlideUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #156e68;
        outline: 0;
        box-shadow: 0 0 0 0.3rem rgba(21, 110, 104, 0.15), 0 8px 25px rgba(21, 110, 104, 0.1);
        transform: translateY(-2px);
    }

    textarea.form-control {
        min-height: 150px;
        resize: vertical;
    }

    .error {
        display: block;
        width: 100%;
        margin-top: 0.25rem;
        margin-bottom: 0.5rem;
        font-size: 0.875rem;
        color: #dc3545;
    }

    /* Submit Button */
    .readon.learn-more.submit {
        padding: 15px 40px;
        font-size: 1.1rem;
        font-weight: 600;
        border-radius: 50px;
        border: none;
        background: linear-gradient(135deg, #156e68, #1a7a73);
        color: white;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        position: relative;
        overflow: hidden;
        opacity: 0;
        transform: scale(0.9);
        animation: buttonPop 0.6s ease forwards 2.1s;
    }

    @keyframes buttonPop {
        from {
            opacity: 0;
            transform: scale(0.9);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .readon.learn-more.submit::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s ease;
    }

    .readon.learn-more.submit:hover {
        background: linear-gradient(135deg, #1a7a73, #156e68);
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 15px 35px rgba(21, 110, 104, 0.3);
    }

    .readon.learn-more.submit:hover::before {
        left: 100%;
    }

    /* Success Alert */
    .alert-success-2 {
        background: linear-gradient(135deg, #177169, #45dfac);
        color: #fff;
        border: none;
        border-radius: 12px;
        padding: 20px 25px;
        margin-bottom: 25px;
        opacity: 0;
        transform: translateY(-20px);
        animation: alertSlideIn 0.5s ease forwards;
    }

    @keyframes alertSlideIn {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Loading Spinner */
    .loading {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 2px solid rgba(255,255,255,0.3);
        border-top: 2px solid white;
        animation: spin 0.8s linear infinite;
        display: none;
    }

    .loading-show .loading {
        display: inline-block;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* Base Animation Keyframes */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    /* Responsive Design */
    @media (max-width: 1199px) {
        .rs-contact {
            padding: 80px 0;
        }

        .contact-box,
        .contact-widget {
            padding: 40px 30px;
        }

        .pl-70 {
            padding-left: 15px !important;
        }
    }

    @media (max-width: 991px) {
        .md-mb-60 {
            margin-bottom: 60px !important;
        }

        .rs-contact {
            padding: 60px 0;
        }

        .contact-box,
        .contact-widget {
            padding: 35px 25px;
        }

        .readon.learn-more.submit {
            width: 100%;
        }
    }

    @media (max-width: 767px) {
        .rs-contact {
            padding: 40px 0;
        }

        .contact-box,
        .contact-widget {
            padding: 25px 20px;
            margin-bottom: 30px;
        }

        .address-box {
            padding: 15px;
            margin-bottom: 20px;
        }

        .form-control {
            padding: 12px 15px;
            font-size: 0.95rem;
        }

        .readon.learn-more.submit {
            padding: 12px 30px;
            font-size: 1rem;
        }
    }
</style>

@section('content')
<div class="contact-page-wrapper">
    <!-- Main Contact Content Start -->
    <div class="rs-contact">
        <div class="container">
            <div class="row">
                <!-- Contact Information Section -->
                <div class="col-lg-5 md-mb-60">
                    <div class="contact-box">
                        <div class="sec-title">
                            <span class="sub-text style-bg">Let's Connect</span>
                            <h2 class="title">Get in Touch</h2>
                            <p class="mt-3">Ready to discuss your environmental consultancy needs? We're here to help you navigate the complex world of environmental compliance.</p>
                        </div>
                        
                        <div class="address-box">
                            <div class="address-text">
                                <span class="label">📞 Telephone</span>
                                <span>011-25-05-6683</span>
                            </div>
                        </div>
                        
                        <div class="address-box">
                            <div class="address-text">
                                <span class="label">📱 Mobile</span>
                                @php
                                    $phoneNumbers = explode(',', env('SITEPHONE'));
                                @endphp
                                @foreach($phoneNumbers as $phoneNumber)
                                    <a href="tel:{{ str_replace(['+', ' ', '-', '(', ')'], ['', '', '', '', ''], trim($phoneNumber)) }}">{{ trim($phoneNumber) }}</a>
                                @endforeach
                            </div>
                        </div>
                       
                        <div class="address-box">
                            <div class="address-text">
                                <span class="label">✉️ Email</span>
                                <a href="mailto:bd@bhoomijaenvirocare.com">bd@bhoomijaenvirocare.com</a>
                            </div>
                        </div>
                        
                        <div class="address-box">
                            <div class="address-text">
                                <span class="label">📍 Address</span>
                                <div class="desc">{{ env('SITEADDRESS') }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Section -->
                <div class="col-lg-7 pl-70 md-pl-15">
                    <div class="contact-widget">
                        <div class="sec-title2">
                            <span class="sub-text contact">Get In Touch</span>
                            <h2 class="title testi-title">Start Your Project Today</h2>
                            <p>Tell us about your environmental consultancy requirements and our expert team will respond promptly with tailored solutions.</p>
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
                        <form action="{{ route('contact-us.post') }}" method="POST" id="feedback-form">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Your Full Name *" required>
                                        <small class="text-danger error" id="error-name"></small>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="Email Address *" required>
                                        <small class="text-danger error" id="error-email"></small>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <input type="tel" id="phone" maxlength="10" pattern="[0-9]{10}"
                                            name="phone" class="form-control" placeholder="Phone Number (10 digits) *"
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
                                            placeholder="Tell us about your project requirements *" required></textarea>
                                        <small class="text-danger error" id="error-message"></small>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="readon learn-more submit"
                                                onclick="submitFeedback(event)">
                                                <span class="loading"></span> 
                                                Send Message
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
    </div>
    <!-- Main Contact Content End -->
</div>

<script>
    // Email validation helper function
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(String(email).toLowerCase());
    }

    // Generic form validation function
    function validateForm() {
        let isValid = true;
        $('.error').text('');

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

            if (field.required && (!value || value === '')) {
                $(`#error-${field.id}`).text(`${field.label} is required.`);
                isValid = false;
                return;
            }

            if (value) {
                if (field.type === 'email' && !validateEmail(value)) {
                    $(`#error-${field.id}`).text('Please enter a valid email address.');
                    isValid = false;
                } else if (field.type === 'tel' && field.pattern && !field.pattern.test(value)) {
                    $(`#error-${field.id}`).text('Phone number must be exactly 10 digits.');
                    isValid = false;
                }
            }
        });

        return isValid;
    }

    // Main form submission function
    function submitFeedback(event) {
        event.preventDefault();

        if (!validateForm()) {
            return;
        }

        const $form = $('#feedback-form');
        const actionUrl = $form.attr('action');
        const $submitButton = $('.readon.learn-more.submit');
        $submitButton.addClass('loading-show');
        const formData = $form.serialize();

        $.ajax({
            url: actionUrl,
            type: 'POST',
            data: formData,
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                $submitButton.removeClass('loading-show');

                if (response.status === 'success') {
                    $('#success-message').text(response.message);
                    $('#success-alert')
                        .removeClass('alert-danger')
                        .addClass('alert-success-2')
                        .fadeIn();

                    $form[0].reset();
                    $('.error').text('');

                    setTimeout(function() {
                        $('#success-alert').fadeOut();
                    }, 5000);

                } else {
                    $('#success-message').text('Form submitted successfully!');
                    $('#success-alert')
                        .removeClass('alert-danger')
                        .addClass('alert-success-2')
                        .fadeIn();

                    setTimeout(function() {
                        $('#success-alert').fadeOut();
                    }, 5000);
                }
            },
            error: function(xhr, status, error) {
                $submitButton.removeClass('loading-show');

                let errorMessage = 'An error occurred while submitting the form. Please try again.';

                if (xhr.responseJSON) {
                    if (xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }
                    if (xhr.responseJSON.errors) {
                        $('.error').text('');
                        $.each(xhr.responseJSON.errors, function(key, messages) {
                            const errorElementId = `error-${key}`;
                            if ($(`#${errorElementId}`).length) {
                                $(`#${errorElementId}`).text(messages[0]);
                            }
                        });
                        errorMessage = 'Please correct the highlighted errors.';
                    }
                }

                $('#success-message').text(errorMessage);
                $('#success-alert')
                    .removeClass('alert-success-2')
                    .addClass('alert-danger')
                    .fadeIn();

                setTimeout(function() {
                    $('#success-alert').fadeOut();
                }, 7000);
            }
        });
    }

    $(document).ready(function() {
        $('#phone').on('input', function() {
            let value = $(this).val().replace(/\D/g, '');
            if (value.length > 10) {
                value = value.substring(0, 10);
            }
            $(this).val(value);
        });
    });
</script>
@endsection
