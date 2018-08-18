<?php
namespace App\Formatter\Task;
class TaskFormatter{
    
    public function dataFormat($tasks)
    {
         return $tasks->map(function($task){
            return (object)[
                'name' => $task->name.' working',
                'desc' => $task->name,
            ];
        });
    }
}