<?php
namespace App\Repositories;

// UI > Controller > Service > Repository > Model/Database

class BaseRepository
{
    private $model;
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }
}
?>