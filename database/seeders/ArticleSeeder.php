<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Membangun Aplikasi Mobile dengan CapacitorJS dan Vue 3',
                'excerpt' => 'Pelajari cara mengubah aplikasi web Vue 3 Anda menjadi aplikasi mobile native menggunakan CapacitorJS dengan mudah.',
                'content' => '<h2>Kenapa CapacitorJS?</h2><p>CapacitorJS adalah perpaduan sempurna antara kebebasan web dan kekuatan native. Dalam artikel ini, kita akan membahas langkah demi langkah bagaimana mengintegrasikan Capacitor ke dalam proyek Vue 3...</p>',
                'thumbnail' => 'articles/sample.png',
                'tags' => ['Mobile', 'Vue.js', 'Capacitor'],
                'is_published' => true,
                'published_at' => now(),
            ],
            [
                'title' => 'Optimasi Performa Query Laravel dengan Eager Loading',
                'excerpt' => 'Hindari masalah N+1 query yang sering terjadi pada Laravel dan tingkatkan kecepatan aplikasi Anda secara signifikan.',
                'content' => '<h2>Masalah N+1</h2><p>Banyak pengembang Laravel tidak menyadari bahwa aplikasi mereka melambat karena banyaknya query database yang tidak perlu. Eager loading adalah solusi kunci...</p>',
                'thumbnail' => 'articles/sample.png',
                'tags' => ['Laravel', 'Database', 'Backend'],
                'is_published' => true,
                'published_at' => now()->subDays(2),
            ],
            [
                'title' => 'Eksplorasi Fitur Terbaru Filament v3 untuk Admin Panel',
                'excerpt' => 'Filament v3 membawa banyak perubahan besar yang memudahkan pembuatan dashboard admin yang cantik dan fungsional.',
                'content' => '<h2>Panel Builder</h2><p>Filament bukan lagi sekadar resource manager. Dengan v3, kita mendapatkan Panel Builder yang memungkinkan pembuatan multiple dashboard dalam satu aplikasi...</p>',
                'thumbnail' => 'articles/sample.png',
                'tags' => ['Filament', 'PHP', 'Admin Panel'],
                'is_published' => true,
                'published_at' => now()->subDays(5),
            ],
        ];

        foreach ($articles as $article) {
            Article::updateOrCreate(
                ['slug' => Str::slug($article['title'])],
                $article
            );
        }
    }
}
