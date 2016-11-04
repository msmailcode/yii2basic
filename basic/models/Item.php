<?php
namespace app\models;

use yii\db\ActiveRecord;

class Item extends ActiveRecord
{
	public $article_url;
	public $article_pic_url;
	public $article_title;
	public $article_price;
	public $article_content;
	public $article_link;
	public $timesort;
	
	/**
	 * @return string 返回该 AR 类关联的数据表名
	 */
	public static function tableName()
	{
			return 'item';
	}
}
/*
CREATE TABLE item(
article_url CHAR(100),
article_pic_url CHAR(100),
article_title VARCHAR(200),
article_price CHAR(30),
article_content VARCHAR(600),
article_link CHAR(100),
timesort int PRIMARY KEY
)charset=utf8;
*/