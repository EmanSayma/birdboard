<?php

namespace Tests\Setup;

use App\Project;
use App\Task;
use App\User;

class ProjectFactory
{
    protected $user = null;

    protected $taskCount = 0;
    
    public function ownedBy(User $user)
    {
        $this->user = $user;

        return $this;
    }

    public function withTasks($taskCount)
    {
        $this->taskCount = $taskCount;

        return $this;
    }
   
    public function create()
    {
        $project = factory(Project::class)->create([
            'owner_id' => $this->user ?? factory(User::class)
        ]);

        factory(Task::class,$this->taskCount)->create([
           'project_id' => $project->id
        ]);

        return $project;
    }
}