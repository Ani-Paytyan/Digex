<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Teacher;
use App\Services\TeacherService;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
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
//        if(Auth::guard('teacher')){
//            dd('admin');
//        }
        $user = Auth::guard('teacher')->user();
        dd($user->email);
        $data['teachers'] = $this->teacherService->getAll();
        $data['activeColorDashboard'] = 'active bg-gradient-primary';

        return view('teacher/teacher', $data);
    }


    public function create()
    {
        $data['activeColorDashboard'] = 'active bg-gradient-primary';

        return view('teacher/createTeacher',$data);
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

        return redirect()->action([IndexController::class, 'index']);
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
        $data['teacher'] = $this->teacherService->getById($id);
        $data['activeColorDashboard'] = 'active bg-gradient-primary';

        return view('teacher/editTeacher', $data);
    }

    /**
     * @param StoreTeacherRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateTeacherRequest $request, $id)
    {
        $this->teacherService->update($id, $request);

        return redirect()->action([IndexController::class, 'index']);
    }

    public function destroy($id)
    {
        $this->teacherService->deleteById($id);

        return redirect()->action([IndexController::class, 'index']);
    }
}
