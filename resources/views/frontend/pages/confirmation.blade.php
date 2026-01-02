@extends('frontend.layouts.master')

@section('title', 'Booking Confirmed - Thank You!')

@section('content')
<style>
    .confirmation-section {
        min-height: 100vh;
        background: linear-gradient(135deg, from-blue-50 via-indigo-50 to-purple-50);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem 1rem;
        position: relative;
        overflow: hidden;
    }

    .confirmation-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image:
            radial-gradient(circle at 20% 80%, rgba(62, 115, 185, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(212, 82, 118, 0.06) 0%, transparent 50%);
        opacity: 0.4;
    }

    .confirmation-content {
        position: relative;
        z-index: 2;
        max-width: 700px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .confirmation-header {
        text-align: center;
        margin-bottom: 2rem;
        background: linear-gradient(135deg, from-blue-50 to-white);
        border-radius: 24px;
        padding: 3rem 2rem;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(229, 231, 235, 0.8);
    }

    .confirmation-icon {
        width: 90px;
        height: 90px;
        background: linear-gradient(135deg, #3e73b9 0%, #d45276 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        box-shadow:
            0 20px 40px rgba(62, 115, 185, 0.3),
            0 10px 20px rgba(212, 82, 118, 0.2);
        animation: confirmationPulse 2s ease-in-out infinite;
        position: relative;
    }

    .confirmation-icon::before {
        content: '✓';
        font-size: 2.25rem;
        font-weight: 800;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .confirmation-title {
        font-size: 2rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 1rem;
        letter-spacing: -0.02em;
    }

    .confirmation-subtitle {
        font-size: 1rem;
        color: #64748b;
        margin-bottom: 0;
        line-height: 1.6;
        max-width: 350px;
        margin-left: auto;
        margin-right: auto;
    }

    .booking-card {
        background: linear-gradient(135deg, from-blue-50 to-white);
        border-radius: 20px;
        padding: 2rem;
        margin-bottom: 1.5rem;
        border: 1px solid rgba(229, 231, 235, 0.8);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        border-left: 4px solid #3e73b9;
    }

    .booking-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.25rem;
        padding-bottom: 0.75rem;
        border-bottom: 1px solid #e2e8f0;
    }

    .booking-header i {
        font-size: 1.25rem;
        color: #3e73b9;
    }

    .booking-header h3 {
        margin: 0;
        color: #1e293b;
        font-size: 1.125rem;
        font-weight: 600;
    }

    .booking-details {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 1.25rem;
    }

    .detail-item {
        display: flex;
        flex-direction: column;
        gap: 0.25rem;
    }

    .detail-label {
        font-size: 0.8rem;
        color: #64748b;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .detail-value {
        font-size: 0.95rem;
        color: #1e293b;
        font-weight: 600;
    }

    .important-info {
        background: linear-gradient(135deg, from-pink-50 to-white);
        border: 1px solid rgba(212, 82, 118, 0.2);
        border-radius: 16px;
        padding: 1.75rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .important-info h4 {
        color: #d45276;
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .important-info h4 i {
        font-size: 0.875rem;
    }

    .important-info ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .important-info li {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        margin-bottom: 0.75rem;
        color: #374151;
        font-size: 0.875rem;
        line-height: 1.4;
    }

    .important-info li i {
        color: #d45276;
        font-size: 0.75rem;
        margin-top: 0.125rem;
        flex-shrink: 0;
    }

    .confirmation-actions {
        display: flex;
        gap: 0.75rem;
        justify-content: center;
        flex-wrap: wrap;
        margin-bottom: 1.5rem;
    }

    .btn-primary-custom {
        background: linear-gradient(135deg, #d45276 0%, #3e73b9 100%);
        border: none;
        padding: 0.875rem 2rem;
        border-radius: 12px;
        color: white;
        font-weight: 600;
        font-size: 0.95rem;
        text-decoration: none;
        transition: all 0.2s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        box-shadow: 0 4px 12px rgba(212, 82, 118, 0.25);
    }

    .btn-primary-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(212, 82, 118, 0.3);
        color: white;
        text-decoration: none;
    }


    .contact-info {
        background: linear-gradient(135deg, from-blue-50 to-white);
        border-radius: 16px;
        padding: 1.75rem;
        text-align: center;
        border: 1px solid rgba(229, 231, 235, 0.8);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }

    .contact-info h4 {
        color: #1e293b;
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .contact-links {
        display: flex;
        gap: 1.5rem;
        justify-content: center;
        flex-wrap: wrap;
    }

    .contact-link {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.5rem;
        color: #64748b;
        text-decoration: none;
        transition: all 0.2s ease;
        padding: 0.75rem;
        border-radius: 8px;
    }

    .contact-link:hover {
        color: #3e73b9;
        transform: translateY(-2px);
        background: rgba(62, 115, 185, 0.05);
    }

    .contact-link i {
        font-size: 1.25rem;
        color: #3e73b9;
    }

    .contact-link span {
        font-size: 0.8rem;
        font-weight: 500;
    }

    /* Floating decorative elements */
    .floating-decoration {
        position: absolute;
        border-radius: 50%;
        background: linear-gradient(135deg, rgba(62, 115, 185, 0.08) 0%, rgba(212, 82, 118, 0.06) 100%);
        animation: float 6s ease-in-out infinite;
        z-index: 0;
    }

    .decoration-1 {
        width: 120px;
        height: 120px;
        top: 15%;
        left: 10%;
        animation-delay: 0s;
    }

    .decoration-2 {
        width: 90px;
        height: 90px;
        top: 25%;
        right: 15%;
        animation-delay: 2s;
    }

    .decoration-3 {
        width: 140px;
        height: 140px;
        bottom: 10%;
        left: 15%;
        animation-delay: 4s;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px) rotate(0deg);
        }
        50% {
            transform: translateY(-20px) rotate(180deg);
        }
    }

    @keyframes confirmationPulse {
        0%, 100% {
            transform: scale(1);
            box-shadow: 0 20px 40px rgba(62, 115, 185, 0.3);
        }
        50% {
            transform: scale(1.05);
            box-shadow: 0 25px 50px rgba(62, 115, 185, 0.4);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .confirmation-section {
            padding: 1rem;
        }

        .confirmation-content {
            max-width: 100%;
            padding: 0 1rem;
        }

        .confirmation-header {
            margin-bottom: 1.5rem;
            padding: 2rem 1.5rem;
            margin: 0 1rem 1.5rem;
            border-radius: 16px;
        }

        .confirmation-icon {
            width: 70px;
            height: 70px;
            margin-bottom: 1.25rem;
        }

        .confirmation-icon i {
            font-size: 1.75rem;
        }

        .confirmation-title {
            font-size: 1.5rem;
            margin-bottom: 0.75rem;
        }

        .confirmation-subtitle {
            font-size: 0.9rem;
            max-width: 100%;
        }

        .booking-card {
            padding: 1.5rem;
            margin-bottom: 1.25rem;
            border-radius: 12px;
        }

        .booking-header {
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
        }

        .booking-header h3 {
            font-size: 1rem;
        }

        .booking-details {
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        .detail-label {
            font-size: 0.75rem;
        }

        .detail-value {
            font-size: 0.9rem;
        }

        .important-info {
            padding: 1.25rem;
            margin-bottom: 1.25rem;
            border-radius: 12px;
        }

        .important-info h4 {
            font-size: 0.95rem;
            margin-bottom: 0.75rem;
        }

        .important-info li {
            font-size: 0.8rem;
            margin-bottom: 0.5rem;
        }

        .confirmation-actions {
            margin-bottom: 1.25rem;
        }

        .btn-primary {
            width: 100%;
            max-width: 300px;
            padding: 0.875rem 1.5rem;
            font-size: 0.9rem;
        }

        .contact-info {
            padding: 1.25rem;
            border-radius: 12px;
        }

        .contact-info h4 {
            font-size: 0.95rem;
        }

        .contact-links {
            gap: 1.25rem;
        }

        .contact-link {
            gap: 0.375rem;
            padding: 0.625rem;
        }

        .contact-link i {
            font-size: 1.125rem;
        }

        .contact-link span {
            font-size: 0.75rem;
        }
    }

    @media (max-width: 480px) {
        .confirmation-section {
            padding: 0.5rem;
        }

        .confirmation-content {
            padding: 0 0.5rem;
        }

        .confirmation-header {
            padding: 1.5rem 1rem;
            margin: 0 0.5rem 1rem;
        }

        .confirmation-icon {
            width: 60px;
            height: 60px;
            margin-bottom: 1rem;
        }

        .confirmation-icon i {
            font-size: 1.5rem;
        }

        .confirmation-title {
            font-size: 1.25rem;
        }

        .confirmation-subtitle {
            font-size: 0.85rem;
        }

        .booking-card {
            padding: 1.25rem;
            margin-bottom: 1rem;
        }

        .booking-header {
            margin-bottom: 0.75rem;
            padding-bottom: 0.375rem;
        }

        .important-info {
            padding: 1rem;
            margin-bottom: 1rem;
        }

        .btn-primary,

        .contact-info {
            padding: 1rem;
        }

        .contact-links {
            gap: 1rem;
        }
    }
</style>

<section class="confirmation-section">
    <div class="floating-decoration decoration-1"></div>
    <div class="floating-decoration decoration-2"></div>
    <div class="floating-decoration decoration-3"></div>

    <div class="confirmation-content">
        <div class="confirmation-header">
            <div class="confirmation-icon"></div>
            <h1 class="confirmation-title">Booking Confirmed!</h1>
            <p class="confirmation-subtitle">
                Your appointment has been successfully scheduled. We're excited to help you on your fertility journey.
            </p>
        </div>

            <div class="booking-card">
                <div class="booking-header">
                    <i class="fas fa-calendar-alt"></i>
                    <h3>Appointment Details</h3>
                </div>
                <div class="booking-details">
                    <div class="detail-item">
                        <span class="detail-label">Date & Time</span>
                        <span class="detail-value">{{ date('l, F j, Y \a\t g:i A', strtotime($booking->appointment_date ?? now())) }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Service</span>
                        <span class="detail-value">{{ $booking->service ?? 'Fertility Consultation' }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Location</span>
                        <span class="detail-value">{{ $booking->location ?? 'India IVF Center' }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Confirmation ID</span>
                        <span class="detail-value">#{{ $booking->id ?? 'IVF-' . rand(10000, 99999) }}</span>
                    </div>
                </div>
            </div>

            <div class="important-info">
                <h4><i class="fas fa-info-circle"></i> Important Information</h4>
                <ul>
                    <li><i class="fas fa-clock"></i> Please arrive 15 minutes early for your appointment</li>
                    <li><i class="fas fa-id-card"></i> Bring a valid ID and any previous medical records</li>
                    <li><i class="fas fa-phone"></i> We'll send you a reminder call 24 hours before your appointment</li>
                    <li><i class="fas fa-envelope"></i> A confirmation email has been sent to your registered email address</li>
                    <li><i class="fas fa-edit"></i> You can reschedule or cancel up to 24 hours before your appointment</li>
                </ul>
            </div>

        <div class="confirmation-actions">
            <a href="{{ route('home') }}" class="btn-primary">
                <i class="fas fa-home"></i>
                Go Home
            </a>
        </div>

            <div class="contact-info">
                <h4>Need to make changes or have questions?</h4>
                <div class="contact-links">
                    <a href="tel:+91-XXXXXXXXXX" class="contact-link">
                        <i class="fas fa-phone"></i>
                        <span>Call Us</span>
                    </a>
                    <a href="mailto:appointments@indiaivf.in" class="contact-link">
                        <i class="fas fa-envelope"></i>
                        <span>Email Us</span>
                    </a>
                    <a href="https://wa.me/91XXXXXXXXXX" class="contact-link">
                        <i class="fab fa-whatsapp"></i>
                        <span>WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
