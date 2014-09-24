<?php
class Model_Dbcon {
	public static function allQuery() {
		$data = array ();
		$offset = Model_Page::page ();
		$query = DB::query ( 'select * from notice order by id desc limit :limit offset :offset' );
		$query->bind ( 'limit', $_SESSION ['limit'] );
		$query->bind ( 'offset', $offset );
		$data ['rows'] = $query->execute ()->as_array ();
		return $data;
	}
	public static function searchTitle() {
		$data = array ();
		$offset = Model_Page::page ();
		$query = DB::query ( 'select * from notice where title = :title order by id desc limit :limit offset :offset'  );
		$query->bind ( 'title', $_SESSION ['searchtitle']);
		$query->bind ( 'limit', $_SESSION ['limit'] );
		$query->bind ( 'offset', $offset );
		$data ['rows'] = $query->execute ()->as_array ();
		return $data;
	}
	public static function idQuery() {
		$id = Input::post ( 'radio' );
		$query = DB::query ( 'select * from notice where id = :id ' );
		$query->bind ( 'id', $id );
		$rows = $query->execute ()->as_array ();
		$data = array ();
		$data ['id'] = $id;
		$data ['title'] = $rows [0] ['title'];
		$data ['category'] = $rows [0] ['category'];
		$data ['created'] = $rows [0] ['created'];
		$data ['publish'] = $rows [0] ['publish'];
		$data ['body'] = $rows [0] ['body'];
		return $data;
	}
	public static function regist() {
		$title = Input::post ( 'title' );
		$category = Input::post ( 'category' );
		$body = Input::post ( 'body' );
		$publish = Input::post ( 'publish' );
		if (Input::post ( 'viewflag' ) == 1) {
			$viewflag = Input::post ( 'viewflag' );
		} else {
			$viewflag = 0;
		}
		$query = DB::query ( 'insert into notice(title,category,body,created,updated, publish ,viewflag) value( :title , :category , :body , now(), now(), :publish ,:viewflag)' );
		$query->bind ( 'title', $title );
		$query->bind ( 'category', $category );
		$query->bind ( 'body', $body );
		$query->bind ( 'publish', $publish );
		$query->bind ( 'viewflag', $viewflag );
		$result = $query->execute ();
	}
	public static function update() {
		$id = Input::post ( 'id' );
		$title = Input::post ( 'title' );
		$category = Input::post ( 'category' );
		$body = Input::post ( 'body' );
		$created = Input::post ( 'created' );
		$publish = Input::post ( 'publish' );
		if (Input::post ( 'viewflag' ) == 1) {
			$viewflag = Input::post ( 'viewflag' );
		} else {
			$viewflag = 0;
		}
		$query = DB::query ( 'update notice set title =:title, category = :category ,body = :body ,created = :created ,updated = now() ,publish = :publish ,viewflag = :viewflag where id = :id ' );
		$query->bind ( 'id', $id );
		$query->bind ( 'title', $title );
		$query->bind ( 'category', $category );
		$query->bind ( 'body', $body );
		$query->bind ( 'created', $created );
		$query->bind ( 'publish', $publish );
		$query->bind ( 'viewflag', $viewflag );
		$result = $query->execute ();
	}
	public static function delete() {
		$id = Input::post ( 'radio' );
		$query = DB::query ( 'delete from notice where id = :id ' );
		$query->bind ( 'id', $id );
		$result = $query->execute ();
	}
}
