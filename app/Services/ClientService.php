<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 01/03/17
 * Time: 23:19
 */

namespace CodeProject\Services;


use CodeProject\Repositories\ClientRepository;

class ClientService
{

    protected $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(array $data)
    {
        // enviar um email
        // disparar uma notificacao
        // postar um tweet
        return $this->repository->create($data);
    }

    public function update(array $data, $id)
    {
        return $this->repository-$this->update($data, $id);
    }

}