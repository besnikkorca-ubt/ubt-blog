<x-layout :categories="$categories" :category="$category">
    <div class="py-8">
        <p>Posts that belong to this category</p>

        @foreach($category->posts as $post)
            <x-post-layout :post="$post" />
        @endforeach

        <a href="/" >Go back</a>
    </div>
</x-layout>
