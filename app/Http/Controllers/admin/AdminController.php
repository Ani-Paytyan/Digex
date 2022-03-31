<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\StoreAdminRequest;
use App\Services\AdminService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    /**
     * @var AdminService
     */
    protected AdminService $adminService;

    /**
     * AdminController constructor.
     * @param AdminService $adminService
     */
    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    public function index()
    {
        $data['admins'] = $this->adminService->getAll();
        $data['activeColorDashboard'] = 'active bg-gradient-primary';

        return view('admin/dashboard', $data);
    }

    public function create()
    {
        $data['activeColorDashboard'] = 'active bg-gradient-primary';
        return view('admin/create',$data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreAdminRequest $request)
    {
        $this->adminService->create($request);

        return redirect()->action([AdminController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    public function edit($id)
    {
        //
        $data['admin'] = $this->adminService->getById($id);
        $data['activeColorDashboard'] = 'active bg-gradient-primary';

        return view('admin/edit', $data);
    }

    public function update(Request $request, $id)
    {
        $this->adminService->update($id, $request);

        return redirect()->action([AdminController::class, 'index']);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->adminService->deleteById($id);

        return redirect()->action([AdminController::class, 'index']);
    }
}
