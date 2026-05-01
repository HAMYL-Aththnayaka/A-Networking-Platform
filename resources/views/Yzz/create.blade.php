<x-layout>
   <form action="{{route('Yzz.store')}}" method="POST">
   @csrf <!-- Cross-Site Request Forgery token for security -->
 <h2>Create a new member</h2>

 <!--Member Name -->
 <label for="name">Name:</label>
 <input type="text"
        id="name"
        name="name"
        value="{{ old('name') }}"
        required>

<!--Member Skill Level -->
    <label for="skill">Skill Level:(0-100)</label>
    <input type="number"
            id="skill"
            name="skill"
            value="{{ old('skill') }}"
            required>

<!--Member Bio -->
    <label for="bio">Bio:</label>
    <textarea id="bio"
              name="bio"
              rows="4"

              required> {{ old('bio') }}
              </textarea>

<!--select a  Location -->
    <label for="location_id">Location:</label>
    <select id="location_id" name="location_id" required>
        <option value="" disabled selected>Select a location</option>
        @foreach($locations as $location)
            <option value="{{ $location->id }}" {{ old('location_id') == $location->id ? 'selected' : '' }}>
                           {{ $location->name }}
                        </option>
        @endforeach
    </select>

    <button type="submit" class="btn mt-4">Create Member</button>


    <!-- Display validation errors -->
    @if($errors->any())
        <ul class="px-4 py-2 bg-red-100">
            @foreach($errors->all() as $error)
                <li class="my-2 text-red-700">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</form>

</x-layout>
