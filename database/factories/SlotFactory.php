<?php

namespace Database\Factories;

use App\Models\Slot;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class SlotFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Slot::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $now = Carbon::now();
        $daysFromNow = rand(0, 15);
        $lessonTime = rand(1, 2);
        $categories = [1,2,3,4,5,6,7,null,null,null,null,null];
        $category = $categories[rand(0, count($categories)-1)];
        return [
            'startDate' => $now->addDays($daysFromNow),
            'endDate' => $now->addDays($daysFromNow)->addHours($lessonTime),
            'category_id' => $category,
            'email' => $category === null ? null : $this->faker->email,
            'name' => $category === null ? null : $this->faker->name,
            'remarks' => $category === null ? null : $this->faker->sentence,
        ];
    }
}
