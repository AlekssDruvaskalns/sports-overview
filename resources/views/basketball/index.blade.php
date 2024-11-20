<x-app-layout>
<h1>NBA Players</h1>
<a href="{{ route('basketball.create') }}">Create New Player</a>

<form action="{{ route('basketball.sort', ['sort_by' => 'age']) }}" method="GET">
    <button type="submit">Sort by Age</button>
</form>
<form action="{{ route('basketball.sort', ['sort_by' => 'team']) }}" method="GET">
    <button type="submit">Sort by Team</button>
</form>
<form action="{{ route('basketball.sort', ['sort_by' => 'position']) }}" method="GET">
    <button type="submit">Sort by Position</button>
</form>
<form action="{{ route('basketball.sort', ['sort_by' => 'draft_year']) }}" method="GET">
    <button type="submit">Sort by Draft year</button>
</form>
<form action="{{ route('basketball.sort', ['sort_by' => 'country']) }}" method="GET">
    <button type="submit">Sort by Country</button>
</form>
<!-- Add more sorting buttons as needed -->

@foreach($players as $player)
    <div>
        <h2>{{ $player->name }}</h2>
        <p>Team: {{ $player->team }}</p>
        <p>Jersey Number: {{ $player->jersey_number }}</p>
        <p>Position: {{ $player->position }}</p>
        <a href="{{ route('basketball.show', $player->id) }}">View</a>
        <a href="{{ route('basketball.edit', $player->id) }}">Edit</a>
        <form action="{{ route('basketball.destroy', $player->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach

</x-app-layout>
