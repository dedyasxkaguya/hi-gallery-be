<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            // Visual Arts & Media
            'anime', 'painting', 'digital', 'nature', 'character', 'random', 'other',
            'manga', 'comics', 'illustration', 'sketch', 'drawing', 'portrait',
            'landscape', 'abstract', 'surrealism', 'realism', 'impressionism',
            'watercolor', 'oil_painting', 'acrylic', 'pastel', 'charcoal', 'ink',
            'vector', '3d_modeling', 'photography', 'portrait_photo', 'landscape_photo',
            'macro', 'street_photography', 'concept_art', 'fan_art', 'original_character',

            // Subjects & Themes
            'fantasy', 'sci_fi', 'cyberpunk', 'steampunk', 'horror', 'gothic',
            'cute', 'kawaii', 'chibi', 'mecha', 'monster', 'creature', 'animal',
            'wildlife', 'pet', 'bird', 'insect', 'marine', 'flower', 'plant',
            'food', 'dessert', 'architecture', 'cityscape', 'interior', 'vehicle',
            'fashion', 'cosplay', 'historical', 'mythology', 'folklore', 'religious',

            // People & Characters
            'male', 'female', 'child', 'elderly', 'fantasy_race',
            'elf', 'dwarf', 'orc', 'angel', 'demon', 'vampire', 'werewolf',
            'superhero', 'villain', 'warrior', 'mage', 'rogue', 'knight',

            // Artistic Concepts & Elements
            'color_study', 'lighting', 'perspective', 'composition', 'texture',
            'pattern', 'typography', 'calligraphy', 'logo', 'icon', 'sticker',

            // Digital & Technology
            'ui_design', 'ux_design', 'web_design', 'app_design', 'game_art',
            'pixel_art', 'low_poly', 'voxel', 'vr_art', 'ar_art', 'generative',
            'ai_art', 'motion_graphics', 'animation', 'short_anim', 'loop',

            // Culture & Community
            'fanwork', 'oc', 'sona','memes', 'humor', 'satire',
            'political', 'social', 'activism', 'celebration', 'holiday',

            // Content Types & Formats
            'tutorial', 'process', 'timelapse', 'speedpaint', 'before_after',
            'collab', 'commission', 'study', 'practice', 'doodle', 'warmup',

            // Mood & Atmosphere
            'wholesome', 'dark', 'creepy', 'mysterious', 'romantic', 'melancholy',
            'energetic', 'calm', 'chaotic', 'minimalist', 'detailed', 'simplicity',

            // Additional Broad Categories
            'still_life', 'nude', 'body_art', 'tattoo', 'graffiti', 'street_art',
            'installation', 'sculpture', 'ceramic', 'craft', 'diy', 'traditional',
            'mixed_media', 'collage', 'experimental', 'nsfw', 'suggestive',
        ];
        foreach ($datas as $data) {
            DB::table('categories')->insert([
                'name' => $data,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
