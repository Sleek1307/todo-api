@extends('layouts.home')

@section('content')
    <div class="h-full aspect-auto flex grow flex-col px-1">
        <div class="flex flex-col">
            <h1 class="pt-1 px-5 text-2xl text-white font-bold">Estas son tus tareas de hoy</h1>
            <h2 class="mt-[-8px] px-5 pt-1 font-light text-sm text-gray-400">Martes 15 de Febrero</h2>
        </div>

        <div class="relative flex flex-row overflow-hidden gap-1 grow mb-3">
            <div class="w-4/12 overflow-y-auto h-full px-2 scroll-smooth tasks-state py-3">
                <span class="text-xl text-white font-semibold">Pendiente</span>
                <ul id="tasksPorHacer" class="task-list">
                    @foreach ($tasks_Pendiente as $task)
                        <br>
                        <a href="{{ route('tasks.show', $task) }}">
                            <li
                                class="rounded-xl border text-white bg-gradient-to-r from-red-300 from-5% to-transparent to-5% ">
                                <div class="p-1 pl-5 bg-transparent my-0"> {{ $task->task_title }} </div>
                                <div>
                                    <h2 class="pl-5 text-gray-300">{{ $task->date }}</h2>
                                </div>
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
            <div class="w-4/12 overflow-y-auto h-full border-l px-2 scroll-smooth task-state py-3">
                <span class="text-xl text-white font-semibold">Haciendo</span>
                <ul id="tasksHaciendo" class="task-list">
                    @foreach ($tasks_Haciendo as $task)
                        <br>
                        <a href="{{ route('tasks.show', $task) }}">
                            <li
                                class="rounded-xl border text-white bg-gradient-to-r from-red-300 from-5% to-transparent to-5%">
                                <div class="p-1 pl-5 bg-transparent my-0"> {{ $task->task_title }} </div>
                                <div>
                                    <h2 class="pl-5 text-gray-300">{{ $task->date }}</h2>
                                </div>
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
            <div class="w-4/12 overflow-y-auto h-full px-2 border-l scroll-smooth task-state py-3">
                <span class="text-xl text-white font-semibold">Terminado</span>
                <ul id="tasksTerminado">
                    @foreach ($tasks_Terminado as $task)
                        <br>
                        <a href="{{ route('tasks.show', $task) }}">
                            <li
                                class="rounded-xl border text-white bg-gradient-to-r from-red-300 from-5% to-transparent to-5% ">
                                <div class="p-1 pl-5 bg-transparent"> {{ $task->task_title }} </div>
                                <div>
                                    <h2 class="pl-5 text-gray-300">{{ $task->date }}</h2>
                                </div>
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>

            <a href="{{ route('tasks.create') }}"
                class="absolute bottom-0 right-0 bg-white text-sm font-bold px-3 py-1 mb-3 mr-4 rounded-full">
                Agregar tarea
            </a>
        </div>

        {{-- </div> --}}
    </div>
@endsection
