@extends('layouts.layout')

@section('title', 'لیست محصولات')

@section('content')

<div class="container m-auto mt-10" style="direction: rtl;">
    <div class="flex justify-end mb-2">
        <a href="{{ route('product') }}">
            <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                افزودن
            </button>
        </a>
    </div>

    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        نام محصول
                    </th>
                    <th scope="col" class="px-6 py-3">
                        حداکثر استفاده
                    </th>
                    <th scope="col" class="px-6 py-3">
                        عملیات
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr class="odd:bg-white even:bg-gray-50 border-b ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{$product->name}}
                    </th>
                    <td class="px-6 py-4">
                        {{$product->max_use}} کیلومتر
                    </td>
                    <td class="px-6 py-4">
                        <form method="POST" action="{{ route('delete-product', ['id'=>$product->id]) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" role="button" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection