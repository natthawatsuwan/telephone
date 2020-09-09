	<?php
class promotionController
{ 
	public function searchP()
	{
		$key = $_GET['key'];
		$staff_list = Promotion::search($key);
		require_once('views/promotion/index_search.php');
	}
}
?>