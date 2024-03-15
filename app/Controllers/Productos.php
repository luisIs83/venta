<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductosModel;
use App\Models\CategoriasModel;
use App\Models\UnidadesModel;


class productos extends BaseController
{
	protected $productos; 
	
	public function __construct()
	{
		$this->productos = new ProductosModel();
		$this->categorias = new CategoriasModel();
		$this->unidades = new UnidadesModel();
	}

	public function index($activo = '1')
	{
		$productos = $this->productos->where('activo', $activo)->findAll();
		$data = ['titulo' => 'Productos', 'datos' => $productos];

		echo view('header');
		echo view('productos/productos', $data);
		echo view('footer');
	}

	public function eliminados($activo = '0')
	{
		$productos = $this->productos->where('activo', $activo)->findAll();
		$data = ['titulo' => 'Eliminados', 'datos' => $productos];

		echo view('header');
		echo view('productos/eliminados', $data);
		echo view('footer');
	}

	public function nuevo()
	{
		$categorias = $this->categorias->where('activo', '1')->findAll();
		$unidades = $this->unidades->where('activo', '1')->findAll();

		$data = ['titulo' => 'Agregar producto', 'unidades' => $unidades, 'categorias' => $categorias];

		echo view('header');
		echo view('productos/nuevo', $data);
		echo view('footer');
	}

	public function insertar()
	{
		$this->productos->save(['nombre' => $this->request->getPost('nombre'), 
							   'nombre_corto' => $this->request->getPost('nombre_corto')]);
		return redirect()->to(base_url().'/productos');
	}

	public function editar($id)
	{
		$producto = $this->productos->where('id', $id)->first();
		$data = ['titulo' => 'Editar datos', 'datos' => $producto];

		echo view('header');
		echo view('productos/editar', $data);
		echo view('footer');
	}

	public function actualizar()
	{
		$this->productos->update($this->request->getPost('id'), ['nombre' => $this->request->getPost('nombre'), 
							   'nombre_corto' => $this->request->getPost('nombre_corto')]);
		return redirect()->to(base_url().'/productos');
	}

	public function eliminar($id)
	{
		$this->productos->update($id, ['activo' => '0']);
		return redirect()->to(base_url().'/productos');
	}

	public function reingresar($id)
	{
		$this->productos->update($id, ['activo' => '1']);
		return redirect()->to(base_url().'/productos');
	}
}
?>