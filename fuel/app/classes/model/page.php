<?php
class Model_Page {
	public static function page() {
		if (isset ($_REQUEST['page'])) {
			$offset = ($_REQUEST['page']-1) * $_SESSION ['limit'];
		} else {
			$offset = 0;
		}
		return $offset;
	}
}