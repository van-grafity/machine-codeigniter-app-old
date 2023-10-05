<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

use App\Models\MachineModel;
use App\Models\MachineTypeModel;
use App\Models\BrandModel;

use App\Traits\ApiResponse;

class MachineAPIController extends ResourceController
{
    use ApiResponse;
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $machineModel = new MachineModel();
        $machineTypeModel = new MachineTypeModel();
        $brandModel = new BrandModel();

        $limit = $this->request->getVar('limit') ?? 10;
        $offset = $this->request->getVar('offset') ?? 0;
        $total = $machineModel->countAllResults();

        $machines = $machineModel->findAll($limit, $offset);
        foreach ($machines as $key => $machine) {
            $machine_type = $machineTypeModel->find($machine['machine_type_id']);
            $brand = $brandModel->find($machine['brand_id']);
            $machines[$key]['machine_type'] = $machine_type;
            $machines[$key]['brand'] = $brand;
        }

        $data = [
            'machines' => $machines,
            'limit' => $limit,
            'page' => $offset,
            'total' => $total
        ];

        return $this->success($data, 'Success get machine');
    }


    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $machineModel = new MachineModel();
        $machineTypeModel = new MachineTypeModel();
        $brandModel = new BrandModel();

        $machine = $machineModel->find($id);
        if (!$machine) {
            return $this->failNotFound('No machine found');
        }
        $machine_type = $machineTypeModel->find($machine['machine_type_id']);
        $brand = $brandModel->find($machine['brand_id']);
        $machine['machine_type'] = $machine_type;
        $machine['brand'] = $brand;

        $data = [
            'machine' => $machine
        ];
        
        return $this->success($data, 'Success get machine');
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
