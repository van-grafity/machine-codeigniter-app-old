<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MachineModel;
use App\Models\BrandModel;
use App\Models\Machine_TypeModel;


class MachineController extends BaseController
{
    protected $MachineModel;

    public function __construct()
    {
        $this->MachineModel = new MachineModel();
        $this->BrandModel = new BrandModel();
        $this->Machine_TypeModel = new Machine_TypeModel();
    }

    public function index()
    {   
        $machines = $this->MachineModel->select('machines.*,machine_types.machine_type,brands.brand')->join('machine_types','machine_types.id
            = machines.machine_type_id')->join('brands','brands.id = machines.brand_id')->findAll();

        $data = [
            'title' => 'Machine Management',
            'page_title' => 'Machine List',
            'machines'=> $machines,
        ];
        return view('machine/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Machine Management',
            'page_title' => 'Create List',
            'brands' => $this->BrandModel->findAll(),
            'machine_types' => $this->Machine_TypeModel->findAll(),
        ];

        return view('machine/create', $data);
    }

    public function store()
    {
        $machine_type_id = $this->request->getPost('machine_type');
        $brand_id = $this->request->getPost('brand');
        $model = $this->request->getPost('model');
        $serial_number = $this->request->getPost('serial_number');

        $new_machine = [
            'machine_type_id' => $machine_type_id,
            'brand_id' => $brand_id,
            'model' => $model,
            'serial_number' => $serial_number,
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
            'machine_types' => $this->Machine_TypeModel->findAll(),
        ];
        return view('machine/edit', $data);
    }

    public function update()
    {
        $machine_id = $this->request->getPost('machine_id');
        $machine_type_id = $this->request->getPost('machine_type');
        $brand_id = $this->request->getPost('brand');
        $model = $this->request->getPost('model');
        $serial_number = $this->request->getPost('serial_number');

        $edit_machine = [
            'machine_type_id' => $machine_type_id,
            'brand_id' => $brand_id,
            'model' => $model,
            'serial_number' => $serial_number,
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