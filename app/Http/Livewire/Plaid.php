<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Plaid extends Component
{
    public $accounts;

    public $selected;

    public function mount()
    {
        $this->fetchData();
    }

    public function fetchData()
    {
        $this->accounts = json_decode(file_get_contents(public_path('accounts.json')))->accounts;
    }

    public function storeAccount()
    {
        dd($this);
    }

    public function render()
    {
        return view('livewire.plaid')
            ->layout('layouts.guest');
    }
}
