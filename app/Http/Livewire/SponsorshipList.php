<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SponsorshipList extends Component
{
    public $godfathers ;
    public $godchildren ;
    public $q = "query" ;

    public function mount($godfathers, $godchildren){
        $this->godchildren = $godchildren;
        $this->godfathers = $godfathers;
    }

    public function search(){
        $this->q = ""; 
    }

    public function render()
    {
        return view('livewire.sponsorship-list' );
    }

}
