<x-app-layout>
<h1>Create Player</h1>
<form action="{{ route('basketball.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name">

    <label>Team:</label>
    <input type="text" name="team">

    <label>Jersey number:</label>
    <input type="text" name="jersey_number">

    <label>Position:</label>
    <input type="text" name="position">

    <label>Height:</label>
    <input type="text" name="height">

    <label>Weight:</label>
    <input type="text" name="weight">

    <label>Age:</label>
    <input type="text" name="age">

    <label>Draft year:</label>
    <input type="text" name="draft_year">

    <label>Draft pick:</label>
    <input type="text" name="draft_pick">

    <label>Birthdate:</label>
    <input type="text" name="birthdate">

    <label>Country:</label>
    <input type="text" name="country">

    <label>Experience:</label>
    <input type="text" name="experience">
    
    <button type="submit">Create Player</button>
</form>
</x-app-layout>
