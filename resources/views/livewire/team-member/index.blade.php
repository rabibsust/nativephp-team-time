<div>
    <div class="flex items-center justify-between mb-10">
        <h1 class="text-xl font-bold">My Team</h1>
        <a href="{{route('create')}}" type="button"
           class="rounded-full bg-pink-600 px-2 py-1 text-xs font-bold text-white shadow hover:bg-pink-500">Add Team
            Mate</a>
    </div>
    <div wire:poll>
        @foreach($team as $teamMember)
        <div wire:key="{{ $teamMember->id }}" class="my-2 flex items-center justify-between">
            <div>
                <p class="text-xs font-bold text-sky-500">{{$teamMember->name}}</p>
                <p class="text-lg">{{now()->tz($teamMember->timezone)->format('h:i:s A')}} <span
                    class="text-xs text-gray-500">- {{$teamMember->timezone}}</span></p>
            </div>
            <div class="flex items-center">
                <a href="{{route('edit', ['teamMember' => $teamMember])}}">
                    <span class="sr-only">Edit</span>
                    <x-heroicon-m-pencil class="w-5 h-5 mr-3 hover:text-pink-500 transition-all duration-300" />
                </a>
                <button wire:click="deleteMember({{$teamMember}})">
                    <x-heroicon-m-trash class="w-5 h-5 mr-3 hover:text-red-600 transition-all duration-300" />
                </button>
            </div>
        </div>
        @endforeach
    </div>
</div>
