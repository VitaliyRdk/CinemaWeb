<?php
	class FnewsController extends AppController{
		public function index (){

		}

		public function addcomment (){
			$name = $_POST["name"];
			$telephone = $_POST["telephone"];
			$email = $_POST["email"];
			$comment = $_POST["comment"];
			$this->loadModel("Recordnew");
			$this->Recordnew->save(array("name" => $name, "telephone" => $telephone, "email" => $email, "message" => $comment));
			return $this->redirect("/");
		}
		
		public function addcommentFilm ($id){
			$name = $_POST["name"];
			$email = $_POST["email"];
			$comment = $_POST["comment"];
			$this->loadModel("Comment");
			$this->Comment->save(array("name" => $name, "email" => $email, "film_id" => $id, "comment" => $comment));
			return $this->redirect("/");
		}
		
	}