<?php

namespace App\Http\Controllers;

class JsonResponse extends Controller
{
    /**
     * @var boolean
     */
    public $status;

    /**
     * @var string
     */
    public $message;

    /**
     * @var \stdClass
     */
    public $data;

    /**
     * @var array
     */
    public $errors;

    public function __construct()
    {
        $this->status = true;
        $this->message = '';
        $this->data = new \stdClass();
        $this->errors = [];
    }
}