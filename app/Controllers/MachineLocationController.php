<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MachineLocationModel;
use App\Models\MachineModel;
use App\Models\LocationModel;

class MachineLocationController extends BaseController
{
    protected $MachineLocationModel;

    public function __construct()
    {
        $this->MachineLocationModel = new MachineLocationModel();
        $this->MachineModel = new MachineModel();
        $this->LocationModel = new LocationModel();
    }

    public function index()
    {
        $machine_locations = $this->MachineLocationModel->select('machine_locations.*,machines.serial_number,locations.location')
        ->join('machines','machines.id = machine_locations.machine_id')
        ->join('locations','locations.id = machine_locations.location_id')->findAll();

        $data = [
            'title' => 'Machine Location Management',
            'page_title' => 'Machine Location List',
            'machine_locations' => $machine_locations
        ];
        return view('machine_location/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Machine Location Management',
            'page_title' => 'Add New Machine Location',
            'machines' => $this->MachineModel->findAll(),
            'locations' => $this->LocationModel->findAll(),
        ];

        return view('machine_location/create', $data);
    }

    public function store()
    {
        $machine = $this->request->getPost('serial_number');
        $location = $this->request->getPost('location');
        $date = $this->request->getPost('date');
        $time = $this->request->getPost('time');
        
        $new_machine_location = [
            'machine_id' => $machine,
            'location_id' => $location,
            'date' => $date,
            'time' => $time,
        ];

        $insert_machine_location = $this->MachineLocationModel->insert($new_machine_location);
        return redirect()->to('machine_location');
    }

    public function edit($machine_location_id)
    {
        $data = [
            'title' => 'Machine Location Management',
            'page_title' => 'Edit Machine Location',
            'machine_location' => $this->MachineLocationModel->find($machine_location_id),
            'machines' => $this->MachineModel->findAll(),
            'locations' => $this->LocationModel->findAll(),
        ];
        return view('machine_location/edit', $data);
    }

    public function update()
    {
        $machine_location_id = $this->request->getPost('machine_location_id');
        $machine = $this->request->getPost('serial_number');
        $location = $this->request->getPost('location');
        $date = $this->request->getPost('date');
        $time = $this->request->getPost('time');

        $edit_machine_location = [
            'machine_id' => $machine,
            'location_id' => $location,
            'date' => $date,
            'time' => $time,
        ];

        $update_machine_location = $this->MachineLocationModel->update($machine_location_id, $edit_machine_location);
        return redirect()->to('machine_location');
    }

    public function delete($machine_location_id)
    {
        $this->MachineLocationModel->delete($machine_location_id);
        return redirect()->to('machine_location');
    }
}