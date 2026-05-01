<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::updateOrCreate(
            ['name' => 'Agus Setiawan'],
            [
                'title' => 'Full-stack Developer • Tech Educator • Software Architect',
                'bio' => 'Halo! Saya Agus Setiawan, seorang Full-stack Developer yang berbasis di Indramayu dengan pengalaman luas dalam membangun ekosistem web modern. Saya berfokus pada efisiensi kode, arsitektur yang skalabel, dan pengalaman pengguna yang intuitif. Melalui AHZA Digitals, saya membantu bisnis bertransformasi secara digital. Selain membangun produk, saya memiliki hasrat besar dalam dunia pendidikan teknologi, aktif berbagi wawasan tentang Laravel, Vue, dan pengembangan aplikasi mobile.',
                'tech_stack' => [
                    'Laravel 11', 
                    'Filament v3', 
                    'Vue.js 3', 
                    'CapacitorJS', 
                    'Tailwind CSS', 
                    'MySQL', 
                    'REST API', 
                    'Git & GitHub',
                    'Alpine.js',
                    'Node.js'
                ],
                'avatar' => 'profiles/agus_avatar.png',
                'linkedin_url' => 'https://linkedin.com/in/agusse27',
                'github_url' => 'https://github.com/Agus27111',
                'whatsapp_number' => '6287822368008',
            ]
        );
    }
}
