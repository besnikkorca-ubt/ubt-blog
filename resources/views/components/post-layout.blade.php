<article class="my-4">
    <header class="entry-header">
        <h2 class="text-xl mb-2 font-medium"><a href="blog/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
    </header>
    <div class="entry-content">
        {!! $post->body !!}
    </div>
</article>
