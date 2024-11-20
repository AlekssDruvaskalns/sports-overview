<x-app-layout>
<h1>Edit Player</h1>
<form action="{{ route('basketball.update', $basketball->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Name:</label>
    <input type="text" name="name" value="{{ $basketball->name }}">
    <label>Team:</label>
    <input type="text" name="team" value="{{ $basketball->team }}">
    <label>Jersey number:</label>
    <input type="text" name="yersey_number" value="{{ $basketball->yerser_number }}">
    <label>Position:</label>
    <input type="text" name="position" value="{{ $basketball->position }}"> 
    <label>Height:</label>
    <input type="text" name="height" value="{{ $basketball->height }}">
    <label>Weight:</label>
    <input type="text" name="weight" value="{{ $basketball->weight }}">
    <label>Age:</label>
    <input type="text" name="age" value="{{ $basketball->age }}">
    <label>Draft year:</label>
    <input type="text" name="draft_year" value="{{ $basketball->draft_year }}">
    <label>Draft pick:</label>
    <input type="text" name="draft_pick" value="{{ $basketball->draft_pick }}">
    <label>Birthdate:</label>
    <input type="text" name="birthdate" value="{{ $basketball->birthdate }}">
    <label>Country:</label>
    <input type="text" name="country" value="{{ $basketball->country }}">
    <label>Experience:</label>
    <input type="text" name="experience" value="{{ $basketball->experience }}">    
    
    <button type="submit">Update Player</button>
</form>
</x-app-layout>
