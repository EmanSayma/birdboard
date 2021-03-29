@extends('layouts.app')
@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between w-full items-end">
            <p class="text-gray-500 text-sm font-normal">
                <a href="/projects"> My Projects</a> / {{$project->title}}
            </p>
            <a href="{{ $project->path().'/edit' }}" class="btn-blue" >Edit Project</a>
        </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-lg text-gray-500 font-normal mb-3">Tasks</h2>
                    @foreach($project->tasks as $task) 
                       <div class="card mb-3">
                           <form action="{{$task->path()}}" method="post">
                              @method('patch')
                              @csrf
                              <div class="flex">
                                  <input name="body" value="{{$task->body}}" class="w-full {{$task->completed ? 'text-gray-500':''}}">
                                  <input type="checkbox" name="completed" {{$task->completed ? 'checked':''}}
                                   onChange="this.form.submit()">
                              </div>
                           </form>
                        </div>
                    @endforeach
                    <div class="card mb-3">
                        <form action="{{$project->path().'/tasks'}}" method="post">
                            @csrf
                           <input placeholder="Adding a new task..." class="w-full" name="body"/>
                        </form>
                    </div>
                </div>

                <div>
                    <h2 class="text-lg text-gray-500 font-normal mb-3">General Notes</h2>
                    {{-- general notes --}}

                    <form method="post" action="{{$project->path()}}">
                        @csrf
                        @method('patch')

                       <textarea 
                           name="notes"
                           class="card w-full"
                           style="min-height: 200px" 
                           placeholder="Anything special that you want to make a note of?">{{ $project->notes }}</textarea>

                        <button type="submit" class="btn-blue">Save</button>
                    </form>
                </div>
            </div>

            <div class="lg:w-1/4 px-3"> 
                @include('projects.card')

                @include('projects.activity.card')
            </div>
        </div>
    </main>
@endsection
