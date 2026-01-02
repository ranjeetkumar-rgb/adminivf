@extends('frontend.layouts.master')

@section('title', 'Server Error - 500 Internal Server Error')

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
        color: #dc2626;
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

    .error-alert {
        background-color: #fef2f2;
        border: 1px solid #fecaca;
        border-radius: 8px;
        padding: 1.25rem;
        margin-bottom: 2rem;
        text-align: left;
        max-width: 450px;
        margin-left: auto;
        margin-right: auto;
    }

    .error-alert-title {
        font-size: 0.95rem;
        font-weight: 600;
        color: #991b1b;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .error-alert-title i {
        font-size: 0.8rem;
        color: #dc2626;
    }

    .error-alert-text {
        font-size: 0.875rem;
        color: #7f1d1d;
        margin: 0;
        line-height: 1.5;
    }

    .error-description {
        font-size: 1rem;
        color: #64748b;
        margin-bottom: 3rem;
        line-height: 1.7;
        max-width: 450px;
        margin-left: auto;
        margin-right: auto;
    }

    .error-actions {
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
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

        .error-alert {
            padding: 1rem;
            margin-bottom: 1.5rem;
        }

        .error-alert-title {
            font-size: 0.9rem;
        }

        .error-alert-text {
            font-size: 0.8rem;
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

        .error-description {
            font-size: 0.9rem;
            margin-bottom: 2rem;
        }

        .error-alert {
            padding: 0.875rem;
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
        <div class="error-code">500</div>
        <h1 class="error-title">Server Error</h1>

        <div class="error-alert">
            <div class="error-alert-title">
                <i class="fas fa-exclamation-triangle"></i>
                Internal Server Error
            </div>
            <div class="error-alert-text">
                Something went wrong on our end. Our technical team has been notified and is working to resolve this issue as quickly as possible.
            </div>
        </div>

        <p class="error-description">
            We're experiencing technical difficulties. This is usually temporary and should be resolved shortly. Please try again in a few minutes.
        </p>

        <div class="error-actions">
            <a href="{{ route('home') }}" class="btn-primary">
                <i class="fas fa-home"></i>
                Go Home
            </a>
        </div>

        <div class="error-help">
            <p>
                Still having issues? <a href="mailto:support@indiaivf.in">Contact Support</a>
            </p>
        </div>
    </div>
</div>

@endsection
