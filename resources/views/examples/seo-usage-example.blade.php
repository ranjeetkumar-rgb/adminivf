<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- SEO Meta Tags and Structured Data --}}
    {!! \App\Helpers\SeoHelper::generateHeadSection('home') !!}
    
    {{-- Your CSS and other head elements --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Welcome to India IVF</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('treatments') }}">Treatments</a></li>
                <li><a href="{{ route('centres') }}">Centres</a></li>
                <li><a href="{{ route('training') }}">Training</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('more') }}">More</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h2>Advanced Fertility Care</h2>
            <p>Experience world-class IVF treatments with our expert team.</p>
        </section>

        <section class="services">
            <h3>Our Services</h3>
            <div class="service-grid">
                <div class="service-card">
                    <h4>IVF Treatment</h4>
                    <p>In vitro fertilization with high success rates.</p>
                </div>
                <div class="service-card">
                    <h4>IUI Treatment</h4>
                    <p>Intrauterine insemination procedures.</p>
                </div>
                <div class="service-card">
                    <h4>ICSI Treatment</h4>
                    <p>Intracytoplasmic sperm injection.</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} India IVF. All rights reserved.</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html> 