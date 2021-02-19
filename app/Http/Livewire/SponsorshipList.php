<?php

namespace App\Http\Livewire;

use App\Models\Godchild;
use Livewire\Component;
use App\Models\Godfather;

define("GODFATHERS", Godfather::all()->sortBy([
    ['name', 'asc'],
    ['lname', 'asc'],
]));

define("b", Godchild::all()->sortBy([
    ['name', 'asc'],
    ['lname', 'asc'],
]));

class SponsorshipList extends Component
{
    public $q = "query" ;
    public $activeClass = true ;
    public $godfathers = GODFATHERS  ;
    public $b = b  ;

    public function emptyInputQuery(){
        $this->q = "";
        $this->activeClass = ! $this->activeClass ;
    }

    public function render()
    {
        $godchildren = Godchild::all()->sortBy([
            ['name', 'asc'],
            ['lname', 'asc']
        ]);
        return view('livewire.sponsorship-list', compact('godchildren') );
    }

}
