<article>
    <div>
        <header>
            <h3 class="font-bold">
                {{ $comment->author->name }}
            </h3>

            <p>
                Posted: {{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}
            </p>
        </header>

        <p>
            {{ $comment->body }}
        </p>
    </div>
</article>
