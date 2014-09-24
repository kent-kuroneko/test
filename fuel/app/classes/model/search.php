<?php
class Model_Search {
	public static function sTitle() {
		if (! isset ( $_SESSION ['searchtitle'] )) {
			$_SESSION ['searchtitle'] = "";
		} else if (Input::post ( 'title' ) == null) {
			$_SESSION ['searchtitle'] = "";
		} else {
			$_SESSION ['searchtitle'] = Input::post ( 'title' );
		}
	}
}