<?php

namespace App\Http\Livewire\TeamMember;

use App\Models\TeamMember;
use Livewire\Component;

class Create extends Component
{
    public string $name;
    public string $timezone;

    protected $rules = [
        'name' => 'required|min:3',
        'timezone' => 'required',
    ];

    public function save()
    {
        $validatedData = $this->validate();
        TeamMember::create($validatedData);
        $this->redirectRoute('index');
    }

    public function render()
    {
        return view('livewire.team-member.create');
    }
}
