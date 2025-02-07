@props(['job'])

<x-panel class="flex-col text-center">

    <div class="self-start text-sm">{{ $job->employer->name }}</div>

    <div class="py-8">
        <h3 class="group-hover:text-purple-800 text-lg font-bold transition-color duration-300">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm mt-4">{{ $job->salarsy }}</p>
    </div>

    <div class="flex justify-between item-center mt-auto">

        <div>
            @foreach ($job->tags as $tag )

              <x-tag size='small' :tag="$tag"/>
                
            @endforeach 
        </div>

        <x-employer-logo :employer="$job->employer" :width="42"/>

    </div>

</x-panel>