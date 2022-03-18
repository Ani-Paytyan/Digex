<?php

namespace App\Repositories;

use App\Models\Course;

class CourseRepository
{
    /**
     * @var Course
     */
    protected Course $course;

    /**
     * CourseRepository constructor.
     * @param Course $course
     */
    public function __construct(Course $course)
    {
        $this->course = $course;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->course::all();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getById(int $id)
    {
        return $this->course::find($id);
    }

    /**
     * @param $request
     * @return Course
     */
    public static function create($request): Course {
        return Course::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
    }

    /**
     * @param int $id
     * @param $request
     * @return mixed
     */
    public function update(int $id, $request)
    {
        $course = $this->course::find($id);
        if(!empty($course)) {
            $course->title = $request->title;
            $course->description = $request->description;
            $course->update();
            return $course;
        }
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function deleteById(int $id)
    {
        $course = $this->course->find($id);
        if (!empty($course)) {
            $course->delete();
        }
    }
}
