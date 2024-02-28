<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>آقای تعمیرکار - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
</head>
<body>
    <header class="top-0 left-0 right-0" style="direction: rtl;">
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="https://flowbite.com" class="flex items-center">
                    <img src="{{ asset('img/logo.png') }}" class="mr-3 h-6 sm:h-9" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white mr-3">آقای تعمیرکار</span>
                </a>
                @auth
                    <div class="justify-between items-center  flex w-auto order-1" id="mobile-menu-2">
                        <ul class="flex flex-row gap-4 mt-4 font-medium lg:space-x-8 lg:mt-0">
                            <li>
                                <a href="{{ route('products') }}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">محصولات</a>
                            </li>
                            <li>
                                <a href="{{ route('orders') }}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">سفارشات</a>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">خروج</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endauth
            </div>
        </nav>
    </header>

    <main>