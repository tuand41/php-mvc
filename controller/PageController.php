<?php
require_once './model/Person.php';

class PageController 
{
	private $model;

	public function __construct() {
		$this->model = new Person();
	}

	public function handle($action, $id)
	{
		switch ($action) 
		{
			case '':
				$this->home();
				break;
			case 'create':
				$this->create();
				break;
			case 'show':
				$this->show($id);
				break;		
			case 'store':
				$this->store();
				break;
			case 'edit':
				$this->edit($id);
				break;
			case 'update':
				$this->update($id);
				break;
			case 'delete':
				$this->delete($id);
				break;
			default:
				echo "lỗi";
				break;
		}
	}

	public function home()
	{
		$data = $this->model->index();
		include_once("views/home.php");
	}

	public function show($id)
	{
		$detail = $this->model->get($id);
		include_once("views/show.php");
	}

	public function error()
	{
		echo "lỗi";
	}

	public function create()
	{
		include_once 'views/add.php';
	}

	public function store()
	{
		$news = $this->model->add();
		header("location: index.php");
	}

	public function edit($id){	
		$detail= $this->model->get($id);
		include_once("views/edit.php");
	}

	public function update($id)
	{
		$news = $this->model->update($id);
		header("location: index.php");
	}

	public function delete($id)
	{		
		$detail = $this->model->delete($id);
		header("location: index.php");
	}
}
