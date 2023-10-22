<div class="mb-5 flex items-center">
    <div class="flex flex-1">
        <h1 class="text-xl text-white font-bold">{{$title}}</h1>
    </div>
    <div class="flex items-center gap-3">
        <div class="flex items-center gap-1">
            <a href="{{$linkEdit}}" class="p-2 bg-gray-800">
                @include('svg.edit')
            </a>
            <a href="{{$linkRemove}}" class="p-2 bg-gray-800">
                @include('svg.trash')
            </a>
        </div>
        <a href="{{$linkClose}}">
            @include('svg.close')
        </a>
    </div>
</div>
