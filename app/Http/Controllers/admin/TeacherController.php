<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Teacher;
use App\Services\TeacherService;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    /**
     * @var TeacherService
     */
    protected TeacherService $teacherService;

    /**
     * TeacherController constructor.
     * @param TeacherService $teacherService
     */
    public function __construct(TeacherService $teacherService)
    {
        $this->teacherService = $teacherService;
    }

    public function index()
    {
        $data['teachers'] = $this->teacherService->getAll();
        $data['activeColorTeacher'] = 'active bg-gradient-primary';

        return view('admin/teacher/teacher', $data);
    }


    public function create()
    {
        $data['activeColorTeacher'] = 'active bg-gradient-primary';

        return view('admin/teacher/createTeacher',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherRequest $request)
    {
        $this->teacherService->create($request);

        return redirect()->action([HomeController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }


    public function edit($id)
    {
        //
        $data['task'] = $this->teacherService->getById($id);
        $data['activeColorTeacher'] = 'active bg-gradient-primary';

        return view('admin/teacher/editTeacher', $data);
    }

    /**
     * @param StoreTeacherRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateTeacherRequest $request, $id)
    {
        $this->teacherService->update($id, $request);

        return redirect()->action([HomeController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->teacherService->deleteById($id);

        return redirect()->action([HomeController::class, 'index']);    }
}
