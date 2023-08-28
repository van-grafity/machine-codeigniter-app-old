<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MachineTypeModel;


class MachineTypeController extends BaseController
{
    protected $MachineTypeModel;

    public function __construct()
    {
        $this->MachineTypeModel = new MachineTypeModel();
    }

    public function index()
    {
        $data = [ 
            'title' => 'Machine Type Management',
            'page_title' => 'Machine Type List',
            'machine_types' => $this->MachineTypeModel->findAll()
        ];
        return view('machine-type/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Machine Type Management',
            'page_title' => 'Create Machine Type',
        ];

        return view('machine-type/create', $data);
    }

    public function store()
    {
        $machine_type = $this->request->getPost('machine_type');

        $new_machine_type = [
            'machine_type' => $machine_type,
        ];

        $insert_machine_type = $this->MachineTypeModel->insert($new_machine_type);
        return redirect()->to('machine-type');
    }
    
    public function edit($machine_type_id)
    {
        $data = [
            'title' => 'Machine Type Management',
            'page_title' => 'Edit Machine Type',
            'machine_type' => $this->MachineTypeModel->find($machine_type_id)
        ];
        return view('machine-type/edit', $data);
    }

    public function update()
    {
        $machine_type_id = $this->request->getPost('machine_type_id');
        $machine_type = $this->request->getPost('machine_type');

        $edit_machine_type = [
            'machine_type' => $machine_type,
        ];

        $update_machine_type = $this->MachineTypeModel->update($machine_type_id, $edit_machine_type);
        return redirect()->to('machine-type');
    }

    public function delete($machine_type_id)
    {
        $this->MachineTypeModel->delete($machine_type_id);
        return redirect()->to('machine-type');
    }
}