<div class="comment-form my-8">
    <h2>Comment</h2>
    <form method="POST" action="/blog/{{ $post->slug }}/comments" class="my-2">
        @csrf

        <textarea
            name="body"
            class="w-full text-sm focus:outline-none focus:ring"
            rows="5"
            placeholder="Do you want to add something?"
        ></textarea>

        <button class="bg-blue-500 text-white py-2 px-4 rounded-full my-2">Submit</button>
    </form>
</div>

