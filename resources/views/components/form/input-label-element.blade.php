<div class="flex flex-col mt-4">
    <label for="{{$name}}" class="block text-white text-sm">{{$text}}</label>
    <input value="{{$value}}" type="text" name="{{$name}}" id="{{$name}}" required @if($disabled) disabled @endif class="block mt-1 rounded-md">
    @error($name)
    <span class="mt-1 text-red-600">{{ $message }}</span>
    @enderror
</div>
