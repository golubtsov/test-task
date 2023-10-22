<div id="products-table" class="flex flex-1">
    <table class="text-gray-500">
        <thead class="block w-full my-5">
        <tr class="uppercase flex gap-3">
            <th scope="col" class="font-thin mx-5">{{__('products.table.article')}}</th>
            <th scope="col" class="font-thin mx-5">{{__('products.table.name')}}</th>
            <th scope="col" class="font-thin mx-5">{{__('products.table.status.text')}}</th>
            <th scope="col" class="font-thin mx-5">{{__('products.table.attributes')}}</th>
        </tr>
        </thead>
        <tbody class="flex flex-col border-b border-gray-500 w-full">
        @foreach($data as $elem)
            <tr class="flex gap-3 border-gray-500 border-t bg-white p-4">
                    <td class="font-thin mx-5">{{$elem->article}}</td>
                    <td class="font-thin mx-5">
                        <a href="{{route('product.info', ['id' => $elem->id])}}">{{$elem->name}}</a>
                    </td>
                    <td class="font-thin mx-5">{{$elem->status}}</td>
                    <td class="font-thin mx-5">
                        @foreach($elem->data as $el)
                            <p>{{$el['name']}}: {{$el['value']}}</p>
                        @endforeach
                    </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
