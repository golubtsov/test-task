<div id="products-table" class="w-full">
    <table class="text-gray-500 text-left w-full max-w-3xl">
        <thead class="w-full my-4">
        <tr class="uppercase border-b border-gray-500 gap-3">
            <th scope="col" class="font-thin mx-5 p-8">{{__('products.table.article')}}</th>
            <th scope="col" class="font-thin mx-5 p-8">{{__('products.table.name')}}</th>
            <th scope="col" class="font-thin mx-5 p-8">{{__('products.table.status.text')}}</th>
            <th scope="col" class="font-thin mx-5 p-8">{{__('products.table.attributes')}}</th>
        </tr>
        </thead>
        <tbody class="border-b border-gray-500 w-full">
        @foreach($data as $elem)
            <tr class="gap-3 border-gray-500 border-t bg-white p-4">
                <td class="font-thin py-4 px-8">
                    <a href="{{route('product.info', ['id' => $elem->id])}}" class="hover:underline">{{$elem->article}}</a>
                </td>
                <td class="font-thin py-4 px-8">
                    <a href="{{route('product.info', ['id' => $elem->id])}}" class="hover:underline">{{$elem->name}}</a>
                </td>
                <td class="font-thin py-4 px-8">{{\App\Enum\ProductStatuses::getStatusLang($elem->status)}}</td>
                <td class="font-thin py-4 px-8">
                    @foreach($elem->data as $el)
                        <p>{{$el['name']}}: {{$el['value']}}</p>
                    @endforeach
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
