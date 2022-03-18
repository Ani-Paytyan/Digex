<?php

namespace App\Services;

use App\Models\Task;
use App\Repositories\TaskRepository;

class TaskService
{
    /**
     * @var TaskRepository
     */
    protected TaskRepository $taskRepository;

    /**
     * TaskService constructor.
     * @param TaskRepository $taskRepository
     */
    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getByCategoryId(int $id)
    {
        return $this->taskRepository->getByCategoryId($id);
    }

    /**
     * @param $request
     * @return mixed
     */
    public function create($request)
    {
        return $this->taskRepository->create($request);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getById(int $id)
    {
        return $this->taskRepository->getById($id);
    }

    /**
     * @param int $id
     * @param $request
     * @return mixed
     */
    public function update($request, int $id)
    {
        return $this->taskRepository->update($request, $id);
    }

    public function deleteById($id)
    {
        return $this->taskRepository->deleteById($id);
    }
}
