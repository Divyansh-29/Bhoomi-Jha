@extends('frontend.layout.base')
<style>
    .alert-success-2{
        background: linear-gradient(135deg, #177169, #45dfac);
        color: #fff;
    }
    .loading{
        width: 20px;
        height: 20px;
        border-radius: 50%;        
        border: 2px solid #000;
        border-top: 2px solid transparent; 
        animation: spin 0.8s linear infinite;
        display: none;    
    }
    .loading-show{
        display: inline-block;
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
@section('content')
    <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img3">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Feedback</h1>
                <ul>
                    <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                        <a class="active" href="https://Aplinka.in/contact-us/index.html">Home</a>
                    </li>
                    <li>Feedback</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Feedback Section Start -->
        <div class="rs-contact pt-120 md-pt-80">
            <div class="container">
                <div class="row">
                    {{-- <div class="col-lg-5 md-mb-60">
                        <div class="contact-box">
                            <div class="sec-title mb-45">
                                <span class="sub-text new-text white-color">Let's Talk</span>
                                <h2 class="title white-color">Speak With Us.</h2>
                            </div>
                            <div class="address-box mb-25">
                                <div class="address-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Phone:</span>
                                    <a href="tel:120-4540584">+91 120-4540584</a>
                                </div>
                            </div>
                            <div class="address-box mb-25">
                                <div class="address-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Email:</span>
                                    <span class="label">General Enquiries:</span>
                                    <a href="https://Aplinka.in/contact-us/#">info@Aplinka.in, darpan@Aplinka.in</a>
                                    <span class="label">For New Enquiries:</span>
                                    <a href="https://Aplinka.in/contact-us/#">Dudeja.harish@Aplinka.in,
                                        bd@Aplinka.in</a>
                                </div>
                            </div>
                            <div class="address-box mb-25">
                                <div class="address-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Corporate Office:</span>
                                    <div class="desc">A-48, Sec-64, Noida (UP) – 201301</div>
                                </div>
                            </div>


                            <div class="address-box mb-25">
                                <div class="address-icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Branch Office (Haryana):</span>
                                    <div class="desc">507-508, 2nd Floor, Deep Plaza, Opposite District Court, Near
                                        Rajiv Chowk, Gurugram-122001, Haryana</div>
                                </div>
                            </div>

                            <div class="address-box">
                                <div class="address-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Pant Nagar (Uttarakhand):</span>
                                    <div class="desc">B1/7 – 33, 3rd Floor, Metropolic City, Rudrapur Nainital Road,
                                        Udham Singh Nagar, Uttarakhand</div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-12 pl-70 md-pl-15">
                        <div class="contact-widget">
                            <div class="sec-title2 mb-40">
                                <span class="sub-text contact mb-15">Get In Touch</span>
                                <h2 class="title testi-title">We’d Love to Hear From You, Get In Touch With Us!</h2>
                            </div>

                            <!-- Display success or error messages -->
                            <div id="form-messages"></div>
                            <div class="alert alert-success-2 alert-dismissible fade show" role="alert" id="success-alert" style="display: none;">
                                <strong>Success!</strong> <span id="success-message"></span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            

                            <!-- Feedback Form Start -->
                            <form data-action="{{route('feedback-us.post')}}" method="POST" id="feedback-form">
                                @csrf
                                <fieldset>
                                    <div class="row">
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name *" required>
                                            <small class="text-danger error" id="error-name"></small>
                                        </div>

                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Email *" required>
                                            <small class="text-danger error" id="error-email"></small>
                                        </div>

                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input type="tel" id="phone" maxlength="10" pattern="[0-9]{10}" name="phone" class="form-control" placeholder="Phone no. *" required oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,10)">
                                            <small class="text-danger error" id="error-phone"></small>
                                        </div>

                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Your Subject *" required>
                                            <small class="text-danger error" id="error-subject"></small>
                                        </div>

                                        <div class="col-lg-12 mb-30">
                                            <textarea name="message" id="message" rows="6" class="form-control" placeholder="Message" required></textarea>
                                            <small class="text-danger error" id="error-message"></small>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-0">
                                                <button type="submit" class="readon learn-more submit" onclick="submitFeedback(event)"><span class="loading"></span> Submit Now</button>
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
            <div class="map-canvas pt-120 md-pt-80">
                {{-- <iframe src="./Aplinka -contactus_files/embed.html" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
            </div>
        </div>
        <!-- Contact Section Start -->

        <script>

        function validateForm(fields) {
            let isValid = true;
            $('.error').text(''); // Clear old errors

            fields.forEach(field => {
                const value = $(`#${field.id}`).val() || null;
                if (value != null) {
                    value.trim();
                }

                if (!value) {
                    $(`#error-${field.id}`).text(`${field.label} is required`);
                    isValid = false;
                } else if (field.type === 'email' && !validateEmail(value)) {
                    $(`#error-${field.id}`).text(`Please enter a valid email`);
                    isValid = false;
                } else if (field.type === 'tel' && !/^\d{10}$/.test(value)) {
                    $(`#error-${field.id}`).text(`Phone must be 10 digits`);
                    isValid = false;
                }
            });

            return isValid;
        }

        function validateEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }
        function submitFeedback(){

            event.preventDefault();
            const fields = [
                { id: 'name', label: 'Name' },
                { id: 'email', label: 'Email', type: 'email' },
                { id: 'phone', label: 'Phone', type: 'tel' },
                { id: 'subject', label: 'Subject' },
                { id: 'message', label: 'Message' }
            ];

            if (!validateForm(fields)) {
                return false; // stop submission
            }
            $('.readon').addClass('loading-show');
            const action = $('#feedback-form').data('action');
            $.ajax({
                type: 'POST',
                url: action,
                data: $('#feedback-form').serialize(),
                success: function(data){                    
                    $('#success-message').html(`${data.message}`);
                    $('#success-alert').fadeIn();  
                    $('.readon').removeClass('loading-show');
                    
                    
                    
                    $('#feedback-form')[0].reset();
                    setTimeout(() => {
                        $('#success-alert').fadeOut(); 
                    }, 3000);

                }
            })
            
        }
        </script>
@endsection
