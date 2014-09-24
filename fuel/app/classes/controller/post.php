<?php
class Controller_Post extends Controller {
	public function action_index() {
		Model_Ses::ses ();
		Model_Limit::limit ();
		Model_Count::count();
		Model_Search::stitle ();
		$db = Model_Dbcon::allQuery ();
		return View::forge ( 'post/list', $db );
	}
	public function action_search() {
		Model_Ses::ses ();
		Model_Limit::limit ();
		Model_Search::stitle ();
		$db = Model_Dbcon::searchTitle ();
		return View::forge ( 'post/list', $db );
	}
	public function action_form() {
		return View::forge ( 'post/regist' );
	}
	public function action_regist() {
		Model_Ses::ses ();
		Model_Dbcon::regist ();
		$db = Model_Dbcon::allQuery ();
		return View::forge ( 'post/dummy', $db );
	}
	public function action_edit() {
		Model_Ses::ses ();
		if (Input::post ( 'edit' ) == '編集') {
			$db = Model_Dbcon::idQuery ();
			return View::forge ( 'post/edit', $db );
		} else {
			Model_Dbcon::delete ();
			$db = Model_Dbcon::allQuery ();
			return View::forge ( 'post/list', $db );
		}
	}
	public function action_update() {
		Model_Ses::ses ();
		Model_Dbcon::update ();
		$db = Model_Dbcon::allQuery ();
		return View::forge ( 'post/dummy', $db );
	}
	public function action_limit() {
		Model_Ses::ses ();
		Model_Limit::limit ();
		$db = Model_Dbcon::allQuery ();
		return View::forge ( 'post/list', $db );
	}
	public function action_test() {
		return View::forge ( 'post/test' );
	}
	public function action_test2() {
		return View::forge ( 'post/test2' );
	}
}
