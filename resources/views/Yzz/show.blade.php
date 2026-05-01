<x-layout>
    <div class="container">
        <h1>Member Details</h1>
        <div class="card">
            <div>
                <h2>{{ $names->name }}</h2>
                    <p><Strong>Skill Level:</Strong></p>
                    <p>{{ $names->skill }}</p>
                    <p><Strong>Bio: </Strong></p>
                    <p>{{ $names->bio }}</p>
            </div>
        </div>
    </div>
    <div class="border-2 border-dashed bg-white px-4 pb -4 my-4 rounded">
    <h2>Location Details</h2>
    <div class="card">
        <div>
            <h2>{{ $names->location->name }}</h2>
            <p><Strong>Region:</Strong></p>
            <p>{{ $names->location->Region }}</p>
            <p><Strong>Description: </Strong></p>
            <p>{{ $names->location->description }}</p>
    </div>
    <form action="{{ route('Yzz.destroy', $names->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this member?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn my-4 text-white font-bold py-2 px-4 rounded">Delete Member</button>
    </form>

</x-layout>
