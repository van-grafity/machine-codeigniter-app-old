<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LocationModel;

class LocationController extends BaseController
{
    protected $LocationModel;

    public function __construct()
    {
        $this->LocationModel = new LocationModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Location Management',
            'page_title' => 'Location List',
            'locations' => $this->LocationModel->findAll()
        ];
        return view('location/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Location Management',
            'page_title' => 'Create Location',
        ];

        return view('location/create', $data);
    }

    public function store()
    {
        $location = $this->request->getPost('location');
        $description = $this->request->getPost('description');


        $new_location = [
            'location' => $location,
            'description' => $description,
        ];

        $insert_location = $this->LocationModel->insert($new_location);
        return redirect()->to('location');
    }

    public function edit($location_id)
    {
        $data = [
            'title' => 'Location Management',
            'page_title' => 'Edit Location',
            'location' => $this->LocationModel->find($location_id)
        ];
        return view('location/edit', $data);
    }

    public function update()
    {
        $location_id = $this->request->getPost('location_id');
        $location = $this->request->getPost('location');
        $description = $this->request->getPost('description');

        $edit_location = [
            'location' => $location,
            'description' => $description,
        ];

        $update_location = $this->LocationModel->update($location_id, $edit_location);
        return redirect()->to('location');
    }

    public function delete($location_id)
    {
        $this->LocationModel->delete($location_id);
        return redirect()->to('location');
    }
}