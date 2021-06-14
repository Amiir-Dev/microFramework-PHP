<?php

namespace App\Models\Contracts;

interface CrudInterface
{
    # create (INSERT)
    public function create(array $data): int;


    # Read (SELECT)  Single | Multiple
    public function find($id): object;
    public function get(array $columns, array $where): array;


    # Update (UPDATE)
    public function update(array $data, array $where): int;


    # Delete (DELETE)
    public function delete(array $where): int;
}
