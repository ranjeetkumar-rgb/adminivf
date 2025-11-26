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
                @if($blog->categories->first())
                <a href="{{ route('blog.category', $blog->categories->first()->slug) }}" class="text-gray-500 hover-brand-pink cursor-pointer whitespace-nowrap">{{ $blog->categories->first()->name }}</a>
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
                    <span class="bg-brand-blue text-white px-4 py-2 rounded-full text-sm font-medium">{{ $blog->categories->first()->name ?? 'General' }}</span>
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
    {{-- <section id="hero-media" class="bg-white py-6 sm:py-8">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                @if($blog->image)
                <div class="relative rounded-xl sm:rounded-2xl overflow-hidden shadow-lg">
                    <img class="w-full h-[250px] sm:h-[400px] lg:h-[500px] object-cover"
                        src="{{ $blog->image ? asset('storage/' . $blog->image) : 'https://storage.googleapis.com/uxpilot-auth.appspot.com/70181682fe-facb641d12e787079343.png' }}"
                        alt="{{ $blog->title }}">
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-3 sm:p-6">
                        <p class="text-white text-xs sm:text-sm">{{ $blog->image_caption ?: 'Photo: ' . $blog->title }}</p>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section> --}}
    <section id="hero-media" class="bg-white py-6 sm:py-8">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                {{-- Video Logic Commented Out
                @if($blog->content_type === 'video' && $blog->video_url)
                     Video content code here...
                @else
                --}}
                @if($blog->image)
                <div class="relative rounded-xl sm:rounded-2xl overflow-hidden shadow-lg">
                    <img class="w-full h-[250px] sm:h-[400px] lg:h-[500px] object-cover"
                        src="{{ $blog->image ? asset('storage/' . $blog->image) : 'https://storage.googleapis.com/uxpilot-auth.appspot.com/70181682fe-facb641d12e787079343.png' }}"
                        alt="{{ $blog->title }}">
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-3 sm:p-6">
                        <p class="text-white text-xs sm:text-sm">{{ $blog->image_caption ?: 'Photo: ' . $blog->title }}</p>
                    </div>
                </div>
                @endif
                {{-- @endif --}}
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
                        @if($blog->description)
                        {!! $blog->description !!}
                        @endif
                        @if($blog->description1)
                        <div class="highlight-box">
                            <h4 class="text-brand-pink font-semibold mb-3"><i class="mr-2" data-fa-i2svg=""><svg class="svg-inline--fa fa-lightbulb" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="lightbulb" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M272 384c9.6-31.9 29.5-59.1 49.2-86.2l0 0c5.2-7.1 10.4-14.2 15.4-21.4c19.8-28.5 31.4-63 31.4-100.3C368 78.8 289.2 0 192 0S16 78.8 16 176c0 37.3 11.6 71.9 31.4 100.3c5 7.2 10.2 14.3 15.4 21.4l0 0c19.8 27.1 39.7 54.4 49.2 86.2H272zM192 512c44.2 0 80-35.8 80-80V416H112v16c0 44.2 35.8 80 80 80zM112 176c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-61.9 50.1-112 112-112c8.8 0 16 7.2 16 16s-7.2 16-16 16c-44.2 0-80 35.8-80 80z"></path></svg></i>Key Insight</h4>
                             {!! $blog->description1 !!}
                        </div>
                        @endif
                        <div id="age-factor" class="mb-12">
                            @if($blog->description2)
                                {!! $blog->description2 !!}
                            @endif
                            @if($blog->description3)
                               <blockquote>
                                 {!! $blog->description3 !!}
                                </blockquote>
                            @endif
                            @if($blog->description4)
                               <div class="bg-blue-50 border-l-4 border-brand-blue p-6 my-6">
                                {!! $blog->description4 !!}
                                </div>
                            @endif
                        </div>
                        <!-- Mid-Article CTA Card -->
                        <div class="cta-card rounded-2xl p-8 my-12 text-center">
                            <div class="max-w-lg mx-auto">
                                <h3 class="text-2xl font-bold brand-grey mb-4">Ready to Start Your IVF Journey?</h3>
                                <p class="text-gray-600 mb-6">Get a personalized consultation with our fertility experts to understand your unique success factors</p>
                                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <button class="bg-brand-pink text-white px-6 py-3 rounded-full font-semibold hover:bg-opacity-90 transition-all">
                                Book Free Consultation
                                </button>
                                <button class="bg-green-500 text-white px-6 py-3 rounded-full font-semibold hover:bg-green-600 transition-all flex items-center justify-center gap-2">
                                    <i data-fa-i2svg="">
                                        <svg class="svg-inline--fa fa-whatsapp" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path>
                                        </svg>
                                    </i>
                                    WhatsApp Now
                                </button>
                                </div>
                            </div>
                        </div>
                        <div id="ovarian-reserve" class="mb-12">
                            @if($blog->description5)
                                {!! $blog->description5 !!}
                            @endif
                            @if($blog->key_tests_heading)
                                <h3>
                                    <h2> {{ $blog->key_tests_heading }} </h2>
                                </h3>
                            @endif
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-6">
                                @if($blog->key_tests_section_1)
                                   <div class="border border-gray-200 rounded-lg p-4">
                                     {!! $blog->key_tests_section_1 !!}
                                    </div>
                                @endif
                                @if($blog->key_tests_section_2)
                                    <div class="border border-gray-200 rounded-lg p-4">
                                        {!! $blog->key_tests_section_2 !!}
                                    </div>
                                @endif
                                @if($blog->key_tests_section_3)
                                  <div class="border border-gray-200 rounded-lg p-4">
                                     {!! $blog->key_tests_section_3 !!}
                                    </div>
                                @endif
                                @if($blog->key_tests_section_4)
                                   <div class="border border-gray-200 rounded-lg p-4">
                                     {!! $blog->key_tests_section_4 !!}
                                    </div>
                                @endif
                            </div>
                            @if($blog->key_tests_content)
                                <p> {!! $blog->key_tests_content !!} </p>
                            @endif
                        </div>
                        @if($blog->male_factor_and_key_male_fertility || $blog->icsi)
                            <div id="male-factors" class="mb-12">
                                {!! $blog->male_factor_and_key_male_fertility !!}
                                <div class="bg-pink-50 border-l-4 border-brand-pink p-6 my-6">
                                    {!! $blog->icsi !!}
                                </div>
                            </div>
                        @endif
                        <!-- Video Content Section -->
                        <div class="my-12">
                    @if(!empty($blog->video_url))
                        @php
                            // Extract YouTube video ID from various URL formats
                            $videoUrl = trim($blog->video_url);
                            $youtubeId = null;
                            $embedUrl = null;

                            // Check if it's already an embed URL
                            if (preg_match('/youtube\.com\/embed\/([a-zA-Z0-9_-]{11})/', $videoUrl, $matches)) {
                                $youtubeId = $matches[1];
                                $embedUrl = "https://www.youtube.com/embed/{$youtubeId}";
                            }
                            // Extract from standard YouTube watch URL
                            elseif (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $videoUrl, $matches)) {
                                $youtubeId = $matches[1];
                                $embedUrl = "https://www.youtube.com/embed/{$youtubeId}";
                            }
                            // Fallback: try parse_url method for URLs with additional parameters
                            elseif (strpos($videoUrl, 'youtube.com') !== false || strpos($videoUrl, 'youtu.be') !== false) {
                                $parsedUrl = parse_url($videoUrl);
                                if (isset($parsedUrl['query'])) {
                                    parse_str($parsedUrl['query'], $params);
                                    if (isset($params['v']) && !empty($params['v'])) {
                                        $youtubeId = preg_replace('/[^a-zA-Z0-9_-]/', '', $params['v']);
                                        if (strlen($youtubeId) === 11) {
                                            $embedUrl = "https://www.youtube.com/embed/{$youtubeId}";
                                        }
                                    }
                                }
                                // For youtu.be short URLs
                                if (!$embedUrl && isset($parsedUrl['path'])) {
                                    $path = trim($parsedUrl['path'], '/');
                                    if (preg_match('/^[a-zA-Z0-9_-]{11}$/', $path)) {
                                        $youtubeId = $path;
                                        $embedUrl = "https://www.youtube.com/embed/{$youtubeId}";
                                    }
                                }
                            }
                        @endphp

                        @if($embedUrl)
                            <div class="relative rounded-2xl overflow-hidden shadow-lg" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                                <iframe
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;"
                                    src="{{ $embedUrl }}?rel=0"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        @else
                            {{-- Fallback: Show video URL as link if extraction fails --}}
                            <div class="bg-gray-100 rounded-2xl p-6 text-center">
                                <p class="text-gray-600 mb-4">Video URL: <a href="{{ $videoUrl }}" target="_blank" rel="noopener noreferrer" class="text-brand-blue hover:underline break-all">{{ $videoUrl }}</a></p>
                                <p class="text-sm text-gray-500 mb-4">Unable to extract video ID. Please check the URL format.</p>
                                <a href="{{ $videoUrl }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition-colors">
                                    <i class="fab fa-youtube mr-2"></i> Watch on YouTube
                                </a>
                            </div>
                        @endif
                        @endif
                        <div id="lifestyle-impact" class="mb-12">
                             @if($blog->lifestyle)
                                 {!! $blog->lifestyle !!}
                             @endif
                             @if($blog->nutrition || $blog->exercise)
                            <h3>Positive Lifestyle Factors</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-6">
                                <div>
                                @if($blog->nutrition)
                                    <h4 class="font-semibold brand-blue mb-3">
                                        <i class="mr-2" data-fa-i2svg="">
                                            <svg class="svg-inline--fa fa-apple-whole" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="apple-whole" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M224 112c-8.8 0-16-7.2-16-16V80c0-44.2 35.8-80 80-80h16c8.8 0 16 7.2 16 16V32c0 44.2-35.8 80-80 80H224zM0 288c0-76.3 35.7-160 112-160c27.3 0 59.7 10.3 82.7 19.3c18.8 7.3 39.9 7.3 58.7 0c22.9-8.9 55.4-19.3 82.7-19.3c76.3 0 112 83.7 112 160c0 128-80 224-160 224c-16.5 0-38.1-6.6-51.5-11.3c-8.1-2.8-16.9-2.8-25 0c-13.4 4.7-35 11.3-51.5 11.3C80 512 0 416 0 288z"></path>
                                            </svg>
                                        </i>
                                        Nutrition
                                    </h4>
                                    {!! $blog->nutrition !!}
                                @endif
                                </div>
                                <div>
                                   @if($blog->exercise)
                                    <h4 class="font-semibold brand-blue mb-3">
                                        <i class="mr-2" data-fa-i2svg="">
                                            <svg class="svg-inline--fa fa-dumbbell" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dumbbell" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M96 64c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V224v64V448c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V384H64c-17.7 0-32-14.3-32-32V288c-17.7 0-32-14.3-32-32s14.3-32 32-32V160c0-17.7 14.3-32 32-32H96V64zm448 0v64h32c17.7 0 32 14.3 32 32v64c17.7 0 32 14.3 32 32s-14.3 32-32 32v64c0 17.7-14.3 32-32 32H544v64c0 17.7-14.3 32-32 32H480c-17.7 0-32-14.3-32-32V288 224 64c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32zM416 224v64H224V224H416z"></path>
                                            </svg>
                                        </i>
                                        Exercise
                                    </h4>
                                    {!! $blog->exercise !!}
                                    @endif
                                </div>
                            </div>
                            @endif
                            @if($blog->avoid)
                            <h3>Factors to Avoid</h3>
                            <div class="bg-red-50 border border-red-200 rounded-lg p-6 my-6">
                                <ul class="space-y-2">
                                <li class="flex items-center gap-2">
                                    @if($blog->avoid)
                                    {!! $blog->avoid !!}
                                    @endif
                                </li>
                                </ul>
                            </div>
                            @endif
                        </div>
                        @if($blog->clinic || $blog->laboratory_standards || $blog->experienced_team || $blog->transparent_success_rates || $blog->dr_review)
                        <div id="clinic-factors" class="mb-12">
                            @if($blog->clinic)
                             {!! $blog->clinic !!}
                            @endif
                            @if($blog->laboratory_standards || $blog->experienced_team || $blog->transparent_success_rates || $blog->dr_review)
                            <h3>Key Clinic Quality Indicators</h3>
                            <div class="space-y-4 my-6">
                                @if($blog->laboratory_standards)
                                    <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-lg">
                                    <i class="text-brand-pink text-xl mt-1" data-fa-i2svg="">
                                        <svg class="svg-inline--fa fa-microscope" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="microscope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M160 32c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32c17.7 0 32 14.3 32 32V288c0 17.7-14.3 32-32 32c0 17.7-14.3 32-32 32H192c-17.7 0-32-14.3-32-32c-17.7 0-32-14.3-32-32V64c0-17.7 14.3-32 32-32zM32 448H320c70.7 0 128-57.3 128-128s-57.3-128-128-128V128c106 0 192 86 192 192c0 49.2-18.5 94-48.9 128H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H320 32c-17.7 0-32-14.3-32-32s14.3-32 32-32zm80-64H304c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                                        </svg>
                                    </i>
                                        <div>
                                            {!! $blog->laboratory_standards !!}
                                        </div>
                                    </div>
                                @endif
                                @if($blog->experienced_team)
                                <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-lg">
                                    <i class="text-brand-blue text-xl mt-1" data-fa-i2svg="">
                                        <svg class="svg-inline--fa fa-user-doctor" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-doctor" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-96 55.2C54 332.9 0 401.3 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7c0-81-54-149.4-128-171.1V362c27.6 7.1 48 32.2 48 62v40c0 8.8-7.2 16-16 16H336c-8.8 0-16-7.2-16-16s7.2-16 16-16V424c0-17.7-14.3-32-32-32s-32 14.3-32 32v24c8.8 0 16 7.2 16 16s-7.2 16-16 16H256c-8.8 0-16-7.2-16-16V424c0-29.8 20.4-54.9 48-62V304.9c-6-.6-12.1-.9-18.3-.9H178.3c-6.2 0-12.3 .3-18.3 .9v65.4c23.1 6.9 40 28.3 40 53.7c0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.4 16.9-46.8 40-53.7V311.2zM144 448a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"></path>
                                        </svg>
                                    </i>
                                    <div>
                                        {!! $blog->experienced_team !!}
                                    </div>
                                </div>
                                @endif
                                @if($blog->transparent_success_rates)
                                <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-lg">
                                    <i class="text-green-500 text-xl mt-1" data-fa-i2svg="">
                                        <svg class="svg-inline--fa fa-chart-line" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chart-line" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z"></path>
                                        </svg>
                                    </i>
                                    <div>
                                        {!! $blog->transparent_success_rates !!}
                                    </div>
                                </div>
                                @endif
                            </div>
                            @endif
                            @if($blog->dr_review)
                            <blockquote>
                                 {!! $blog->dr_review !!}
                            </blockquote>
                            @endif
                        </div>
                        @endif
                        <!-- Another CTA Card -->
                        <div class="cta-card rounded-2xl p-8 my-12 text-center">
                            <div class="max-w-lg mx-auto">
                                <h3 class="text-2xl font-bold brand-grey mb-4">Want to Know Your Personal Success Rate?</h3>
                                <p class="text-gray-600 mb-6">Our fertility calculator provides personalized estimates based on your specific factors</p>
                                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <button class="bg-brand-blue text-white px-6 py-3 rounded-full font-semibold hover:bg-opacity-90 transition-all">
                                Try Fertility Calculator
                                </button>
                                <button class="border-2 border-brand-pink text-brand-pink px-6 py-3 rounded-full font-semibold hover:bg-brand-pink hover:text-white transition-all">
                                Download Guide
                                </button>
                                </div>
                            </div>
                        </div>
                        @if($blog->previous_attempts || $blog->success_after_attempts)
                        <div id="previous-attempts" class="mb-12">
                            {!! $blog->previous_attempts !!}
                            @if($blog->success_after_attempts)
                            <div class="bg-blue-50 border-l-4 border-brand-blue p-6 my-6">
                                {!! $blog->success_after_attempts !!}
                            </div>
                            @endif
                        </div>
                        @endif
                        @if($blog->emotional_support || $blog->partner_support || $blog->support_groups || $blog->professinal_counselling)
                        <div id="emotional-support" class="mb-12">
                            {!! $blog->emotional_support !!}
                            <h3>Building Your Support Network</h3>
                            @if($blog->partner_support || $blog->support_groups || $blog->professinal_counselling)
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 my-6">
                                @if($blog->partner_support)
                                    <div class="text-center p-4 bg-purple-50 rounded-lg">
                                        <i class="text-purple-500 text-2xl mb-3" data-fa-i2svg="">
                                            <svg class="svg-inline--fa fa-heart" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"></path>
                                            </svg>
                                        </i>
                                       {!! $blog->partner_support !!}
                                    </div>
                                @endif
                                @if($blog->support_groups)
                                <div class="text-center p-4 bg-green-50 rounded-lg">
                                    <i class="text-green-500 text-2xl mb-3" data-fa-i2svg="">
                                        <svg class="svg-inline--fa fa-users" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="users" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"></path>
                                        </svg>
                                    </i>
                                    {!! $blog->support_groups !!}
                                </div>
                                @endif
                                @if($blog->professinal_counselling)
                                <div class="text-center p-4 bg-blue-50 rounded-lg">
                                    <i class="text-brand-blue text-2xl mb-3" data-fa-i2svg="">
                                        <svg class="svg-inline--fa fa-user-doctor" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-doctor" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-96 55.2C54 332.9 0 401.3 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7c0-81-54-149.4-128-171.1V362c27.6 7.1 48 32.2 48 62v40c0 8.8-7.2 16-16 16H336c-8.8 0-16-7.2-16-16s7.2-16 16-16V424c0-17.7-14.3-32-32-32s-32 14.3-32 32v24c8.8 0 16 7.2 16 16s-7.2 16-16 16H256c-8.8 0-16-7.2-16-16V424c0-29.8 20.4-54.9 48-62V304.9c-6-.6-12.1-.9-18.3-.9H178.3c-6.2 0-12.3 .3-18.3 .9v65.4c23.1 6.9 40 28.3 40 53.7c0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.4 16.9-46.8 40-53.7V311.2zM144 448a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"></path>
                                        </svg>
                                    </i>
                                    {!! $blog->professinal_counselling !!}
                                </div>
                                @endif
                            </div>
                            @endif
                        </div>
                        @endif
                        @if($blog->personalized_treatment || $blog->india_advantage)
                        <div id="personalized-approach" class="mb-12">
                            @if($blog->personalized_treatment)
                                {!! $blog->personalized_treatment !!}
                            @endif
                            @if($blog->india_advantage)
                            {{-- <div class="highlight-box"> --}}
                            <div>
                                <h4 class="text-brand-pink font-semibold mb-3">
                                <i class="mr-2" data-fa-i2svg="">
                                    <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                    </svg>
                                </i>
                                India IVF Advantage
                                </h4>
                                {!! $blog->india_advantage !!}
                            </div>
                            @endif
                        </div>
                        @endif
                        <!-- Embedded Image -->
                        @if($blog->image)
                        <div class="my-12">
                            <div class="relative rounded-2xl overflow-hidden shadow-lg">
                                <img class="w-full h-[350px] object-cover" src="{{ $blog->image ? asset('storage/' . $blog->image) : 'https://storage.googleapis.com/uxpilot-auth.appspot.com/5aef1ce0af-317e4fcc09506136c86a.png' }}" >
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                                </div>
                            </div>
                        </div>
                        @endif
                        <div id="success-statistics" class="mb-12">
                            <h2>India IVF Success Statistics</h2>
                            <p>Our commitment to excellence is reflected in our success rates, which consistently exceed national averages across all age groups and treatment types.</p>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 my-8">
                                <div class="text-center p-6 bg-gradient-to-br from-brand-pink to-pink-400 text-white rounded-xl">
                                <div class="text-3xl font-bold mb-2">85%</div>
                                <div class="text-sm opacity-90">Overall Success Rate</div>
                                </div>
                                <div class="text-center p-6 bg-gradient-to-br from-brand-blue to-blue-400 text-white rounded-xl">
                                <div class="text-3xl font-bold mb-2">15,000+</div>
                                <div class="text-sm opacity-90">Happy Families</div>
                                </div>
                                <div class="text-center p-6 bg-gradient-to-br from-green-500 to-green-400 text-white rounded-xl">
                                <div class="text-3xl font-bold mb-2">25+</div>
                                <div class="text-sm opacity-90">Years Experience</div>
                                </div>
                                <div class="text-center p-6 bg-gradient-to-br from-purple-500 to-purple-400 text-white rounded-xl">
                                <div class="text-3xl font-bold mb-2">98%</div>
                                <div class="text-sm opacity-90">Patient Satisfaction</div>
                                </div>
                            </div>
                            <h3>Age-Specific Success Rates at India IVF</h3>
                            <div class="bg-gray-50 rounded-lg p-6 my-6">
                                <div class="space-y-3">
                                <div class="flex justify-between items-center">
                                    <span class="font-medium">Under 30 years</span>
                                    <div class="flex items-center gap-2">
                                        <div class="w-32 bg-gray-200 rounded-full h-2">
                                            <div class="bg-brand-pink h-2 rounded-full" style="width: 75%"></div>
                                        </div>
                                        <span class="font-semibold">75%</span>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-medium">30-34 years</span>
                                    <div class="flex items-center gap-2">
                                        <div class="w-32 bg-gray-200 rounded-full h-2">
                                            <div class="bg-brand-pink h-2 rounded-full" style="width: 68%"></div>
                                        </div>
                                        <span class="font-semibold">68%</span>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-medium">35-39 years</span>
                                    <div class="flex items-center gap-2">
                                        <div class="w-32 bg-gray-200 rounded-full h-2">
                                            <div class="bg-brand-blue h-2 rounded-full" style="width: 52%"></div>
                                        </div>
                                        <span class="font-semibold">52%</span>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-medium">40-42 years</span>
                                    <div class="flex items-center gap-2">
                                        <div class="w-32 bg-gray-200 rounded-full h-2">
                                            <div class="bg-brand-blue h-2 rounded-full" style="width: 35%"></div>
                                        </div>
                                        <span class="font-semibold">35%</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        @if($blog->conclusion)
                        <div id="conclusion" class="mb-12">
                            {!! $blog->conclusion !!}
                        </div>
                        @endif
                        <!-- Article Tags and Sharing -->
                        <div class="border-t border-gray-200 pt-8 mt-12">
                            @if($blog->tags)
                                @php
                                $tags = explode(',', $blog->tags);
                                // foreach ($tags as $tag) {
                                //     \App\Models\Tag::firstOrCreate(['name' => trim($tag)]);
                                // }
                                @endphp
                                <div class="flex flex-wrap items-center gap-4 mb-6">
                                    <span class="text-gray-600 font-medium">Tags:</span>
                                    @foreach($tags as $tag)
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">{{ $tag }}</span>
                                    @endforeach
                                </div>
                            @endif
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                <span class="text-gray-600 font-medium">Share:</span>
                                <div class="flex gap-2">
                                    <button class="w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition-all">
                                        <i data-fa-i2svg="">
                                            <svg class="svg-inline--fa fa-facebook-f" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                                            </svg>
                                        </i>
                                    </button>
                                    <button class="w-10 h-10 bg-blue-400 text-white rounded-full flex items-center justify-center hover:bg-blue-500 transition-all">
                                        <i data-fa-i2svg="">
                                            <svg class="svg-inline--fa fa-twitter" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                            </svg>
                                        </i>
                                    </button>
                                    <button class="w-10 h-10 bg-blue-700 text-white rounded-full flex items-center justify-center hover:bg-blue-800 transition-all">
                                        <i data-fa-i2svg="">
                                            <svg class="svg-inline--fa fa-linkedin-in" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                                            </svg>
                                        </i>
                                    </button>
                                    <button class="w-10 h-10 bg-green-500 text-white rounded-full flex items-center justify-center hover:bg-green-600 transition-all">
                                        <i data-fa-i2svg="">
                                            <svg class="svg-inline--fa fa-whatsapp" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path>
                                            </svg>
                                        </i>
                                    </button>
                                    <button class="w-10 h-10 bg-gray-600 text-white rounded-full flex items-center justify-center hover:bg-gray-700 transition-all">
                                        <i data-fa-i2svg="">
                                            <svg class="svg-inline--fa fa-envelope" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"></path>
                                            </svg>
                                        </i>
                                    </button>
                                </div>
                                </div>
                                <div class="flex items-center gap-4 text-sm text-gray-500">
                                <span class="flex items-center gap-1">
                                    <i data-fa-i2svg="">
                                        <svg class="svg-inline--fa fa-heart" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"></path>
                                        </svg>
                                    </i>
                                    <span class="article-likes-count">{{ $blog->likes ?? 0 }}</span> likes
                                </span>
                                <span class="flex items-center gap-1">
                                    <i data-fa-i2svg="">
                                        <svg class="svg-inline--fa fa-comment" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comment" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M512 240c0 114.9-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6C73.6 471.1 44.7 480 16 480c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4l0 0 0 0 0 0 0 0 .3-.3c.3-.3 .7-.7 1.3-1.4c1.1-1.2 2.8-3.1 4.9-5.7c4.1-5 9.6-12.4 15.2-21.6c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208z"></path>
                                        </svg>
                                    </i>
                                    <span class="comments-count-display">{{ $blog->comments_count ?? 0 }}</span> comments
                                </span>
                                <span class="flex items-center gap-1">
                                    <i data-fa-i2svg="">
                                        <svg class="svg-inline--fa fa-share" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z"></path>
                                        </svg>
                                    </i>
                                    <span class="article-shares-count">{{ $blog->shares ?? 0 }}</span> shares
                                </span>
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
    {{-- @if($relatedBlogs->count() > 0 || $similarBlogs->count() > 0) --}}
    @if($relatedBlogs->count() > 0)
    <section id="related-articles" class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-3xl font-bold text-support-grey">Related Articles</h2>
                    <a href="{{ route('blog.category', $blog->categories->first()->slug ?? '#') }}" class="text-primary-pink font-semibold hover:underline">View All in {{ $blog->categories->first()->name ?? 'Category' }}</a>
                    {{-- <a href="{{ route('blog.category', $blog->category->slug) }}" class="text-primary-pink font-semibold hover:underline">View All in {{ $blog->categories->first()->name }}</a> --}}
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach(($relatedBlogs->count() > 0 ? $relatedBlogs : $similarBlogs)->take(3) as $relatedBlog)
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all group">
                        <div class="relative">
                            <img class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                                src="{{ $relatedBlog->featured_image ? asset('storage/' . $relatedBlog->featured_image) : 'https://storage.googleapis.com/uxpilot-auth.appspot.com/5aef1ce0af-317e4fcc09506136c86a.png' }}"
                                alt="{{ $relatedBlog->title }}">
                            <div class="absolute top-3 left-3">
                                <span class="{{ $relatedBlog->categories->first()->color_class ?? 'bg-primary-blue' }} text-white px-3 py-1 rounded-full text-sm font-medium">
                                    {{ $relatedBlog->categories->first()->name ?? 'General' }}
                                </span>
                                {{-- <span class="{{ $relatedBlog->category->color_class ?? 'bg-primary-blue' }} text-white px-3 py-1 rounded-full text-sm font-medium">
                                    {{ $relatedBlog->category->name ?? 'General' }}
                                </span> --}}
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
                    <a href="{{ route('blog.category', $blog->categories->first()->slug ?? '#') }}" class="bg-primary-pink text-white px-8 py-3 rounded-full font-semibold hover:bg-opacity-90 transition-all">
                        View More Articles in {{ $blog->categories->first()->name ?? 'Category' }}
                    </a>
                    {{-- <a href="{{ route('blog.category', $blog->category->slug) }}" class="bg-primary-pink text-white px-8 py-3 rounded-full font-semibold hover:bg-opacity-90 transition-all">
                        View More Articles in {{ $blog->categories->first()->name }}
                    </a> --}}
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
                        <!-- Logged In User Info -->
                        <div id="logged-in-info" class="mb-4 hidden">
                            <div class="bg-gray-50 rounded-lg p-4 flex justify-between items-center">
                                <div>
                                    <span class="text-sm text-gray-600">Commenting as: </span>
                                    <span class="font-semibold text-gray-800" id="logged-in-name"></span>
                                    <span class="text-sm text-gray-500 ml-2" id="logged-in-email"></span>
                                </div>
                                <button type="button" onclick="logoutUser()" class="text-gray-500 text-sm font-semibold hover:text-gray-700 hover:underline">
                                    <i class="fas fa-sign-out-alt mr-1"></i>Logout
                                </button>
                            </div>
                        </div>

                        <form id="comment-form">
                            <div class="flex gap-4">
                                <!-- Avatar Icon -->
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center overflow-hidden">
                                        <i class="fas fa-user text-gray-500 text-xl"></i>
                                    </div>
                                </div>

                                <!-- Comment Input Section -->
                                <div class="flex-1">
                                    <!-- Comment Text -->
                                    <textarea name="comment" id="comment-text" placeholder="Share your thoughts or ask a question..." required
                                        class="w-full p-4 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink resize-none h-24"></textarea>

                                    <div class="flex justify-between items-center mt-3">
                                        <span class="text-sm text-gray-500">Please be respectful and constructive</span>
                                        <button type="submit"
                                            class="bg-brand-pink text-white px-6 py-2 rounded-full font-semibold hover:bg-opacity-90 transition-all">
                                            Post Comment
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Login Modal -->
                    <div id="login-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center" style="display: none;" onclick="if(event.target === this) closeLoginModal();">
                        <div class="bg-white rounded-2xl shadow-xl max-w-md w-full mx-4" onclick="event.stopPropagation();">
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-2xl font-bold brand-grey">Login to Comment</h3>
                                    <button type="button" onclick="closeLoginModal()" class="text-gray-400 hover:text-gray-600">
                                        <i class="fas fa-times text-xl"></i>
                                    </button>
                                </div>
                                <form id="login-form" onsubmit="event.preventDefault(); handleLogin();">
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                                        <input type="email" id="login-email" placeholder="your.email@example.com" required
                                            class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Password *</label>
                                        <input type="password" id="login-password" placeholder="Enter your password" required
                                            class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink">
                                    </div>
                                    <div class="mb-4">
                                        <button type="submit" id="login-submit-btn"
                                            class="w-full bg-brand-pink text-white px-6 py-2 rounded-full font-semibold hover:bg-opacity-90 transition-all">
                                            Login
                                        </button>
                                    </div>
                                    <div class="text-center">
                                        <p class="text-sm text-gray-600">Don't have an account?
                                            <button type="button" onclick="switchToRegister()" class="text-brand-pink font-semibold hover:underline">
                                                Register here
                                            </button>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Registration Modal -->
                    <div id="register-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center" style="display: none;" onclick="if(event.target === this) closeRegisterModal();">
                        <div class="bg-white rounded-2xl shadow-xl max-w-md w-full mx-4 max-h-[90vh] overflow-y-auto" onclick="event.stopPropagation();">
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-2xl font-bold brand-grey">Create Account</h3>
                                    <button type="button" onclick="closeRegisterModal()" class="text-gray-400 hover:text-gray-600">
                                        <i class="fas fa-times text-xl"></i>
                                    </button>
                                </div>
                                <form id="register-form" onsubmit="event.preventDefault(); handleRegister();">
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Name *</label>
                                        <input type="text" id="register-name" placeholder="Your Name" required
                                            class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                                        <input type="email" id="register-email" placeholder="your.email@example.com" required
                                            class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Password *</label>
                                        <input type="password" id="register-password" placeholder="Minimum 6 characters" required minlength="6"
                                            class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                                        <input type="tel" id="register-phone" placeholder="Your Phone Number"
                                            class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Location</label>
                                        <input type="text" id="register-location" placeholder="Your Location"
                                            class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink">
                                    </div>
                                    <div class="mb-4">
                                        <button type="submit" id="register-submit-btn"
                                            class="w-full bg-brand-pink text-white px-6 py-2 rounded-full font-semibold hover:bg-opacity-90 transition-all">
                                            Create Account & Comment
                                        </button>
                                    </div>
                                    <div class="text-center">
                                        <p class="text-sm text-gray-600">Already have an account?
                                            <button type="button" onclick="switchToLogin()" class="text-brand-pink font-semibold hover:underline">
                                                Login here
                                            </button>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
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

            // Store logged in user (declare at top to avoid initialization errors)
            let loggedInUser = null;

            // Initialize dynamic functionality
            console.log('Initializing blog functionality for blog ID:', blogId);
            initializeBlogInteractions();
            initializeCommentForm();
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
                // Add cache-busting parameter to ensure fresh data
                const timestamp = new Date().getTime();
                fetch(`/api/blog/${blogId}/comments?t=${timestamp}`)
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

                // Hide loading element
                loadingElement.style.display = 'none';

                // Clear existing comments
                commentsList.innerHTML = '';

                if (comments.length === 0) {
                    commentsList.innerHTML = '<div class="text-center text-gray-500 py-8">No comments yet. Be the first to comment!</div>';
                    return;
                }

                let commentsHTML = '';
                comments.forEach(comment => {
                    commentsHTML += createCommentHTML(comment);
                });

                // Show comments
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
                // Check if user is logged in
                const savedUser = localStorage.getItem('logged_in_user');
                if (!savedUser) {
                    // User not logged in - show login modal
                    showLoginModal();
                    return;
                }

                // User is logged in - show reply form directly
                loggedInUser = JSON.parse(savedUser);

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
                                <!-- Logged in user info -->
                                <div class="mb-2 text-xs text-gray-600">
                                    <i class="fas fa-user me-1"></i>Replying as: <span class="font-semibold">${loggedInUser.name}</span>
                                </div>

                                <!-- Reply Text -->
                                <div>
                                    <textarea name="comment" placeholder="Write your reply..." required
                                        class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink resize-none h-20 text-sm"></textarea>
                                    <div class="flex justify-end items-center mt-2">
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

                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    submitReply(commentId, this);
                });

                cancelBtn.addEventListener('click', function() {
                    replyForm.remove();
                });
            }

            function submitReply(parentCommentId, form) {
                const formData = new FormData(form);
                const comment = formData.get('comment');

                if (!comment || !comment.trim()) {
                    alert('Please enter a reply');
                    return;
                }

                // Check if user is logged in
                const savedUser = localStorage.getItem('logged_in_user');
                if (!savedUser) {
                    alert('Please login to reply');
                    return;
                }

                loggedInUser = JSON.parse(savedUser);

                // Prepare reply data using logged in user details
                const replyData = {
                    name: loggedInUser.name,
                    email: loggedInUser.email,
                    phone: loggedInUser.phone || '',
                    location: loggedInUser.location || '',
                    consultation_interest: loggedInUser.consultation_interest || '',
                    comment: comment,
                    parent_id: parentCommentId
                };

                // Disable submit button
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalBtnText = submitBtn.innerHTML;
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-1"></i>Posting...';

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
                        // Remove reply form
                        form.closest('.reply-form').remove();

                        // Re-enable submit button
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnText;

                        // Reload comments after a short delay to ensure database is updated
                        setTimeout(() => {
                            loadComments();
                        }, 500);

                        // Show success message
                        const successMsg = document.createElement('div');
                        successMsg.className = 'mb-4 p-3 bg-green-50 border border-green-200 rounded-lg text-green-700 text-sm';
                        successMsg.innerHTML = '<i class="fas fa-check-circle me-2"></i>Reply posted successfully!';
                        const commentsList = document.getElementById('comments-list');
                        if (commentsList) {
                            commentsList.parentNode.insertBefore(successMsg, commentsList);
                            setTimeout(() => successMsg.remove(), 3000);
                        }
                    } else {
                        alert('Error: ' + (data.message || 'Failed to post reply'));
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnText;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Something went wrong. Please try again.');
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                });
            }

            function initializeCommentForm() {
                const commentForm = document.getElementById('comment-form');
                if (commentForm) {
                    commentForm.addEventListener('submit', function(e) {
                        e.preventDefault();
                        submitComment();
                    });
                }

                // Check if user is logged in
                checkLoggedInUser();

                // Close modals on Escape key
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') {
                        const loginModal = document.getElementById('login-modal');
                        const registerModal = document.getElementById('register-modal');
                        if (loginModal && !loginModal.classList.contains('hidden')) {
                            closeLoginModal();
                        } else if (registerModal && !registerModal.classList.contains('hidden')) {
                            closeRegisterModal();
                        }
                    }
                });
            }

            // Load saved commenter details (WordPress-style cookie behavior)
            function loadCommenterDetails() {
                // Wait a bit to ensure DOM elements exist
                setTimeout(function() {
                    const savedName = localStorage.getItem('commenter_name');
                    const savedEmail = localStorage.getItem('commenter_email');
                    const savedPhone = localStorage.getItem('commenter_phone');
                    const savedLocation = localStorage.getItem('commenter_location');

                    const nameInput = document.getElementById('commenter-name');
                    const emailInput = document.getElementById('commenter-email');
                    const phoneInput = document.getElementById('commenter-phone');
                    const locationInput = document.getElementById('commenter-location');
                    const infoSection = document.getElementById('commenter-info');
                    const detailsSection = document.getElementById('commenter-details');
                    const displayName = document.getElementById('display-name');
                    const displayEmail = document.getElementById('display-email');

                    // Check if elements exist
                    if (!nameInput || !emailInput || !infoSection || !detailsSection) {
                        console.log('Comment form elements not found');
                        return;
                    }

                    if (savedName && savedEmail) {
                        // User has commented before - auto-fill and show info bar
                        nameInput.value = savedName;
                        emailInput.value = savedEmail;
                        if (savedPhone && phoneInput) phoneInput.value = savedPhone;
                        if (savedLocation && locationInput) locationInput.value = savedLocation;

                        // Show info bar and hide details section
                        infoSection.classList.remove('hidden');
                        if (displayName) displayName.textContent = savedName;
                        if (displayEmail) displayEmail.textContent = '(' + savedEmail + ')';
                        detailsSection.classList.add('hidden');
                    } else {
                        // First-time commenter - show details section
                        infoSection.classList.add('hidden');
                        detailsSection.classList.remove('hidden');
                    }
                }, 100);
            }

            // Toggle commenter details (WordPress-style edit functionality) - Make it globally accessible
            window.toggleCommenterDetails = function() {
                const detailsSection = document.getElementById('commenter-details');
                const infoSection = document.getElementById('commenter-info');

                if (detailsSection.classList.contains('hidden')) {
                    // Show details section for editing
                    detailsSection.classList.remove('hidden');
                    infoSection.classList.add('hidden');
                } else {
                    // Hide details section and save any changes
                    const name = document.getElementById('commenter-name').value;
                    const email = document.getElementById('commenter-email').value;
                    const phone = document.getElementById('commenter-phone').value;
                    const location = document.getElementById('commenter-location').value;

                    if (name && email) {
                        // Save updated details
                        saveCommenterDetails(name, email, phone, location);

                        // Update info bar
                        document.getElementById('display-name').textContent = name;
                        document.getElementById('display-email').textContent = '(' + email + ')';
                    }

                    detailsSection.classList.add('hidden');
                    infoSection.classList.remove('hidden');
                }
            };

            // Save commenter details to localStorage (WordPress-style)
            function saveCommenterDetails(name, email, phone, location) {
                localStorage.setItem('commenter_name', name);
                localStorage.setItem('commenter_email', email);
                if (phone) localStorage.setItem('commenter_phone', phone);
                if (location) localStorage.setItem('commenter_location', location);
            }

            // Logout commenter (clear saved details) - Make it globally accessible
            window.logoutCommenter = function() {
                if (confirm('Are you sure you want to logout? You will need to enter your details again for future comments.')) {
                    localStorage.removeItem('commenter_name');
                    localStorage.removeItem('commenter_email');
                    localStorage.removeItem('commenter_phone');
                    localStorage.removeItem('commenter_location');

                    // Clear form fields
                    document.getElementById('commenter-name').value = '';
                    document.getElementById('commenter-email').value = '';
                    document.getElementById('commenter-phone').value = '';
                    document.getElementById('commenter-location').value = '';

                    // Show details section and hide info bar
                    document.getElementById('commenter-info').classList.add('hidden');
                    document.getElementById('commenter-details').classList.remove('hidden');
                }
            };

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

            // Store pending comment
            let pendingComment = null;

            function submitComment() {
                const form = document.getElementById('comment-form');
                const formData = new FormData(form);
                const comment = formData.get('comment');

                // Validate comment first (ensure not empty)
                if (!comment || !comment.trim()) {
                    alert('Please enter a comment before posting');
                    return;
                }

                // Store comment for later
                pendingComment = comment;

                // Check if user is logged in
                const savedUser = localStorage.getItem('logged_in_user');
                if (savedUser) {
                    loggedInUser = JSON.parse(savedUser);
                    // User is logged in, post comment directly
                    postCommentDirectly(comment);
                } else {
                    // User not logged in - show login modal
                    showLoginModal();
                }
            }

            // Modal functions - Make globally accessible
            window.showLoginModal = function() {
                const modal = document.getElementById('login-modal');
                if (modal) {
                    modal.classList.remove('hidden');
                    modal.style.display = 'flex';
                    setTimeout(() => {
                        const emailInput = document.getElementById('login-email');
                        if (emailInput) emailInput.focus();
                    }, 100);
                }
            };

            window.closeLoginModal = function() {
                const modal = document.getElementById('login-modal');
                if (modal) {
                    modal.classList.add('hidden');
                    modal.style.display = 'none';
                }
            };

            window.showRegisterModal = function() {
                const modal = document.getElementById('register-modal');
                if (modal) {
                    modal.classList.remove('hidden');
                    modal.style.display = 'flex';
                    setTimeout(() => {
                        const nameInput = document.getElementById('register-name');
                        if (nameInput) nameInput.focus();
                    }, 100);
                }
            };

            window.closeRegisterModal = function() {
                const modal = document.getElementById('register-modal');
                if (modal) {
                    modal.classList.add('hidden');
                    modal.style.display = 'none';
                }
            };

            window.switchToRegister = function() {
                const email = document.getElementById('login-email').value;
                closeLoginModal();
                showRegisterModal();
                if (email) document.getElementById('register-email').value = email;
            };

            window.switchToLogin = function() {
                const email = document.getElementById('register-email').value;
                closeRegisterModal();
                showLoginModal();
                if (email) document.getElementById('login-email').value = email;
            };

            // Login handler
            window.handleLogin = function() {
                const email = document.getElementById('login-email').value;
                const password = document.getElementById('login-password').value;
                const submitBtn = document.getElementById('login-submit-btn');

                if (!email || !password) {
                    alert('Please enter email and password');
                    return;
                }

                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Logging in...';

                fetch('/api/blog/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ email: email, password: password })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Save logged in user
                        loggedInUser = data.user;
                        localStorage.setItem('logged_in_user', JSON.stringify(data.user));

                        // Update UI
                        updateLoggedInUI(data.user);
                        closeLoginModal();

                        // Clear login form
                        document.getElementById('login-form').reset();

                        // Post comment if pending
                        if (pendingComment) {
                            postCommentDirectly(pendingComment);
                            pendingComment = null;
                        }
                    } else {
                        alert(data.message || 'Login failed. Please check your credentials.');
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = 'Login';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Something went wrong. Please try again.');
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = 'Login';
                });
            };

            // Register handler
            window.handleRegister = function() {
                const name = document.getElementById('register-name').value;
                const email = document.getElementById('register-email').value;
                const password = document.getElementById('register-password').value;
                const phone = document.getElementById('register-phone').value;
                const location = document.getElementById('register-location').value;
                const submitBtn = document.getElementById('register-submit-btn');

                if (!name || !email || !password) {
                    alert('Please fill in all required fields (Name, Email, Password)');
                    return;
                }

                if (password.length < 6) {
                    alert('Password must be at least 6 characters');
                    return;
                }

                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Creating account...';

                fetch('/api/blog/register', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        name: name,
                        email: email,
                        password: password,
                        phone: phone,
                        location: location
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Save logged in user
                        loggedInUser = data.user;
                        localStorage.setItem('logged_in_user', JSON.stringify(data.user));

                        // Update UI
                        updateLoggedInUI(data.user);
                        closeRegisterModal();

                        // Clear register form
                        document.getElementById('register-form').reset();

                        // Post comment if pending
                        if (pendingComment) {
                            postCommentDirectly(pendingComment);
                            pendingComment = null;
                        }
                    } else {
                        alert(data.message || 'Registration failed. Please try again.');
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = 'Create Account & Comment';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Something went wrong. Please try again.');
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = 'Create Account & Comment';
                });
            };

            // Post comment directly (user is logged in)
            function postCommentDirectly(comment) {
                if (!loggedInUser || !comment) {
                    console.error('No user or comment to post');
                    return;
                }

                const submitBtn = document.querySelector('#comment-form button[type="submit"]');
                const originalBtnText = submitBtn.innerHTML;
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Posting...';

                const commentData = {
                    name: loggedInUser.name,
                    email: loggedInUser.email,
                    phone: loggedInUser.phone || '',
                    location: loggedInUser.location || '',
                    consultation_interest: loggedInUser.consultation_interest || '',
                    comment: comment
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
                        // Clear comment
                        document.getElementById('comment-text').value = '';

                        // Re-enable submit button
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnText;

                        // Reload comments after a short delay to ensure database is updated
                        setTimeout(() => {
                            loadComments();
                        }, 500);

                        // Show success message
                        const successMsg = document.createElement('div');
                        successMsg.className = 'mb-4 p-3 bg-green-50 border border-green-200 rounded-lg text-green-700';
                        successMsg.innerHTML = '<i class="fas fa-check-circle me-2"></i>Comment posted successfully!';
                        const commentForm = document.getElementById('comment-form');
                        commentForm.parentNode.insertBefore(successMsg, commentForm);
                        setTimeout(() => successMsg.remove(), 3000);
                    } else {
                        alert('Error: ' + (data.message || 'Failed to post comment'));
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnText;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Something went wrong. Please try again.');
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                });
            }

            // Update logged in UI
            function updateLoggedInUI(user) {
                const infoSection = document.getElementById('logged-in-info');

                if (user) {
                    // Show logged in info
                    if (infoSection) {
                        document.getElementById('logged-in-name').textContent = user.name;
                        document.getElementById('logged-in-email').textContent = '(' + user.email + ')';
                        infoSection.classList.remove('hidden');
                    }
                } else {
                    // Hide logged in info
                    if (infoSection) infoSection.classList.add('hidden');
                }
            }

            // Logout function
            window.logoutUser = function() {
                if (confirm('Are you sure you want to logout?')) {
                    localStorage.removeItem('logged_in_user');
                    loggedInUser = null;
                    updateLoggedInUI(null);
                }
            };

            // Check if user is logged in on page load
            function checkLoggedInUser() {
                const savedUser = localStorage.getItem('logged_in_user');
                if (savedUser) {
                    loggedInUser = JSON.parse(savedUser);
                    updateLoggedInUI(loggedInUser);
                }
            }

            function updateCommentsCount(count) {
                const countElement = document.getElementById('comments-count');
                if (countElement) {
                    countElement.textContent = count;
                }
                const countDisplays = document.querySelectorAll('.comments-count-display');
                countDisplays.forEach(el => {
                    el.textContent = count;
                });
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
                const shareElements = document.querySelectorAll('.article-shares-count');
                shareElements.forEach(el => {
                    el.textContent = sharesCount;
                });
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
