<!-- filepath: /C:/Users/Suvini Mayadunna/laravel02/edu/resources/views/admin/index.blade.php -->
<x-app-layout>
    <div class="note-container max-w-7xl mx-auto py-12">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Your Notes</h1>
            <a href="{{ route('note.create') }}" class="new-note-btn bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">New Note</a>
        </div>
        <div class="notes grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($notes as $note)
            <div class="note bg-yellow-200 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <div class="note-body mb-4">
                    {{ Str::words($note->note, 50) }}
                </div>
                <div class="note-buttons flex justify-end space-x-2">
                    <a href="{{ route('note.show', $note->id) }}" class="note-edit-button bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View</a>
                    <a href="{{ route('note.edit', $note->id) }}" class="note-edit-button bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">Edit</a>
                    <form action="{{ route('note.destroy', $note->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="note-delete-button bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>