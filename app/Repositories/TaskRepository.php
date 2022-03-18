<?php

namespace App\Repositories;

use App\Models\Task;
use Illuminate\Support\Facades\DB;

class TaskRepository
{
    /**
     * @var Task
     */
    protected Task $task;

    /**
     * TaskRepository constructor.
     * @param Task $task
     */
    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getByCategoryId(int $id)
    {
        return $this->task->where('category_id', $id)->get();
    }

    /**
     * @param $request
     * @return Task
     */
    public static function create($request): Task {
//        print_r($request->category_id);exit;
        return Task::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getById(int $id)
    {
        return DB::table('tasks')
            ->join('categories', 'tasks.category_id', '=', 'categories.id')
            ->select('tasks.*', 'categories.name as categoryName', 'categories.id as categoryId')
            ->where('tasks.id', $id)->first();
    }

    /**
     * @param $request
     * @param int $id
     * @return mixed
     */
    public function update($request, int $id)
    {
        $task = $this->task::find($id);
        if(!empty($task)) {
            $task->name = $request->name;
            $task->description = $request->description;
            $task->category_id = $request->category_id;
            $task->update();
            return $task;
        }
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function deleteById(int $id)
    {
        $task = $this->task->find($id);
        if (!empty($task)) {
            $task->delete();
        }
    }
}
