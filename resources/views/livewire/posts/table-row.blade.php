<tr class="{{ $post->is_archived ? 'bg-gray-300 text-gray-500' : ''}}">
    <td class="border px-6 py-2 text-center">{{ $post->id }}</td>
    <td class="border px-6 py-2 text-center">{{ $post->title }}</td>
    <td class="border px-6 py-2 text-center">{{ $post->content }}</td>
    <td class="border px-6 py-2 text-center">{!! $post->is_archived ? 'Archived' : '' !!}
        <button wire:click='archived' onclick="return confirm('Are you sure?')"
        class="{{ $post->is_archived ? 'hidden' : 'text-red-600 underline' }}">Archived</button>
    </td> 
</tr>