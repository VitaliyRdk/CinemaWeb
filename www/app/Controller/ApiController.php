<?php
	class ApiController  extends AppController {
		public function __construct( $request = null, $response = null ) {
    		parent::__construct( $request, $response );
    		$this->layout = "json";
		}

		private function rend ($data){
			$this->set(compact("data"));
			$this->render ("json");
		}

		public function index (){
			
		}

		public function getAllFilms ()
		{
			$data = array("error" => 0, "data" => "");
			try{
				$this->loadModel("Film");
				$films = $this->Film->find("all");

				for ($i = 0;$i<sizeof($films);$i++) {
					if (isset($films[$i]["Photo"])){
						unset($films[$i]["Photo"]);
					}

					if (isset($films[$i]["Session"])){
						unset($films[$i]["Session"]);
					}
				}

				$data["data"] = $films;
			}catch(Exception $e){
				$data["error"] = 1;
				$data["data"] = $e->GetMessage();
			}
			$this->rend($data);
		}

		public function getFilmById ($idFilm = "")
		{
			$data = array("error" => 0, "data" => "");
			try{
				if ($idFilm == ""){
					throw new Exception("id - null", 1);
				}
				$this->loadModel("Film");
				$film = $this->Film->find("first",array("conditions" => array("Film.id" => $idFilm)));

				$data["data"] = $film;
			}catch(Exception $e){
				$data["error"] = 1;
				$data["data"] = $e->GetMessage();
			}
			$this->rend($data);
		}
	}