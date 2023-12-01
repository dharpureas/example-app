<!-- songs-list.blade.php -->

<ul>
    @foreach($songs as $song)
        <li>{{ $song->title }} by {{ $song->artist }}</li>
    @endforeach
</ul>

