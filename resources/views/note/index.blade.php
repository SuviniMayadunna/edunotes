<x-app-layout>
    <div class="note-container">
        <a href="{{ route('note.create') }}" class="new-note-btn">New Note</a>
        <div class="notes">
            @foreach($notes as $note)
            <div class="note">
                <div class="note-body"> 
                    {{ Str::words($note->note, 50) }}
                </div>
                <div class="note-buttons">
                    <a href="{{ route('note.show', $note->id) }}" class="note-edit-button">View</a>
                    <a href="{{ route('note.edit', $note->id) }}" class="note-edit-button">Edit</a>
                    <form action="{{ route('note.destroy', $note->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="note-delete-button">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
