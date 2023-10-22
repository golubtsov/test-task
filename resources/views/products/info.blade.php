@extends('layouts.products-app')

@section('content')
    <div class="flex w-full bg-gray-700 h-screen fixed top-0 left-0">
        <div class="w-full max-w-xl mx-auto">
            <div class="block w-full p-6">
                @csrf
                <x-text.info-title
                    title="{{$product->name}}"
                    link-edit="{{route('profile.edit', ['id' => $product->id])}}"
                    link-remove="/"
                    link-close="{{route('products.list')}}"
                />
            </div>
        </div>
    </div>
@endsection
