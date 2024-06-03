<div>

    <form wire:submit="add">
        <input type="text" wire:model.live="todo">
    </form>

    <span>{{ $todo }}</span><br>

    <button type="button" wire:click="add">Add</button>

    <ul>
        @foreach($todos as $todo)
        

            <li>{{ $todo }}</li>

        @endforeach
    </ul>


</div>
