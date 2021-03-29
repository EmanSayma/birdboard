<div class="card" style="height: 200px">
    <h3 class="font-normal text-xl py-4 -ml-5 border-l-4 border-blue-400 pl-4 mb-3">
        <a href="{{$project->path()}}">
            {{ $project->title }}
        </a>
    </h3>
    <div class="text-gray-500 mb-4">
        {{str_limit($project->description,100)}}
    </div>

    <footer>
        <form method="post" action="{{ $project->path() }}" class="text-right">
             @method('delete')
             @csrf
             <button type="submit" class="text-xs">Delete</button>
        </form>
    </footer>
</div>
