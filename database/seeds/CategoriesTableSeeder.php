<?php
use App\Category;
use Illuminate\Database\Seeder;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = "Lý thuyết";
        $category->save();
        $category = new Category();
        $category->name = "Thực hành";
        $category->save();
        $category = new Category();
        $category->name = "Quiz";
        $category->save();
        $category = new Category();
        $category->name = "Bài đọc";
        $category->save();
    }
}

