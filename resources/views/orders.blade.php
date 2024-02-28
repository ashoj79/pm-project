@extends('layouts.layout')

@section('title', 'لیست محصولات')

@section('content')

<div class="container m-auto mt-20" style="direction: rtl;">

    
    @if (!$expired_orders->isEmpty())
    <div class="p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800 "
    role="alert" style="direction: rtl;">
        @foreach ($expired_orders as $item)
        <div class="flex items-center">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div>
                مهلت استفاده کاربر {{$item->fname . ' ' . $item->lname}} از محصول {{$item->product->name}} به اتمام رسیده است. شماره تماس: {{$item->phone}}
            </div>
        </div>
        @endforeach
    </div>
    @endif

    <div class="flex justify-end mb-2">
        <a href="{{ route('order') }}">
            <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                افزودن
            </button>
        </a>
    </div>

    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-right text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        نام
                    </th>
                    <th scope="col" class="px-6 py-3">
                        نام محصول
                    </th>
                    <th scope="col" class="px-6 py-3">
                        شماره موبایل
                    </th>
                    <th scope="col" class="px-6 py-3">
                        مهلت باقی‌مانده
                    </th>
                    <th scope="col" class="px-6 py-3">
                        عملیات
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr class="odd:bg-white even:bg-gray-50 border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{$order->fname . ' ' . $order->lname}}
                        </th>
                        <td class="px-6 py-4">
                            {{$order->product->name}}
                        </td>
                        <td class="px-6 py-4">
                            {{$order->phone}}
                        </td>
                        <td class="px-6 py-4">
                            {{$order->days}} روز
                        </td>
                        <td class="px-6 py-4">
                            <form method="POST" action="{{ route('delete-order', ['id'=>$order->id]) }}">
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