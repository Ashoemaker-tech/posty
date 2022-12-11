<x-app>
    <x-post :post="$post" />
    @auth
        <form action="{{ route('comment', $post) }}" method="post" class="mb-4">
            @csrf
            <div class="my-5">
                <label for="body" class="sr-only">Body</label>
                <textarea name="body" id="body" cols="30" rows="4" class="textarea w-full text-accent-content p-4 @error('body') border-red-500 @enderror" placeholder="commenting on {{ $post->user->name }}'s post"></textarea>

                @error('body')
                <p class="text-red-500 text-sm mt-2">
                    {{ $message }}
               </p>
                @enderror
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Comment</button>
            </div>
        </form>
    @endauth
</x-app>