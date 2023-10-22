<div>
    @if($typeLink)
        <a href="{{$link}}" class="text-white bg-blue-500 px-6 text-sm py-2 rounded-md">{{$text}}</a>
    @else
        <button id="{{$id}}" type="submit" class="text-white bg-blue-500 px-6 text-sm py-2 rounded-md">{{$text}}</button>
    @endif
</div>
