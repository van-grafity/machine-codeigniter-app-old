<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MachineModel;
use App\Models\BrandModel;


class MachineController extends BaseController
{
    protected $MachineModel;

    public function __construct()
    {
        $this->MachineModel = new MachineModel();
        $this->BrandModel = new BrandModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Machine Management',
            'page_title' => 'Machine List',
            'machines'=> $this->MachineModel->select('machine.*,brand.brand')->join('brand','brand.id
            = machine.brand_id')->findAll(),
        ];
        return view('machine/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Machine Management',
            'page_title' => 'Create List',
            'brands' => $this->BrandModel->findAll()
        ];

        return view('machine/create', $data);
    }

    public function store()
    {
        $kind_of_machine = $this->request->getPost('kind_of_machine');
        $brand = $this->request->getPost('brand');
        $model = $this->request->getPost('model');
        $serial = $this->request->getPost('serial');
        $qty = $this->request->getPost('qty');

        $new_machine = [
            'kind_of_machine' => $kind_of_machine,
            'brand_id' => $brand,
            'model' => $model,
            'serial' => $serial,
            'qty' => $qty,
        ];

        $insert_machine = $this->MachineModel->insert($new_machine);
        return redirect()->to('machine');
    }

    public function edit($machine_id)
    {
        $data = [
            'title' => 'Machine Management',
            'page_title' => 'Edit Machine',
            'machine' => $this->MachineModel->find($machine_id),
            'brands' => $this->BrandModel->findAll(),
        ];
        return view('machine/edit', $data);
    }

    public function update()
    {
        $machine_id = $this->request->getPost('machine_id');
        $kind_of_machine = $this->request->getPost('kind_of_machine');
        $brand = $this->request->getPost('brand');
        $model = $this->request->getPost('model');
        $serial = $this->request->getPost('serial');
        $qty = $this->request->getPost('qty');

        $edit_machine = [
            'kind_of_machine' => $kind_of_machine,
            'brand_id' => $brand,
            'model' => $model,
            'serial' => $serial,
            'qty' => $qty,
        ];

        $update_machine = $this->MachineModel->update($machine_id, $edit_machine);
        return redirect()->to('machine');
    }

    public function delete($machine_id)
    {
        $this->MachineModel->delete($machine_id);
        return redirect()->to('machine');
    }
}