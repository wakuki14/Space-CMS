<?php
namespace App\Models;

class ArticleLikerModel extends AppModel
{
	const STATUS_ACTIVE = 'T';
	const STATUS_INACTIVE = 'F';
	
	protected $primaryKey = 'id';
	
	protected $table = 'article_likers';
	
	protected $schema = array(
		array('name' => 'id', 'type' => 'int', 'default' => ':NULL'),
		array('name' => 'article_id', 'type' => 'int', 'default' => ':NULL'),
		array('name' => 'ip', 'type' => 'varchar', 'default' => ':NULL')
	);
	
	public $i18n = array();
	
	public static function factory($attr=array())
	{
		return new ArticleLikerModel($attr);
	}
}
?>