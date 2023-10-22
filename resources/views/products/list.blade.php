@extends('layouts.products-app')

@section('content')
    <div class="flex">
        <x-products.table :data="$products" />
        <div class="m-7">
            <x-blue-button
                type-link="true"
                link="{{route('product.create')}}"
                text="{{__('products.btns.add')}}"
            />
        </div>














{{--        <div id="modal-create-product" class="hidden fixed top-0 left-0 w-full justify-center items-center h-screen">--}}
{{--            <div class="max-w-xl w-full mx-auto">--}}
{{--                <form action="{{route('product.store')}}" method="post"--}}
{{--                      class="bg-gray-700 block rounded-md shadow w-full p-6">--}}
{{--                    @csrf--}}
{{--                    <x-form.title text="{{__('products.titles.create')}}" />--}}
{{--                    <x-form.input-label-element--}}
{{--                        name="{{__('products.form.article')}}"--}}
{{--                        text="{{__('products.table.article')}}"--}}
{{--                    />--}}
{{--                    <x-form.input-label-element--}}
{{--                        name="{{__('products.form.name')}}"--}}
{{--                        text="{{__('products.table.name')}}"--}}
{{--                    />--}}
{{--                    <x-form.select--}}
{{--                        text="{{__('products.table.status.text')}}"--}}
{{--                        name="{{__('products.form.status')}}"--}}
{{--                        :values=\App\Enum\ProductsStatus::toArray()--}}
{{--                    />--}}
{{--                    <livewire:add-attribute/>--}}
{{--                    <div class="my-4">--}}
{{--                        <x-blue-button--}}
{{--                            text="{{__('products.btns.add')}}"--}}
{{--                        />--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection
