<?php

namespace App\Services;

use App\Repositories\CourseRepository;

class CourseService
{
    /**
     * @var CourseRepository
     */
    protected CourseRepository $courseRepository;

    /**
     * CourseService constructor.
     * @param CourseRepository $courseRepository
     */
    public function __construct(CourseRepository $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->courseRepository->getAll();
    }

    /**
     * @return mixed
     */
    public function getById(int $id)
    {
        return $this->courseRepository->getById($id);
    }

    /**
     * @param $request
     * @return mixed
     */
    public function create($request)
    {
        return $this->courseRepository->create($request);
    }

    /**
     * @param int $id
     * @param $request
     * @return mixed
     */
    public function update(int $id, $request)
    {
        return $this->courseRepository->update($id, $request) ;
    }

    public function deleteById($id)
    {
        return $this->courseRepository->deleteById($id);
    }
}
