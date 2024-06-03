<div>
    <tr wire:key="{{ $post->id }}">
        <tr @class(['archived' => $post->is_archived])>
            <td>{{ $post->title }}</td>
            <td>{{ substr($post->content,0,15) }}</td>
            <td>
                <button type="button" wire:click="delete" wire:confirm="Are you sure you wanna do that ?"
                >Delete</button>

                <button type="button" wire:click="archive" wire:confirm="Are you sure you want to archive this post ?"
                >Archive</button>
            </td>
        </tr>
    </tr>
</div>