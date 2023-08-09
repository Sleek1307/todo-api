@extends('layouts.main')

@section('block_files')
    @vite('resources/css/todayTasks.css')
@endsection

@section('main_content')
    <div class="h-5/6 w-11/12 flex items-center justify-center">
        <div class="flex justify-start items-start h-full w-full bg-transparent rounded-3xl border">
            {{-- * INICIO lateral nav bar --}}
            <div class="h-full w-[200px] p-3 dark:bg-gray-100 dark:text-gray-900 rounded-l-3xl">
                <div class="flex items-center p-2 space-x-4 border-b border-gray-500">
                    <img src="https://source.unsplash.com/100x100/?portrait" alt=""
                        class="w-12 h-12 rounded-full bg-gray-700">
                    <div>
                        <h2 class="text-lg font-semibold">John Doe</h2>
                        <span class="flex items-center space-x-1">
                            <a rel="noopener noreferrer" href="#" class="text-xs hover:underline text-gray-400">View
                                profile</a>
                        </span>
                    </div>
                </div>
                <div class="divide-y divide-gray-700">
                    <ul class="pt-2 pb-4 space-y-1 text-sm">
                        <li class=" text-gray-500 font-bold ">
                            <div class="pl-5 w-100 hover:bg-gray-200 focus:bg-gray-300">
                                <a rel="noopener noreferrer" href="{{route('home')}}"
                                    class="flex items-center p-2 space-x-3 rounded-md">
                                    <img src="{{ asset('Svg/All/linear/home.svg') }}" alt="">
                                    <span>Inicio</span>
                                </a>
                            </div>

                        </li>
                        <li class="text-gray-500 font-bold">
                            <div class="pl-5 w-100 hover:bg-gray-200 focus:bg-gray-300 rounded-md">
                                <a rel="noopener noreferrer" href="{{route('categories.index')}}" class="flex items-center p-2 space-x-3">
                                    <img src="{{ asset('Svg/All/linear/clipboard-text.svg') }}" alt="Categorias">
                                    <span>Categorias</span>
                                </a>
                            </div>

                            {{-- * INICIO Categorias --}}
                            <ul class="pb-2 text-[10px] grid grid-cols-4">

                                @foreach ($categories as $category)
                                    <li class="col-start-2 col-span-3">
                                        <a rel="noopener noreferrer" href="{{route('categories.edit', $category)}}"
                                            class="flex items-center p-2 space-x-3 rounded-md hover:bg-gray-200 text-gray-500 font-semibold ">
                                            <svg width="12" height="12">
                                                <circle cx="6" cy="6" r="6" fill="{{$category->color}}" />
                                            </svg>
                                            <span>{{$category->category_name}}</span>
                                        </a>
                                    </li>
                                @endforeach

                                <li class="col-start-2 col-span-3">
                                    <a rel="noopener noreferrer" href="{{ route('categories.create') }}"
                                        class="flex items-center p-2 space-x-3 rounded-md hover:bg-gray-200 text-gray-500 font-light ">
                                        <img src="{{ asset('Svg/All/linear/add-circle-modified.svg') }}"
                                            alt="Agregar categoria">
                                        <span>Agregar categoria</span>
                                    </a>
                                </li>
                            </ul>
                            {{-- ! FIN Categorias --}}
                        </li>
                        <li class="text-gray-500 font-bold">
                            <div class="w-100 hover:bg-gray-200 focus:bg-gray-300 pl-5">
                                <a rel="noopener noreferrer" href="{{route('home.calendar')}}"
                                    class="flex items-center p-2 space-x-3 rounded-md">
                                    <img src="{{ asset('Svg/All/linear/calendar-1.svg') }}" alt="Calendario">
                                    <span>Calendario</span>
                                </a>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
            {{-- ! FIN lateran nav bar --}}
            {{-- * INICIO Content --}}
            @yield('content')
            {{-- ! FIN Content --}}
        </div>
    </div>
@endsection
