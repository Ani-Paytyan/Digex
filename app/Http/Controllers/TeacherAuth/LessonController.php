<?php

namespace App\Http\Controllers\TeacherAuth;

use App\Http\Controllers\teacher\TeacherCourseController;
use App\Http\Requests\StoreLessonRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Services\LessonService;
use Illuminate\Http\Request;
use App\Models\Lesson;


class LessonController extends Controller
{
    /**
     * @var LessonService
     */
    protected LessonService $lessonService;

    /**
     * LessonController constructor.
     * @param LessonService $lessonService
     */
    public function __construct(LessonService $lessonService)
    {
        $this->lessonService = $lessonService;
    }

    public function index()
    {
        $userId = Auth::guard('teacher')->user()->getAuthIdentifier();
        if (!empty($userId)) {
            $data['lessons'] = $this->lessonService->getLessonssByTeacherId($userId);
            $data['lessonActive'] = 'active';

            return view('teacher/lesson/lesson', $data);
        }
    }

    public function create($courseId)
    {
        $data['courseId'] = $courseId;
        $data['lessonActive'] = 'active';

        return view('/teacher/lesson/createLesson', $data);
    }

    /**
     * @param StoreLessonRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreLessonRequest $request)
    {
        $this->lessonService->create($request);

        return redirect()->action([TeacherCourseController::class, 'index']);
    }

    public function show(int $id)
    {
        $data['lesson'] = $this->lessonService->getById($id);
        $data['lessonActive'] = 'active';

        return view('teacher/lesson/detailsLesson', $data);
    }

    public function edit(int $id)
    {
        $data['lesson'] = $this->lessonService->getById($id);
        $data['activeColorCourse'] = 'active bg-gradient-primary';

        return view('teacher/lesson/editLesson', $data);
    }

    public function update(int $id, Request $request)
    {
        $this->lessonService->update($id, $request);

        return redirect()->action([LessonController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        //
    }
}
