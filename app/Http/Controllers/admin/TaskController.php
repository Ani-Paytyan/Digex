<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;
use App\Services\CategoryService;
use App\Services\TaskService;

class TaskController extends Controller
{
    /**
     * @var TaskService
     */
    protected TaskService $taskService;
    /**
     * @var CategoryService
     */
    protected CategoryService $categoryService;

    /**
     * TaskController constructor.
     * @param TaskService $taskService
     * @param CategoryService $categoryService
     */
    public function __construct(TaskService $taskService, CategoryService $categoryService)
    {
        $this->taskService     = $taskService;
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }


    public function create()
    {
        $data['activeColorDashboard'] = '';
        $data['activeColorTeacher'] = '';
        $data['activeColorCategory'] = 'active bg-gradient-primary';
        $data['categories'] = $this->categoryService->getAll();

        return view('admin/task/createTask', $data);
    }

    public function store(TaskRequest $request)
    {
        $this->taskService->create($request);

        return redirect()->action([CategoryController::class, 'index']);
    }


    public function show($id)
    {
        //
        $data['tasks'] = $this->taskService->getByCategoryId($id);
        $data['activeColorDashboard'] = '';
        $data['activeColorTeacher'] = '';
        $data['activeColorCategory'] = 'active bg-gradient-primary';

        return view('admin/task/task', $data);
    }


    public function edit($id)
    {
        $data['task'] = $this->taskService->getById($id);
        $data['categories'] = $this->categoryService->getAll();

        $data['activeColorCategory'] = '';
        $data['activeColorTeacher'] = '';
        $data['activeColorDashboard'] = 'active bg-gradient-primary';

        return view('admin/task/editTask', $data);
    }

    /**
     * @param TaskRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(TaskRequest $request, $id)
    {
        $this->taskService->update($request, $id);

        return redirect()->action([CategoryController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->taskService->deleteById($id);

        return redirect()->action([CategoryController::class, 'index']);    }
}
