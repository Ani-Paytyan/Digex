<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseRequest;
use App\Services\CourseService;
use Illuminate\Http\Request;

class TeacherCourseController extends Controller
{
    /**
     * @var CourseService
     */
    protected CourseService $courseService;

    /**
     * CourseController constructor.
     * @param CourseService $courseService
     */
    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }

    public function index()
    {
//        dd(6);
        $data['courses'] = $this->courseService->getAll();
        $data['activeColorCourse'] = 'active bg-gradient-primary';

        return view('/teacher/course/course', $data);
    }

    public function create()
    {
        $data['activeColorCourse'] = 'active bg-gradient-primary';
        return view('/teacher/course/createCourse',$data);
    }

    /**
     * @param StoreCourseRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCourseRequest $request)
    {
        $this->courseService->create($request);

        return redirect()->action([TeacherCourseController::class, 'index']);
    }

    public function show($id)
    {
        $data['course'] = $this->courseService->getById($id);
//        print_r($data['course']);exit;
            $data['activeColorCourse'] = 'active bg-gradient-primary';

        return view('teacher/course/detailsCourse', $data);
    }

    public function edit($id)
    {
        //
        $data['course'] = $this->courseService->getById($id);
        $data['activeColorCourse'] = 'active bg-gradient-primary';

        return view('teacher/course/editCourse', $data);
    }


    public function update($id, Request $request)
    {
        $this->courseService->update($id, $request);

        return redirect()->action([TeacherCourseController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->courseService->deleteById($id);

        return redirect()->action([CourseController::class, 'index']);
    }
}
