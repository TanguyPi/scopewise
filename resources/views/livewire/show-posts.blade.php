<div>
    <h2>Posts</h2>


    Test title: <span x-text="$wire.title"></span>

    <button x-on:click="$wire.title = '' "> Clear title</button>

    <form wire:submit="save">

        <label>Title</label>
        <input type="text" wire:model="title">
        @error('title') <em>{{ $message }}</em>@enderror

        <label>Content</label>
        <textarea wire:model="content"></textarea>
        <small x-text="$wire.content.length"></small>


        <button type="submit">Save</button>

    </form>


    
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
            </tr>
        </thead>
   
    <tbody>

        @foreach($posts as $post)

            <!-- Nesting component -->
            <livewire:post-row :post="$post">
        
        @endforeach

    </tbody>

     </table>

</div>
