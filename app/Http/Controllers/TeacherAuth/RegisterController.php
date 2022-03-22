<?php


namespace App\Http\Controllers\TeacherAuth;


use App\Http\Controllers\teacher\IndexController;
use App\Http\Requests\StoreTeacherRequest;
use App\Services\TeacherService;

class RegisterController
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
    public function store(StoreTeacherRequest $request)
    {
        $this->teacherService->create($request);

        return redirect()->action([IndexController::class, 'index']);
    }
}
