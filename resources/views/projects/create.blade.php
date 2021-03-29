@extends('layouts.app')
@section('content')
    <div class="lg:w-1/2 lg:mx-auto bg-white p-6 md:py-16 rounded shadow">
        <h1 class="text-2xl font-normal mb-10 text-center">
            Lets start something new
        </h1>
        <form 
            method="post" 
            action="/projects"
        >
        @include('projects.form',[
            'project' => new \App\Project,
            'buttonText' => 'Create Project'
            ])
        </form>
    </div>
    
    <!-- <form 
        method="post" 
        action="/projects"
        class="lg:w-1/2 lg:mx-auto bg-white p-6 md:py-16 rounded shadow"
        >
       @csrf
        

        <div class="field mb-6">
            <label class="label text-sm mb-2 block" for="title">Title</label>
        </div>
        <div class="control">
            <input 
                type="text" 
                class="input bg-transparent rounded p-2 text-xs w-full"  
                name="title" 
                placeholder="Title"
                >
        </div>

        <div class="field mb-6">
            <label class="label text-sm mb-2 block" for="description">Description</label>
        </div>
        <div class="control">
            <textarea class="textarea bg-transparent border-gray-400 rounded p-2 text-xs w-full" name="description" placeholder="e.g. Hello world"></textarea>
        </div>

        <div class="field mb-6">
            <div class="control">
                <button type="submit" class="btn-blue">Create Project</button>
                <a href="/projects" class="ml-5">Cancel</a>
            </div>
        </div>
    </form> -->
@endsection
