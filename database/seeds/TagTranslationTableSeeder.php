<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Translation;

class TagTranslationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $translations = [
            1 => ['Verified Accurate', 'Flagged as Inappropriate'],
            2 => ['Flagged as Inaccurate', 'Flagged as Inappropriate']
        ];

        foreach ($translations as $id => $tags) {
            $translation = Translation::find($id);

            foreach ($tags as $tagName) {
                $tag = Tag::where('name', '=', $tagName)->first();

                $translation->tags()->save($tag);
            }
        }
    }
}
