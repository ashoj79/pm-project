@extends('layouts.layout')

@section('title', 'افزودن محصول')

@section('content')

<div class="flex justify-center items-center" style="background: #edf2f7;">
    <div class="min-h-screen py-6 flex flex-col justify-center items-center sm:py-12 w-full">
        <div class="relative py-3 flex justify-center w-[90vw] md:w-[500px] md:h-[380px]">
            <div
                class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 rounded-3xl">
            </div>
            <div class="bg-white relative shadow-lg rounded-3xl px-3 pt-2 flex items-center w-[90vw]"
                style="padding-top: 16px;">
                <form class="w-full max-w-lg z-50" method="POST" action="#">
                    @csrf
                    <div class="flex flex-wrap flex-row-reverse -mx-3 mb-6 relative w-[90vw] md:w-full">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 text-right pr-3"
                                for="name">
                                نام محصول
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white text-right"
                                id="name" name="name" type="text">
                            <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 w-full text-right pr-3"
                                for="max_use">
                                حداکثر استفاده (کیلومتر)
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-right"
                                id="max_use" name="max_use" type="text">
                        </div>
                    </div>
                    <div class="relative">
                        <button
                            class="bg-blue-500 text-white rounded-md px-2 py-1 pb-2 right-0 left-0 absolute">ثبت</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection