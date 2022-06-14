<x-layout :categories="$categories">
    <div id="page" class="site-page">
        <div id="content" class="site-content">
            <p>test 123</p>
            @foreach($posts as $post)
                <x-post-layout :post="$post" />
            @endforeach
            @if(count($posts) === 0)
                <article class="my-4">
                    <header class="entry-header">
                        <h2 class="text-xl font-medium">
                            No posts found!
                        </h2>
                    </header>
                </article>
            @endif
        </div>
    </div>
</x-layout>
