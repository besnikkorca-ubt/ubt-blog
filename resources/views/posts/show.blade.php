<x-layout>
    <article class="my-4">
        <header class="entry-header">
            <h2 class="text-xl mb-2 font-medium">{{ $post->title }}</h2>
            <div class="bypass">
                <p>Author: {{ $post->user->name }}</p>
                <p><a href="/categories/{{ $post->category->slug }}">Category: {{ $post->category->name }}</a></p>
            </div>
        </header>
        <div class="entry-content">
            {!! $post->body  !!}
        </div>
    </article>

    @include('posts._comment-form')
    @foreach($post->comments as $comment)
        <x-post-comment :comment="$comment" />
    @endforeach

    <a href="/">Go back</a>
</x-layout>

