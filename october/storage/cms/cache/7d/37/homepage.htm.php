<?php 
use View9\Banquet\Models\Banquet;use View9\Citiesnepal\Models\City;use View9\Vendors\Models\Category;class Cms5d132dedd6522475089180_56bd69bcf51cbdbe88ba01e043f38f67Class extends Cms\Classes\PageCode
{



public function onStart()
{

    $new_banquets = Banquet::orderBy('created_at', 'desc')->limit(4)->get();
    $this['new_banquets'] = $new_banquets;
    $this['new_banquets_count'] = Banquet::orderBy('created_at', 'desc')->count();
    
    $featured_banquets = Banquet::where('featured', 1)->get();
    $this['featured_banquets'] = $featured_banquets;
    $this['featured_banquets_count'] = $featured_banquets->count();
    
	$this['vendors_cat'] = Category::get();
	
	$kathmandu = City::where('name', 'Kathmandu')->get();
	foreach($kathmandu as $ktm)
		$banquets_in_kathmandu = Banquet::where('city_id', $ktm['id'])->get();
	$this['banquets_in_kathmandu'] = $banquets_in_kathmandu;
	$this['banquets_in_kathmandu_count'] = $banquets_in_kathmandu->count();
}
}
