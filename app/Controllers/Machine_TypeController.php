<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Machine_TypeModel;


class Machine_TypeController extends BaseController
{
    protected $Machine_TypeModel;

    public function __construct()
    {
        $this->Machine_TypeModel = new Machine_TypeModel();
    }

    public function index()
    {
        $data = [ 
            'title' => 'Machine Type Management',
            'page_title' => 'Machine Type List',
            'machine_types' => $this->Machine_TypeModel->findAll()
        ];
        return view('machine_type/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Machine Type Management',
            'page_title' => 'Create Machine Type',
        ];

        return view('machine_type/create', $data);
    }

    public function store()
    {
        $machine_type = $this->request->getPost('machine_type');

        $new_machine_type = [
            'machine_type' => $machine_type,
        ];

        $insert_machine_type = $this->Machine_TypeModel->insert($new_machine_type);
        return redirect()->to('machine_type');
    }
    
    public function edit($machine_type_id)
    {
        $data = [
            'title' => 'Machine Type Management',
            'page_title' => 'Edit Machine Type',
            'machine_type' => $this->Machine_TypeModel->find($machine_type_id)
        ];
        return view('machine_type/edit', $data);
    }

    public function update()
    {
        $machine_type_id = $this->request->getPost('machine_type_id');
        $machine_type = $this->request->getPost('machine_type');

        $edit_machine_type = [
            'machine_type' => $machine_type,
        ];

        $update_machine_type = $this->Machine_TypeModel->update($machine_type_id, $edit_machine_type);
        return redirect()->to('machine_type');
    }

    public function delete($machine_type_id)
    {
        $this->Machine_TypeModel->delete($machine_type_id);
        return redirect()->to('machine_type');
    }
}