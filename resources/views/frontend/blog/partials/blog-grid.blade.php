@foreach($blogs as $blog)
<a href="{{ route('blog.show', $blog->slug) }}" class="block bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all group cursor-pointer">
    <div class="relative">
        @php
            // Prioritize image field over featured_image
            $blogImage = $blog->image ?? $blog->featured_image;
        @endphp
        <img class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300" 
             src="{{ $blogImage ? asset('storage/' . $blogImage) : 'https://storage.googleapis.com/uxpilot-auth.appspot.com/5aef1ce0af-317e4fcc09506136c86a.png' }}" 
             alt="{{ $blog->title }}">
        <div class="absolute top-3 left-3">
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
            <div class="flex items-center gap-4 text-sm text-gray-500" onclick="event.stopPropagation();">
                <span class="flex items-center gap-1 like-btn cursor-pointer hover:text-red-500 transition-colors" data-blog-id="{{ $blog->id }}">
                    <i class="far fa-heart"></i> <span class="likes-count">{{ $blog->likes ?? 0 }}</span>
                </span>
                <span class="flex items-center gap-1"><i class="fas fa-comment"></i> {{ $blog->comments_count ?? 0 }}</span>
                <span class="flex items-center gap-1 share-btn cursor-pointer hover:text-blue-500 transition-colors" data-blog-id="{{ $blog->id }}">
                    <i class="fas fa-share"></i> <span class="shares-count">{{ $blog->shares ?? 0 }}</span>
                </span>
            </div>
            <span class="text-primary-pink font-semibold text-sm">
                {{ $blog->content_type === 'video' ? 'Watch Video →' : 'Read More →' }}
            </span>
        </div>
    </div>
</a>
@endforeach
