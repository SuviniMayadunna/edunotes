<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-2xl font-bold mb-4">Welcome, {{ Auth::user()->name }}!</h3>
                    <p class="text-gray-600">Here you can manage your notes and keep track of your tasks.</p>
                    <div class="mt-6">
                        <a href="{{ route('note.index') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">View Notes</a>
                        <a href="{{ route('note.create') }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Create New Note</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
