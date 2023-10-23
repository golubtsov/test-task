<div class="mt-4">
    <div>
        <h1 class="text-xl text-white font-bold">{{__('products.table.attributes')}}</h1>
    </div>

    @if(is_null($elemAttributes))

        @if($countAttributes != 0)
            @for($i = 0; $i < $countAttributes; $i++)
                <div class="flex w-full gap-4 items-center">
                    <div class="flex flex-col mt-4">
                        <label for="namesAttributes" class="block text-white text-sm">{{__('products.table.name')}}</label>
                        <input type="text" name="namesAttributes[]" id="namesAttributes" required class="block mt-1 rounded-md">
                        @error('nameAttribute')
                        <span class="mt-1 text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mt-4">
                        <label for="valuesAttributes" class="block text-white text-sm">{{__('products.table.value')}}</label>
                        <input type="text" name="valuesAttributes[]" id="valuesAttributes" required class="block mt-1 rounded-md">
                        @error('valuesAttributes')
                        <span class="mt-1 text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex items-center mt-10">
                        <button wire:click.prevent="removeAttribute" class="block text-gray-400">
                            @include('svg.trash')
                        </button>
                    </div>
                </div>
            @endfor
        @endif

    @else

        @foreach($elemAttributes as $index => $elem)
            <div class="flex w-full gap-4 items-center">
                <div class="flex flex-col mt-4">
                    <label for="namesAttributes" class="block text-white text-sm">{{__('products.table.name')}}</label>
                    <input value="{{$elem['name']}}" type="text" name="namesAttributes[]" id="namesAttributes" required class="block mt-1 rounded-md">
                    @error('nameAttribute')
                    <span class="mt-1 text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col mt-4">
                    <label for="valuesAttributes" class="block text-white text-sm">{{__('products.table.value')}}</label>
                    <input value="{{$elem['value']}}" type="text" name="valuesAttributes[]" id="valuesAttributes" required class="block mt-1 rounded-md">
                    @error('valuesAttributes')
                    <span class="mt-1 text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center mt-10">
                    <button wire:click.prevent="removeAttribute({{$index}})" class="block text-gray-400">
                        @include('svg.trash')
                    </button>
                </div>
            </div>
        @endforeach

            @if($countAttributes != 0)
                @for($i = 0; $i < $countAttributes; $i++)
                    <div class="flex w-full gap-4 items-center">
                        <div class="flex flex-col mt-4">
                            <label for="namesAttributes" class="block text-white text-sm">{{__('products.table.name')}}</label>
                            <input type="text" name="namesAttributes[]" id="namesAttributes" required class="block mt-1 rounded-md">
                            @error('namesAttributes')
                            <span class="mt-1 text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col mt-4">
                            <label for="valuesAttributes" class="block text-white text-sm">{{__('products.table.value')}}</label>
                            <input type="text" name="valuesAttributes[]" id="valuesAttributes" required class="block mt-1 rounded-md">
                            @error('valuesAttributes')
                            <span class="mt-1 text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex items-center mt-10">
                            <button wire:click.prevent="removeAttribute" class="block text-gray-400">
                                @include('svg.trash')
                            </button>
                        </div>
                    </div>
                @endfor
            @endif

    @endif

    @error('namesAttributes')
    <span class="mt-1 text-red-600">{{ $message }}</span>
    @enderror

    <div class="my-3">
        <button wire:click.prevent="addAttribute" class="text-blue-400 underline decoration-dashed">{{__('products.btns.add_attribute')}}</button>
    </div>
</div>
