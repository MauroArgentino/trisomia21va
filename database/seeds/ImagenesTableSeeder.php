<?php

use App\Model\Admin\Imagen;
use Illuminate\Database\Seeder;

class ImagenesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Imagen::class, 30)->create();
    }
}
