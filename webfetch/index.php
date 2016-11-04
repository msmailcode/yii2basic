<?php
	class Item {
		public $article_url;
		public $article_pic_url;
		public $article_title;
		public $article_price;
		public $article_content;
		public $article_link;
		public $timesort;
	}
  $currentTime = time();
  $jsonURL = 'http://faxian.smzdm.com/9kuai9/json_more?timesort='.$currentTime;
	$jsonContent = file_get_contents($jsonURL);
	$array = json_decode($jsonContent);
	$count = count($array);
	for(i = 0; i < count; i++) {
		$arrayi = $array[i];
		$item = new Item();
		$item -> article_url = $arrayi -> article_url;
		$item -> article_pic_url = $arrayi -> article_pic_url;
		$item -> article_title = $arrayi -> article_title;
		$item -> article_price = $arrayi -> article_price;
		$item -> article_content = $arrai -> article_content;
		$item -> aricle_link = $arrayi -> aricle_link;
		$item -> timesort = $arrayi -> timesort;
		
	}
?>