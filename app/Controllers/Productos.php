<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductosModel;
use App\Models\CategoriasModel;
use App\Models\UnidadesModel;


class Productos extends BaseController
{
	protected $productos; 
	protected $reglas;

	public function __construct()
	{
		$this->productos = new ProductosModel();
		$this->categorias = new CategoriasModel();
		$this->unidades = new UnidadesModel();

		helper(['form']);

			$this->reglas = ['codigo' => [
				'rules' => 'required|is_unique[productos.codigo]', 
				'errors' => [
					'required' => 'El campo {field} es obligatorio.',
					'is_unique' => 'El campo {field} debe ser único',
				]
			],
			'nombre' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'El campo {field} es obligatorio.'
				]
			]
		];
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
		if ($this->request->getMethod() == "post" && $this->validate($this->reglas)) {
		$this->productos->save(['codigo' => $this->request->getPost('codigo'),
								'nombre' => $this->request->getPost('nombre'),
								'precio_venta' => $this->request->getPost('precio_venta'),
								'precio_compra' => $this->request->getPost('precio_compra'),
								'existencias' => $this->request->getPost('existencias'),
								'stock_minimo' => $this->request->getPost('stock_minimo'),
								'inventariable' => $this->request->getPost('inventariable'),
								'id_categoria' => $this->request->getPost('id_categoria'), 
							    'id_unidad' => $this->request->getPost('id_unidad')]);
		return redirect()->to(base_url().'/productos');
		}else{
			
			$categorias = $this->categorias->where('activo', '1')->findAll();
			$unidades = $this->unidades->where('activo', '1')->findAll();

			$data = ['titulo' => 'Agregar producto', 'unidades' => $unidades, 'categorias' => $categorias, 'validation' => $this->validator];

			echo view('header');
			echo view('productos/nuevo', $data);
			echo view('footer');
		}
	}

	public function editar($id)
	{
		$categorias = $this->categorias->where('activo', '1')->findAll();
		$unidades = $this->unidades->where('activo', '1')->findAll();
		$producto = $this->productos->where('id', $id)->first();
		$data = ['titulo' => 'Editar producto', 'unidades' => $unidades, 'categorias' => $categorias, 'producto' => $producto];

		echo view('header');
		echo view('productos/editar', $data);
		echo view('footer');
	}

	public function actualizar()
	{
		
		$this->productos->update($this->request->getPost('id'), [
								'codigo' => $this->request->getPost('codigo'),
								'nombre' => $this->request->getPost('nombre'),
								'precio_venta' => $this->request->getPost('precio_venta'),
								'precio_compra' => $this->request->getPost('precio_compra'),
								'existencias' => $this->request->getPost('existencias'),
								'stock_minimo' => $this->request->getPost('stock_minimo'),
								'inventariable' => $this->request->getPost('inventariable'),
								'id_categoria' => $this->request->getPost('id_categoria'), 
							    'id_unidad' => $this->request->getPost('id_unidad')]);
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