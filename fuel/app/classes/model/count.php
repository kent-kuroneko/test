<?php
class Model_Count {
	public static function count() {
		$query = DB::query ( 'select * from notice' );
		$rows = $query->execute ()->as_array ();
		$_SESSION['count'] = count ( $rows );
	}
}