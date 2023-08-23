<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BrandModel;

class BrandController extends BaseController
{
    protected $BrandModel;

    public function __construct()
    {
        $this->BrandModel = new BrandModel();
    }

    public function index() 
    {
        $data = [
            'title' => 'Brand Management',
            'page_title' => 'Brand List',
            'brands'=> $this->BrandModel->findAll()
        ];
        return view('brand/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Brand Management',
            'page_title' => 'Create Brand List',
        ];

        return view('brand/create', $data);
    }

    public function store()
    {
        $brand = $this->request->getPost('brand');

        $new_brand = [
            'brand' => $brand,
        ];

        $insert_brand = $this->BrandModel->insert($new_brand);
        return redirect()->to('brand');
    }

    public function edit($brand_id)
    {
        $data = [
            'title' => 'Brand Management',
            'page_title' => 'Edit Brand',
            'brand' => $this->BrandModel->find($brand_id)
        ];
        return view('brand/edit', $data);
    }

    public function update()
    {
        $brand_id = $this->request->getPost('brand_id');
        $brand = $this->request->getPost('brand');

        $edit_brand = [
            'brand' => $brand,
        ];

        $update_brand = $this->BrandModel->update($brand_id, $edit_brand);
        return redirect()->to('brand');
    }

    public function delete($brand_id)
    {
        $this->BrandModel->delete($brand_id);
        return redirect()->to('brand');
    }
}