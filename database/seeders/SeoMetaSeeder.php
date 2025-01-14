<?php

namespace Database\Seeders;

use App\Models\SeoMeta;
use Illuminate\Database\Seeder;

class SeoMetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SeoMeta::create([
            'page_slug'     => 'home',
            'title'         => 'Docmedilink - Secure, User-Friendly Healthcare Software Solutions',
            'description'   => 'Discover how Docmedilink integrates healthcare organizations with secure, user-friendly software designed to streamline workflows and ensure patient data privacy.',
            'keywords'      => json_encode(['Healthcare Software', 'Secure Software', 'EHR Software', 'HIPAA Compliant', 'Workflow Optimization']),
            'canonical_url' => url('/'),
            'og_title'      => 'Docmedilink | Healthcare Software Solutions',
            'og_description'=> 'Partner with Docmedilink for secure, intuitive, and HIPAA-compliant healthcare software that streamlines workflows and enhances patient care.',
            'og_image'      => url('/images/og-docmedilink.jpg'),
            'page_type'     => 'website',
        ]);

        SeoMeta::create([
            'page_slug'     => 'why-choose-docmedilink',
            'title'         => 'About Docmedilink - Innovative and Secure Healthcare Software',
            'description'   => 'Learn about Docmedilink\'s mission to simplify healthcare workflows with secure and user-friendly custom software solutions.',
            'keywords'      => json_encode(['About Docmedilink', 'Healthcare Innovations', 'Custom Healthcare Software']),
            'canonical_url' => url('/about'),
            'og_title'      => 'About Docmedilink | Our Mission & Vision',
            'og_description'=> 'Discover Docmedilink\'s commitment to creating secure and reliable healthcare software tailored to your unique needs.',
            'og_image'      => url('/images/og-about-docmedilink.jpg'), // Replace with actual image path
            'page_type'     => 'article',
        ]);

        SeoMeta::create([
            'page_slug'     => 'clinicians',
            'title'         => 'Docmedilink Services - Custom Healthcare Software Solutions',
            'description'   => 'Explore our range of services, including custom software development, secure data integration, and HIPAA-compliant applications.',
            'keywords'      => json_encode(['Custom Software Development', 'Healthcare Integration', 'HIPAA Compliant Software']),
            'canonical_url' => url('/clinicians'),
            'og_title'      => 'Our Services | Docmedilink',
            'og_description'=> 'Learn about Docmedilink\'s services, including innovative, secure, and user-friendly software solutions for healthcare organizations.',
            'og_image'      => url('/images/og-services-docmedilink.jpg'), // Replace with actual image path
            'page_type'     => 'website',
        ]);
    }
}
