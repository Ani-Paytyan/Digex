<?php

namespace App\Services;

use App\Repositories\AdminRepository;

class AdminService
{
    /**
     * @var AdminRepository
     */
    protected AdminRepository $adminRepository;

    /**
     * AdminService constructor.
     * @param AdminRepository $adminRepository
     */
    public function __construct(AdminRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->adminRepository->getAll();
    }

    /**
     * @param $request
     * @return \App\Models\Admin
     */
    public function create($request)
    {
        return $this->adminRepository->create($request);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getById(int $id)
    {
        return $this->adminRepository->getById($id);
    }

    /**
     * @param int $id
     * @param $request
     * @return mixed
     */
    public function update(int $id, $request)
    {
        return $this->adminRepository->update($id, $request) ;
    }

    public function deleteById($id)
    {
        return $this->adminRepository->deleteById($id);
    }
}
