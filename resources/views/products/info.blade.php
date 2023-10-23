@extends('layouts.products-app')

@section('content')
    <div class="flex w-full bg-gray-700 h-screen fixed top-0 left-0">
        <div class="w-full max-w-xl mx-auto">
            <div class="block w-full p-6">
                @csrf
                <x-text.info-title
                    title="{{$product->name}}"
                    link-edit="{{route('product.edit', ['id' => $product->id])}}"
                    link-remove="{{route('product.delete', ['id' => $product->id])}}"
                    link-close="{{route('products.list')}}"
                />
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <tbody>
                        <x-table.info-td
                            name="{{__('products.table.article')}}"
                            value="{{$product->article}}"
                        />
                        <x-table.info-td
                            name="{{__('products.table.name')}}"
                            value="{{$product->name}}"
                        />
                        <x-table.info-td
                            name="{{__('products.table.status.text')}}"
                            value="{{\App\Enum\ProductStatuses::getStatusLang($product->status)}}"
                        />
                        <tr class="flex flex-1">
                            <td class="flex-1">{{__('products.table.attributes')}}</td>
                            <td class="text-white">
                                @foreach($product->data as $el)
                                    <p>{{$el['name']}}: {{$el['value']}}</p>
                                @endforeach
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
