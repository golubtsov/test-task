<div class="flex flex-col mt-4">
    <label for="{{$name}}" class="block text-white text-sm">{{$text}}</label>
    <select name="{{$name}}" id="{{$name}}" class="block mt-1 rounded-md">
        @foreach($values as $index => $value)
            <option value="{{$index}}">{{$value}}</option>
        @endforeach
    </select>
</div>
