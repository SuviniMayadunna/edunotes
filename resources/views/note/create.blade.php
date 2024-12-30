<x-app-layout>
    <div class="note-container single-note max-w-4xl mx-auto py-12">
        <h1 class="text-3xl font-bold mb-6">Create New Note</h1>
        <form action="{{ route('note.store') }}" method="POST" class="note bg-white p-6 rounded-lg shadow-md">
            @csrf
            <textarea name="note" rows="10" class="note-body w-full p-4 border border-gray-300 rounded-lg" placeholder="Enter your note here"></textarea>
            <div class="note-buttons flex justify-end space-x-2 mt-4">
                <a href="{{ route('note.index') }}" class="note-cancel-button bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancel</a>
                <button class="note-submit-button bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
