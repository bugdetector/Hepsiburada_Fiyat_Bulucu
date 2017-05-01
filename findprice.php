<?php
	function find($dom,$tag,$attribute,$constant){
	    $returnList = $dom->getElementsByTagName($tag);
	    foreach ($returnList as $element){
	        if($element->getAttribute($attribute) == $constant){
	            return $element;
	        }
	    }
	}
	function get_price($link){
		$data = @file_get_contents($link);
		if($data == false){
			return "Bu link kullanılmamaktadır.";
		}
		$dom = new DOMDocument();
		@$dom->loadHTML($data);
		$price = find($dom,"span","data-bind","markupText:'currentPriceBeforePoint'")->textContent;
		$currency = find($dom,"span","itemprop","priceCurrency")->textContent;
		return "Bu ürünün fiyatı : ". $price." ".$currency;
	}

	if($_POST){
		echo get_price($_POST["link"]);
	}
?>