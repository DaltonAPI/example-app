<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
           'name' => 'Dalton Smith'
        ]);

        $category = Category::factory()->create();
        Post::factory(30)->create([
            'user_id' => $user->id,
            'category_id' => $category->id
        ]);
        Category::factory(7)->create();
    }
}
