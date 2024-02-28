@extends('layouts.layout')

@section('title', 'افزودن سفارش')

@section('content')

<div class="flex justify-center items-center" style="background: #edf2f7;">
    <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 flex justify-center w-[90vw] md:w-[500px] md:h-[380px]">
            <div
                class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 rounded-3xl">
            </div>
            <div class="bg-white relative shadow-lg rounded-3xl px-3 pt-2 w-full">
                <form class="w-full z-50" method="POST">
                    @csrf
                    <div class="flex flex-wrap flex-row-reverse -mx-3 mb-6 relative">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 text-right pr-3"
                                for="grid-first-name">
                                نام
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white text-right"
                                name="fname" id="grid-first-name" type="text" placeholder="علیرضا" required>
                            <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 w-full text-right pr-3"
                                for="grid-last-name">
                                نام خانوادگی
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-right"
                                name="lname" id="grid-last-name" type="text" placeholder="شجاعی" required>
                        </div>
                    </div>
                    <div class="flex flex-wrap flex-row-reverse -mx-3 mb-2 relative">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 w-full text-right pr-3"
                                for="grid-zip">
                                شماره موبایل
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-right"
                                name="phone" id="grid-zip" type="text" placeholder="09131234567" maxlength="11" required>
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 w-full text-right pr-3"
                                for="grid-zip">
                                مصرف روزانه (کیلومتر)
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-right"
                                name="daily_use" id="grid-zip" type="number" placeholder="10" required>
                        </div>
                    </div>
                    <div class="w-full mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 text-right pr-3 relative"
                            for="grid-state">
                            محصول
                        </label>
                        <div class="relative">
                            <select
                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-right"
                                name="product_id" id="grid-state">
                                @foreach ($products as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <button
                            class="bg-blue-500 text-white rounded-md mt-5 px-2 py-1 pb-2 right-0 left-0 absolute">ثبت</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection