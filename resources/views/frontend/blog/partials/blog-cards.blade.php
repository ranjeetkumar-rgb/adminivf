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
