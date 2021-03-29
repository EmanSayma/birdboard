<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Facades\Tests\Setup\ProjectFactory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InvitationsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_project_can_invite_a_user()
    {
        $project = ProjectFactory::create();            //given I have a project

        $project->invite($newUser=factory(User::class)->create());          // and the owner of the project invites another user

        //dd($project->members);
        $this->signIn($newUser);          // then, that new user will have permissions to add tasks
        $this->post(action('ProjectTasksController@store',$project), $task =['body'=>'Foo task']);
        $this->assertDatabaseHas('tasks',$task);
    }
}
