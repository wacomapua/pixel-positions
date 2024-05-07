@props(['job'])


<x-panel class="flex gap-x-6">
    <x-employer-logo/>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>


        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-300">{{ $job->title }}</h3>
        <p class="text-xs mt-auto">{{ $job->schedule }} - {{ $job->salary }}</p>
    </div>


    <div>
        @foreach($job->tags as $tag)
            <x-tag :$tag size="small">{{ $tag }}</x-tag>
        @endforeach
    </div>


</x-panel>
