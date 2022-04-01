<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Teacher;
use App\Services\CourseService;
use App\Services\TeacherService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    /**
     * @var TeacherService
     */
    protected TeacherService $teacherService;
    /**
     * @var CourseService
     */
    protected CourseService $courseService;

    /**
     * IndexController constructor.
     * @param TeacherService $teacherService
     * @param CourseService $courseService
     */
    public function __construct(TeacherService $teacherService, CourseService $courseService)
    {
        $this->teacherService = $teacherService;
        $this->courseService = $courseService;
    }

    public function index()
    {
        $userId = Auth::guard('teacher')->user()->getAuthIdentifier();
        if(!empty($userId)) {
            $data['user'] = $this->teacherService->getById($userId);
            $data['courses'] = Auth::guard('teacher')->user()->courses;
//            print_r( $data['co urses']);exit;

//            $data['courses'] = $this->courseService->getCoursesByTeacherId($userId);
            $data['home'] = 'active';
            $data['activeColorDashboard'] = 'active bg-gradient-primary';

            return view('teacher/teacher', $data);
        }
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
        $data['teacher'] = $this->teacherService->getById($id);
        $data['activeColorDashboard'] = 'active bg-gradient-primary';

        return view('teacher/editTeacher', $data);
    }

    public function editPersonal($id)
    {
        $data['teacher'] = $this->teacherService->getById($id);
        $data['activeColorDashboard'] = 'active bg-gradient-primary';

        return view('teacher/editTeacherPersonalInfo', $data);
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
