@extends('frontend.layouts.master')

@section('content')
<!-- Category Header Section -->
<section id="category-header" class="relative bg-gradient-to-r from-primary-pink to-primary-blue h-[400px] flex items-center">
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    <div class="relative container mx-auto px-4 text-center text-white">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">
            {{ $category->name }}
        </h1>
        <p class="text-lg md:text-xl mb-6 max-w-2xl mx-auto opacity-90">
            {{ $category->description ?? 'Explore articles in this category' }}
        </p>
        <div class="flex items-center justify-center gap-4 text-sm">
            <span class="flex items-center gap-2">
                <i class="fas fa-file-alt"></i>
                {{ $blogs->total() }} Articles
            </span>
            <span class="flex items-center gap-2">
                <i class="fas fa-calendar"></i>
                Updated {{ $category->updated_at ? $category->updated_at->diffForHumans() : 'Recently' }}
            </span>
        </div>
    </div>
</section>

<!-- Filter Bar -->
<section id="filter-bar" class="bg-white shadow-sm border-b border-gray-100 py-4">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div class="flex flex-wrap items-center gap-4">
                <span class="font-semibold text-support-grey">Filter by:</span>
                <div class="flex flex-wrap gap-2">
                    <button class="filter-category px-4 py-2 rounded-full text-sm font-medium transition-all bg-primary-pink text-white"
                            data-category="{{ $category->id }}">{{ $category->name }}</button>
                    <a href="{{ route('blog.index') }}" class="px-4 py-2 rounded-full text-sm font-medium transition-all bg-gray-100 text-gray-700 hover:bg-primary-pink hover:text-white">
                        All Categories
                    </a>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <select class="px-4 py-2 border border-gray-200 rounded-full focus:outline-none focus:border-primary-pink">
                    <option>English</option>
                    <option>Hindi</option>
                    <option>Tamil</option>
                    <option>Telugu</option>
                </select>
                <div class="flex gap-2">
                    <button class="filter-type px-4 py-2 rounded-full text-sm font-medium flex items-center gap-2 bg-gray-100 text-gray-700 hover:bg-primary-blue hover:text-white transition-all"
                            data-type="videos">
                        <i class="fas fa-play"></i> Videos
                    </button>
                    <button class="filter-type px-4 py-2 rounded-full text-sm font-medium flex items-center gap-2 bg-gray-100 text-gray-700 hover:bg-primary-blue hover:text-white transition-all"
                            data-type="articles">
                        <i class="fas fa-file-text"></i> Articles
                    </button>
                    <button class="filter-type px-4 py-2 rounded-full text-sm font-medium flex items-center gap-2 bg-primary-blue text-white transition-all"
                            data-type="all">
                        <i class="fas fa-list"></i> All
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content Grid -->
<section id="main-content" class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Blog Posts Grid -->
            <div id="blog-posts-grid" class="lg:col-span-3">
                @if($blogs->count() > 0)
                    <div id="blog-cards-container" class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @foreach($blogs as $blog)
                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all group">
                            <div class="relative">
                                <img class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                                     src="{{ $blog->featured_image ? asset('storage/' . $blog->featured_image) : 'https://storage.googleapis.com/uxpilot-auth.appspot.com/5aef1ce0af-317e4fcc09506136c86a.png' }}"
                                     alt="{{ $blog->title }}">
                                <div class="absolute top-3 left-3">
                                    {{-- <span class="{{ $blog->category->color_class ?? 'bg-primary-blue' }} text-white px-3 py-1 rounded-full text-sm font-medium">
                                        {{ $blog->category->name ?? 'General' }}
                                    </span> --}}
                                        {{-- This now correctly gets the first category from your JSON array --}}
                                    <span class="{{ $blog->categories->first()->color_class ?? 'bg-primary-blue' }} text-white px-3 py-1 rounded-full text-sm font-medium">
                                        {{ $blog->categories->first()->name ?? 'General' }}
                                    </span>
                                </div>
                                @if($blog->content_type === 'video')
                                <div class="absolute top-3 right-3">
                                    <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-medium flex items-center gap-1">
                                        <i class="fas fa-play"></i> Video
                                    </span>
                                </div>
                                @endif
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-support-grey mb-3 group-hover:text-primary-pink transition-colors">{{ $blog->title }}</h3>
                                <p class="text-gray-600 mb-4">{{ $blog->excerpt }}</p>
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center gap-2">
                                        <img src="{{ $blog->author_image ? asset('storage/' . $blog->author_image) : 'https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-3.jpg' }}"
                                             alt="{{ $blog->author_name }}" class="w-8 h-8 rounded-full">
                                        <span class="text-sm text-support-grey font-medium">{{ $blog->author_name }}</span>
                                    </div>
                                    <span class="text-gray-500 text-sm">{{ $blog->video_duration ?: $blog->reading_time }}</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-4 text-sm text-gray-500">
                                        <span class="flex items-center gap-1"><i class="fas fa-heart"></i> {{ $blog->likes ?? 0 }}</span>
                                        <span class="flex items-center gap-1"><i class="fas fa-comment"></i> {{ $blog->comments_count ?? 0 }}</span>
                                        <span class="flex items-center gap-1"><i class="fas fa-share"></i> {{ $blog->shares ?? 0 }}</span>
                                    </div>
                                    <a href="{{ route('blog.show', $blog->slug) }}">
                                        <button class="text-primary-pink font-semibold hover:underline">
                                            {{ $blog->content_type === 'video' ? 'Watch Video' : 'Read More' }}
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="mt-12">
                        {{ $blogs->links() }}
                    </div>
                @else
                    <div class="text-center py-12">
                        <div class="w-24 h-24 bg-gray-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-file-alt text-gray-400 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-600 mb-2">No articles found</h3>
                        <p class="text-gray-500 mb-6">There are no articles in this category yet.</p>
                        <a href="{{ route('blog.index') }}" class="bg-primary-pink text-white px-6 py-3 rounded-full font-semibold hover:bg-opacity-90 transition-all">
                            View All Articles
                        </a>
                    </div>
                @endif
            </div>

            <!-- Sidebar -->
            <div id="sidebar" class="lg:col-span-1">
                <!-- Category Info -->
                <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
                    <h3 class="text-xl font-bold text-support-grey mb-4">About {{ $category->name }}</h3>
                    <p class="text-gray-600 mb-4">{{ $category->description ?? 'Articles and insights in this category.' }}</p>
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <span>{{ $blogs->total() }} Articles</span>
                        <span>{{ $category->updated_at ? $category->updated_at->diffForHumans() : 'Recently' }}</span>
                    </div>
                </div>

                <!-- Popular Posts -->
                @if($popularPosts->count() > 0)
                <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
                    <h3 class="text-xl font-bold text-support-grey mb-6">Popular Posts</h3>
                    <div class="space-y-4">
                        @foreach($popularPosts as $popularPost)
                        <div class="flex gap-3">
                            <img class="w-16 h-16 rounded-lg object-cover flex-shrink-0"
                                 src="{{ $popularPost->featured_image ? asset('storage/' . $popularPost->featured_image) : 'https://storage.googleapis.com/uxpilot-auth.appspot.com/98a3f329ec-0fd40a140196c521f0b9.png' }}"
                                 alt="{{ $popularPost->title }}">
                            <div>
                                <a href="{{ route('blog.show', $popularPost->slug) }}">
                                    <h4 class="font-semibold text-support-grey text-sm mb-1 hover:text-primary-pink cursor-pointer">{{ $popularPost->title }}</h4>
                                </a>
                                <p class="text-xs text-gray-500">{{ number_format($popularPost->views ?? 0) }} views • {{ $popularPost->published_at ? $popularPost->published_at->diffForHumans() : 'Recently' }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Categories -->
                @if($categories->count() > 0)
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="text-xl font-bold text-support-grey mb-6">All Categories</h3>
                    <div class="space-y-3">
                        @foreach($categories as $cat)
                        <a href="{{ route('blog.category', $cat->slug) }}" class="flex items-center justify-between py-2 px-3 rounded-lg hover:bg-gray-50 transition-all cursor-pointer {{ $cat->id == $category->id ? 'bg-primary-pink bg-opacity-10' : '' }}">
                            <span class="text-support-grey {{ $cat->id == $category->id ? 'font-semibold text-primary-pink' : '' }}">{{ $cat->name }}</span>
                            <span class="{{ $cat->color_class ?? 'bg-primary-blue' }} text-white text-xs px-2 py-1 rounded-full">{{ $cat->blogs_count }}</span>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section id="newsletter-section" class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-support-grey mb-4">Stay Updated with {{ $category->name }}</h2>
            <p class="text-gray-600 mb-8 text-lg">Get the latest articles and insights from this category delivered straight to your inbox</p>
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <div class="flex flex-col md:flex-row gap-4 max-w-2xl mx-auto">
                    <input type="email" placeholder="Enter your email address" class="flex-1 px-6 py-4 border border-gray-200 rounded-full focus:outline-none focus:border-primary-pink">
                    <button class="bg-primary-pink text-white px-8 py-4 rounded-full font-semibold hover:bg-opacity-90 transition-all whitespace-nowrap">
                        Subscribe Now
                    </button>
                </div>
                <div class="flex items-center justify-center gap-6 mt-6 text-sm text-gray-500">
                    <span class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Weekly updates</span>
                    <span class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Expert insights</span>
                    <span class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Latest articles</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
let currentPage = 2;
let currentCategory = '{{ $category->id }}';
let currentType = 'all';
let isLoading = false;

console.log('Category page script loaded, initial values:', {
    currentCategory: currentCategory,
    currentType: currentType
});

// Filter functionality
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded, setting up filter listeners');

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
        } else {
            console.error('Blog container not found!');
        }

        isLoading = false;
        currentPage = 2;
    })
    .catch(error => {
        console.error('Error in filterBlogs:', error);
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
</script>
@endsection
