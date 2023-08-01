<?php

namespace App\Http\Livewire\TeamMember;

use App\Models\TeamMember;
use Livewire\Component;

class Update extends Component
{
    public TeamMember $teamMember;
    public string $name;
    public string $timezone;

    protected $rules = [
        'name' => 'required|min:3',
        'timezone' => 'required',
    ];

    public function mount(TeamMember $teamMember)
    {
        $this->teamMember = $teamMember;
        $this->name = $teamMember->name;
        $this->timezone = $teamMember->timezone;
    }

    public function saveMember()
    {
        $this->teamMember->update([
            'name' => $this->name,
            'timezone' => $this->timezone
        ]);

        $this->redirectRoute('index');
    }

    public function render(TeamMember $teamMember)
    {
        return view('livewire.team-member.update', compact('teamMember'));
    }
}
