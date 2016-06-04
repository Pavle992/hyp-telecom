<?php

	class SmartLife{

		var $id;
		var $name;
		// var $image_path;
		var $description;
		var $rates_discount_price;
		var $category;
		var $activation_rules;

		public function SmartLife($id,$name,$description,$rates_discount_price,$category,$activation_rules){
		
			$this->id=$id;
			$this->name=$name;
			// $this->image_path=$image_path;
			$this->description=$description;
			$this->rates_discount_price=$rates_discount_price;
			$this->category=$category;
			$this->activation_rules=$activation_rules;
		}
	}

?>