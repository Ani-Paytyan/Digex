<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseRequest;
use App\Services\CourseService;
use Illuminate\Http\Request;

class CourseController extends Controller
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
        $data['courses'] = $this->courseService->getAll();
        $data['activeColorCourse'] = 'active bg-gradient-primary';

        return view('admin/course/course', $data);
    }

    public function create()
    {
        $data['activeColorCourse'] = 'active bg-gradient-primary';
        return view('admin/course/createCourse',$data);
    }

    /**
     * @param StoreCourseRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCourseRequest $request)
    {
        $this->courseService->create($request);

        return redirect()->action([CourseController::class, 'index']);
    }

    public function show($id)
    {
        $data['course'] = $this->courseService->getById($id);
        $data['activeColorCourse'] = 'active bg-gradient-primary';

        return view('admin/course/detailsCourse', $data);
    }

    public function edit($id)
    {
        //
        $data['course'] = $this->courseService->getById($id);
        $data['activeColorCourse'] = 'active bg-gradient-primary';

        return view('admin/course/editCourse', $data);
    }


    public function update($id, Request $request)
    {
        $this->courseService->update($id, $request);

        return redirect()->action([CourseController::class, 'index']);
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
