<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use App\Models\User;
// use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $file = $this->faker->image();
        $fileName = basename($file);
        Storage::putFileAs('images/posts', $file, $fileName);
        File::delete($_FILES);
        return [
            'title' => $this->faker->word(),
            'body' => $this->faker->paragraph(),
            'image' => $fileName,
            'user_id' => Arr::random(Arr::pluck(User::all(), 'id')),
            'category_id' => rand(1, 5),
        ];
    }
}
