<?php

namespace App\Repositories;

use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class TeacherRepository
{
    /**
     * @var Teacher
     */
    protected Teacher $teacher;

    /**
     * TeacherRepository constructor.
     * @param Teacher $teacher
     */
    public function __construct(Teacher $teacher)
    {
        $this->teacher = $teacher;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->teacher::all();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getById(int $id)
    {
       return $this->teacher::find($id);
    }

    /**
     * @param int $id
     * @param $request
     * @return mixed
     */
    public function update(int $id, $request)
    {
        $teacher = $this->teacher::find($id);
        if (!empty($teacher)) {
            $teacher->username   = $request->username;
            $teacher->first_name = $request->firstName;
            $teacher->last_name  = $request->lastName;
            $teacher->phone      = $request->phone;
            $teacher->email      = $request->email;


            if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public');
            Storage::put('uploads/teachers_photo', $request->file('image'));
            $teacher->image = $imagePath;
            }

            $teacher->update();

            return $teacher;
        }
    }

    /**
     * @param $request
     * @return Teacher
     */
    public static function create($request): Teacher {
        return Teacher::create([
            'username' => $request->username,
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'phone' => $request->phone,
            'profession' => $request->profession,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }

    /**
     * @param int $id
     */
    public function deleteById(int $id)
    {
        $teacher = $this->teacher->find($id);
        if (!empty($teacher)) {
            $teacher->delete();
        }
    }
}
