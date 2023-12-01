<!-- songs.blade.php -->

<x-layouts.main pageName="All Songs">

    @section('content')
        <x-songs-list :songs="$songs" />
    @endsection

</x-layouts.main>

