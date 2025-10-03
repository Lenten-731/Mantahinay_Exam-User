<table class="table-auto w-full border">
    <thead class="bg-gray-500 text-white">
        <tr>
            <th class="px-6 py-3 text-center front-medium uppercase tracking-winder">ID</th>
            <th class="px-6 py-3 text-center front-medium uppercase tracking-winder">Title</th>
            <th class="px-6 py-3 text-center front-medium uppercase tracking-winder">Content</th>
            <th class="px-6 py-3 text-center front-medium uppercase tracking-winder">Action</th>
            
        </tr>
    </thead>        
    <tbody>
        @foreach ($posts as $post)
                <livewire:posts.table-row :post="$post" :key="$post->id"/>
        @endforeach
   </tbody>
</table>