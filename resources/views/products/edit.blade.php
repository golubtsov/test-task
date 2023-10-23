@extends('layouts.products-app')

@section('content')
    <div class="flex w-full bg-gray-700 h-screen fixed overflow-y-auto top-0 left-0">
        <div class="w-full max-w-xl mx-auto">
            <form action="{{route('product.update', ['id' => $product->id])}}" method="post"
                  class="block w-full p-6">
                @csrf
                <x-form.title
                        text="{{__('products.titles.edit', ['name' => $product->name])}}"
                        redirect-link="{{route('products.list')}}"
                />
                <x-form.input-label-element
                        name="{{__('products.form.article')}}"
                        value="{{$product->article}}"
                        text="{{__('products.table.article')}}"
                        disabled="{{auth()->user()->role_id != config('products.role.admin')}}"
                />
                <x-form.input-label-element
                        name="{{__('products.form.name')}}"
                        value="{{$product->name}}"
                        text="{{__('products.table.name')}}"
                />
                <x-form.select
                        text="{{__('products.table.status.text')}}"
                        value="{{\App\Enum\ProductStatuses::getStatusLang($product->status)}}"
                        name="{{__('products.form.status')}}"
                        :values=\App\Enum\ProductStatuses::toArray()
                />
                <livewire:add-attribute
                    :elem-attributes="$product->data"
                />
                <div class="my-4">
                    <x-blue-button
                            text="{{__('products.btns.save')}}"
                    />
                </div>
            </form>
        </div>
    </div>
@endsection
