<?php

namespace App\Http\View;

use Illuminate\View\View;
use App\Category;

class CategoryView
{
    public function compose(View $view)
    {
        $categories = Category::with(['child'])->withCount(['child'])->getParent()->orderBy('name', 'ASC')->get();
        //PASSING DATA DENGAN NAMA VARIABLE CATEGORIES
        $view->with('categories', $categories);
    }
}
