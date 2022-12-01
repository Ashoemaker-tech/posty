<x-app>
    @auth
    <form action="{{ route('posts') }}" method="post" class="mb-4">
        @csrf
        <div class="my-5">
            <label for="body" class="sr-only">Body</label>
            <textarea name="body" id="body" cols="30" rows="4" class="textarea w-full text-accent-content p-4 @error('body') border-red-500 @enderror" placeholder="Let's hear it!"></textarea>

            @error('body')
            <p class="text-red-500 text-sm mt-2">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </div>
    </form>
    @endauth

    @if ($posts->count())
    @foreach ($posts as $post)
    <x-post :post="$post" />
    @endforeach
    <div class="mt-6 p-4 ">
        {{ $posts->links() }}
    </div>
    @else
    <p>There are no posts.</p>
    @endif

</x-app>