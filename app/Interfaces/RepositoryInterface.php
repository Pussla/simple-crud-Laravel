<?php

namespace App\Interfaces;

interface RepositoryInterface
{
    public function all();

    public function show($id);

    public function update($id, array $attributes);

    public function create(array $attributes);

    public function delete($id);
}

