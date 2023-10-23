@extends('layouts.products-app')

@section('content')
    <div class="flex w-full bg-gray-700 h-screen overflow-y-auto fixed top-0 left-0">
        <div class="w-full max-w-xl mx-auto">
            <form action="{{route('product.store')}}" method="post"
                  class="block w-full p-6">
                @csrf
                <x-form.title
                        text="{{__('products.titles.create')}}"
                        redirect-link="{{route('products.list')}}"
                />
                <x-form.input-label-element
                        name="{{__('products.form.article')}}"
                        text="{{__('products.table.article')}}"
                />
                <x-form.input-label-element
                        name="{{__('products.form.name')}}"
                        text="{{__('products.table.name')}}"
                />
                <x-form.select
                        text="{{__('products.table.status.text')}}"
                        name="{{__('products.form.status')}}"
                        :values=\App\Enum\ProductStatuses::toArray()
                />
                <livewire:add-attribute/>
                <div class="my-4">
                    <x-blue-button
                            text="{{__('products.btns.add')}}"
                    />
                </div>
            </form>
        </div>
    </div>
@endsection
