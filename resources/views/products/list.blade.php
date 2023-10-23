@extends('layouts.products-app')

@section('content')
    <div class="flex w-full">
        <x-products.table :data="$products" />
        <div class="m-7">
            <x-blue-button
                type-link="true"
                link="{{route('product.create')}}"
                text="{{__('products.btns.add')}}"
            />
        </div>
    </div>
@endsection
