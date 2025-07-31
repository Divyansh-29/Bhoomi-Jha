@extends('frontend.layout.base')
@section('content')

<!-- Enhanced Careers Page -->
<div class="careers-wrapper">
    <div class="container">
        <!-- Simple Intro Section -->
        <div class="intro-section">
            <div class="row align-items-center">
                <div class="col-lg-6 animated-image-container">
                    <img src="{{asset('assets/images/career-intro-img.webp')}}" alt="Careers at {{ env('SITENAME') }}" class="intro-image">
                </div>
                <div class="col-lg-6">
                    <div class="intro-content">
                        <h1 class="animated-title">Join {{ env('SITENAME') }}</h1>
                        <p class="animated-desc">Shape the future of environmental sustainability with us. We're always looking for passionate professionals who share our vision.</p>
                        <p class="animated-desc-2">Be part of a team that makes a real difference in environmental consultancy and sustainable development.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced Application Form Section -->
        <div class="application-section">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="application-form animated-form">
                        <div class="form-header">
                            <h2 class="form-title">Submit Your Application</h2>
                            <p class="form-subtitle">Join our team of environmental professionals</p>
                        </div>
                        
                        <!-- Success/Error Messages -->
                        <div class="alert alert-success" id="success-alert" style="display: none;">
                            <div class="alert-icon">✓</div>
                            <div class="alert-content">
                                <strong>Application Submitted!</strong>
                                <span id="success-message">We'll review your application and get back to you soon.</span>
                            </div>
                        </div>
                        
                        <form action="{{ route('contact-us.post') }}" method="POST" enctype="multipart/form-data" id="career-form">
                            @csrf
                            <input type="hidden" name="form_type" value="career_application">
                            <input type="hidden" name="subject" value="Career Application">
                            
                            <!-- Personal Information Section -->
                            <div class="form-section">
                                <h3 class="section-title">
                                    <span class="section-number">01</span>
                                    Personal Information
                                </h3>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <label for="name" class="form-label">
                                                <span class="label-text">Full Name</span>
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" id="name" name="name" class="form-control" required>
                                            <small class="error-text" id="error-name"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <label for="email" class="form-label">
                                                <span class="label-text">Email Address</span>
                                                <span class="required">*</span>
                                            </label>
                                            <input type="email" id="email" name="email" class="form-control" required>
                                            <small class="error-text" id="error-email"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <label for="phone" class="form-label">
                                                <span class="label-text">Phone Number</span>
                                                <span class="required">*</span>
                                            </label>
                                            <input type="tel" id="phone" name="phone" class="form-control" maxlength="10" pattern="[0-9]{10}" required>
                                            <small class="error-text" id="error-phone"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <label for="location" class="form-label">
                                                <span class="label-text">Current Location</span>
                                            </label>
                                            <input type="text" id="location" name="location" class="form-control" placeholder="City, State">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Professional Information Section -->
                            <div class="form-section">
                                <h3 class="section-title">
                                    <span class="section-number">02</span>
                                    Professional Background
                                </h3>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <label for="experience" class="form-label">
                                                <span class="label-text">Total Experience</span>
                                            </label>
                                            <select id="experience" name="experience" class="form-control">
                                                <option value="">Select experience level</option>
                                                <option value="0-1">0-1 years (Fresher/Entry Level)</option>
                                                <option value="1-3">1-3 years</option>
                                                <option value="3-5">3-5 years</option>
                                                <option value="5-10">5-10 years</option>
                                                <option value="10+">10+ years (Senior Level)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <label for="position" class="form-label">
                                                <span class="label-text">Position of Interest</span>
                                            </label>
                                            <select id="position" name="position" class="form-control">
                                                <option value="">Select position</option>
                                                <option value="Environmental Consultant">Environmental Consultant</option>
                                                <option value="Environmental Scientist">Environmental Scientist</option>
                                                <option value="GIS Analyst">GIS Analyst</option>
                                                <option value="Project Manager">Project Manager</option>
                                                <option value="Other">Other/Open to Discussion</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <div class="form-group">
                                            <label for="skills" class="form-label">
                                                <span class="label-text">Key Skills & Expertise</span>
                                            </label>
                                            <textarea id="skills" name="skills" rows="3" class="form-control" placeholder="e.g., Environmental Impact Assessment, GIS Software, Water Quality Analysis, etc."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Application Details Section -->
                            <div class="form-section">
                                <h3 class="section-title">
                                    <span class="section-number">03</span>
                                    Application Details
                                </h3>
                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <div class="form-group">
                                            <label for="message" class="form-label">
                                                <span class="label-text">Cover Letter</span>
                                            </label>
                                            <textarea id="message" name="message" rows="6" class="form-control" placeholder="Tell us about yourself, your passion for environmental work, and why you want to join our team..."></textarea>
                                            <div class="character-count">
                                                <span id="char-count">0</span>/1000 characters
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <div class="form-group">
                                            <label for="resume" class="form-label">
                                                <span class="label-text">Upload Resume</span>
                                                <span class="required">*</span>
                                            </label>
                                            <div class="file-upload-wrapper">
                                                <input type="file" id="resume" name="resume" class="file-input" accept=".pdf,.doc,.docx" required>
                                                <div class="file-upload-area" id="file-upload-area">
                                                    <div class="upload-icon">📄</div>
                                                    <div class="upload-text">
                                                        <span class="upload-main">Choose file or drag & drop</span>
                                                        <span class="upload-sub">PDF, DOC, DOCX (Max 5MB)</span>
                                                    </div>
                                                </div>
                                                <div class="file-selected" id="file-selected" style="display: none;">
                                                    <div class="file-info">
                                                        <span class="file-name" id="file-name"></span>
                                                        <span class="file-size" id="file-size"></span>
                                                    </div>
                                                    <button type="button" class="remove-file" id="remove-file">×</button>
                                                </div>
                                            </div>
                                            <small class="error-text" id="error-resume"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Section -->
                            <div class="form-section submit-section">
                                <div class="text-center">
                                    <button type="submit" class="submit-btn" onclick="submitCareerForm(event)">
                                        <span class="btn-icon">🚀</span>
                                        <span class="btn-text">Submit Application</span>
                                        <div class="loading-spinner"></div>
                                    </button>
                                    <p class="submit-note">We'll review your application within 2-3 business days</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* ENHANCED CAREERS FORM STYLING */

.careers-wrapper {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    min-height: 100vh;
    padding: 80px 0;
}

/* Intro Section */
.intro-section {
    margin-bottom: 80px;
}

.animated-image-container {
    opacity: 0;
    transform: translateX(-30px);
    animation: slideInLeft 0.8s ease forwards 0.3s;
}

.intro-image {
    width: 100%;
    border-radius: 20px;
    box-shadow: 0 20px 40px rgba(21, 110, 104, 0.15);
    transition: transform 0.3s ease;
}

.intro-image:hover {
    transform: scale(1.02);
}

.intro-content {
    padding-left: 50px;
}

.animated-title {
    font-size: 3rem;
    font-weight: 800;
    background: linear-gradient(135deg, #156e68, #1a7a73);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 25px;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.8s ease forwards 0.5s;
}

.animated-desc, .animated-desc-2 {
    font-size: 1.1rem;
    color: #555;
    line-height: 1.7;
    margin-bottom: 20px;
    opacity: 0;
    transform: translateY(20px);
}

.animated-desc {
    animation: fadeInUp 0.8s ease forwards 0.7s;
}

.animated-desc-2 {
    animation: fadeInUp 0.8s ease forwards 0.9s;
}

/* Enhanced Application Form */
.application-section {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 1s ease forwards 1.1s;
}

.application-form {
    background: white;
    padding: 0;
    border-radius: 25px;
    box-shadow: 0 30px 80px rgba(0, 0, 0, 0.08);
    position: relative;
    overflow: hidden;
}

.application-form::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 6px;
    background: linear-gradient(90deg, #156e68, #aec944, #156e68);
}

/* Form Header */
.form-header {
    text-align: center;
    padding: 50px 50px 30px;
    background: linear-gradient(135deg, #f8f9fa, #ffffff);
}

.form-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #156e68;
    margin-bottom: 10px;
}

.form-subtitle {
    color: #666;
    font-size: 1.1rem;
    margin: 0;
}

/* Form Sections */
.form-section {
    padding: 40px 50px;
    border-bottom: 1px solid #f0f0f0;
    position: relative;
}

.form-section:last-child {
    border-bottom: none;
}

.section-title {
    display: flex;
    align-items: center;
    font-size: 1.5rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 2px solid #f0f0f0;
}

.section-number {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 35px;
    height: 35px;
    background: linear-gradient(135deg, #156e68, #1a7a73);
    color: white;
    border-radius: 50%;
    font-size: 1rem;
    font-weight: 700;
    margin-right: 15px;
}

/* Enhanced Form Fields */
.form-group {
    position: relative;
}

.form-label {
    display: flex;
    align-items: center;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
    font-size: 0.95rem;
}

.label-text {
    margin-right: 5px;
}

.required {
    color: #e74c3c;
    font-size: 1.1rem;
}

.form-control {
    width: 100%;
    padding: 15px 20px;
    border: 2px solid #e9ecef;
    border-radius: 12px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: #fff;
    position: relative;
}

.form-control:focus {
    border-color: #156e68;
    box-shadow: 0 0 0 0.25rem rgba(21, 110, 104, 0.15);
    outline: none;
    transform: translateY(-2px);
}

.form-control:hover {
    border-color: #c6d2cf;
}

/* Character Counter */
.character-count {
    text-align: right;
    font-size: 0.875rem;
    color: #6c757d;
    margin-top: 5px;
}

/* File Upload Enhancement */
.file-upload-wrapper {
    position: relative;
}

.file-input {
    position: absolute;
    opacity: 0;
    pointer-events: none;
}

.file-upload-area {
    border: 2px dashed #ddd;
    border-radius: 12px;
    padding: 30px 20px;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
    background: #fafbfc;
}

.file-upload-area:hover {
    border-color: #156e68;
    background: #f0f8f7;
}

.file-upload-area.dragover {
    border-color: #156e68;
    background: #e8f5f3;
    transform: scale(1.02);
}

.upload-icon {
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.upload-text {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.upload-main {
    font-weight: 600;
    color: #333;
    font-size: 1.1rem;
}

.upload-sub {
    color: #666;
    font-size: 0.9rem;
}

.file-selected {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px 20px;
    background: #e8f5f3;
    border: 2px solid #156e68;
    border-radius: 12px;
    margin-top: 10px;
}

.file-info {
    display: flex;
    flex-direction: column;
}

.file-name {
    font-weight: 600;
    color: #156e68;
}

.file-size {
    font-size: 0.875rem;
    color: #666;
}

.remove-file {
    background: #e74c3c;
    color: white;
    border: none;
    border-radius: 50%;
    width: 25px;
    height: 25px;
    cursor: pointer;
    font-size: 1.2rem;
    line-height: 1;
}

/* Error Messages */
.error-text {
    color: #e74c3c;
    font-size: 0.875rem;
    display: block;
    margin-top: 8px;
    font-weight: 500;
}

/* Success Alert Enhancement */
.alert-success {
    background: linear-gradient(135deg, #2ecc71, #27ae60);
    color: white;
    border: none;
    border-radius: 15px;
    padding: 20px;
    margin: 20px 50px;
    display: flex;
    align-items: center;
    gap: 15px;
}

.alert-icon {
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    font-weight: bold;
}

.alert-content {
    flex-grow: 1;
}

.alert-content strong {
    display: block;
    margin-bottom: 5px;
    font-size: 1.1rem;
}

/* Enhanced Submit Button */
.submit-section {
    background: linear-gradient(135deg, #f8f9fa, #ffffff);
    text-align: center;
}

.submit-btn {
    background: linear-gradient(135deg, #156e68, #1a7a73);
    color: white;
    border: none;
    padding: 18px 50px;
    border-radius: 50px;
    font-size: 1.2rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    display: inline-flex;
    align-items: center;
    gap: 12px;
    box-shadow: 0 8px 25px rgba(21, 110, 104, 0.3);
}

.submit-btn:hover {
    background: linear-gradient(135deg, #1a7a73, #156e68);
    transform: translateY(-3px);
    box-shadow: 0 15px 35px rgba(21, 110, 104, 0.4);
}

.submit-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.5s ease;
}

.submit-btn:hover::before {
    left: 100%;
}

.btn-icon {
    font-size: 1.1rem;
}

.loading-spinner {
    width: 20px;
    height: 20px;
    border: 2px solid rgba(255,255,255,0.3);
    border-top: 2px solid white;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    display: none;
}

.loading .loading-spinner {
    display: block;
}

.loading .btn-text,
.loading .btn-icon {
    display: none;
}

.submit-note {
    margin-top: 15px;
    color: #666;
    font-size: 0.9rem;
    font-style: italic;
}

/* Animation Keyframes */
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
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

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive Design */
@media (max-width: 991px) {
    .intro-content {
        padding-left: 0;
        margin-top: 40px;
        text-align: center;
    }
    
    .animated-title {
        font-size: 2.5rem;
    }
    
    .form-header,
    .form-section {
        padding: 30px 25px;
    }
}

@media (max-width: 767px) {
    .careers-wrapper {
        padding: 40px 0;
    }
    
    .intro-section {
        margin-bottom: 50px;
    }
    
    .animated-title {
        font-size: 2rem;
    }
    
    .form-header,
    .form-section {
        padding: 25px 20px;
    }
    
    .form-title {
        font-size: 2rem;
    }
    
    .submit-btn {
        width: 100%;
        justify-content: center;
    }
    
    .alert-success {
        margin: 20px;
    }
}
</style>

<script>
// Enhanced Form Validation
function validateCareerForm() {
    let isValid = true;
    
    // Clear previous errors
    document.querySelectorAll('.error-text').forEach(error => error.textContent = '');
    
    // Name validation
    const name = document.getElementById('name').value.trim();
    if (!name) {
        document.getElementById('error-name').textContent = 'Full name is required';
        isValid = false;
    } else if (name.length < 2) {
        document.getElementById('error-name').textContent = 'Name must be at least 2 characters';
        isValid = false;
    }
    
    // Email validation
    const email = document.getElementById('email').value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email) {
        document.getElementById('error-email').textContent = 'Email address is required';
        isValid = false;
    } else if (!emailRegex.test(email)) {
        document.getElementById('error-email').textContent = 'Please enter a valid email address';
        isValid = false;
    }
    
    // Phone validation
    const phone = document.getElementById('phone').value.trim();
    if (!phone) {
        document.getElementById('error-phone').textContent = 'Phone number is required';
        isValid = false;
    } else if (!/^\d{10}$/.test(phone)) {
        document.getElementById('error-phone').textContent = 'Phone number must be exactly 10 digits';
        isValid = false;
    }
    
    // Resume validation
    const resume = document.getElementById('resume').files[0];
    if (!resume) {
        document.getElementById('error-resume').textContent = 'Resume is required';
        isValid = false;
    } else {
        if (resume.size > 5 * 1024 * 1024) {
            document.getElementById('error-resume').textContent = 'Resume size must be under 5MB';
            isValid = false;
        }
        const allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        if (!allowedTypes.includes(resume.type)) {
            document.getElementById('error-resume').textContent = 'Please upload a PDF, DOC, or DOCX file';
            isValid = false;
        }
    }
    
    return isValid;
}

// Enhanced Form Submission
function submitCareerForm(event) {
    event.preventDefault();
    
    if (!validateCareerForm()) {
        // Scroll to first error
        const firstError = document.querySelector('.error-text:not(:empty)');
        if (firstError) {
            firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
        return;
    }
    
    // Show loading state
    const submitBtn = document.querySelector('.submit-btn');
    submitBtn.classList.add('loading');
    
    // Get form data
    const form = document.getElementById('career-form');
    const formData = new FormData(form);
    
    // AJAX submission
    fetch(form.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        submitBtn.classList.remove('loading');
        
        if (data.status === 'success') {
            document.getElementById('success-alert').style.display = 'flex';
            form.reset();
            document.getElementById('file-selected').style.display = 'none';
            document.getElementById('file-upload-area').style.display = 'block';
            updateCharCount();
            
            // Scroll to success message
            document.getElementById('success-alert').scrollIntoView({ behavior: 'smooth' });
            
            // Hide success message after 10 seconds
            setTimeout(() => {
                document.getElementById('success-alert').style.display = 'none';
            }, 10000);
        } else {
            alert('There was an error submitting your application. Please try again.');
        }
    })
    .catch(error => {
        submitBtn.classList.remove('loading');
        console.error('Error:', error);
        alert('There was an error submitting your application. Please try again.');
    });
}

// File Upload Enhancement
document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('resume');
    const fileUploadArea = document.getElementById('file-upload-area');
    const fileSelected = document.getElementById('file-selected');
    const fileName = document.getElementById('file-name');
    const fileSize = document.getElementById('file-size');
    const removeFile = document.getElementById('remove-file');
    
    // Click to upload
    fileUploadArea.addEventListener('click', () => fileInput.click());
    
    // Drag and drop
    fileUploadArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        fileUploadArea.classList.add('dragover');
    });
    
    fileUploadArea.addEventListener('dragleave', () => {
        fileUploadArea.classList.remove('dragover');
    });
    
    fileUploadArea.addEventListener('drop', (e) => {
        e.preventDefault();
        fileUploadArea.classList.remove('dragover');
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            fileInput.files = files;
            handleFileSelect(files[0]);
        }
    });
    
    // File selection
    fileInput.addEventListener('change', (e) => {
        if (e.target.files.length > 0) {
            handleFileSelect(e.target.files[0]);
        }
    });
    
    // Remove file
    removeFile.addEventListener('click', () => {
        fileInput.value = '';
        fileSelected.style.display = 'none';
        fileUploadArea.style.display = 'block';
    });
    
    function handleFileSelect(file) {
        fileName.textContent = file.name;
        fileSize.textContent = formatFileSize(file.size);
        fileSelected.style.display = 'flex';
        fileUploadArea.style.display = 'none';
    }
    
    function formatFileSize(bytes) {
        if (bytes === 0) return '0 Bytes';
        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(1)) + ' ' + sizes[i];
    }
});

// Character Counter
function updateCharCount() {
    const textarea = document.getElementById('message');
    const charCount = document.getElementById('char-count');
    const currentLength = textarea.value.length;
    charCount.textContent = currentLength;
    
    if (currentLength > 900) {
        charCount.style.color = '#e74c3c';
    } else if (currentLength > 700) {
        charCount.style.color = '#f39c12';
    } else {
        charCount.style.color = '#6c757d';
    }
}

document.getElementById('message').addEventListener('input', updateCharCount);

// Phone number formatting
document.getElementById('phone').addEventListener('input', function() {
    this.value = this.value.replace(/\D/g, '').slice(0, 10);
});

// Initialize character count
updateCharCount();
</script>

@endsection
