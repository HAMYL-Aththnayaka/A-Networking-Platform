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
</x-layout>
