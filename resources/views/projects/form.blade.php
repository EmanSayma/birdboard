@csrf

<div class="field mb-6">
    <label class="label text-sm mb-2 block" for="title">Title</label>
</div>
<div class="control">
    <input 
        type="text" 
        class="input bg-transparent border-gray-500 rounded p-2 text-xs w-full"  
        name="title" 
        placeholder="Title"
        value="{{ $project->title }}"
        required
        >
</div>

<div class="field mb-6">
    <label class="label text-sm mb-2 block" for="description">Description</label>
</div>
<div class="control">
    <textarea 
            class="textarea bg-transparent border-gray-500 rounded p-2 text-xs w-full"
            name="description" 
            required
            placeholder="e.g. Hello world">{{ $project->description }}</textarea>
</div>

<div class="field mb-6">
    <div class="control">
        <button type="submit" class="btn-blue">{{ $buttonText }}</button>
        <a href="{{ $project->path() }}" class="ml-5">Cancel</a>
    </div>
</div>

@if($errors->any())
<div class="field mt-6">
    @foreach($errors->all() as $error)
        <li class="text-sm text-red-500">{{ $error }}</li>
    @endforeach
</div>
@endif
 
