<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        // Create blog categories
        $categories = [
            [
                'name' => 'IVF Treatments',
                'slug' => 'ivf-treatments',
                'description' => 'Comprehensive information about IVF treatments and procedures',
                'color' => 'primary-blue',
                'icon' => 'fas fa-microscope',
                'sort_order' => 1,
                'is_active' => true
            ],
            [
                'name' => 'Success Stories',
                'slug' => 'success-stories',
                'description' => 'Inspiring stories from our patients who achieved their dreams',
                'color' => 'primary-pink',
                'icon' => 'fas fa-heart',
                'sort_order' => 2,
                'is_active' => true
            ],
            [
                'name' => 'Lifestyle & Nutrition',
                'slug' => 'lifestyle-nutrition',
                'description' => 'Tips for healthy living and nutrition during fertility treatment',
                'color' => 'green',
                'icon' => 'fas fa-apple-alt',
                'sort_order' => 3,
                'is_active' => true
            ],
            [
                'name' => 'Expert Tips',
                'slug' => 'expert-tips',
                'description' => 'Professional advice from our fertility specialists',
                'color' => 'purple',
                'icon' => 'fas fa-user-md',
                'sort_order' => 4,
                'is_active' => true
            ],
            [
                'name' => 'Mental Health',
                'slug' => 'mental-health',
                'description' => 'Supporting your emotional well-being during fertility journey',
                'color' => 'purple',
                'icon' => 'fas fa-brain',
                'sort_order' => 5,
                'is_active' => true
            ]
        ];

        foreach ($categories as $categoryData) {
            BlogCategory::updateOrCreate(
                ['slug' => $categoryData['slug']], 
                $categoryData
            );
        }

        // Create sample blogs
        $blogs = [
            [
                'title' => 'Understanding IVF Success Rates: What Factors Really Matter',
                'slug' => 'understanding-ivf-success-rates-what-factors-really-matter',
                'description' => 'Discover the key factors that influence IVF success rates and how India IVF\'s personalized approach maximizes your chances of conception.',
                'content' => '<h2>Introduction to IVF Success Rates</h2><p>When couples embark on their IVF journey, one of the most pressing questions they ask is: "What are my chances of success?" Understanding IVF success rates is crucial for setting realistic expectations and making informed decisions about fertility treatment.</p><p>IVF success rates are not just simple percentages – they represent complex interactions between multiple factors including age, medical history, lifestyle choices, and the quality of care provided by your fertility clinic.</p>',
                'excerpt' => 'Discover the key factors that influence IVF success rates and how India IVF\'s personalized approach maximizes your chances of conception through evidence-based treatment protocols.',
                'category_id' => 1,
                'author_name' => 'Dr. Sarah Patel',
                'author_title' => 'Senior Fertility Specialist & Medical Director',
                'author_bio' => '15+ years experience in reproductive medicine',
                'featured_image' => null,
                'published' => true,
                'featured' => true,
                'published_at' => now(),
                'views' => 2300,
                'likes' => 324,
                'comments_count' => 47,
                'shares' => 89,
                'rating' => 4.9,
                'tags' => 'IVF Success Rates, Fertility Treatment, Age and Fertility, Personalized Care, India IVF',
                'index_follow' => true
            ],
            [
                'title' => 'Preparing Your Body for IVF: A Complete Guide',
                'slug' => 'preparing-your-body-for-ivf-complete-guide',
                'description' => 'Essential preparation steps to optimize your body and mind for IVF treatment success.',
                'content' => '<h2>Physical Preparation for IVF</h2><p>Proper preparation is key to IVF success. This comprehensive guide covers everything you need to know about preparing your body for IVF treatment.</p>',
                'excerpt' => 'Essential preparation steps to optimize your body and mind for IVF treatment success.',
                'category_id' => 4,
                'author_name' => 'Dr. Rajesh Kumar',
                'author_title' => 'Reproductive Endocrinologist',
                'author_bio' => '12+ years experience in fertility medicine',
                'featured_image' => null,
                'video_url' => 'https://example.com/video1',
                'video_duration' => '12 min',
                'video_description' => 'Essential preparation steps to optimize your body and mind for IVF treatment success.',
                'published' => true,
                'featured' => true,
                'published_at' => now()->subDays(2),
                'views' => 1800,
                'likes' => 256,
                'comments_count' => 32,
                'shares' => 45,
                'rating' => 4.8,
                'tags' => 'IVF Preparation, Fertility Treatment, Health Tips',
                'index_follow' => true
            ],
            [
                'title' => 'Nutrition and Fertility: Foods That Boost Your Chances',
                'slug' => 'nutrition-and-fertility-foods-that-boost-your-chances',
                'description' => 'Learn about fertility-boosting foods and dietary changes that can improve your reproductive health.',
                'content' => '<h2>Fertility-Boosting Foods</h2><p>Nutrition plays a crucial role in fertility. Learn about the foods that can boost your chances of conception.</p>',
                'excerpt' => 'Learn about fertility-boosting foods and dietary changes that can improve your reproductive health.',
                'category_id' => 3,
                'author_name' => 'Dr. Priya Sharma',
                'author_title' => 'Nutrition Specialist',
                'author_bio' => 'Expert in fertility nutrition and wellness',
                'featured_image' => null,
                'published' => true,
                'featured' => true,
                'published_at' => now()->subDays(5),
                'views' => 1200,
                'likes' => 198,
                'comments_count' => 28,
                'shares' => 34,
                'rating' => 4.7,
                'tags' => 'Nutrition, Fertility, Healthy Eating, Lifestyle',
                'index_follow' => true
            ],
            [
                'title' => 'From Hope to Reality: Meera\'s IVF Journey',
                'slug' => 'from-hope-to-reality-meeras-ivf-journey',
                'description' => 'Follow Meera\'s inspiring journey through multiple IVF cycles and how she finally achieved her dream of motherhood with India IVF.',
                'content' => '<h2>Meera\'s Story</h2><p>After years of trying to conceive, Meera found hope and success with India IVF. This is her inspiring journey.</p>',
                'excerpt' => 'Follow Meera\'s inspiring journey through multiple IVF cycles and how she finally achieved her dream of motherhood with India IVF.',
                'category_id' => 2,
                'author_name' => 'Meera Krishnan',
                'author_title' => 'Patient Story',
                'author_bio' => 'Successfully conceived through IVF at India IVF',
                'featured_image' => null,
                'published' => true,
                'published_at' => now()->subDays(7),
                'views' => 3200,
                'likes' => 456,
                'comments_count' => 67,
                'shares' => 123,
                'rating' => 4.9,
                'tags' => 'Success Story, IVF Journey, Patient Experience, Hope',
                'index_follow' => true
            ],
            [
                'title' => 'Egg Freezing: Preserving Your Fertility for the Future',
                'slug' => 'egg-freezing-preserving-your-fertility-for-the-future',
                'description' => 'Learn about egg freezing technology, ideal candidates, success rates, and how this option can provide fertility insurance.',
                'content' => '<h2>Understanding Egg Freezing</h2><p>Egg freezing is becoming an increasingly popular option for women who want to preserve their fertility for the future.</p>',
                'excerpt' => 'Learn about egg freezing technology, ideal candidates, success rates, and how this option can provide fertility insurance.',
                'category_id' => 1,
                'author_name' => 'Dr. Kavya Reddy',
                'author_title' => 'Fertility Specialist',
                'author_bio' => 'Expert in egg freezing and fertility preservation',
                'featured_image' => null,
                'published' => true,
                'published_at' => now()->subDays(10),
                'views' => 1600,
                'likes' => 234,
                'comments_count' => 41,
                'shares' => 56,
                'rating' => 4.8,
                'tags' => 'Egg Freezing, Fertility Preservation, Future Planning',
                'index_follow' => true
            ],
            [
                'title' => 'Managing Stress During Your Fertility Journey',
                'slug' => 'managing-stress-during-your-fertility-journey',
                'description' => 'Effective strategies to cope with the emotional challenges of fertility treatments and maintain mental well-being throughout your journey.',
                'content' => '<h2>Stress Management Techniques</h2><p>Fertility treatments can be emotionally challenging. Learn effective strategies to manage stress and maintain your mental well-being.</p>',
                'excerpt' => 'Effective strategies to cope with the emotional challenges of fertility treatments and maintain mental well-being throughout your journey.',
                'category_id' => 5,
                'author_name' => 'Dr. Arjun Mehta',
                'author_title' => 'Clinical Psychologist',
                'author_bio' => 'Specializes in fertility-related mental health support',
                'featured_image' => null,
                'published' => true,
                'published_at' => now()->subDays(14),
                'views' => 2100,
                'likes' => 312,
                'comments_count' => 58,
                'shares' => 78,
                'rating' => 4.9,
                'tags' => 'Stress Management, Mental Health, Fertility Journey, Wellness',
                'index_follow' => true
            ]
        ];

        foreach ($blogs as $blogData) {
            Blog::updateOrCreate(
                ['slug' => $blogData['slug']], 
                $blogData
            );
        }
    }
}
