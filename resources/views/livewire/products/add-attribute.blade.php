<div class="mt-4">
    <div>
        <h1 class="text-xl text-white font-bold">{{__('products.table.attributes')}}</h1>
    </div>

    @if($countAttributes != 0)
        @for($i = 0; $i < $countAttributes; $i++)
            <div class="flex w-full gap-4 items-center">
                <div class="flex flex-col mt-4">
                    <label for="nameAttribute" class="block text-white text-sm">{{__('products.table.name')}}</label>
                    <input type="text" name="namesAttributes[]" id="nameAttribute" class="block mt-1 rounded-md">
                </div>
                <div class="flex flex-col mt-4">
                    <label for="valueAttribute" class="block text-white text-sm">{{__('products.table.name')}}</label>
                    <input type="text" name="valuesAttributes[]" id="valueAttribute" class="block mt-1 rounded-md">
                </div>
                <div class="flex items-center mt-10">
                    <button wire:click.prevent="removeAttribute" class="block text-gray-400">
                        @include('svg.trash')
                    </button>
                </div>
            </div>
        @endfor
    @endif

    <div class="my-3">
        <button wire:click.prevent="addAttribute" class="text-blue-400 underline decoration-dashed">{{__('products.btns.add_attribute')}}</button>
    </div>
</div>
