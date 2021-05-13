<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Item;

use Carbon\Carbon; # Used to create timestamps.
use Faker\Factory; # Might use to create fake data. Adding just in case.

# Please note I used the Bookmark seeder page to help create seed data.

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addItem();
        $this->addItemFromJsonFile();
        $this->addFakerItem();
    }

    private function addItem()
    {
        $item = new Item();

        $item->slug = 'craftychris';
        $item->username = 'CraftyChris';
        $item->category = 'toys';
        $item->description = 'Baby toys in good condition.';
        $item->city = 'Cambridge';
        $item->image = 'https://hes-bookmark.s3.amazonaws.com/the-great-gatsby.jpg';

        $item->save();
    }

    private function addItemFromJsonFile()
    {
        $itemData = file_get_contents(database_path('items.json'));
        $items = json_decode($itemData, true);
    
        $count = count($items);
        foreach ($items as $slug => $itemData) {
            $item = new Item();

            $item->created_at = Carbon::now()->subDays($count)->toDateTimeString();
            $item->updated_at = Carbon::now()->subDays($count)->toDateTimeString();
            $item->slug = $slug;
            $item->username = $itemData['username'];
            $item->category = $itemData['category'];
            $item->description = $itemData['description'];
            $item->city = $itemData['city'];
            $item->image = $itemData['image'];

            $item->save();
            $count--;
        }
    }

    private function addFakerItem()
    {
        # To add fake data to test my page. Faker: https://github.com/fzaninotto/Faker
        $faker = Factory::create();

        for ($i = 0; $i < 5; $i++) {
            $item = new Item();

            $username = $faker->words(rand(3, 6), true);
            $item->slug = Str::slug($username, '-');
            $item->username = $faker->firstname;
            $item->category = 'miscellaneous';
            $item->description = $faker->paragraphs(1, true);
            $item->city = $faker->city;
            $item->image = 'https://hes-bookmark.s3.amazonaws.com/cover-placeholder.png';
           
            $item->save();
        }
    }
}
