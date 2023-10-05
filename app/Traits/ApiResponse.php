<?php

namespace App\Traits;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\API\ResponseTrait;

trait ApiResponse
{
    use ResponseTrait;

    /**
     * Return success response
     *
     * @param array $data
     * @param string $message
     * @param integer $code
     * @return ResponseInterface
     */
    public function success($data, string $message = null, int $code = 200)
    {
        $response = [
            'status' => true,
            'message' => $message,
            'data' => $data
        ];

        return $this->respond($response, $code);
    }

    /**
     * Return error response
     *
     * @param string $message
     * @param integer $code
     * @return ResponseInterface
     */
    public function error(string $message = null, int $code = 400)
    {
        $response = [
            'status' => false,
            'message' => $message,
        ];

        return $this->respond($response, $code);
    }
}