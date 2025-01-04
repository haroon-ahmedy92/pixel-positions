@props(['job'])

<x-panel class="flex space-x-6">

    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a href="#">

        <h3 class="font-bold text-xg mt-3 group-hover:text-purple-800 transition-color duration-300">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>

        <p class="text-gray-400 mt-auto">{{ $job->salary }}</p>

    </div>



    <div>

        <div>
            @foreach ($job->tags as $tag)
            <x-tag :tag="$tag"/>
            @endforeach
        </div>

    </div>

</x-panel>