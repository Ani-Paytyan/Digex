<?php

namespace App\Repositories;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
     * @param int $id
     * @return mixed
     */
    public function getById(int $id)
    {
        return $this->course::find($id);
    }

    /**
     * @param int $id
     * @return \Illuminate\Support\Collection
     */
    public function getByTeacherId(int $id)
    {
        return DB::table('courses')
            ->where('teacher_id', '=', $id)
            ->get();
//        return $this->course::find($id);
    }

    /**
     * @param $request
     * @return Course
     */
    public static function create($request): Course {
        $imagePath = $request->file('image')->store('public');
        Storage::put('uploads/courses_photo', $request->file('image'));

        return Course::create([
            'title' => $request->title,
            'teacher_id' => Auth::guard('teacher')->user()->getAuthIdentifier(),
            'description' => $request->description,
            'image' => $imagePath,
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

            if ($request->hasFile('image')) {

                $imagePath = $request->file('image')->store('public');
                Storage::put('uploads/teachers_photo', $request->file('image'));
                $course->image = $imagePath;
            }

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
