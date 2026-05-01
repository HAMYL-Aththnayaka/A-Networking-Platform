<x-layout>
    <h2>Welcome to Yzz Network</h2>
    <ul>
        @foreach($names as $name)
            <li>

                <x-card href="{{ route('Yzz.show', $name->id) }}" :highlight="$name->skill > 10">
               <div>
                    <h3>{{ $name->name }}</h3>
                    <p>Location: {{ $name->location?->name ?? 'No Location Assigned' }}</p>
                </x-card>
            </li>
        @endforeach
    </ul>
    {{$names->links()}}
</x-layout>
