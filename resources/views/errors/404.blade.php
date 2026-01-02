@extends('frontend.layouts.master')

@section('title', 'Page Not Found - 404 Error')

@section('content')
<style>
    body {
        font-family: Inter, sans-serif;
        margin: 0;
        padding: 0;
        line-height: 1.6;
    }

    .error-page {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem 1rem;
        background-color: #ffffff;
    }

    .error-container {
        max-width: 600px;
        text-align: center;
        padding: 2rem 1rem;
    }

    .error-code {
        font-size: 8rem;
        font-weight: 800;
        color: #d45276;
        margin-bottom: 1rem;
        line-height: 1;
    }

    .error-title {
        font-size: 2.5rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 1rem;
        letter-spacing: -0.02em;
    }

    .error-message {
        font-size: 1.125rem;
        color: #64748b;
        margin-bottom: 2.5rem;
        max-width: 400px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.6;
    }

    .error-description {
        font-size: 1rem;
        color: #6b7280;
        margin-bottom: 3rem;
        line-height: 1.7;
    }

    .error-actions {
        display: flex;
        justify-content: center;
        margin-bottom: 3rem;
    }

    .btn-primary {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 1rem 2rem;
        background-color: #d45276;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.2s ease;
        border: none;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #c03f69;
        transform: translateY(-1px);
        color: white;
        text-decoration: none;
    }


    .error-help {
        border-top: 1px solid #e5e7eb;
        padding-top: 2rem;
        margin-top: 2rem;
    }

    .error-help p {
        font-size: 0.95rem;
        color: #6b7280;
        margin: 0;
        line-height: 1.6;
    }

    .error-help a {
        color: #3e73b9;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.2s ease;
    }

    .error-help a:hover {
        color: #d45276;
        text-decoration: underline;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .error-page {
            padding: 1rem;
        }

        .error-container {
            padding: 1.5rem 1rem;
        }

        .error-code {
            font-size: 6rem;
            margin-bottom: 0.75rem;
        }

        .error-title {
            font-size: 2rem;
            margin-bottom: 0.75rem;
        }

        .error-message {
            font-size: 1rem;
            margin-bottom: 2rem;
        }

        .error-description {
            font-size: 0.95rem;
            margin-bottom: 2.5rem;
        }

        .error-actions {
            margin-bottom: 2.5rem;
        }

        .btn-primary {
            width: 100%;
            max-width: 300px;
            padding: 1rem 1.5rem;
            justify-content: center;
            font-size: 1rem;
        }

        .error-help {
            padding-top: 1.5rem;
            margin-top: 1.5rem;
        }

        .error-help p {
            font-size: 0.9rem;
        }
    }

    @media (max-width: 480px) {
        .error-page {
            padding: 0.5rem;
        }

        .error-container {
            padding: 1rem 0.5rem;
        }

        .error-code {
            font-size: 4rem;
        }

        .error-title {
            font-size: 1.5rem;
        }

        .error-message {
            font-size: 0.95rem;
        }

        .error-description {
            font-size: 0.9rem;
            margin-bottom: 2rem;
        }

        .btn-primary,
        .btn-secondary {
            max-width: 250px;
            padding: 0.875rem 1.25rem;
            font-size: 0.95rem;
        }

        .error-help p {
            font-size: 0.85rem;
        }
    }
</style>

<div class="error-page">
    <div class="error-container">
        <div class="error-code">404</div>
        <h1 class="error-title">Page Not Found</h1>
        <p class="error-message">
            The page you're looking for doesn't exist or has been moved.
        </p>
        <p class="error-description">
            Don't worry, we can help you find what you're looking for. Try going back to our homepage or exploring our services.
        </p>

        <div class="error-actions">
            <a href="{{ route('home') }}" class="btn-primary">
                <i class="fas fa-home"></i>
                Go Home
            </a>
        </div>

        <div class="error-help">
            <p>
                Need assistance? <a href="{{ route('faq') }}">Check our FAQ</a> or
                <a href="mailto:support@indiaivf.in">contact support</a>
            </p>
        </div>
    </div>
</div>

@endsection

