<?php 

class TypesController extends AppController { 


	public function __construct(){
		parent::__construct();
	}

	public function index(){
		//opcion 1
		$options= array(
			);

		$this->set("types", 
			$this->types->find(
				"types", 
				"all", 
				$options
				)
			);
		


		//opcion 2
		// $users =  $this->users->find("users", "all", $options);
		// $this->set("users",$users);

	}

	public function add(){

		if ($_SESSION["type_name"]=="Administradores") {
			if ($_POST) {
				if ($this->types->save("types", $_POST)){
					$this->redirect(array("controller"=>"types"));
				}else{
					$this->redirect(array("controller"=>"types","method"=>"add"));				
				}
			}
			$this->set("types", $this->types->find("types"));
		}else{
			$this->redirect(array("controller"=>"types"));
			}
		}



	public function edit($id){
		if ($_POST) {
			if ($this->types->update("types", $_POST)) {
				$this->redirect(array("controller"=> "types"));
			}else{
				$this->redirect(
					array(
						"controller"=> "types",
						"method"=>"edit/".$_POST["id"])
					);
			}
		}
		$options = array(
			"conditions"=>"id=".$id
			);
		$this->set(
			"type",
			$this->types->find("types", "first", $options)
		);
		$this->set("types", $this->types->find("types"));
		
	}

	public function delete($id){
		$options = "types.id=".$id;
		if($this->types->delete("types", $options)){

			$this->redirect(array("controller"=>"types"));
		}

	}
}

?>