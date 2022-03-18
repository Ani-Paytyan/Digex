<?php

namespace App\Services;

use App\Repositories\TeacherRepository;

class TeacherService
{
    /**
     * @var TeacherRepository
     */
    protected TeacherRepository $teacherRepository;

    /**
     * TeacherService constructor.
     * @param TeacherRepository $teacherRepository
     */
    public function __construct(TeacherRepository $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->teacherRepository->getAll();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getById(int $id)
    {
        return $this->teacherRepository->getById($id);
    }

    /**
     * @param int $id
     * @param $request
     * @return mixed
     */
    public function update(int $id, $request)
    {
        return $this->teacherRepository->update($id, $request) ;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function create($request)
    {
        return $this->teacherRepository->create($request);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteById($id)
    {
        return $this->teacherRepository->deleteById($id);
    }
}
