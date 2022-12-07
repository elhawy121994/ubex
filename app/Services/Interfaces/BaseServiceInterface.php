<?php

namespace App\Services\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface BaseServiceInterface
{
    public function create(array $data): ?Model;

    public function list(array $requestOptions);

    public function show(int $id): Model;

    public function update(int $id, array $data): Model;

    public function destroy(int $id): bool;

}
