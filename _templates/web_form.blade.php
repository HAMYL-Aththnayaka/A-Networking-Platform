<form action="" method="">
 <h2>Create a new member</h2>

 <!--Member Name -->
 <label for="name">Name:</label>
 <input type="text"
        id="name"
        name="name"
        required>

<!--Member Skill Level -->
    <label for="skill">Skill Level:</label>
    <input type="number"
            id="skill"
            name="skill"
            required>

<!--Member Bio -->
    <label for="bio">Bio:</label>
    <textarea id="bio"
              name="bio"
              required>
              </textarea>

<!--select a  Location -->
    <label for="location_id">Location:</label>
    <select id="location_id" name="location_id" required>
        <option value="" disabled selected>Select a location</option>
    </select>

    <button type="submit" class="btn mt-4">Create Member</button>
</form>
