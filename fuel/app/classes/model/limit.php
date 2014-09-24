<?php
class Model_Limit {
	public static function limit() {
		if (! isset ( $_SESSION ['limit'] )) {
			$_SESSION ['limit'] = 10;
		} else if (Input::post ( 'limit' )==null) {
			$_SESSION ['limit'] = 10;
		} else {
			$_SESSION ['limit'] = Input::post ( 'limit' ) * 10;
		}
	}
}