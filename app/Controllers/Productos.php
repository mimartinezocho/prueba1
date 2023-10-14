<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProductosModel;

class Productos extends BaseController
{
    protected $productos;
    public function __construct()
    {
        $this->productos = new ProductosModel();
    }

    public function index($activo = 1)
    {
        //$productos = $this->productos->where('activo', $activo)->findAll();
        $productos = $this->productos->setTable('productos');
        $productos->select('productos.*, unidades.nombre');
        $productos->join('unidades','productos.id_unidad = unidades.id');
        echo $productos->where('activo',$activo)->findAll();



        $data = ['titulo'=>'Productos','datos'=>$productos];

        echo view('header');
        echo view('productos/productos',$data);
        echo view('footer');
    }

    public function nuevo(){

        $data = ['titulo'=>'Agregar producto'];

        echo view('header');
        echo view('productos/nuevo',$data);
        echo view('footer');
    }

    public function insertar()
    {
        $producto =  array(['codigo'=>$this->request->getPost('codigo'),
            'nombre'=>$this->request->getPost('nombre'),
            'precio_venta'=>$this->request->getPost('precio_venta'),
            'precio_compra'=>$this->request->getPost('precio_compra'),
            'existencias'=>$this->request->getPost('existencias'),
            'stock_minimo'=>$this->request->getPost('stock_minimo'),
            'inventariable'=>$this->request->getPost('inventariable'),
            'id_unidad'=>$this->request->getPost('id_unidad'),
            'id_categoria'=>$this->request->getPost('id_unidad')
        ]);
        $this->productos->save($producto);
        return redirect()->to(base_url().'/productos');
    }

    public function editar($id)
    {
        $unidad = $this->productos->where('id', $id)->first();
        $data = ['titulo'=>'Editar producto','datos'=>$unidad];

        echo view('header');
        echo view('productos/editar',$data);
        echo view('footer');
    }

    public function actualizar()
    {
        $producto =  array(['codigo'=>$this->request->getPost('codigo'),
            'nombre'=>$this->request->getPost('nombre'),
            'precio_venta'=>$this->request->getPost('precio_venta'),
            'precio_compra'=>$this->request->getPost('precio_compra'),
            'existencias'=>$this->request->getPost('existencias'),
            'stock_minimo'=>$this->request->getPost('stock_minimo'),
            'inventariable'=>$this->request->getPost('inventariable'),
            'id_unidad'=>$this->request->getPost('id_unidad'),
            'id_categoria'=>$this->request->getPost('id_unidad')]);

        $this->productos->update($this->request->getPost('id'),$producto);
        return redirect()->to(base_url().'/productos');
    }

    public function eliminar($id)
    {
        $this->productos->update($id,['activo'=>'0']);
        return redirect()->to(base_url().'/productos');
    }

    public function eliminados($activo = 0)
    {
        $unidades = $this->productos->where('activo', $activo)->findAll();
        $data = ['titulo'=>'Productos','datos'=>$unidades];

        echo view('header');
        echo view('productos/eliminados',$data);
        echo view('footer');
    }

    public function reingresar($id)
    {
        $this->productos->update($id,['activo'=>'1']);
        return redirect()->to(base_url().'/productos');
    }

}


?>