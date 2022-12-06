<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('todo.update', $todo) }}" method="POST">
                        @csrf
                        @method('patch')
                        <textarea name="todo" placeholder="Enter your todo list..."
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('todo', $todo->todo) }}</textarea>
                        <x-input-error :messages="$errors->get('todo')" class="mt-2" />
                        <div class="mt-4 space-x-2">
                            <x-primary-button>{{ __('Save   ') }}</x-primary-button>
                            <a href="{{ route('todo.index') }}">{{ __('Cancel') }}</a>
                        </div>

                    </form>
                </div>
            </div>

        </div>
</x-app-layout>
