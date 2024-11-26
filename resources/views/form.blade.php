@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
    <form method="POST" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div>
            <label for="title" class="block uppercase text-slate-700 mb-2">
                Title
            </label>
            <input class="shadow-sm appearance-none border w-full py-2 ox-3 text-slate-700 leading-tight focus:outline-none" type="text" name="title" id="title" value="{{ $task->title ?? old('title') }}" />
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
            <div>
                <label for="description" class="block uppercase text-slate-700 mb-2">Description</label>
                <textarea class="shadow-sm appearance-none border w-full py-2 ox-3 text-slate-700 leading-tight focus:outline-none" name="description" id="description" rows="5">{{ $task->description ?? old('description') }}</textarea>
                @error('description')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="long_description" class="block uppercase text-slate-700 mb-2">Long Description</label>
                <textarea class="shadow-sm appearance-none border w-full py-2 ox-3 text-slate-700 leading-tight focus:outline-none" name="long_description" id="long_description" rows="10">{{ $task->long_description ?? old('long_description') }}</textarea>
                @error('long_description')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit" class="rounded-md px-2 py-1 text-center font-medium text-slate-700s shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50 mt-4">
                    @isset($task)
                        Update Task
                    @else
                        Add Task
                    @endisset
                </button>
            </div>
        </div>
    </form>
@endsection
