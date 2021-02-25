<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class AdminActions extends Component
{
    public function export()
    {
        return Storage::disk('exports')->download('export.csv');
    }
    public function render()
    {
        return view('livewire.admin-actions');
    }
}
