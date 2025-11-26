@extends('frontend.layouts.master')

@section('content')
<!-- Hero Section -->
<section id="hero-section" class="relative bg-gradient-to-r from-primary-pink to-primary-blue h-[400px] sm:h-[500px] md:h-[600px] flex items-center">
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    <img class="absolute inset-0 w-full h-full object-cover" src="{{ asset('assets/images/blogs/blog-banner.png') }}" alt="happy couple holding hands in modern medical clinic, fertility treatment consultation, professional healthcare setting, warm lighting">
    <div class="relative container mx-auto px-4 text-center text-white">
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 sm:mb-6 leading-tight">
            Your Journey to <span class="text-yellow-300">Parenthood</span><br class="hidden sm:block">
            <span class="sm:hidden"> </span>Starts with Knowledge
        </h1>
        <p class="text-base sm:text-lg md:text-xl lg:text-2xl mb-6 sm:mb-8 max-w-3xl mx-auto opacity-90 px-2">
            Explore expert insights, treatment guides, and inspiring stories from India's leading fertility specialists
        </p>
        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center px-4">
            <button class="bg-primary-pink text-white px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold text-base sm:text-lg hover:bg-opacity-90 transition-all w-full sm:w-auto">
                Explore Articles
            </button>
            <button class="bg-transparent border-2 border-white text-white px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold text-base sm:text-lg hover:bg-white hover:text-primary-blue transition-all w-full sm:w-auto">
                Book Consultation
            </button>
        </div>
    </div>
</section>

<!-- Filter Bar -->
<section id="filter-bar" class="bg-white shadow-sm border-b border-gray-100 py-4 sm:py-6">
    <div class="container mx-auto px-4">
        <div class="flex flex-col gap-6">
            <!-- Category Filters -->
            <div class="flex flex-col gap-3">
                <span class="font-semibold text-support-grey text-sm sm:text-base">Filter by Category:</span>
                <div class="flex flex-wrap gap-2 sm:gap-3">
                    <button class="filter-category px-4 py-2.5 rounded-full text-sm font-medium transition-all min-w-[60px] text-center {{ $categoryFilter === 'all' || !$categoryFilter ? 'bg-primary-pink text-white' : 'bg-gray-100 text-gray-700 hover:bg-primary-pink hover:text-white' }}"
                            data-category="all">All</button>
                    @foreach($categories as $category)
                        <button class="filter-category px-4 py-2.5 rounded-full text-sm font-medium transition-all min-w-[80px] text-center {{ $categoryFilter == $category->id ? 'bg-primary-pink text-white' : 'bg-gray-100 text-gray-700 hover:bg-primary-pink hover:text-white' }}"
                                data-category="{{ $category->id }}">{{ $category->name }}</button>
                    @endforeach
                </div>
            </div>

            <!-- Content Type Filters -->
            <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4">
                <span class="font-semibold text-support-grey text-sm sm:text-base">Content Type:</span>
                <div class="flex flex-wrap gap-2 sm:gap-3">
                    <button class="filter-type px-4 py-2.5 rounded-full text-sm font-medium flex items-center justify-center gap-2 min-w-[100px] {{ $contentType === 'videos' ? 'bg-primary-blue text-white' : 'bg-gray-100 text-gray-700 hover:bg-primary-blue hover:text-white' }} transition-all"
                            data-type="videos">
                        <i class="fas fa-play text-sm"></i> <span>Videos</span>
                    </button>
                    <button class="filter-type px-4 py-2.5 rounded-full text-sm font-medium flex items-center justify-center gap-2 min-w-[100px] {{ $contentType === 'articles' ? 'bg-primary-blue text-white' : 'bg-gray-100 text-gray-700 hover:bg-primary-blue hover:text-white' }} transition-all"
                            data-type="articles">
                        <i class="fas fa-file-text text-sm"></i> <span>Articles</span>
                    </button>
                    <button class="filter-type px-4 py-2.5 rounded-full text-sm font-medium flex items-center justify-center gap-2 min-w-[80px] {{ $contentType === 'all' || !$contentType ? 'bg-primary-blue text-white' : 'bg-gray-100 text-gray-700 hover:bg-primary-blue hover:text-white' }} transition-all"
                            data-type="all">
                        <i class="fas fa-list text-sm"></i> <span>All</span>
                    </button>
                </div>

                <!-- Language Selector - Hidden on mobile, shown on larger screens -->
                <div class="hidden lg:block ml-auto">
                    <select class="px-4 py-2 border border-gray-200 rounded-full focus:outline-none focus:border-primary-pink text-sm">
                        <option>English</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Articles Section -->
@if($featuredBlogs->count() > 0)
<section id="featured-articles" class="py-8 sm:py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between mb-6 sm:mb-8">
            <h2 class="text-2xl sm:text-3xl font-bold text-support-grey">Featured Articles</h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8">
            @if($featuredBlogs->count() > 0)
                @foreach($featuredBlogs->take(2) as $featuredBlog)
                <a href="{{ route('blog.show', $featuredBlog->slug) }}" class="block bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all cursor-pointer">
                    <div class="relative">
                        @php
                            // Prioritize image field over featured_image
                            $featuredImage = $featuredBlog->image ?? $featuredBlog->featured_image;
                        @endphp
                        <img class="w-full h-48 sm:h-64 object-cover"
                             src="{{ $featuredImage ? asset('storage/' . $featuredImage) : 'https://storage.googleapis.com/uxpilot-auth.appspot.com/70181682fe-facb641d12e787079343.png' }}"
                             alt="{{ $featuredBlog->title }}">
                        <div class="absolute top-3 sm:top-4 left-3 sm:left-4">
                            <span class="bg-primary-pink text-white px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-medium">Featured</span>
                        </div>
                        @if($featuredBlog->content_type === 'video')
                        <div class="absolute top-3 sm:top-4 right-3 sm:right-4">
                            <span class="bg-green-500 text-white px-2 py-1 rounded-full text-xs font-medium flex items-center gap-1">
                                <i class="fas fa-play text-xs"></i> <span class="hidden xs:inline">Video</span>
                            </span>
                        </div>
                        @endif
                    </div>
                    <div class="p-4 sm:p-6">
                        <div class="flex flex-col sm:flex-row sm:items-center gap-1 sm:gap-2 mb-3">
                            <span class="text-primary-blue text-xs sm:text-sm font-medium">
                                {{ $featuredBlog->categories->first()->name ?? 'General' }}
                            </span>
                            {{-- <span class="text-primary-blue text-xs sm:text-sm font-medium">{{ $featuredBlog->category->name ?? 'General' }}</span> --}}
                            <span class="text-gray-400 hidden sm:inline">•</span>
                            <span class="text-gray-500 text-xs sm:text-sm">{{ $featuredBlog->video_duration ?: $featuredBlog->reading_time }}</span>
                        </div>
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-support-grey mb-3 leading-tight">{{ $featuredBlog->title }}</h3>
                        <p class="text-gray-600 mb-4 text-sm sm:text-base line-clamp-3">{{ $featuredBlog->excerpt }}</p>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <img src="{{ $featuredBlog->author_image ? asset('storage/' . $featuredBlog->author_image) : 'https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-5.jpg' }}"
                                     alt="{{ $featuredBlog->author_name }}" class="w-8 h-8 sm:w-10 sm:h-10 rounded-full">
                                <div>
                                    <p class="font-semibold text-xs sm:text-sm text-support-grey">{{ $featuredBlog->author_name }}</p>
                                    <p class="text-gray-500 text-xs">{{ $featuredBlog->author_title }}</p>
                                </div>
                            </div>
                            <span class="text-primary-pink font-semibold hover:underline text-sm sm:text-base">Read More →</span>
                        </div>
                    </div>
                </a>
                @endforeach
            @endif
        </div>
    </div>
</section>
@endif

<!-- Main Content Grid -->
<section id="main-content" class="py-8 sm:py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 sm:gap-8">
            <!-- Blog Posts Grid -->
            <div id="blog-posts-grid" class="lg:col-span-3">
                <div id="blog-cards-container" class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 lg:gap-8">
                    @foreach($blogs as $blog)
                    <a href="{{ route('blog.show', $blog->slug) }}" class="block bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all group cursor-pointer">
                        <div class="relative">
                            @php
                                // Prioritize image field over featured_image
                                $blogImage = $blog->image ?? $blog->featured_image;
                            @endphp
                            <img class="w-full h-40 sm:h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                                 src="{{ $blogImage ? asset('storage/' . $blogImage) : 'https://storage.googleapis.com/uxpilot-auth.appspot.com/5aef1ce0af-317e4fcc09506136c86a.png' }}"
                                 alt="{{ $blog->title }}">
                            <div class="absolute top-2 sm:top-3 left-2 sm:left-3">
                                <span class="{{ $blog->categories->first()->color_class ?? 'bg-primary-blue' }} text-white px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-medium">
                                    {{ $blog->categories->first()->name ?? 'General' }}
                                </span>
                                {{-- <span class="{{ $blog->category->color_class ?? 'bg-primary-blue' }} text-white px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-medium">
                                    {{ $blog->category->name ?? 'General' }}
                                </span> --}}
                            </div>
                            @if($blog->content_type === 'video')
                            <div class="absolute top-2 sm:top-3 right-2 sm:right-3">
                                <span class="bg-green-500 text-white px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-medium flex items-center gap-1">
                                    <i class="fas fa-play text-xs"></i> <span class="hidden xs:inline">Video</span>
                                </span>
                            </div>
                            @endif
                        </div>
                        <div class="p-4 sm:p-6">
                            <h3 class="text-base sm:text-lg lg:text-xl font-bold text-support-grey mb-2 sm:mb-3 group-hover:text-primary-pink transition-colors leading-tight">{{ $blog->title }}</h3>
                            <p class="text-gray-600 mb-3 sm:mb-4 text-sm sm:text-base line-clamp-2">{{ $blog->excerpt }}</p>
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-3 sm:mb-4 gap-2">
                                <div class="flex items-center gap-2">
                                    <img src="{{ $blog->author_image ? asset('storage/' . $blog->author_image) : 'https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-3.jpg' }}"
                                         alt="{{ $blog->author_name }}" class="w-6 h-6 sm:w-8 sm:h-8 rounded-full">
                                    <span class="text-xs sm:text-sm text-support-grey font-medium">{{ $blog->author_name }}</span>
                                </div>
                                <span class="text-gray-500 text-xs sm:text-sm">{{ $blog->video_duration ?: $blog->reading_time }}</span>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                                <div class="flex items-center gap-3 sm:gap-4 text-xs sm:text-sm text-gray-500" onclick="event.stopPropagation();">
                                    <span class="flex items-center gap-1 like-btn cursor-pointer hover:text-red-500 transition-colors" data-blog-id="{{ $blog->id }}">
                                        <i class="far fa-heart text-xs"></i> <span class="likes-count">{{ $blog->likes ?? 0 }}</span>
                                    </span>
                                    <span class="flex items-center gap-1"><i class="fas fa-comment text-xs"></i> {{ $blog->comments_count ?? 0 }}</span>
                                    <span class="flex items-center gap-1 share-btn cursor-pointer hover:text-blue-500 transition-colors" data-blog-id="{{ $blog->id }}">
                                        <i class="fas fa-share text-xs"></i> <span class="shares-count">{{ $blog->shares ?? 0 }}</span>
                                    </span>
                                </div>
                                <span class="text-primary-pink font-semibold text-xs sm:text-sm">
                                    {{ $blog->content_type === 'video' ? 'Watch Video →' : 'Read More →' }}
                                </span>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>

                <!-- Load More Button -->
                @if($blogs->hasMorePages())
                <div class="text-center mt-12">
                    <button id="load-more-btn" class="bg-primary-pink text-white px-8 py-3 rounded-full font-semibold hover:bg-opacity-90 transition-all">
                        Load More Articles
                    </button>
                </div>
                @endif
            </div>

            <!-- Sidebar -->
            <div id="sidebar" class="lg:col-span-1 order-first lg:order-last">
                <!-- Popular Posts -->
                @if($popularPosts->count() > 0)
                <div class="bg-white rounded-2xl shadow-lg p-4 sm:p-6 mb-6 sm:mb-8">
                    <h3 class="text-lg sm:text-xl font-bold text-support-grey mb-4 sm:mb-6">Popular Posts</h3>
                    <div class="space-y-3 sm:space-y-4">
                        @foreach($popularPosts as $popularPost)
                        <a href="{{ route('blog.show', $popularPost->slug) }}" class="flex gap-3 hover:bg-gray-50 p-2 rounded-lg transition-colors cursor-pointer">
                            @php
                                // Prioritize image field over featured_image
                                $popularImage = $popularPost->image ?? $popularPost->featured_image;
                            @endphp
                            <img class="w-12 h-12 sm:w-16 sm:h-16 rounded-lg object-cover flex-shrink-0"
                                 src="{{ $popularImage ? asset('storage/' . $popularImage) : 'https://storage.googleapis.com/uxpilot-auth.appspot.com/98a3f329ec-0fd40a140196c521f0b9.png' }}"
                                 alt="{{ $popularPost->title }}">
                            <div class="flex-1 min-w-0">
                                <h4 class="font-semibold text-support-grey text-xs sm:text-sm mb-1 hover:text-primary-pink transition-colors line-clamp-2">{{ $popularPost->title }}</h4>
                                <p class="text-xs text-gray-500">{{ number_format($popularPost->views ?? 0) }} views • {{ $popularPost->published_at ? $popularPost->published_at->diffForHumans() : 'Recently' }}</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Need Help Widget -->
                <div class="bg-gradient-to-br from-primary-pink to-primary-blue rounded-2xl p-4 sm:p-6 text-white mb-6 sm:mb-8">
                    <div class="text-center mb-4">
                        <i class="fas fa-headset text-2xl sm:text-3xl mb-3"></i>
                        <h3 class="text-lg sm:text-xl font-bold mb-2">Need Help?</h3>
                        <p class="text-xs sm:text-sm opacity-90">Our fertility experts are here to support you every step of the way</p>
                    </div>
                    <div class="space-y-2 sm:space-y-3">
                        <span class="flex items-center justify-center gap-2 bg-white bg-opacity-20 rounded-full py-2 sm:py-3 px-3 sm:px-4 hover:bg-opacity-30 transition-all cursor-pointer">
                            <i class="fas fa-phone text-xs sm:text-sm"></i>
                            <span class="font-semibold text-xs sm:text-sm">Call: +91 12345 67890</span>
                        </span>
                        <span class="flex items-center justify-center gap-2 bg-green-500 rounded-full py-2 sm:py-3 px-3 sm:px-4 hover:bg-green-600 transition-all cursor-pointer">
                            <i class="fab fa-whatsapp text-xs sm:text-sm"></i>
                            <span class="font-semibold text-xs sm:text-sm">WhatsApp Chat</span>
                        </span>
                        <button class="w-full bg-white text-primary-pink rounded-full py-2 sm:py-3 px-3 sm:px-4 font-semibold hover:bg-gray-100 transition-all text-xs sm:text-sm">
                            Book Free Consultation
                        </button>
                    </div>
                </div>

                <!-- Categories -->
                @if($categories->count() > 0)
                <div class="bg-white rounded-2xl shadow-lg p-4 sm:p-6">
                    <h3 class="text-lg sm:text-xl font-bold text-support-grey mb-4 sm:mb-6">Categories</h3>
                    <div class="space-y-2 sm:space-y-3">
                        @foreach($categories as $category)
                        <a href="{{ route('blog.category', $category->slug) }}" class="flex items-center justify-between py-2 px-3 rounded-lg hover:bg-gray-50 transition-all cursor-pointer">
                            <span class="text-support-grey text-sm sm:text-base">{{ $category->name }}</span>
                            <span class="{{ $category->color_class }} text-white text-xs px-2 py-1 rounded-full">{{ $category->blogs_count }}</span>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Expert Insights Section -->
<section id="expert-insights" class="py-8 sm:py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-8 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl font-bold text-support-grey mb-3 sm:mb-4">Expert Insights</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-sm sm:text-base">Learn from India's leading fertility specialists and stay updated with the latest research and treatment advances</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <div class="text-center">
                <div class="w-20 h-20 sm:w-24 sm:h-24 bg-gradient-to-br from-primary-pink to-primary-blue rounded-full mx-auto mb-3 sm:mb-4 flex items-center justify-center">
                    <i class="fas fa-microscope text-white text-xl sm:text-2xl"></i>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-support-grey mb-2 sm:mb-3">Latest Research</h3>
                <p class="text-gray-600 text-sm sm:text-base">Stay informed about cutting-edge fertility research and breakthrough treatments from around the world.</p>
            </div>
            <div class="text-center">
                <div class="w-20 h-20 sm:w-24 sm:h-24 bg-gradient-to-br from-primary-blue to-purple-500 rounded-full mx-auto mb-3 sm:mb-4 flex items-center justify-center">
                    <i class="fas fa-user-md text-white text-xl sm:text-2xl"></i>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-support-grey mb-2 sm:mb-3">Doctor Advice</h3>
                <p class="text-gray-600 text-sm sm:text-base">Get personalized insights and recommendations from our team of experienced fertility specialists.</p>
            </div>
            <div class="text-center sm:col-span-2 lg:col-span-1">
                <div class="w-20 h-20 sm:w-24 sm:h-24 bg-gradient-to-br from-green-500 to-primary-pink rounded-full mx-auto mb-3 sm:mb-4 flex items-center justify-center">
                    <i class="fas fa-heart text-white text-xl sm:text-2xl"></i>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-support-grey mb-2 sm:mb-3">Patient Care</h3>
                <p class="text-gray-600 text-sm sm:text-base">Comprehensive support and guidance throughout your fertility journey with compassionate care.</p>
            </div>
        </div>
    </div>
</section>

<!-- Success Statistics Section -->
<section id="success-stats" class="py-8 sm:py-12 bg-gradient-to-r from-primary-pink to-primary-blue">
    <div class="container mx-auto px-4 text-center text-white">
        <h2 class="text-2xl sm:text-3xl font-bold mb-6 sm:mb-8">Our Success Speaks for Itself</h2>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-8">
            <div>
                <div class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-1 sm:mb-2">15,000+</div>
                <p class="text-sm sm:text-base lg:text-lg opacity-90">Happy Families</p>
            </div>
            <div>
                <div class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-1 sm:mb-2">85%</div>
                <p class="text-sm sm:text-base lg:text-lg opacity-90">Success Rate</p>
            </div>
            <div>
                <div class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-1 sm:mb-2">25+</div>
                <p class="text-sm sm:text-base lg:text-lg opacity-90">Years Experience</p>
            </div>
            <div>
                <div class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-1 sm:mb-2">50+</div>
                <p class="text-sm sm:text-base lg:text-lg opacity-90">Expert Doctors</p>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section id="newsletter-section" class="py-12 sm:py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-2xl sm:text-3xl font-bold text-support-grey mb-3 sm:mb-4">Stay Informed About Your Fertility Journey</h2>
            <p class="text-gray-600 mb-6 sm:mb-8 text-sm sm:text-base lg:text-lg">Get the latest fertility insights, treatment updates, and expert tips delivered straight to your inbox</p>
            <div class="bg-white rounded-2xl shadow-lg p-4 sm:p-6 lg:p-8">
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 max-w-2xl mx-auto">
                    <input type="email" placeholder="Enter your email address" class="flex-1 px-4 sm:px-6 py-3 sm:py-4 border border-gray-200 rounded-full focus:outline-none focus:border-primary-pink text-sm sm:text-base">
                    <button class="bg-primary-pink text-white px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold hover:bg-opacity-90 transition-all whitespace-nowrap text-sm sm:text-base">
                        Subscribe Now
                    </button>
                </div>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-6 mt-4 sm:mt-6 text-xs sm:text-sm text-gray-500">
                    <span class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Weekly fertility tips</span>
                    <span class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Expert advice</span>
                    <span class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Success stories</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Appointment Booking Section -->
<section id="appointment-section" class="py-12 sm:py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-12 items-center">
                <div>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-support-grey mb-4 sm:mb-6">Ready to Start Your Fertility Journey?</h2>
                    <p class="text-gray-600 text-sm sm:text-base lg:text-lg mb-6 sm:mb-8">Take the first step towards parenthood with a personalized consultation from our fertility experts. We're here to guide you every step of the way.</p>
                    <div class="space-y-3 sm:space-y-4 mb-6 sm:mb-8">
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 sm:w-8 sm:h-8 bg-primary-pink rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-white text-xs sm:text-sm"></i>
                            </div>
                            <span class="text-gray-700 text-sm sm:text-base">Free initial consultation</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 sm:w-8 sm:h-8 bg-primary-pink rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-white text-xs sm:text-sm"></i>
                            </div>
                            <span class="text-gray-700 text-sm sm:text-base">Personalized treatment plan</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 sm:w-8 sm:h-8 bg-primary-pink rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-white text-xs sm:text-sm"></i>
                            </div>
                            <span class="text-gray-700 text-sm sm:text-base">24/7 patient support</span>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                        <button class="bg-primary-pink text-white px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold hover:bg-opacity-90 transition-all text-sm sm:text-base">
                            Book Free Consultation
                        </button>
                        <button class="bg-transparent border-2 border-primary-blue text-primary-blue px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold hover:bg-primary-blue hover:text-white transition-all text-sm sm:text-base">
                            Call Now: +91 12345 67890
                        </button>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-2xl p-4 sm:p-6 lg:p-8">
                    <h3 class="text-xl sm:text-2xl font-bold text-support-grey mb-4 sm:mb-6">Schedule Your Consultation</h3>
                    <form class="space-y-3 sm:space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                            <input type="text" placeholder="First Name" class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary-pink text-sm sm:text-base">
                            <input type="text" placeholder="Last Name" class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary-pink text-sm sm:text-base">
                        </div>
                        <input type="email" placeholder="Email Address" class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary-pink text-sm sm:text-base">
                        <input type="tel" placeholder="Phone Number" class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary-pink text-sm sm:text-base">
                        <select class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary-pink text-sm sm:text-base">
                            <option>Select Preferred Centre</option>
                            <option>Delhi Centre</option>
                            <option>Mumbai Centre</option>
                            <option>Bangalore Centre</option>
                            <option>Chennai Centre</option>
                        </select>
                        <textarea placeholder="Tell us about your fertility concerns (optional)" class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary-pink h-20 sm:h-24 resize-none text-sm sm:text-base"></textarea>
                        <button type="submit" class="w-full bg-primary-pink text-white py-3 sm:py-4 rounded-lg font-semibold hover:bg-opacity-90 transition-all text-sm sm:text-base">
                            Schedule Consultation
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials-section" class="py-12 sm:py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-8 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl font-bold text-support-grey mb-3 sm:mb-4">What Our Patients Say</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-sm sm:text-base">Read inspiring stories from families who achieved their dreams of parenthood with India IVF</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <div class="bg-white rounded-2xl shadow-lg p-4 sm:p-6 lg:p-8 text-center">
                <div class="flex justify-center mb-3 sm:mb-4">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star text-sm sm:text-base"></i>
                        <i class="fas fa-star text-sm sm:text-base"></i>
                        <i class="fas fa-star text-sm sm:text-base"></i>
                        <i class="fas fa-star text-sm sm:text-base"></i>
                        <i class="fas fa-star text-sm sm:text-base"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-4 sm:mb-6 italic text-sm sm:text-base">"After years of trying, India IVF made our dream come true. The doctors were incredibly supportive and professional throughout our journey."</p>
                <div class="flex items-center justify-center gap-3">
                    <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-1.jpg" alt="Priya Sharma" class="w-10 h-10 sm:w-12 sm:h-12 rounded-full">
                    <div>
                        <p class="font-semibold text-support-grey text-sm sm:text-base">Priya & Raj Sharma</p>
                        <p class="text-xs sm:text-sm text-gray-500">Delhi</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-4 sm:p-6 lg:p-8 text-center">
                <div class="flex justify-center mb-3 sm:mb-4">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star text-sm sm:text-base"></i>
                        <i class="fas fa-star text-sm sm:text-base"></i>
                        <i class="fas fa-star text-sm sm:text-base"></i>
                        <i class="fas fa-star text-sm sm:text-base"></i>
                        <i class="fas fa-star text-sm sm:text-base"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-4 sm:mb-6 italic text-sm sm:text-base">"The team at India IVF provided exceptional care and guidance. We're now proud parents of beautiful twins!"</p>
                <div class="flex items-center justify-center gap-3">
                    <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-6.jpg" alt="Meera Krishnan" class="w-10 h-10 sm:w-12 sm:h-12 rounded-full">
                    <div>
                        <p class="font-semibold text-support-grey text-sm sm:text-base">Meera & Arjun Krishnan</p>
                        <p class="text-xs sm:text-sm text-gray-500">Chennai</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-4 sm:p-6 lg:p-8 text-center sm:col-span-2 lg:col-span-1">
                <div class="flex justify-center mb-3 sm:mb-4">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star text-sm sm:text-base"></i>
                        <i class="fas fa-star text-sm sm:text-base"></i>
                        <i class="fas fa-star text-sm sm:text-base"></i>
                        <i class="fas fa-star text-sm sm:text-base"></i>
                        <i class="fas fa-star text-sm sm:text-base"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-4 sm:mb-6 italic text-sm sm:text-base">"Professional, caring, and successful. India IVF helped us when we had almost given up hope. Forever grateful!"</p>
                <div class="flex items-center justify-center gap-3">
                    <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-5.jpg" alt="Kavita Patel" class="w-10 h-10 sm:w-12 sm:h-12 rounded-full">
                    <div>
                        <p class="font-semibold text-support-grey text-sm sm:text-base">Kavita & Vikram Patel</p>
                        <p class="text-xs sm:text-sm text-gray-500">Mumbai</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
let currentPage = 2;
let currentCategory = '{{ $categoryFilter ?? "all" }}';
let currentType = '{{ $contentType ?? "all" }}';
let isLoading = false;

console.log('Script loaded, initial values:', {
    currentCategory: currentCategory,
    currentType: currentType
});

// Filter functionality
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded, setting up filter listeners');

    // Category filter functionality
    const categoryButtons = document.querySelectorAll('.filter-category');
    console.log('Found category buttons:', categoryButtons.length);

    categoryButtons.forEach((button, index) => {
        console.log(`Setting up category filter ${index}:`, button.dataset.category, button);
        button.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('Category filter clicked:', this.dataset.category);

            // Remove active class from all category buttons
            document.querySelectorAll('.filter-category').forEach(btn => {
                btn.classList.remove('bg-primary-pink', 'text-white');
                btn.classList.add('bg-gray-100', 'text-gray-700');
            });

            // Add active class to clicked button
            this.classList.remove('bg-gray-100', 'text-gray-700');
            this.classList.add('bg-primary-pink', 'text-white');

            // Update current category and filter
            currentCategory = this.dataset.category;
            console.log('Updated currentCategory to:', currentCategory);
            filterBlogs();
        });
    });

    // Content type filter functionality
    const typeButtons = document.querySelectorAll('.filter-type');
    console.log('Found type buttons:', typeButtons.length);

    typeButtons.forEach((button, index) => {
        console.log(`Setting up type filter ${index}:`, button.dataset.type, button);
        button.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('Type filter clicked:', this.dataset.type);

            // Remove active class from all type buttons
            document.querySelectorAll('.filter-type').forEach(btn => {
                btn.classList.remove('bg-primary-blue', 'text-white');
                btn.classList.add('bg-gray-100', 'text-gray-700');
            });

            // Add active class to clicked button
            this.classList.remove('bg-gray-100', 'text-gray-700');
            this.classList.add('bg-primary-blue', 'text-white');

            // Update current type and filter
            currentType = this.dataset.type;
            console.log('Updated currentType to:', currentType);
            filterBlogs();
        });
    });
});

// Load more functionality
document.getElementById('load-more-btn')?.addEventListener('click', function() {
    if (isLoading) return;

    loadMoreBlogs();
});

// Filter blogs function
function filterBlogs() {
    console.log('filterBlogs() called');
    isLoading = true;
    currentPage = 1;

    console.log('Filtering with:', { category: currentCategory, type: currentType });
    console.log('CSRF Token:', '{{ csrf_token() }}');
    console.log('Filter URL:', '{{ route("blog.filter") }}');

    const requestData = {
        category: currentCategory,
        type: currentType,
        page: 1
    };

    console.log('Request data:', requestData);

    fetch('{{ route("blog.filter") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify(requestData)
    })
    .then(response => {
        console.log('Response status:', response.status);
        console.log('Response headers:', response.headers);
        if (!response.ok) {
            throw new Error(`Network response was not ok: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        console.log('Filter response:', data);
        const container = document.getElementById('blog-cards-container');
        if (container) {
            container.innerHTML = data.html;
            console.log('Updated blog container with new content');
            
            // Re-initialize event listeners for dynamically loaded cards
            initializeBlogCardListeners();
        } else {
            console.error('Blog container not found!');
        }

        // Show/hide load more button
        const loadMoreContainer = document.querySelector('#load-more-btn')?.parentElement;
        if (loadMoreContainer) {
            loadMoreContainer.style.display = data.hasMore ? 'block' : 'none';
        }

        isLoading = false;
        currentPage = 2;
    })
    .catch(error => {
        console.error('Error in filterBlogs:', error);
        isLoading = false;
    });
}

// Load more blogs function
function loadMoreBlogs() {
    if (isLoading) return;

    isLoading = true;

    fetch('{{ route("blog.load-more") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            category: currentCategory,
            type: currentType,
            page: currentPage
        })
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('blog-cards-container').insertAdjacentHTML('beforeend', data.html);

        // Re-initialize event listeners for dynamically loaded cards
        initializeBlogCardListeners();

        // Show/hide load more button
        const loadMoreContainer = document.querySelector('#load-more-btn')?.parentElement;
        if (loadMoreContainer) {
            loadMoreContainer.style.display = data.hasMore ? 'block' : 'none';
        }

        isLoading = false;
        currentPage = data.nextPage;
    })
    .catch(error => {
        console.error('Error:', error);
        isLoading = false;
    });
}

// Newsletter form submission
document.querySelector('#newsletter-section form')?.addEventListener('submit', function(e) {
    e.preventDefault();
    const email = this.querySelector('input[type="email"]').value;
    if (email) {
        alert('Thank you for subscribing! You will receive our latest updates.');
        this.querySelector('input[type="email"]').value = '';
    }
});

// Appointment form submission
document.querySelector('#appointment-section form')?.addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you for your interest! We will contact you soon to schedule your consultation.');
    this.reset();
});

// Function to initialize blog card event listeners
function initializeBlogCardListeners() {
    // Like functionality - use event delegation to handle dynamically added elements
    document.querySelectorAll('.like-btn').forEach(btn => {
        // Check if already has listener by checking for data attribute
        if (!btn.hasAttribute('data-listener-attached')) {
            btn.setAttribute('data-listener-attached', 'true');
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation(); // Prevent card click
                const blogId = this.getAttribute('data-blog-id');
                console.log('Like clicked for blog:', blogId);
                toggleBlogLike(blogId, this);
            });
        }
    });

    // Share functionality - use event delegation to handle dynamically added elements
    document.querySelectorAll('.share-btn').forEach(btn => {
        // Check if already has listener by checking for data attribute
        if (!btn.hasAttribute('data-listener-attached')) {
            btn.setAttribute('data-listener-attached', 'true');
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation(); // Prevent card click
                const blogId = this.getAttribute('data-blog-id');
                console.log('Share clicked for blog:', blogId);
                shareBlog(blogId, this);
            });
        }
    });
}

// Dynamic blog interactions
document.addEventListener('DOMContentLoaded', function() {
    console.log('Initializing blog index dynamic functionality');
    
    // Initialize listeners for initial page load
    initializeBlogCardListeners();
});

function toggleBlogLike(blogId, element) {
    // Prevent multiple rapid clicks
    if (window.likeInProgress) {
        console.log('Like request already in progress, ignoring...');
        return;
    }

    window.likeInProgress = true;

    // Disable button during request to prevent multiple clicks
    element.style.pointerEvents = 'none';
    element.style.opacity = '0.6';

    console.log('Toggling like for blog:', blogId);

    fetch(`/api/blog/${blogId}/like`, {
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
            const likesCount = element.querySelector('.likes-count');
            if (likesCount) {
                likesCount.textContent = data.likes_count;
            }

            // Update visual state based on server response
            if (data.has_liked) {
                element.classList.add('liked', 'text-red-500');
                const heartIcon = element.querySelector('i');
                if (heartIcon) {
                    heartIcon.classList.add('fas');
                    heartIcon.classList.remove('far');
                }
            } else {
                element.classList.remove('liked', 'text-red-500');
                const heartIcon = element.querySelector('i');
                if (heartIcon) {
                    heartIcon.classList.add('far');
                    heartIcon.classList.remove('fas');
                }
            }

            // Add temporary animation
            element.style.transform = 'scale(1.3)';
            setTimeout(() => {
                element.style.transform = 'scale(1)';
            }, 300);

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
        // Re-enable button
        element.style.pointerEvents = 'auto';
        element.style.opacity = '1';
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

function shareBlog(blogId, element) {
    const currentUrl = window.location.origin + '/blog/' + blogId;
    const currentTitle = document.title;

    if (navigator.share) {
        navigator.share({
            title: currentTitle,
            url: currentUrl
        }).then(() => {
            trackBlogShare(blogId, 'native');
        });
    } else {
        // Fallback: copy to clipboard
        navigator.clipboard.writeText(currentUrl).then(() => {
            alert('Link copied to clipboard!');
            trackBlogShare(blogId, 'copy');
        });
    }
}

function trackBlogShare(blogId, platform) {
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
            const shareElements = document.querySelectorAll(`[data-blog-id="${blogId}"] .shares-count`);
            shareElements.forEach(element => {
                element.textContent = data.shares_count;
            });
        }
    })
    .catch(error => {
        console.error('Error tracking share:', error);
    });
}
</script>
@endsection
