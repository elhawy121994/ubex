<?php

namespace App\Services;

use App\Repositories\Interfaces\BaseRepositoryInterface;
use App\Services\Interfaces\BaseServiceInterface;
use Illuminate\Database\Eloquent\Model;

class BaseService implements BaseServiceInterface
{
    public $repository;

    public function __construct(BaseRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function create(array $data): ?Model
    {
        return $this->repository->create($data);
    }

    public function list(array $requestOptions)
    {
        return $this->repository->all();
    }

    public function show(int $id): Model
    {
        return $this->repository->getById($id);
    }

    public function update(int $id, array $data): Model
    {
        return $this->repository->updateById($id, $data);
    }
}
