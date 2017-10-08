<?php
	class AdminController extends AppController{
		public function __construct( $request = null, $response = null ) {
    		parent::__construct( $request, $response );
    		$this->layout = "admin";
		}

		public function index (){
			if ($this->Session->read("uID")){
				return $this->redirect("/admin/menu");
			}else{

			}
		}

		public function menu (){
			if (!$this->Session->read("uID")){
				return $this->redirect("/");
			}

		}

		public function auntification (){
			$login = $_POST["login"];
			$password = $_POST["password"];
			if (($login == "admin")&&($password == "admin")){
				$this->Session->write("uID","true");
			}else{
				return $this->redirect("/");
			}
			return $this->redirect("/admin");
		}

		public function destroy(){
			if ($this->Session->read("uID")){
				$this->Session->delete("uID");
			}
			return $this->redirect("/");
		}

		public function addfilm (){

		}

		public function savenewfilm  (){
			$Name = $_POST["Name"];
			$DurationView = $_POST["DurationView"];
			$Genre = $_POST["Genre"];
			$Description = $_POST["Description"];
			$this->loadModel ("Film");
			$this->Film->save(array('Name' => $Name, 'DurationView' => $DurationView, 'Genre' => $Genre, 'Description' => $Description ));
			return $this->redirect("/admin");
		}

		public function viewlistfilm  (){
			$this->loadModel ("Film");
			$films = $this->Film->find("all");
			$this->set(compact("films"));
		}

		public function editfilm  ($id = "null"){
			if($id != "null"){
				$this->loadModel ("Film");
				$film = $this->Film->find("first",array('conditions'=>array("Film.id"=>$id)));
				$this->set(compact("film"));
			}else{
				return $this->redirect("/");
			}
		}

		public function savefilm  ($id = "null"){
			if($id != "null"){
				$Name = $_POST["Name"];
				$DurationView = $_POST["DurationView"];
				$Genre = $_POST["Genre"];
				$Description = $_POST["Description"];
				$this->loadModel ("Film");
				$this->Film->save(array('Name' => $Name, 'DurationView' => $DurationView, 'Genre' => $Genre, 'Description' => $Description, 'id' => $id));
				return $this->redirect("/admin");
			}else{
				return $this->redirect("/");
			}
		}

		public function delfilm  ($id = "null"){
			if($id != "null"){
				$this->loadModel ("Film");
				$film = $this->Film->find("first",array('conditions'=>array("Film.id"=>$id)));
				$film  = $film ["Film"];
				debug($film);
				$this->Film->delete($film);
				return $this->redirect("/admin");
			}else{
				return $this->redirect("/");
			}
		}

		/*Hall*/
		public function addhall (){

		}

		public function savenewhall  (){
			$Name = $_POST["Name"];
			$colls = $_POST["colls"];
			$rows = $_POST["rows"];
			$this->loadModel ("Hall");
			$this->Hall->save(array('Name' => $Name, 'colls' => $colls, 'rows' => $rows ));
			return $this->redirect("/admin");
		}

		public function viewlisthall  (){
			$this->loadModel ("Hall");
			$halls = $this->Hall->find("all");
			$this->set(compact("halls"));
		}

		public function edithall  ($id = "null"){
			if($id != "null"){
				$this->loadModel ("Hall");
				$hall = $this->Hall->find("first",array('conditions'=>array("Hall.id"=>$id)));
				$this->set(compact("hall"));
			}else{
				return $this->redirect("/");
			}
		}

			public function savehall  ($id = "null"){
			if($id != "null"){
				$Name = $_POST["Name"];
				$colls = $_POST["colls"];
				$rows = $_POST["rows"];
				$this->loadModel ("Hall");
				$this->Hall->save(array('Name' => $Name, 'colls' => $colls, 'rows' => $rows, 'id' => $id));
				return $this->redirect("/admin");
			}else{
				return $this->redirect("/");
			}
		}

		public function delhall  ($id = "null"){
			if($id != "null"){
				$this->loadModel ("Hall");
				$hall  = $this->Hall->find("first",array('conditions'=>array("Hall.id"=>$id)));
				$hall  = $hall ["Hall"];
				$this->Hall->delete($hall );
				return $this->redirect("/admin");
			}else{
				return $this->redirect("/");
			}
		}


		/*Prices*/
		public function addprice(){

		}

		public function savenewprice(){
			$session_id = $_POST["session_id"];
			$price = $_POST["price"];
			$colls = $_POST["colls"];
			$rows = $_POST["rows"];
			$this->loadModel ("Price");
			$this->Price->save(array('session_id' => $session_id, 'price' => $price, 'colls' => $colls, 'rows' => $rows));
			return $this->redirect("/admin");
		}

		public function viewlistprice (){
			$this->loadModel ("Price");
			$prices = $this->Price->find("all");
			$this->set(compact("prices"));
		}

		public function editprice  ($id = "null"){
			if($id != "null"){
				$this->loadModel ("Price");
				$price = $this->Price->find("first",array('conditions'=>array("Price.id"=>$id)));
				$this->set(compact("price"));
			}else{
				return $this->redirect("/");
			}
		}

			public function saveprice ($id = "null"){
			if($id != "null"){
				$session_id = $_POST["session_id"];
				$price = $_POST["price"];
				$colls = $_POST["colls"];
				$rows = $_POST["rows"];
				$this->loadModel ("Price");
				$this->Price->save(array('session_id' => $session_id, 'price' => $price, 'colls' => $colls, 'rows' => $rows, 'id' => $id));
				return $this->redirect("/admin");
			}else{
				return $this->redirect("/");
			}
		}

		public function delprice ($id = "null"){
			if($id != "null"){
				$this->loadModel ("Price");
				$price   = $this->Price->find("first",array('conditions'=>array("Price.id"=>$id)));
				$price   = $price  ["Price"];
				$this->Price->delete($price  );
				return $this->redirect("/admin");
			}else{
				return $this->redirect("/");
			}
		}

		/*Session*/
			public function addsession(){

		}

		public function savenewsession(){
			$hall_id = $_POST["hall_id"];
			$film_id = $_POST["film_id"];
			$StartView = $_POST["StartView"];
			$this->loadModel ("Session");
			$this->Session->save(array('hall_id' => $hall_id, 'film_id' => $film_id, 'StartView' => $StartView));
			return $this->redirect("/admin");
		}

		public function viewlistsession (){
			$this->loadModel ("Session");
			$sessions = $this->Session->find("all");
			$this->set(compact("sessions"));
		}

		public function editsession ($id = "null"){
			if($id != "null"){
				$this->loadModel ("Session");
				$session = $this->Session->find("first",array('conditions'=>array("Session.id"=>$id)));
				$this->set(compact("session"));
			}else{
				return $this->redirect("/");
			}
		}

			public function savesession ($id = "null"){
			if($id != "null"){
				$hall_id = $_POST["hall_id"];
				$film_id = $_POST["film_id"];
				$StartView = $_POST["StartView"];
				$this->loadModel ("Session");
				$this->Session->save(array('hall_id' => $hall_id, 'film_id' => $film_id, 'StartView' => $StartView, 'id' => $id));
				return $this->redirect("/admin");
			}else{
				return $this->redirect("/");
			}
		}

		public function delsession ($id = "null"){
			if($id != "null"){
				$this->loadModel ("Session");
				$session = $this->Session->find("first",array('conditions'=>array("Session.id"=>$id)));
				$session = $session  ["Session"];
				$this->Session->delete($session);
				return $this->redirect("/admin");
			}else{
				return $this->redirect("/");
			}
		}

	}

