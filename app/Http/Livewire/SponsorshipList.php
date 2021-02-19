<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Godchild;
use App\Models\Godfather;

class SponsorshipList extends Component
{
    public $parrains = true ;
    public $items ;

    public function mount(){
        $this->items = Godfather::all()->sortBy([
            ['name', 'asc'],
            ['lname', 'asc'],
        ]);
    }

    public function updated($value, $name){
        $this->parrains = ! $this->parrains;
    }

    // public function loadGodfathers(){
    //     $this->parrains = true;
    //     $this->items = Godfather::all()->sortBy([
    //         ['name', 'asc'],
    //         ['lname', 'asc'],
    //     ]);
    // }

    // public function loadGodchildren(){
    //     $this->parrains = false;
    //     $this->items = Godchild::all()->sortBy([
    //         ['name', 'asc'],
    //         ['lname', 'asc'],
    //     ]);
    // }

    // public function mount(){
    //     $this->loadGodchildren();
    // }

    public function changeList(){
        if($this->parrains){
            $this->items = Godfather::all()->sortBy([
                ['name', 'asc'],
                ['lname', 'asc'],
            ]);
            // $this->parrains = ! $this->parrains;
        }else{
            $this->items = Godchild::all()->sortBy([
                ['name', 'asc'],
                ['lname', 'asc'],
            ]);
            // $this->parrains = ! $this->parrains;
        }
    }



    public function render()
    {
        return view('livewire.sponsorship-list' , ["items" => $this->items]);
    }

}
