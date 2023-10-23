<div class="w-full bg-white flex px-8">
    <ul class="flex flex-1 gap-4 uppercase">
        <li>
            <a href="{{route('products.list')}}" class="navbar-item-active">{{__('products.titles.main')}}</a>
        </li>
    </ul>
    <div class="flex items-center">
        <a href="" class="text-gray-700 px-6 py-2">{{auth()->user()->name}}</a>
    </div>
</div>
