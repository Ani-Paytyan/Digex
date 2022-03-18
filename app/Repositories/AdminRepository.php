<?php

namespace App\Repositories;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class AdminRepository
{
    /**
     * @var Admin
     */
    protected Admin $admin;

    /**
     * AdminRepository constructor.
     * @param Admin $admin
     */
    public function __construct(Admin $admin)
    {
        $this->admin = $admin;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->admin::all();
    }

    /**
     * @param $request
     * @return Admin
     */
    public static function create($request): Admin {
        return Admin::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getById(int $id)
    {
        return $this->admin::find($id);
    }

    /**
     * @param int $id
     * @param $request
     * @return mixed
     */
    public function update(int $id, $request)
    {
        $admin = $this->admin::find($id);
        if(!empty($admin)) {
            $admin->username = $request->username;
            $admin->email = $request->email;
            $admin->password = $request->password;
            $admin->update();
            return $admin;
        }
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function deleteById(int $id)
    {
        $admin = $this->admin->find($id);
        if (!empty($admin)) {
            $admin->delete();
        }
    }
}
