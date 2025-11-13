@extends('frontend.layouts.master')

@section('content')
    <style>
        ::-webkit-scrollbar {
            display: none;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        .brand-pink {
            color: #d45276;
        }

        .brand-blue {
            color: #3e73b9;
        }

        .brand-grey {
            color: #414042;
        }

        .bg-brand-pink {
            background-color: #d45276;
        }

        .bg-brand-blue {
            background-color: #3e73b9;
        }

        .bg-brand-grey {
            background-color: #414042;
        }

        .border-brand-pink {
            border-color: #d45276;
        }

        .border-brand-blue {
            border-color: #3e73b9;
        }

        .hover-brand-pink:hover {
            color: #d45276;
        }

        .hover-brand-blue:hover {
            color: #3e73b9;
        }

        .video-overlay {
            position: relative;
            cursor: pointer;
        }

        .video-overlay::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            background: rgba(62, 115, 185, 0.9);
            border-radius: 50%;
            z-index: 10;
        }

        .video-overlay::after {
            content: '\f04b';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 28px;
            z-index: 11;
        }

        .toc-item {
            transition: all 0.3s ease;
        }

        .toc-item.active {
            color: #d45276;
            background-color: rgba(212, 82, 118, 0.1);
        }

        .article-content h2 {
            color: #414042;
            font-size: 1.75rem;
            font-weight: 700;
            margin: 2rem 0 1rem 0;
        }

        .article-content h3 {
            color: #414042;
            font-size: 1.5rem;
            font-weight: 600;
            margin: 1.5rem 0 0.75rem 0;
        }

        .article-content h4 {
            color: #414042;
            font-size: 1.25rem;
            font-weight: 600;
            margin: 1.25rem 0 0.5rem 0;
        }

        .article-content p {
            color: #414042;
            line-height: 1.7;
            margin-bottom: 1rem;
        }

        .article-content ul,
        .article-content ol {
            margin: 1rem 0;
            padding-left: 1.5rem;
        }

        .article-content li {
            color: #414042;
            margin-bottom: 0.5rem;
            line-height: 1.6;
        }

        .article-content blockquote {
            border-left: 4px solid #d45276;
            background: rgba(212, 82, 118, 0.05);
            padding: 1rem 1.5rem;
            margin: 1.5rem 0;
            font-style: italic;
        }

        .article-content .highlight-box {
            background: linear-gradient(135deg, rgba(62, 115, 185, 0.1) 0%, rgba(212, 82, 118, 0.1) 100%);
            border-radius: 12px;
            padding: 1.5rem;
            margin: 1.5rem 0;
        }

        .cta-card {
            background: linear-gradient(135deg, rgba(212, 82, 118, 0.1) 0%, rgba(62, 115, 185, 0.1) 100%);
        }

        .like-button.liked {
            background-color: #d45276 !important;
            color: white !important;
        }

        .like-button.liked:hover {
            background-color: #b83d5f !important;
        }

        /* Mobile-specific improvements */
        @media (max-width: 640px) {
            .article-content h2 {
                font-size: 1.5rem;
                margin: 1.5rem 0 0.75rem 0;
            }
            
            .article-content h3 {
                font-size: 1.25rem;
                margin: 1.25rem 0 0.5rem 0;
            }
            
            .article-content h4 {
                font-size: 1.1rem;
                margin: 1rem 0 0.5rem 0;
            }
            
            .article-content p {
                font-size: 0.9rem;
                line-height: 1.6;
            }
            
            .article-content ul,
            .article-content ol {
                padding-left: 1.25rem;
            }
            
            .article-content blockquote {
                padding: 0.75rem 1rem;
                margin: 1rem 0;
            }
            
            .article-content .highlight-box {
                padding: 1rem;
                margin: 1rem 0;
            }
        }

        /* Line clamp utility for text truncation */
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
    <script>
        tailwind.config = {
            "theme": {
                "extend": {
                    "colors": {
                        "brand-pink": "#d45276",
                        "brand-blue": "#3e73b9",
                        "brand-grey": "#414042"
                    },
                    "fontFamily": {}
                }
            }
        };
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap">
    <style>
        .highlighted-section {
            outline: 2px solid #3F20FB;
            background-color: rgba(63, 32, 251, 0.1);
        }

        .edit-button {
            position: absolute;
            z-index: 1000;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        html,
        body {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    <!-- Breadcrumb Navigation -->
    <nav id="breadcrumb-nav" class="bg-white border-b border-gray-100 py-3 sm:py-4">
        <div class="container mx-auto px-4">
            <div class="flex items-center space-x-1 sm:space-x-2 text-xs sm:text-sm overflow-x-auto">
                <a href="{{ route('home') }}" class="text-gray-500 hover-brand-pink cursor-pointer whitespace-nowrap">Home</a>
                <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
                <a href="{{ route('blog.index') }}" class="text-gray-500 hover-brand-pink cursor-pointer whitespace-nowrap">Blog</a>
                <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
                @if($blog->category)
                <a href="{{ route('blog.category', $blog->category->slug) }}" class="text-gray-500 hover-brand-pink cursor-pointer whitespace-nowrap">{{ $blog->category->name }}</a>
                <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
                @endif
                <span class="brand-grey font-medium truncate">{{ $blog->title }}</span>
            </div>
        </div>
    </nav>
    <!-- Article Header Section -->
    <section id="article-header" class="bg-white py-6 sm:py-8 border-b border-gray-100">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-3 mb-4 sm:mb-6">
                    <!-- <span class="text-white px-3 sm:px-4 py-1 sm:py-2 rounded-full text-xs sm:text-sm font-medium" style="color: #3e73b9;">{{ $blog->category->name ?? 'General' }}</span>
                    <span class="text-gray-400 hidden sm:inline">•</span> -->
                    <span class="text-gray-600 text-xs sm:text-sm">{{ $blog->category->name ?? 'General' }}</span>
                    <span class="text-gray-400 hidden sm:inline">•</span>
                    <span class="text-gray-600 text-xs sm:text-sm" id="reading-time">{{ $blog->reading_time }}</span>
                    <span class="text-gray-400 hidden sm:inline">•</span>
                    <span class="text-gray-600 text-xs sm:text-sm">Published on {{ $blog->formatted_published_date }}</span>
                </div>
                <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold brand-grey mb-4 sm:mb-6 leading-tight">{{ $blog->title }}</h1>
                <p class="text-base sm:text-lg lg:text-xl text-gray-600 mb-6 sm:mb-8 leading-relaxed">{{ $blog->excerpt }}</p>
                <!-- Author and Meta Info -->
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between border-t border-gray-200 pt-4 sm:pt-6 gap-4 lg:gap-0">
                    <div class="flex items-center gap-3 sm:gap-4">
                        <img src="{{ $blog->author_image ? asset('storage/' . $blog->author_image) : 'https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-5.jpg' }}"
                            alt="{{ $blog->author_name }}" class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 rounded-full">
                        <div>
                            <p class="font-semibold brand-grey text-sm sm:text-base lg:text-lg">{{ $blog->author_name }}</p>
                            <p class="text-gray-600 text-xs sm:text-sm lg:text-base">{{ $blog->author_title }}</p>
                            <p class="text-xs sm:text-sm text-gray-500 hidden sm:block">{{ $blog->author_bio }}</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between lg:justify-end gap-4 sm:gap-6">
                        <div class="flex items-center gap-4 sm:gap-6">
                            <div class="text-center ml-5">
                                <div id="views-count" class="text-lg sm:text-xl lg:text-2xl font-bold brand-blue">{{ number_format($blog->views ?? 0) }}</div>
                                <div class="text-xs sm:text-sm text-gray-500">Reads</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <button
                                class="w-8 h-8 sm:w-10 sm:h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-brand-pink hover:text-white transition-all like-button">
                                <i class="fas fa-heart text-xs sm:text-sm"></i>
                            </button>
                            <button
                                class="w-8 h-8 sm:w-10 sm:h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-brand-blue hover:text-white transition-all">
                                <i class="fas fa-share text-xs sm:text-sm"></i>
                            </button>
                            <button
                                class="w-8 h-8 sm:w-10 sm:h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-green-500 hover:text-white transition-all">
                                <i class="fab fa-whatsapp text-xs sm:text-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Media Section -->
    <section id="hero-media" class="bg-white py-6 sm:py-8">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                @if($blog->content_type === 'video' && $blog->video_url)
                <div class="relative rounded-xl sm:rounded-2xl overflow-hidden shadow-lg">
                    @php
                        $embedUrl = $blog->video_embed_url;
                        $thumbnail = $blog->featured_image ? asset('storage/' . $blog->featured_image) : 'https://storage.googleapis.com/uxpilot-auth.appspot.com/70181682fe-facb641d12e787079343.png';
                    @endphp

                    @if($embedUrl)
                        <div class="relative w-full h-[250px] sm:h-[400px] lg:h-[500px] bg-black">
                            @if($blog->is_external_video)
                                <!-- YouTube/Vimeo iframe -->
                                <iframe
                                    class="w-full h-full rounded-xl sm:rounded-2xl"
                                    src="{{ $embedUrl }}"
                                    title="{{ $blog->title }}"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                                </iframe>
                            @else
                                <!-- Direct video file -->
                                <video
                                    class="w-full h-full rounded-xl sm:rounded-2xl object-cover"
                                    controls
                                    preload="metadata"
                                    poster="{{ $thumbnail }}"
                                    title="{{ $blog->title }}">
                                    <source src="{{ $embedUrl }}" type="video/mp4">
                                    <source src="{{ $embedUrl }}" type="video/webm">
                                    <source src="{{ $embedUrl }}" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            @endif

                            @if($blog->video_description)
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-3 sm:p-6">
                                    <p class="text-white text-xs sm:text-sm">{{ $blog->video_description }}</p>
                                </div>
                            @endif
                        </div>
                    @else
                        <!-- Fallback for unsupported URLs -->
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden shadow-lg video-overlay">
                            <img class="w-full h-[250px] sm:h-[400px] lg:h-[500px] object-cover"
                                src="{{ $thumbnail }}"
                                alt="{{ $blog->title }}">
                            <div class="absolute inset-0 flex items-center justify-center bg-black/50">
                                <div class="text-center text-white px-4">
                                    <div class="mb-3 sm:mb-4">
                                        <svg class="w-12 h-12 sm:w-16 sm:h-16 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M8 5v10l8-5-8-5z"/>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg sm:text-xl font-bold mb-2">Video Content</h3>
                                    <p class="text-xs sm:text-sm mb-3 sm:mb-4">{{ $blog->video_description ?: 'Watch: ' . $blog->title }}</p>
                                    <a href="{{ $blog->video_url }}" target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 sm:px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition-colors text-xs sm:text-sm">
                                        <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12l-4-4h8l-4 4z"/>
                                        </svg>
                                        Watch Video
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                @else
                <div class="relative rounded-xl sm:rounded-2xl overflow-hidden shadow-lg">
                    <img class="w-full h-[250px] sm:h-[400px] lg:h-[500px] object-cover"
                        src="{{ $blog->featured_image ? asset('storage/' . $blog->featured_image) : 'https://storage.googleapis.com/uxpilot-auth.appspot.com/70181682fe-facb641d12e787079343.png' }}"
                        alt="{{ $blog->title }}">
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-3 sm:p-6">
                        <p class="text-white text-xs sm:text-sm">{{ $blog->image_caption ?: 'Photo: ' . $blog->title }}</p>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
    <!-- Main Content Area -->
    <section id="main-content-area" class="py-8 sm:py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 sm:gap-8 lg:gap-12">
                <!-- Table of Contents Sidebar -->
                <div id="toc-sidebar" class="lg:col-span-1 order-first lg:order-first">
                    <div class="sticky top-20 sm:top-24">
                        <div class="bg-white rounded-xl sm:rounded-2xl shadow-lg p-4 sm:p-6 mb-6 sm:mb-8">
                            <div class="flex items-center justify-between mb-3 sm:mb-4">
                                <h3 class="text-base sm:text-lg font-bold brand-grey">Table of Contents</h3>
                                <button id="toc-toggle" class="lg:hidden">
                                    <i class="fas fa-chevron-down text-sm"></i>
                                </button>
                            </div>
                            <div id="toc-content" class="space-y-1 sm:space-y-2">
                                <!-- Dynamic TOC will be generated here by JavaScript -->
                                <div id="toc-loading" class="text-center text-gray-500 text-xs sm:text-sm py-3 sm:py-4">
                                    <i class="fas fa-spinner fa-spin mr-2"></i>Generating table of contents...
                                </div>
                            </div>
                        </div>
                        <!-- Quick Contact Widget -->
                        <div class="bg-gradient-to-br from-brand-pink to-brand-blue rounded-xl sm:rounded-2xl p-4 sm:p-6 text-white">
                            <div class="text-center mb-3 sm:mb-4">
                                <i class="fas fa-phone-alt text-xl sm:text-2xl mb-2 sm:mb-3"></i>
                                <h3 class="text-base sm:text-lg font-bold mb-1 sm:mb-2">Need Personalized Advice?</h3>
                                <p class="text-xs sm:text-sm opacity-90">Speak with our fertility experts</p>
                            </div>
                            <div class="space-y-2 sm:space-y-3">
                                <button
                                    class="w-full bg-white bg-opacity-20 rounded-full py-2 sm:py-3 px-3 sm:px-4 hover:bg-opacity-30 transition-all flex items-center justify-center gap-2 text-xs sm:text-sm">
                                    <i class="fas fa-phone text-xs"></i>
                                    <span class="font-semibold">Call Now</span>
                                </button>
                                <button
                                    class="w-full bg-green-500 rounded-full py-2 sm:py-3 px-3 sm:px-4 hover:bg-green-600 transition-all flex items-center justify-center gap-2 text-xs sm:text-sm">
                                    <i class="fab fa-whatsapp text-xs"></i>
                                    <span class="font-semibold">WhatsApp</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Article Content -->
                <div id="article-content" class="lg:col-span-3">
                    <div class="bg-white rounded-xl sm:rounded-2xl shadow-lg p-4 sm:p-6 lg:p-8 xl:p-12 article-content" id="blog-content">
                        {!! $blog->description !!}

                        <!-- Article Tags and Sharing -->
                        <div class="border-t border-gray-200 pt-6 sm:pt-8 mt-8 sm:mt-12">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 sm:gap-0">
                                <div class="flex items-center gap-3 sm:gap-4 text-xs sm:text-sm text-gray-500">
                                    <span class="flex items-center gap-1"><i class="fas fa-heart text-xs"></i> <span class="article-likes-count">{{ $blog->likes ?? 0 }}</span> likes</span>
                                    <span class="flex items-center gap-1"><i class="fas fa-comment text-xs"></i> {{ $blog->comments_count ?? 0 }} comments</span>
                                    <span class="flex items-center gap-1"><i class="fas fa-share text-xs"></i> {{ $blog->shares ?? 0 }} shares</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Author Bio Section -->
    @if($blog->author_name || $blog->author_bio)
    <section id="author-bio" class="py-8 sm:py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-gray-50 rounded-xl sm:rounded-2xl p-4 sm:p-6 lg:p-8">
                    <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 items-start">
                        @if($blog->author_image)
                            <img 
                            src="{{ $blog->author_image ? asset('storage/' . $blog->author_image) : 'https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-5.jpg' }}"
                            alt="{{ $blog->author_name ?? 'Author' }}" 
                                 class="w-20 h-20 sm:w-24 sm:h-24 lg:w-32 lg:h-32 rounded-full flex-shrink-0 object-cover mx-auto sm:mx-0">
                        @else
                            <div class="w-20 h-20 sm:w-24 sm:h-24 lg:w-32 lg:h-32 rounded-full flex-shrink-0 bg-brand-pink flex items-center justify-center mx-auto sm:mx-0">
                                <span class="text-white text-lg sm:text-xl lg:text-2xl font-bold">
                                    {{ strtoupper(substr($blog->author_name ?? 'A', 0, 1)) }}
                                </span>
                            </div>
                        @endif
                        <div class="flex-1 text-center sm:text-left" style="margin:auto">
                            @if($blog->author_name)
                                <h3 class="text-lg sm:text-xl lg:text-2xl font-bold brand-grey mb-1 sm:mb-2">About {{ $blog->author_name }}</h3>
                            @endif
                            @if($blog->author_title)
                                <p class="text-brand-pink font-semibold mb-3 sm:mb-4 text-sm sm:text-base">{{ $blog->author_title }}</p>
                            @endif
                            @if($blog->author_bio)
                                <p class="text-gray-600 mb-3 sm:mb-4 text-sm sm:text-base">{{ $blog->author_bio }}</p>
                            @endif
                            
                            <!-- Author Stats (optional - can be added to blog model if needed) -->
                            <div class="grid grid-cols-3 gap-3 sm:gap-4 mb-3 sm:mb-4">
                                <div class="text-center">
                                    <div class="text-lg sm:text-xl lg:text-2xl font-bold brand-pink">{{ $blog->views ?? 0 }}</div>
                                    <div class="text-xs sm:text-sm text-gray-500">Article Views</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-lg sm:text-xl lg:text-2xl font-bold brand-blue article-likes-count">{{ $blog->likes ?? 0 }}</div>
                                    <div class="text-xs sm:text-sm text-gray-500">Likes</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-lg sm:text-xl lg:text-2xl font-bold text-green-500">{{ $blog->comments_count ?? 0 }}</div>
                                    <div class="text-xs sm:text-sm text-gray-500">Comments</div>
                                </div>
                            </div>
                            
                            <div class="flex flex-col sm:flex-row gap-2 sm:gap-3 justify-center sm:justify-start">
                                <button
                                    class="bg-brand-pink text-white px-4 sm:px-6 py-2 sm:py-2 rounded-full text-xs sm:text-sm font-semibold hover:bg-opacity-90 transition-all">
                                    Book Consultation
                                </button>
                                <!-- <button
                                    class="border-2 border-brand-blue text-brand-blue px-4 sm:px-6 py-2 sm:py-2 rounded-full text-xs sm:text-sm font-semibold hover:bg-brand-blue hover:text-white transition-all">
                                    View Profile
                                </button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- Fertility Specialists Carousel -->
    <section id="specialists-carousel" class="py-8 sm:py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-8 sm:mb-12">
                    <h2 class="text-2xl sm:text-3xl font-bold brand-grey mb-3 sm:mb-4">Meet Our Fertility Specialists</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto text-sm sm:text-base">Our team of experienced fertility experts is dedicated to
                        providing personalized care and achieving the best outcomes for every patient</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                    <!-- Specialist Card 1 -->
                    <div class="bg-white rounded-xl sm:rounded-2xl shadow-lg p-4 sm:p-6 text-center hover:shadow-xl transition-all">
                        <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-2.jpg"
                            alt="Dr. Rajesh Kumar" class="w-20 h-20 sm:w-24 sm:h-24 rounded-full mx-auto mb-3 sm:mb-4">
                        <h3 class="text-lg sm:text-xl font-bold brand-grey mb-1 sm:mb-2">Dr. Rajesh Kumar</h3>
                        <p class="text-brand-blue font-semibold mb-2 sm:mb-3 text-sm sm:text-base">Reproductive Endocrinologist</p>
                        <p class="text-gray-600 text-xs sm:text-sm mb-3 sm:mb-4">Specializes in male infertility and advanced reproductive
                            technologies with 12+ years of experience</p>
                        <div class="flex justify-center gap-2 sm:gap-4 mb-3 sm:mb-4 text-xs sm:text-sm">
                            <span class="bg-blue-50 text-brand-blue px-2 sm:px-3 py-1 rounded-full">ICSI Expert</span>
                            <span class="bg-green-50 text-green-600 px-2 sm:px-3 py-1 rounded-full">12+ Years</span>
                        </div>
                        <button
                            class="bg-brand-pink text-white px-4 sm:px-6 py-2 rounded-full text-xs sm:text-sm font-semibold hover:bg-opacity-90 transition-all w-full">
                            Book Consultation
                        </button>
                    </div>
                    <!-- Specialist Card 2 -->
                    <div class="bg-white rounded-xl sm:rounded-2xl shadow-lg p-4 sm:p-6 text-center hover:shadow-xl transition-all">
                        <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-1.jpg"
                            alt="Dr. Kavya Reddy" class="w-20 h-20 sm:w-24 sm:h-24 rounded-full mx-auto mb-3 sm:mb-4">
                        <h3 class="text-lg sm:text-xl font-bold brand-grey mb-1 sm:mb-2">Dr. Kavya Reddy</h3>
                        <p class="text-brand-blue font-semibold mb-2 sm:mb-3 text-sm sm:text-base">Fertility Specialist</p>
                        <p class="text-gray-600 text-xs sm:text-sm mb-3 sm:mb-4">Expert in egg freezing, donor programs, and fertility
                            preservation with focus on patient-centered care</p>
                        <div class="flex justify-center gap-2 sm:gap-4 mb-3 sm:mb-4 text-xs sm:text-sm">
                            <span class="bg-pink-50 text-brand-pink px-2 sm:px-3 py-1 rounded-full">Egg Freezing</span>
                            <span class="bg-green-50 text-green-600 px-2 sm:px-3 py-1 rounded-full">10+ Years</span>
                        </div>
                        <button
                            class="bg-brand-pink text-white px-4 sm:px-6 py-2 rounded-full text-xs sm:text-sm font-semibold hover:bg-opacity-90 transition-all w-full">
                            Book Consultation
                        </button>
                    </div>
                    <!-- Specialist Card 3 -->
                    <div class="bg-white rounded-xl sm:rounded-2xl shadow-lg p-4 sm:p-6 text-center hover:shadow-xl transition-all">
                        <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-4.jpg"
                            alt="Dr. Arjun Mehta" class="w-20 h-20 sm:w-24 sm:h-24 rounded-full mx-auto mb-3 sm:mb-4">
                        <h3 class="text-lg sm:text-xl font-bold brand-grey mb-1 sm:mb-2">Dr. Arjun Mehta</h3>
                        <p class="text-brand-blue font-semibold mb-2 sm:mb-3 text-sm sm:text-base">Clinical Embryologist</p>
                        <p class="text-gray-600 text-xs sm:text-sm mb-3 sm:mb-4">Leading embryologist specializing in preimplantation genetic
                            testing and advanced lab techniques</p>
                        <div class="flex justify-center gap-2 sm:gap-4 mb-3 sm:mb-4 text-xs sm:text-sm">
                            <span class="bg-purple-50 text-purple-600 px-2 sm:px-3 py-1 rounded-full">PGT Expert</span>
                            <span class="bg-green-50 text-green-600 px-2 sm:px-3 py-1 rounded-full">8+ Years</span>
                        </div>
                        <button
                            class="bg-brand-pink text-white px-4 sm:px-6 py-2 rounded-full text-xs sm:text-sm font-semibold hover:bg-opacity-90 transition-all w-full">
                            Book Consultation
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Articles Slider -->
    @if($relatedBlogs->count() > 0 || $similarBlogs->count() > 0)
    <section id="related-articles" class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-3xl font-bold text-support-grey">Related Articles</h2>
                    <a href="{{ route('blog.category', $blog->category->slug) }}" class="text-primary-pink font-semibold hover:underline">View All in {{ $blog->category->name }}</a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach(($relatedBlogs->count() > 0 ? $relatedBlogs : $similarBlogs)->take(3) as $relatedBlog)
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all group">
                        <div class="relative">
                            <img class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                                src="{{ $relatedBlog->featured_image ? asset('storage/' . $relatedBlog->featured_image) : 'https://storage.googleapis.com/uxpilot-auth.appspot.com/5aef1ce0af-317e4fcc09506136c86a.png' }}"
                                alt="{{ $relatedBlog->title }}">
                            <div class="absolute top-3 left-3">
                                <span class="{{ $relatedBlog->category->color_class ?? 'bg-primary-blue' }} text-white px-3 py-1 rounded-full text-sm font-medium">
                                    {{ $relatedBlog->category->name ?? 'General' }}
                                </span>
                            </div>
                            @if($relatedBlog->content_type === 'video')
                            <div class="absolute top-3 right-3">
                                <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-medium flex items-center gap-1">
                                    <i class="fas fa-play"></i> Video
                                </span>
                            </div>
                            @endif
                        </div>
                        <div class="p-6">
                            <a href="{{ route('blog.show', $relatedBlog->slug) }}">
                                <h3 class="text-xl font-bold text-support-grey mb-3 group-hover:text-primary-pink transition-colors">{{ $relatedBlog->title }}</h3>
                            </a>
                            <p class="text-gray-600 mb-4">{{ $relatedBlog->excerpt }}</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <img src="{{ $relatedBlog->author_image ? asset('storage/' . $relatedBlog->author_image) : 'https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-3.jpg' }}"
                                        alt="{{ $relatedBlog->author_name }}" class="w-8 h-8 rounded-full">
                                    <span class="text-sm text-support-grey font-medium">{{ $relatedBlog->author_name }}</span>
                                </div>
                                <span class="text-gray-500 text-sm">{{ $relatedBlog->video_duration ?: $relatedBlog->reading_time }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                @if(($relatedBlogs->count() > 0 ? $relatedBlogs : $similarBlogs)->count() > 3)
                <div class="text-center mt-8">
                    <a href="{{ route('blog.category', $blog->category->slug) }}" class="bg-primary-pink text-white px-8 py-3 rounded-full font-semibold hover:bg-opacity-90 transition-all">
                        View More Articles in {{ $blog->category->name }}
                    </a>
                </div>
                @endif
            </div>
        </div>
    </section>
    @endif
    <!-- Comments Section -->
    <section id="comments-section" class="py-12 bg-gray-50">
        <div class="container mx-auto">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold brand-grey mb-6">Comments (<span id="comments-count">{{ $blog->comments_count ?? 0 }}</span>)</h3>
                    
                    <!-- Comment Form -->
                    <div class="border-b border-gray-200 pb-6 mb-6">
                        <form id="comment-form">
                            <div class="flex gap-4">
                                    <!-- <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-3.jpg"
                                        alt="User Avatar" class="w-12 h-12 rounded-full flex-shrink-0"> -->
                                <div class="flex-1">
                                    <!-- Email Check for Returning Users -->
                                    <div id="email-check-section" class="mb-4">
                                        <div class="p-4 bg-gray-50 rounded-lg">
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Enter your email to continue</label>
                                            <div class="flex gap-2">
                                                <input type="email" id="email-check" placeholder="Your Email *" required
                                                    class="flex-1 p-3 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink">
                                                <button type="button" id="check-email-btn" 
                                                    class="bg-brand-pink text-white px-6 py-3 rounded-lg font-semibold hover:bg-opacity-90 transition-all">
                                                    <i class="fas fa-check"></i> 
                                                </button>
                                            </div>
                                            <p class="text-xs text-gray-500 mt-2">We'll check if you've commented before to pre-fill your details</p>
                                        </div>
                                    </div>

                                    <!-- User Details Section (Hidden by default) -->
                                    <div id="user-details-section" class="hidden">
                                        <!-- Basic Information -->
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                            <input type="text" name="name" placeholder="Your Name *" required
                                                class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink">
                                            <input type="email" name="email" placeholder="Your Email *" required
                                                class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink">
                                        </div>
                                        
                                        <!-- Additional User Details -->
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                            <input type="tel" name="phone" placeholder="Phone Number (Optional)"
                                                class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink">
                                            <input type="text" name="location" placeholder="Location (Optional)"
                                                class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink">
                                        </div>
                                        
                                        <!-- Consultation Interest -->
                                        <div class="mb-4">
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Are you interested in a consultation?</label>
                                            <div class="flex gap-4">
                                                <label class="flex items-center">
                                                    <input type="radio" name="consultation_interest" value="yes" class="mr-2 text-brand-pink focus:ring-brand-pink">
                                                    <span class="text-sm">Yes, I'm interested</span>
                                                </label>
                                                <label class="flex items-center">
                                                    <input type="radio" name="consultation_interest" value="maybe" class="mr-2 text-brand-pink focus:ring-brand-pink">
                                                    <span class="text-sm">Maybe later</span>
                                                </label>
                                                <label class="flex items-center">
                                                    <input type="radio" name="consultation_interest" value="no" class="mr-2 text-brand-pink focus:ring-brand-pink">
                                                    <span class="text-sm">Not interested</span>
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <!-- Privacy Notice -->
                                        <div class="mb-4 p-3 bg-blue-50 rounded-lg">
                                            <div class="flex items-start">
                                                <i class="fas fa-info-circle text-blue-500 mt-1 mr-2"></i>
                                                <div class="text-sm text-blue-700">
                                                    <strong>Privacy Notice:</strong> Your information will be used to provide better consultation services. 
                                                    We respect your privacy and will not share your details with third parties.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Comment Text -->
                                    <div id="comment-section" class="hidden">
                                        <textarea name="comment" placeholder="Share your thoughts or ask a question..." required
                                            class="w-full p-4 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink resize-none h-24"></textarea>
                                        
                                        <div class="flex justify-between items-center mt-3">
                                            <span class="text-sm text-gray-500">Please be respectful and constructive</span>
                                            <div class="flex gap-2">
                                                <button type="button" id="back-to-email-btn" 
                                                    class="bg-gray-500 text-white px-4 py-2 rounded-full font-semibold hover:bg-opacity-90 transition-all">
                                                    Back
                                                </button>
                                                <button type="submit"
                                                    class="bg-brand-pink text-white px-6 py-2 rounded-full font-semibold hover:bg-opacity-90 transition-all">
                                                    Post Comment
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Comments List -->
                    <div id="comments-list" class="space-y-6">
                        <div id="comments-loading" class="text-center text-gray-500 py-8">
                            <i class="fas fa-spinner fa-spin mr-2"></i>Loading comments...
                        </div>
                    </div>
                    
                    <!-- Load More Comments -->
                    <div id="load-more-container" class="text-center mt-8" style="display: none;">
                        <button id="load-more-comments" class="text-brand-pink font-semibold hover:underline">
                            Load More Comments
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Need Help Section -->
    <section id="need-help-section" class="py-16 bg-gradient-to-r from-brand-pink to-brand-blue">
        <div class="container mx-auto px-4 text-center text-white">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold mb-4">Need Help with Your Fertility Journey?</h2>
                <p class="text-xl mb-8 opacity-90">Our team of fertility experts is here to provide personalized guidance
                    and support every step of the way</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                    <div class="text-center">
                        <div
                            class="w-16 h-16 bg-white bg-opacity-20 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-phone text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Call Us</h3>
                        <p class="opacity-90 mb-3">Speak directly with our fertility coordinators</p>
                        <p class="font-semibold text-lg">+91 12345 67890</p>
                    </div>
                    <div class="text-center">
                        <div
                            class="w-16 h-16 bg-white bg-opacity-20 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <i class="fab fa-whatsapp text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">WhatsApp</h3>
                        <p class="opacity-90 mb-3">Quick questions and appointment booking</p>
                        <button
                            class="bg-green-500 text-white px-6 py-2 rounded-full font-semibold hover:bg-green-600 transition-all">
                            Chat Now
                        </button>
                    </div>
                    <div class="text-center">
                        <div
                            class="w-16 h-16 bg-white bg-opacity-20 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-calendar text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Book Consultation</h3>
                        <p class="opacity-90 mb-3">Schedule your personalized assessment</p>
                        <button
                            class="bg-white text-brand-pink px-6 py-2 rounded-full font-semibold hover:bg-gray-100 transition-all">
                            Book Now
                        </button>
                    </div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-2xl p-8">
                    <h3 class="text-xl font-bold mb-4">Available 24/7 for Emergency Support</h3>
                    <p class="opacity-90 mb-6">We understand that fertility concerns don't follow business hours. Our
                        support team is available around the clock for urgent questions and emotional support.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button
                            class="bg-white text-brand-pink px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition-all">
                            Emergency Hotline
                        </button>
                        <button
                            class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-brand-pink transition-all">
                            Email Support
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Subscription -->
    <section id="newsletter-subscription" class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold brand-grey mb-4">Stay Updated on Fertility Insights</h2>
                <p class="text-gray-600 mb-8 text-lg">Get the latest fertility tips, success stories, and expert advice
                    delivered to your inbox</p>
                <div class="bg-gray-50 rounded-2xl p-8">
                    <div class="flex flex-col md:flex-row gap-4 max-w-2xl mx-auto mb-6">
                        <input type="email" placeholder="Enter your email address"
                            class="flex-1 px-6 py-4 border border-gray-200 rounded-full focus:outline-none focus:border-brand-pink">
                        <button
                            class="bg-brand-pink text-white px-8 py-4 rounded-full font-semibold hover:bg-opacity-90 transition-all whitespace-nowrap">
                            Subscribe Now
                        </button>
                    </div>
                    <div class="flex items-center justify-center gap-6 text-sm text-gray-500">
                        <span class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Weekly fertility
                            tips</span>
                        <span class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Expert
                            interviews</span>
                        <span class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Success
                            stories</span>
                        <span class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Treatment
                            updates</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        // Dynamic Table of Contents functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Generate dynamic TOC from blog content
            function generateDynamicTOC() {
                const blogContent = document.getElementById('blog-content');
                const tocContent = document.getElementById('toc-content');
                const tocLoading = document.getElementById('toc-loading');

                if (!blogContent || !tocContent) return;

                // Find all headings in the blog content
                const headings = blogContent.querySelectorAll('h1, h2, h3, h4, h5, h6');

                if (headings.length === 0) {
                    tocLoading.innerHTML = '<div class="text-center text-gray-500 text-sm py-4">No headings found in content</div>';
                    return;
                }

                // Clear loading message
                tocLoading.style.display = 'none';

                // Create TOC HTML
                let tocHTML = '';
                headings.forEach((heading, index) => {
                    // Create a unique ID for the heading
                    const headingText = heading.textContent.trim();
                    const headingId = 'heading-' + index + '-' + headingText.toLowerCase()
                        .replace(/[^a-z0-9\s]/g, '')
                        .replace(/\s+/g, '-')
                        .substring(0, 50);

                    // Add ID to the heading if it doesn't have one
                    if (!heading.id) {
                        heading.id = headingId;
                    }

                    // Determine indentation based on heading level
                    const level = parseInt(heading.tagName.charAt(1));
                    const indentClass = level > 2 ? 'ml-4' : '';

                    // Create TOC link
                    tocHTML += `
                        <a href="#${headingId}" class="toc-item block py-2 px-3 rounded-lg text-sm text-gray-600 hover:text-brand-pink hover:bg-gray-50 transition-all cursor-pointer ${indentClass}">
                            ${headingText}
                        </a>
                    `;
                });

                // Insert TOC HTML
                tocContent.innerHTML = tocHTML;

                // Initialize TOC functionality
                initializeTOC();
            }

            // Initialize TOC functionality
            function initializeTOC() {
                const tocItems = document.querySelectorAll('.toc-item');
                const sections = document.querySelectorAll('[id^="heading-"]');

                // Toggle TOC on mobile
                const tocToggle = document.getElementById('toc-toggle');
                const tocContent = document.getElementById('toc-content');
                if (tocToggle && tocContent) {
                    // Remove existing event listener if any
                    tocToggle.removeEventListener('click', handleTocToggle);
                    tocToggle.addEventListener('click', handleTocToggle);
                }

                function handleTocToggle() {
                    if (tocContent) {
                        tocContent.classList.toggle('hidden');
                        const icon = tocToggle.querySelector('i');
                        if (icon) {
                            icon.classList.toggle('fa-chevron-down');
                            icon.classList.toggle('fa-chevron-up');
                        }
                    }
                }

                // Smooth scrolling for TOC links
                tocItems.forEach(item => {
                    if (item) {
                        // Remove existing event listener if any
                        item.removeEventListener('click', handleTocClick);
                        item.addEventListener('click', handleTocClick);
                    }
                });

                function handleTocClick(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId) {
                        const targetElement = document.getElementById(targetId.substring(1));
                        if (targetElement) {
                            const headerHeight = document.querySelector('header') ? document.querySelector('header').offsetHeight : 0;
                            const targetPosition = targetElement.offsetTop - headerHeight - 20;

                            window.scrollTo({
                                top: targetPosition,
                                behavior: 'smooth'
                            });
                        }
                    }
                }

                // Highlight active TOC item on scroll
                function highlightActiveSection() {
                    const scrollPosition = window.scrollY + 200;
                    sections.forEach(section => {
                        if (section) {
                            const sectionTop = section.offsetTop;
                            const sectionBottom = sectionTop + section.offsetHeight;
                            const sectionId = section.getAttribute('id');
                            if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                                tocItems.forEach(item => {
                                    if (item) {
                                        item.classList.remove('active');
                                        if (item.getAttribute('href') === `#${sectionId}`) {
                                            item.classList.add('active');
                                        }
                                    }
                                });
                            }
                        }
                    });
                }

                // Remove existing scroll listener and add new one
                window.removeEventListener('scroll', highlightActiveSection);
                window.addEventListener('scroll', highlightActiveSection);
                highlightActiveSection(); // Initial call
            }

            // Generate TOC after a short delay to ensure content is loaded
            setTimeout(generateDynamicTOC, 100);
        });
        // Video overlay click handler
        document.querySelectorAll('.video-overlay').forEach(overlay => {
            overlay.addEventListener('click', function() {
                alert('Video player would open here');
            });
        });

        // Social sharing functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Share buttons in article content
            const shareIcons = document.querySelectorAll('.fa-facebook-f, .fa-twitter, .fa-linkedin-in, .fa-whatsapp, .fa-envelope');
            shareIcons.forEach(icon => {
                if (icon) {
                    const button = icon.closest('button');
                    if (button) {
                        button.addEventListener('click', function(e) {
                            e.preventDefault();
                            const currentUrl = window.location.href;
                            const currentTitle = document.title;

                            if (icon.classList.contains('fa-facebook-f')) {
                                window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(currentUrl), '_blank', 'width=600,height=400');
                                trackShare('facebook');
                            } else if (icon.classList.contains('fa-twitter')) {
                                window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent(currentUrl) + '&text=' + encodeURIComponent(currentTitle), '_blank', 'width=600,height=400');
                                trackShare('twitter');
                            } else if (icon.classList.contains('fa-linkedin-in')) {
                                window.open('https://www.linkedin.com/sharing/share-offsite/?url=' + encodeURIComponent(currentUrl), '_blank', 'width=600,height=400');
                                trackShare('linkedin');
                            } else if (icon.classList.contains('fa-whatsapp')) {
                                window.open('https://wa.me/?text=' + encodeURIComponent(currentTitle + ' ' + currentUrl), '_blank');
                                trackShare('whatsapp');
                            } else if (icon.classList.contains('fa-envelope')) {
                                window.location.href = 'mailto:?subject=' + encodeURIComponent(currentTitle) + '&body=' + encodeURIComponent(currentUrl);
                                trackShare('email');
                            }
                        });
                    }
                }
            });

            // Share buttons in header section
            const headerShareIcons = document.querySelectorAll('.fa-share');
            headerShareIcons.forEach(icon => {
                if (icon) {
                    const button = icon.closest('button');
                    if (button && !button.hasAttribute('data-share-handled')) {
                        button.setAttribute('data-share-handled', 'true');
                        button.addEventListener('click', function(e) {
                            e.preventDefault();
                            // Show share options or copy link
                            if (navigator.share) {
                                navigator.share({
                                    title: document.title,
                                    url: window.location.href
                                }).then(() => {
                                    trackShare('native');
                                });
                            } else {
                                // Fallback: copy to clipboard
                                navigator.clipboard.writeText(window.location.href).then(() => {
                                    alert('Link copied to clipboard!');
                                    trackShare('copy');
                                });
                            }
                        });
                    }
                }
            });
        });
        // Dynamic Blog Interactions
        document.addEventListener('DOMContentLoaded', function() {
            const blogId = {{ $blog->id }};
            let isLiked = false;

            // Initialize dynamic functionality
            console.log('Initializing blog functionality for blog ID:', blogId);
            initializeBlogInteractions();
            initializeCommentForm();
            initializeUserDetailsForm();
            updateReadingTime();
            initializeLikeState();
            
            // Load comments after a short delay to ensure DOM is ready
            setTimeout(() => {
                loadComments();
            }, 500);

            function initializeBlogInteractions() {
                // Like button functionality
                const heartIcons = document.querySelectorAll('.fa-heart');
                heartIcons.forEach(heart => {
                    if (heart) {
                        const button = heart.closest('button');
                        if (button) {
                            button.addEventListener('click', function() {
                                toggleLike();
                            });
                        }
                    }
                });
            }

            function toggleLike() {
                // Prevent multiple rapid clicks
                if (window.likeInProgress) {
                    console.log('Like request already in progress, ignoring...');
                    return;
                }
                
                window.likeInProgress = true;
                
                // Disable all like buttons during request
                const heartIcons = document.querySelectorAll('.fa-heart');
                heartIcons.forEach(heart => {
                    const button = heart.closest('button');
                    if (button) {
                        button.style.pointerEvents = 'none';
                        button.style.opacity = '0.6';
                    }
                });
                
                console.log('Toggling like for blog:', blogId, 'Current state:', isLiked);
                
                fetch(`/blog/${blogId}/like`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({})
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Like response:', data);
                    if (data.success) {
                        isLiked = data.has_liked;
                        updateLikeUI(data.likes_count, isLiked);
                        
                        // Add visual feedback
                        heartIcons.forEach(heart => {
                            const button = heart.closest('button');
                            if (button) {
                                button.style.transform = 'scale(1.3)';
                                setTimeout(() => {
                                    button.style.transform = 'scale(1)';
                                }, 300);
                            }
                        });
                        
                        // Show success message
                        showLikeMessage(data.message, data.action);
                    } else {
                        console.warn('Like failed:', data.message);
                        showLikeMessage(data.message, 'error');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showLikeMessage('Something went wrong. Please try again.', 'error');
                })
                .finally(() => {
                    // Re-enable all like buttons
                    heartIcons.forEach(heart => {
                        const button = heart.closest('button');
                        if (button) {
                            button.style.pointerEvents = 'auto';
                            button.style.opacity = '1';
                        }
                    });
                    window.likeInProgress = false;
                });
            }
            
            function showLikeMessage(message, type) {
                // Create or update message element
                let messageEl = document.getElementById('like-message');
                if (!messageEl) {
                    messageEl = document.createElement('div');
                    messageEl.id = 'like-message';
                    messageEl.style.cssText = `
                        position: fixed;
                        top: 20px;
                        right: 20px;
                        padding: 12px 20px;
                        border-radius: 8px;
                        color: white;
                        font-weight: 500;
                        z-index: 9999;
                        transition: all 0.3s ease;
                    `;
                    document.body.appendChild(messageEl);
                }
                
                // Set message and style based on type
                messageEl.textContent = message;
                if (type === 'like') {
                    messageEl.style.backgroundColor = '#10B981'; // Green
                } else if (type === 'unlike') {
                    messageEl.style.backgroundColor = '#6B7280'; // Gray
                } else {
                    messageEl.style.backgroundColor = '#EF4444'; // Red
                }
                
                // Show message
                messageEl.style.opacity = '1';
                messageEl.style.transform = 'translateX(0)';
                
                // Hide after 3 seconds
                setTimeout(() => {
                    messageEl.style.opacity = '0';
                    messageEl.style.transform = 'translateX(100%)';
                }, 3000);
            }

            function updateLikeUI(likesCount, liked) {
                // Update likes count in all elements with article-likes-count class
                const articleLikesElements = document.querySelectorAll('.article-likes-count');
                articleLikesElements.forEach(element => {
                    element.textContent = likesCount;
                });

                // Update like button appearance
                const heartIcons = document.querySelectorAll('.fa-heart');
                heartIcons.forEach(heart => {
                    const button = heart.closest('button');
                    if (button) {
                        if (liked) {
                            button.classList.add('bg-brand-pink', 'text-white', 'liked');
                            button.classList.remove('bg-gray-100', 'text-gray-500');
                            heart.classList.add('fas');
                            heart.classList.remove('far');
                        } else {
                            button.classList.remove('bg-brand-pink', 'text-white', 'liked');
                            button.classList.add('bg-gray-100', 'text-gray-500');
                            heart.classList.add('far');
                            heart.classList.remove('fas');
                        }
                    }
                });
            }

            function loadComments() {
                console.log('Loading comments for blog:', blogId);
                fetch(`/api/blog/${blogId}/comments`)
                .then(response => {
                    console.log('Comments API response status:', response.status);
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Comments API response data:', data);
                    if (data.success) {
                        displayComments(data.comments);
                        updateCommentsCount(data.comments_count);
                    } else {
                        console.error('API returned error:', data.message);
                        document.getElementById('comments-loading').innerHTML = 
                            '<div class="text-center text-gray-500 py-8">Error: ' + (data.message || 'Failed to load comments') + '</div>';
                    }
                })
                .catch(error => {
                    console.error('Error loading comments:', error);
                    const loadingElement = document.getElementById('comments-loading');
                    if (loadingElement) {
                        loadingElement.innerHTML = 
                            '<div class="text-center text-gray-500 py-8">Failed to load comments. Please try again.</div>';
                    }
                });
            }

            function displayComments(comments) {
                const commentsList = document.getElementById('comments-list');
                const loadingElement = document.getElementById('comments-loading');
                
                if (!commentsList || !loadingElement) {
                    console.error('Comments container elements not found');
                    return;
                }
                
                if (comments.length === 0) {
                    loadingElement.innerHTML = '<div class="text-center text-gray-500 py-8">No comments yet. Be the first to comment!</div>';
                    return;
                }

                let commentsHTML = '';
                comments.forEach(comment => {
                    commentsHTML += createCommentHTML(comment);
                });

                // Hide loading and show comments
                loadingElement.style.display = 'none';
                commentsList.innerHTML = commentsHTML;
                
                // Add event listeners to new comment elements
                addCommentEventListeners();
                
                console.log('Comments loaded:', comments.length);
            }

            function createCommentHTML(comment) {
                const timeAgo = getTimeAgo(comment.created_at);
                let repliesHTML = '';
                
                if (comment.replies && comment.replies.length > 0) {
                    comment.replies.forEach(reply => {
                        repliesHTML += createCommentHTML(reply);
                    });
                }

                return `
                    <div class="flex gap-4" data-comment-id="${comment.id}">
                        <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-${Math.floor(Math.random() * 10) + 1}.jpg"
                            alt="${comment.name}" class="w-12 h-12 rounded-full flex-shrink-0">
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="font-semibold brand-grey">${comment.name}</span>
                                <span class="text-sm text-gray-500">${timeAgo}</span>
                            </div>
                            <p class="text-gray-600 mb-3">${comment.comment}</p>
                            <div class="flex items-center gap-4 text-sm">
                                <button class="like-comment-btn text-gray-500 hover:text-brand-pink flex items-center gap-1" data-comment-id="${comment.id}">
                                    <i class="fas fa-thumbs-up"></i> <span class="likes-count">${comment.likes}</span>
                                </button>
                                <button class="reply-btn text-gray-500 hover:text-brand-pink" data-comment-id="${comment.id}">Reply</button>
                            </div>
                            ${repliesHTML ? `<div class="ml-8 mt-4 space-y-4">${repliesHTML}</div>` : ''}
                        </div>
                    </div>
                `;
            }

            function addCommentEventListeners() {
                // Like comment buttons
                document.querySelectorAll('.like-comment-btn').forEach(btn => {
                    btn.addEventListener('click', function() {
                        const commentId = this.getAttribute('data-comment-id');
                        likeComment(commentId);
                    });
                });

                // Reply buttons
                document.querySelectorAll('.reply-btn').forEach(btn => {
                    btn.addEventListener('click', function() {
                        const commentId = this.getAttribute('data-comment-id');
                        showReplyForm(commentId);
                    });
                });
            }

            function likeComment(commentId) {
                fetch(`/api/blog/comments/${commentId}/like`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const btn = document.querySelector(`[data-comment-id="${commentId}"] .likes-count`);
                        if (btn) {
                            btn.textContent = data.likes_count;
                        }
                    }
                })
                .catch(error => {
                    console.error('Error liking comment:', error);
                });
            }

            function showReplyForm(commentId) {
                // Remove any existing reply forms
                document.querySelectorAll('.reply-form').forEach(form => form.remove());
                
                // Find the comment element
                const commentElement = document.querySelector(`[data-comment-id="${commentId}"]`);
                if (!commentElement) return;
                
                // Create reply form
                const replyForm = document.createElement('div');
                replyForm.className = 'reply-form mt-4 p-4 bg-gray-50 rounded-lg';
                replyForm.innerHTML = `
                    <form class="reply-form-inner">
                        <div class="flex gap-3">
                            <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-3.jpg"
                                alt="User Avatar" class="w-10 h-10 rounded-full flex-shrink-0">
                            <div class="flex-1">
                                <!-- Email Check for Reply -->
                                <div class="mb-3 p-3 bg-gray-50 rounded-lg">
                                    <label class="block text-xs font-medium text-gray-700 mb-2">Enter your email to reply</label>
                                    <div class="flex gap-2">
                                        <input type="email" id="reply-email-check" placeholder="Your Email *" required
                                            class="flex-1 p-2 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink text-sm">
                                        <button type="button" id="check-reply-email-btn" 
                                            class="bg-brand-pink text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-opacity-90 transition-all">
                                            Continue
                                        </button>
                                    </div>
                                </div>
                                
                                <!-- User Details for Reply (Hidden by default) -->
                                <div id="reply-user-details" class="hidden">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mb-3">
                                        <input type="text" name="name" placeholder="Your Name *" required
                                            class="w-full p-2 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink text-sm">
                                        <input type="email" name="email" placeholder="Your Email *" required
                                            class="w-full p-2 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink text-sm">
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mb-3">
                                        <input type="tel" name="phone" placeholder="Phone (Optional)"
                                            class="w-full p-2 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink text-sm">
                                        <input type="text" name="location" placeholder="Location (Optional)"
                                            class="w-full p-2 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink text-sm">
                                    </div>
                                    <div class="mb-3">
                                        <label class="block text-xs font-medium text-gray-700 mb-1">Consultation Interest:</label>
                                        <div class="flex gap-3">
                                            <label class="flex items-center">
                                                <input type="radio" name="consultation_interest" value="yes" class="mr-1 text-brand-pink focus:ring-brand-pink">
                                                <span class="text-xs">Yes</span>
                                            </label>
                                            <label class="flex items-center">
                                                <input type="radio" name="consultation_interest" value="maybe" class="mr-1 text-brand-pink focus:ring-brand-pink">
                                                <span class="text-xs">Maybe</span>
                                            </label>
                                            <label class="flex items-center">
                                                <input type="radio" name="consultation_interest" value="no" class="mr-1 text-brand-pink focus:ring-brand-pink">
                                                <span class="text-xs">No</span>
                                            </label>
                                        </div>
                                    </div>
                                    <button type="button" id="continue-reply-btn" 
                                        class="bg-brand-pink text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-opacity-90 transition-all mb-3">
                                        Continue to Reply
                                    </button>
                                </div>
                                
                                <!-- Reply Text (Hidden by default) -->
                                <div id="reply-text-section" class="hidden">
                                    <textarea name="comment" placeholder="Write your reply..." required
                                        class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink resize-none h-20 text-sm"></textarea>
                                    <div class="flex justify-between items-center mt-2">
                                        <button type="button" id="back-to-reply-details-btn" class="text-sm text-gray-500 hover:text-brand-pink">
                                            Back
                                        </button>
                                        <div class="flex gap-2">
                                            <button type="button" class="cancel-reply text-sm text-gray-500 hover:text-brand-pink">
                                                Cancel
                                            </button>
                                            <button type="submit" class="bg-brand-pink text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-opacity-90 transition-all">
                                                Post Reply
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                `;
                
                // Insert reply form after the comment
                commentElement.appendChild(replyForm);
                
                // Add event listeners
                const form = replyForm.querySelector('.reply-form-inner');
                const cancelBtn = replyForm.querySelector('.cancel-reply');
                const checkReplyEmailBtn = replyForm.querySelector('#check-reply-email-btn');
                const continueReplyBtn = replyForm.querySelector('#continue-reply-btn');
                const backToReplyDetailsBtn = replyForm.querySelector('#back-to-reply-details-btn');
                
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    submitReply(commentId, this);
                });
                
                cancelBtn.addEventListener('click', function() {
                    replyForm.remove();
                });
                
                // Reply email check
                if (checkReplyEmailBtn) {
                    checkReplyEmailBtn.addEventListener('click', function() {
                        const email = replyForm.querySelector('#reply-email-check').value.trim();
                        if (email && email.includes('@')) {
                            checkExistingUserForReply(email, replyForm);
                        } else {
                            alert('Please enter a valid email address');
                        }
                    });
                }
                
                // Continue to reply
                if (continueReplyBtn) {
                    continueReplyBtn.addEventListener('click', function() {
                        showReplyTextSection(replyForm);
                    });
                }
                
                // Back to reply details
                if (backToReplyDetailsBtn) {
                    backToReplyDetailsBtn.addEventListener('click', function() {
                        showReplyDetailsSection(replyForm);
                    });
                }
            }
            
            function submitReply(parentCommentId, form) {
                const formData = new FormData(form);
                
                const replyData = {
                    name: formData.get('name'),
                    email: formData.get('email'),
                    phone: formData.get('phone'),
                    location: formData.get('location'),
                    consultation_interest: formData.get('consultation_interest'),
                    comment: formData.get('comment'),
                    parent_id: parentCommentId
                };

                fetch(`/api/blog/${blogId}/comments`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify(replyData)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Reload the page to show the new reply
                        window.location.reload();
                    } else {
                        alert('Error: ' + (data.message || 'Failed to post reply'));
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Something went wrong. Please try again.');
                });
            }

            function initializeCommentForm() {
                const commentForm = document.getElementById('comment-form');
                if (commentForm) {
                    commentForm.addEventListener('submit', function(e) {
                        e.preventDefault();
                        submitComment();
                    });
                    
                    // Add event listener for email check button
                    const checkEmailBtn = document.getElementById('check-email-btn');
                    const emailCheckInput = document.getElementById('email-check');
                    const backToEmailBtn = document.getElementById('back-to-email-btn');
                    
                    if (checkEmailBtn && emailCheckInput) {
                        checkEmailBtn.addEventListener('click', function() {
                            const email = emailCheckInput.value.trim();
                            if (email && email.includes('@')) {
                                checkExistingUser(email);
                            } else {
                                alert('Please enter a valid email address');
                            }
                        });
                    }
                    
                    if (backToEmailBtn) {
                        backToEmailBtn.addEventListener('click', function() {
                            showEmailCheckSection();
                        });
                    }
                }
            }

            function checkExistingUser(email) {
                if (!email || !email.includes('@')) return;
                
                // Show loading state
                const checkBtn = document.getElementById('check-email-btn');
                const originalText = checkBtn.innerHTML;
                checkBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Checking...';
                checkBtn.disabled = true;
                
                fetch('/api/blog/check-user', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ email: email })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success && data.user_exists) {
                        // User exists - show comment section directly with pre-filled details
                        prefillUserDetails(data.user);
                        showCommentSection();
                    } else {
                        // New user - show user details form
                        showUserDetailsSection();
                    }
                })
                .catch(error => {
                    console.log('Error checking user:', error);
                    alert('Error checking user. Please try again.');
                })
                .finally(() => {
                    // Reset button state
                    checkBtn.innerHTML = originalText;
                    checkBtn.disabled = false;
                });
            }

            function prefillUserDetails(user) {
                const form = document.getElementById('comment-form');
                if (!form) return;
                
                // Pre-fill form fields
                const nameInput = form.querySelector('input[name="name"]');
                const emailInput = form.querySelector('input[name="email"]');
                const phoneInput = form.querySelector('input[name="phone"]');
                const locationInput = form.querySelector('input[name="location"]');
                const consultationRadios = form.querySelectorAll('input[name="consultation_interest"]');
                
                if (nameInput && user.name) nameInput.value = user.name;
                if (emailInput && user.email) emailInput.value = user.email;
                if (phoneInput && user.phone) phoneInput.value = user.phone;
                if (locationInput && user.location) locationInput.value = user.location;
                
                // Set consultation interest
                consultationRadios.forEach(radio => {
                    if (radio.value === user.consultation_interest) {
                        radio.checked = true;
                    }
                });
                
                // Show user info message
                showUserInfoMessage(user);
            }

            function showEmailCheckSection() {
                document.getElementById('email-check-section').classList.remove('hidden');
                document.getElementById('user-details-section').classList.add('hidden');
                document.getElementById('comment-section').classList.add('hidden');
            }

            function showUserDetailsSection() {
                // Pre-fill email from the check input
                const emailCheckInput = document.getElementById('email-check');
                const emailInput = document.querySelector('input[name="email"]');
                if (emailCheckInput && emailInput) {
                    emailInput.value = emailCheckInput.value;
                }
                
                document.getElementById('email-check-section').classList.add('hidden');
                document.getElementById('user-details-section').classList.remove('hidden');
                document.getElementById('comment-section').classList.add('hidden');
            }

            function showCommentSection() {
                document.getElementById('email-check-section').classList.add('hidden');
                document.getElementById('user-details-section').classList.add('hidden');
                document.getElementById('comment-section').classList.remove('hidden');
            }

            // Reply-specific functions
            function checkExistingUserForReply(email, replyForm) {
                const checkBtn = replyForm.querySelector('#check-reply-email-btn');
                const originalText = checkBtn.innerHTML;
                checkBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Checking...';
                checkBtn.disabled = true;
                
                fetch('/api/blog/check-user', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ email: email })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success && data.user_exists) {
                        // User exists - pre-fill and show reply text
                        prefillUserDetailsForReply(data.user, replyForm);
                        showReplyTextSection(replyForm);
                    } else {
                        // New user - show user details form
                        showReplyDetailsSection(replyForm);
                    }
                })
                .catch(error => {
                    console.log('Error checking user:', error);
                    alert('Error checking user. Please try again.');
                })
                .finally(() => {
                    checkBtn.innerHTML = originalText;
                    checkBtn.disabled = false;
                });
            }

            function prefillUserDetailsForReply(user, replyForm) {
                const nameInput = replyForm.querySelector('input[name="name"]');
                const emailInput = replyForm.querySelector('input[name="email"]');
                const phoneInput = replyForm.querySelector('input[name="phone"]');
                const locationInput = replyForm.querySelector('input[name="location"]');
                const consultationRadios = replyForm.querySelectorAll('input[name="consultation_interest"]');
                
                if (nameInput && user.name) nameInput.value = user.name;
                if (emailInput && user.email) emailInput.value = user.email;
                if (phoneInput && user.phone) phoneInput.value = user.phone;
                if (locationInput && user.location) locationInput.value = user.location;
                
                consultationRadios.forEach(radio => {
                    if (radio.value === user.consultation_interest) {
                        radio.checked = true;
                    }
                });
            }

            function showReplyDetailsSection(replyForm) {
                const emailCheckInput = replyForm.querySelector('#reply-email-check');
                const emailInput = replyForm.querySelector('input[name="email"]');
                if (emailCheckInput && emailInput) {
                    emailInput.value = emailCheckInput.value;
                }
                
                replyForm.querySelector('.mb-3.p-3.bg-gray-50').classList.add('hidden');
                replyForm.querySelector('#reply-user-details').classList.remove('hidden');
                replyForm.querySelector('#reply-text-section').classList.add('hidden');
            }

            function showReplyTextSection(replyForm) {
                replyForm.querySelector('.mb-3.p-3.bg-gray-50').classList.add('hidden');
                replyForm.querySelector('#reply-user-details').classList.add('hidden');
                replyForm.querySelector('#reply-text-section').classList.remove('hidden');
            }

            function showUserInfoMessage(user) {
                // Remove existing message
                const existingMessage = document.getElementById('user-info-message');
                if (existingMessage) {
                    existingMessage.remove();
                }
                
                // Create new message
                const message = document.createElement('div');
                message.id = 'user-info-message';
                message.className = 'mb-4 p-3 bg-green-50 border border-green-200 rounded-lg';
                message.innerHTML = `
                    <div class="flex items-start">
                        <i class="fas fa-user-check text-green-500 mt-1 mr-2"></i>
                        <div class="text-sm text-green-700">
                            <strong>Welcome back, ${user.name}!</strong> 
                            We've pre-filled your details. You have ${user.total_comments} previous comment(s).
                        </div>
                    </div>
                `;
                
                // Insert before the comment section
                const commentSection = document.getElementById('comment-section');
                commentSection.parentNode.insertBefore(message, commentSection);
            }

            // Add event listener for user details form submission
            function initializeUserDetailsForm() {
                const userDetailsSection = document.getElementById('user-details-section');
                if (userDetailsSection) {
                    // Add a continue button to user details section
                    const continueBtn = document.createElement('button');
                    continueBtn.type = 'button';
                    continueBtn.className = 'bg-brand-pink text-white px-6 py-2 rounded-full font-semibold hover:bg-opacity-90 transition-all';
                    continueBtn.innerHTML = 'Continue to Comment';
                    continueBtn.addEventListener('click', function() {
                        showCommentSection();
                    });
                    
                    // Find the privacy notice div and add the button after it
                    const privacyNotice = userDetailsSection.querySelector('.bg-blue-50');
                    if (privacyNotice) {
                        privacyNotice.parentNode.insertBefore(continueBtn, privacyNotice.nextSibling);
                    }
                }
            }

            function submitComment() {
                const form = document.getElementById('comment-form');
                const formData = new FormData(form);
                
                const commentData = {
                    name: formData.get('name'),
                    email: formData.get('email'),
                    phone: formData.get('phone'),
                    location: formData.get('location'),
                    consultation_interest: formData.get('consultation_interest'),
                    comment: formData.get('comment')
                };

                fetch(`/api/blog/${blogId}/comments`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify(commentData)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Reload the page to show the new comment
                        window.location.reload();
                    } else {
                        alert('Error: ' + (data.message || 'Failed to post comment'));
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Something went wrong. Please try again.');
                });
            }

            function updateCommentsCount(count) {
                const countElement = document.getElementById('comments-count');
                if (countElement) {
                    countElement.textContent = count;
                }
            }

            function getTimeAgo(dateString) {
                const date = new Date(dateString);
                const now = new Date();
                const diffInSeconds = Math.floor((now - date) / 1000);
                
                if (diffInSeconds < 60) return 'just now';
                if (diffInSeconds < 3600) return Math.floor(diffInSeconds / 60) + ' minutes ago';
                if (diffInSeconds < 86400) return Math.floor(diffInSeconds / 3600) + ' hours ago';
                if (diffInSeconds < 2592000) return Math.floor(diffInSeconds / 86400) + ' days ago';
                return Math.floor(diffInSeconds / 2592000) + ' months ago';
            }

            function updateReadingTime() {
                const blogContent = document.getElementById('blog-content');
                if (!blogContent) return;

                // Get all text content from the blog, excluding script and style tags
                const textContent = blogContent.innerText || blogContent.textContent;
                
                // Clean up the text and calculate word count more accurately
                const cleanText = textContent
                    .replace(/\s+/g, ' ') // Replace multiple spaces with single space
                    .replace(/^\s+|\s+$/g, '') // Trim whitespace
                    .replace(/[^\w\s]/g, ' '); // Replace punctuation with spaces
                
                const words = cleanText.split(/\s+/).filter(word => word.length > 0);
                const wordCount = words.length;
                
                // Calculate reading time (average 200 words per minute for English)
                const readingTimeMinutes = Math.max(1, Math.ceil(wordCount / 200));
                
                // Update the reading time display
                const readingTimeElement = document.getElementById('reading-time');
                if (readingTimeElement) {
                    readingTimeElement.textContent = readingTimeMinutes + ' min read';
                }
                
                console.log('Reading time calculated:', {
                    wordCount: wordCount,
                    readingTime: readingTimeMinutes + ' min read'
                });
            }

            function trackShare(platform) {
                fetch(`/api/blog/${blogId}/share`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ platform: platform })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Update shares count in UI
                        updateSharesCount(data.shares_count);
                    }
                })
                .catch(error => {
                    console.error('Error tracking share:', error);
                });
            }

            function updateSharesCount(sharesCount) {
                // Update shares count in article content
                const sharesElement = document.querySelector('.fa-share').closest('span');
                if (sharesElement) {
                    const countSpan = sharesElement.querySelector('span:last-child');
                    if (countSpan) {
                        countSpan.textContent = sharesCount;
                    }
                }
            }

            function initializeLikeState() {
                // Check current like state from server
                console.log('Initializing like state for blog:', blogId);
                fetch(`/blog/${blogId}/likes`)
                .then(response => {
                    console.log('Likes API response status:', response.status);
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Likes API response data:', data);
                    if (data.success) {
                        isLiked = data.has_liked;
                        updateLikeUI(data.likes_count, isLiked);
                    }
                })
                .catch(error => {
                    console.error('Error loading like state:', error);
                });
            }

            // Newsletter subscription
            const newsletterButton = document.querySelector('#newsletter-subscription button');
            if (newsletterButton) {
                newsletterButton.addEventListener('click', function() {
                    const emailInput = this.parentElement.querySelector('input[type="email"]');
                    if (emailInput) {
                        const email = emailInput.value;
                        if (email && email.includes('@')) {
                            alert('Thank you for subscribing! You will receive our latest fertility insights.');
                            emailInput.value = '';
                        } else {
                            alert('Please enter a valid email address.');
                        }
                    }
                });
            }
        });
        // Consultation booking buttons
        document.addEventListener('DOMContentLoaded', function() {
            const allButtons = document.querySelectorAll('button');
            allButtons.forEach(button => {
                if (button && button.textContent) {
                    if (button.textContent.includes('Book Consultation') ||
                        button.textContent.includes('Book Free Consultation') ||
                        button.textContent.includes('Schedule')) {
                        button.addEventListener('click', function() {
                            alert('Redirecting to consultation booking system...');
                        });
                    }
                }
            });

            // WhatsApp buttons
            allButtons.forEach(button => {
                if (button && button.textContent) {
                    if (button.textContent.includes('WhatsApp') || button.querySelector('.fa-whatsapp')) {
                        button.addEventListener('click', function() {
                            window.open(
                                'https://wa.me/911234567890?text=Hi, I would like to know more about IVF treatment options.'
                            );
                        });
                    }
                }
            });

            // Phone call buttons
            allButtons.forEach(button => {
                if (button && button.textContent) {
                    if (button.textContent.includes('Call') && !button.textContent.includes('Book')) {
                        button.addEventListener('click', function() {
                            window.location.href = 'tel:+911234567890';
                        });
                    }
                }
            });
        });
    </script>
@endsection
