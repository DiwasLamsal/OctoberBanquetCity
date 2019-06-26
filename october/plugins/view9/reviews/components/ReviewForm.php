<?php namespace View9\Reviews\Components;

use Cms\Classes\ComponentBase;

use Input;
use Validator;
use Redirect;

use View9\Banquet\Models\Review;

use Flash;

class ReviewForm extends ComponentBase{
    
    public function componentDetails(){
        return [
            'name' => 'Review Form',
            'description' => 'Review Form'
        ];
    }


    public function onSave(){

        $review = new Review();
        $review->description = Input::get('description');
        $review->rating = Input::get('rating');
        $review->user_id = Input::get('user_id');
        $review->banquet_id = Input::get('banquet_id');
        $review->post_date = date("Y-m-d");
        $review->save();

        flash::success('Review Added');
        return Redirect::back();

    }

    




}