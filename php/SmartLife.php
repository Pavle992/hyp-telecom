<?php

	class SmartLife{

		var $id;
		var $name;
		var $image_path;
		var $description;
		var $rates_discount_price;
		var $category;
		var $activation_rules;

		public function SmartLife($json){
			
			$this->id=$json["id"];
			$this->name=$json["name"];
			$this->image_path=$json["image_path"];
			$this->description=$json["description"];
			$this->rates_discount_price=$json["rates_discount_price"];
			$this->category=$json["category"];
			$this->activation_rules=$json["activation_rules"];
		}
	}

?>