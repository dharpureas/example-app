// app/View/Components/SongsList.php

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SongsList extends Component
{
    public $songs;

    public function __construct($songs = [])
    {
        $this->songs = $songs;
    }

    public function render()
    {
        return view('components.songs-list');
    }
}

