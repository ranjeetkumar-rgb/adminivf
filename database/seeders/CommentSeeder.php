<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get the first blog to add comments to
        $blog = Blog::first();
        
        if (!$blog) {
            $this->command->info('No blogs found. Please create a blog first.');
            return;
        }

        // Create sample comments
        $comments = [
            [
                'name' => 'Priya M.',
                'email' => 'priya@example.com',
                'comment' => 'This article was incredibly helpful! We\'re 36 and were worried about our chances. After reading this, we feel more optimistic about our upcoming consultation at India IVF.',
                'likes' => 12,
                'is_approved' => true,
            ],
            [
                'name' => 'Raj K.',
                'email' => 'raj@example.com',
                'comment' => 'Dr. Patel, thank you for this comprehensive explanation. The section on male factors was particularly enlightening. We had our first consultation last week and are feeling hopeful.',
                'likes' => 8,
                'is_approved' => true,
            ],
            [
                'name' => 'Meera S.',
                'email' => 'meera@example.com',
                'comment' => 'As someone who had success with India IVF after 3 cycles, I can confirm that the personalized approach really makes a difference. Don\'t give up hope!',
                'likes' => 24,
                'is_approved' => true,
            ],
            [
                'name' => 'Dr. Sarah Patel',
                'email' => 'dr.patel@indiaivf.com',
                'comment' => 'Thank you, Raj! I\'m glad you found it helpful. Best wishes for your journey ahead. Feel free to reach out if you have any questions during your treatment.',
                'likes' => 5,
                'is_approved' => true,
                'parent_id' => 2, // This is a reply to Raj's comment
            ],
        ];

        foreach ($comments as $commentData) {
            $comment = Comment::create([
                'blog_id' => $blog->id,
                'name' => $commentData['name'],
                'email' => $commentData['email'],
                'comment' => $commentData['comment'],
                'likes' => $commentData['likes'],
                'is_approved' => $commentData['is_approved'],
                'parent_id' => $commentData['parent_id'] ?? null,
            ]);
        }

        // Update blog comments count
        $blog->update(['comments_count' => Comment::where('blog_id', $blog->id)->approved()->count()]);

        $this->command->info('Sample comments created successfully!');
    }
}