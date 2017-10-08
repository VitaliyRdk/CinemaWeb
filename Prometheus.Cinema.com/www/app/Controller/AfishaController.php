<?php
	class AfishaController extends AppController{
		public function index ($id = "null"){
			$this->loadModel("Hall");
			$this->loadModel("Film");
			$halls = $this->Hall->find("all");
			$films;
			if ($id == "null")
			{
				$films = $this->Film->find("all");
			}else{
				$this->loadModel("Session");
				$hall = $this->Hall->find("all", array('conditions'=>array("Hall.id"=>$id)));
				$sessions = $this->Session->find("all", array('conditions'=>array("Session.hall_id"=>$id)));
				$films = $sessions;
			}
			$this->set(compact("halls","films"));
		}

		public function view ($id = "null"){
			if ($id == "null"){
				$this->redirect(array("action"=>"index"));
			}else{
				$this->layout = "view";
				$this->loadModel("Photo");
				$this->loadModel("Film");
				$this->loadModel("Session");
				$this->Film->recursive = 2;
				//debug($this->Film);
				$film = $this->Film->find("all", array('conditions'=>array("Film.id"=>$id)));
				//debug($this->Session->find("all"));
				$this->set(compact("halls","film"));
			}
		}

		public function viewTable ($id = "null"){
			if ($id == "null"){
				$this->redirect(array("action"=>"index"));
			}else{
				/*$this->layout = "view";
				$this->loadModel("Photo");
				$this->loadModel("Film");*/
				$this->loadModel("Session");
				$this->Session->recursive = 3;
				//$this->Film->recursive = 2;
				//debug($this->Film);
				$session = $this->Session->find("all", array('conditions'=>array("Session.id"=>$id)));
				//debug($this->Session);
				//debug($this->Session->find("all"));
				$this->set(compact("session"));
			}
		}
	}