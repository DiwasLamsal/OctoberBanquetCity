<?php 
use View9\Banquet\Models\Banquet;use View9\Banquet\Models\Review;use View9\Banquet\Models\FoodCategory;use View9\Banquet\Models\FoodItem;use RainLab\User\Models\User;class Cms5d133ea21436a304955589_9e6feaccf6a913e4603f5b1bb51f7e27Class extends Cms\Classes\PageCode
{






public function onStart()
{
    $banquet = Banquet::where('id', $this->param('id'))->first();
    if($this->param('slug') != $banquet->slug){
        return redirect('/');
        }
	$this['banquet'] = $banquet;
	
	$reviews = Review::where('banquet_id', $this->param('id'))
	->join('users', 'users.id', '=', 'view9_banquet_reviews.user_id')
	->select('view9_banquet_reviews.*', 'users.email')->get();
	$this['reviews']=$reviews;
	$this['reviews2']=$reviews;
		
	$foodCategories = FoodCategory::where('banquet_id', $this->param('id'))->get();
	$foodCategories2 = $foodCategories;
	$this['foodCategories']=$foodCategories;
	
	$categoryIdHolder = array();

	foreach($foodCategories2 as $foodCategory){
		array_push($categoryIdHolder, $foodCategory['id']);
	}

	$foodItems = FoodItem::whereIn('food_category_id', $categoryIdHolder)->get();
	$this['foodItems'] = $foodItems;

	$user = User::where('id', 3);
	$this['user']=$user;
	
}
}
