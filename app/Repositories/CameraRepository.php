<?php
namespace App\Repositories;


use App\Models\Camera;
class CameraRepository extends BaseRepository
{
    public function __construct(Camera $camera)
    {
        $this->model = $camera;
    }
}
