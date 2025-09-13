<div>
    <h2 class="text-xl font-bold mb-4">Users Table</h2>

    <table class="table-auto border-collapse border border-gray-400 w-full">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Email</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td class="border px-4 py-2">{{ $user->id }}</td>
                    <td class="border px-4 py-2">{{ $user->name }}</td>
                    <td class="border px-4 py-2">{{ $user->email }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="border px-4 py-2 text-center">No users found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
