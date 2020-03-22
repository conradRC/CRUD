<?php 
require_once 'model/animal.php';
    class AnimalController
    {
        private $model;
        public function __construct()
        {
            $this->model = new Animal();
        }
        public function indexAnimal()
        {   
            require_once 'view/animal.php';
        }
        public function showById()
        {
            $animal = new Animal();
            if(isset($_REQUEST['id'])){
                $animal=$animal->model->getById($_REQUEST['id']);
            }
            require_once 'view/animal_form.php';
        }
            //Datos del formulario
    public function save()
    {
        $animal = new Animal();
        $animal->id=$_REQUEST['id'];
        $animal->name=$_REQUEST['name'];
        $animal->specie=$_REQUEST['specie'];
        $animal->breed=$_REQUEST['breed'];
        $animal->gener=$_REQUEST['gender'];
        $animal->color=$_REQUEST['color'];
        $animal->age=$_REQUEST['age'];
        //Si el id> 0 ---> Datos a modificar, por lo tanto modificamos
        //Caso contrario ---> Crear nuevo registro
        $animal->id>0?$animal->update():$animal->create();
        header('Location: index.php');  //redireccionar al index
    }

    public function quit() //borrar un dato
    {
        $this->model-> detete($_REQUEST['id']);
    }
}
?>