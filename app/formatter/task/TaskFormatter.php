<?php
namespace App\Formatter\Task;
class TaskFormatter{
    
    public function dataFormat($tasks)
    {
         return $tasks->map(function($task){
            return (object)[
                'name' => $task->name.' working',
                'desc' => $task->name,//if you have any index array you can call another formatter to fittler this index array
            ];
        });
    }
}