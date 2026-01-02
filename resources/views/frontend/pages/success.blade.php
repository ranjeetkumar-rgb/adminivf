@extends('frontend.layouts.master')

@section('title', 'Success - Thank You!')

@section('content')
<style>
    .success-section {
        min-height: 100vh;
        background: linear-gradient(135deg, from-green-50 via-emerald-50 to-teal-50);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem 1rem;
        position: relative;
        overflow: hidden;
    }

    .success-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image:
            radial-gradient(circle at 20% 80%, rgba(34, 197, 94, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(16, 185, 129, 0.06) 0%, transparent 50%);
        opacity: 0.4;
    }

    .success-card {
        background: linear-gradient(135deg, from-green-50 to-white);
        border-radius: 24px;
        padding: 3rem 2rem;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(229, 231, 235, 0.8);
        max-width: 500px;
        width: 100%;
        position: relative;
        z-index: 1;
    }

    .success-icon {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 2rem;
        box-shadow:
            0 20px 40px rgba(34, 197, 94, 0.3),
            0 10px 20px rgba(16, 185, 129, 0.2);
        animation: successPulse 2s ease-in-out infinite;
        position: relative;
    }

    .success-icon::before {
        content: '✓';
        font-size: 2.5rem;
        font-weight: 800;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .success-title {
        font-size: 2rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 1rem;
        letter-spacing: -0.02em;
    }

    .success-description {
        font-size: 1rem;
        color: #64748b;
        margin-bottom: 2rem;
        line-height: 1.6;
        max-width: 350px;
        margin-left: auto;
        margin-right: auto;
    }

    .success-actions {
        display: flex;
        gap: 0.75rem;
        justify-content: center;
        flex-wrap: wrap;
        margin-bottom: 2rem;
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


    .next-steps {
        background: linear-gradient(135deg, from-green-50 to-white);
        border: 1px solid rgba(34, 197, 94, 0.2);
        border-radius: 16px;
        padding: 1.5rem;
        margin-top: 1.5rem;
        text-align: left;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .next-steps h3 {
        color: #15803d;
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 0.75rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .next-steps h3 i {
        font-size: 0.875rem;
    }

    .next-steps ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .next-steps li {
        display: flex;
        align-items: flex-start;
        gap: 0.5rem;
        margin-bottom: 0.5rem;
        color: #374151;
        font-size: 0.875rem;
        line-height: 1.4;
    }

    .next-steps li i {
        color: #22c55e;
        font-size: 0.75rem;
        margin-top: 0.125rem;
        flex-shrink: 0;
    }

    .success-footer {
        margin-top: 2rem;
        padding: 1.5rem;
        background: rgba(255, 255, 255, 0.8);
        border-radius: 16px;
        border: 1px solid rgba(229, 231, 235, 0.5);
    }

    .success-footer p {
        font-size: 0.9rem;
        color: #6b7280;
        margin: 0;
        line-height: 1.5;
        text-align: center;
    }

    .success-footer a {
        color: #3e73b9;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.2s ease;
    }

    .success-footer a:hover {
        color: #d45276;
        text-decoration: underline;
    }

    /* Floating decorative elements */
    .floating-decoration {
        position: absolute;
        border-radius: 50%;
        background: linear-gradient(135deg, rgba(34, 197, 94, 0.08) 0%, rgba(16, 185, 129, 0.06) 100%);
        animation: float 6s ease-in-out infinite;
        z-index: 0;
    }

    .decoration-1 {
        width: 100px;
        height: 100px;
        top: 10%;
        left: 10%;
        animation-delay: 0s;
    }

    .decoration-2 {
        width: 80px;
        height: 80px;
        top: 20%;
        right: 15%;
        animation-delay: 2s;
    }

    .decoration-3 {
        width: 120px;
        height: 120px;
        bottom: 15%;
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

    @keyframes successPulse {
        0%, 100% {
            transform: scale(1);
            box-shadow: 0 20px 40px rgba(34, 197, 94, 0.3);
        }
        50% {
            transform: scale(1.05);
            box-shadow: 0 25px 50px rgba(34, 197, 94, 0.4);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .success-section {
            min-height: 100vh;
            padding: 1rem;
        }

        .success-card {
            max-width: 100%;
            padding: 2rem 1.5rem;
            margin: 1rem;
            border-radius: 16px;
        }

        .success-icon {
            width: 70px;
            height: 70px;
            margin-bottom: 1.25rem;
        }

        .success-icon::before {
            font-size: 1.75rem;
        }

        .success-title {
            font-size: 1.5rem;
            margin-bottom: 0.75rem;
        }

        .success-description {
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
            max-width: 100%;
        }

        .success-actions {
            margin-bottom: 1.5rem;
        }

        .btn-primary-custom,
        .btn-secondary-custom {
            width: 100%;
            max-width: 280px;
            padding: 0.875rem 1.5rem;
            font-size: 0.9rem;
        }

        .next-steps {
            padding: 1rem;
            margin-top: 1.25rem;
        }

        .next-steps h3 {
            font-size: 0.95rem;
        }

        .next-steps li {
            font-size: 0.8rem;
        }

        .success-footer {
            margin-top: 1.25rem;
            padding-top: 0.875rem;
        }

        .success-footer p {
            font-size: 0.8rem;
        }
    }

    @media (max-width: 480px) {
        .success-section {
            padding: 0.5rem;
        }

        .success-card {
            padding: 1.5rem 1rem;
            margin: 0.5rem;
        }

        .success-icon {
            width: 60px;
            height: 60px;
            margin-bottom: 1rem;
        }

        .success-icon::before {
            font-size: 1.5rem;
        }

        .success-title {
            font-size: 1.25rem;
        }

        .success-description {
            font-size: 0.85rem;
        }

        .btn-primary-custom,
        .btn-secondary-custom {
            max-width: 240px;
            padding: 0.75rem 1.25rem;
        }

        .next-steps {
            padding: 0.875rem;
            margin-top: 1rem;
        }
    }
</style>

<section class="success-section">
    <div class="floating-decoration decoration-1"></div>
    <div class="floating-decoration decoration-2"></div>
    <div class="floating-decoration decoration-3"></div>

    <div class="success-card">
        <div class="success-icon"></div>

        <h1 class="success-title">Thank You!</h1>
        <p class="success-description">
            Your message has been successfully submitted. We appreciate you reaching out to us.
        </p>

        <div class="success-actions">
            <a href="{{ route('home') }}" class="btn-primary">
                <i class="fas fa-home"></i>
                Go Home
            </a>
        </div>

        <div class="next-steps">
            <h3><i class="fas fa-clock"></i> What happens next?</h3>
            <ul>
                <li><i class="fas fa-envelope"></i> You'll receive a confirmation email shortly</li>
                <li><i class="fas fa-user-md"></i> Our team will review your inquiry within 24 hours</li>
                <li><i class="fas fa-phone"></i> We'll contact you to discuss your needs</li>
                <li><i class="fas fa-calendar-check"></i> Schedule a consultation if needed</li>
            </ul>
        </div>

        <div class="success-footer">
            <p>
                Have questions? <a href="{{ route('faq') }}">Check our FAQ</a> or
                <a href="tel:+91-XXXXXXXXXX">call us directly</a>
            </p>
        </div>
    </div>
</section>

@endsection
