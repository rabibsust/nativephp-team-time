<?php

namespace App\Http\Livewire\TeamMember;

use App\Models\TeamMember;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $team = TeamMember::get();
        return view('livewire.team-member.index', compact('team'));
    }

    public function deleteMember(TeamMember $teamMember)
    {
        $teamMember->delete();
    }
}
