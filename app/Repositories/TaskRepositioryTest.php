<?php
namespace App\Repositories;

use App\User;
use App\Task;

class TaskRepositioryTest{


	public function forUser(User $user)
    {
        $query=Task::where('user_id', $user->id)
                    ->orderBy('created_at', 'asc')
                    ->get();

        return $query;
    }
}
