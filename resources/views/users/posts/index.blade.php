<x-app>
    <div class="p-6">
        <h1 class="text-2xl font-medium mb-1">{{ $user->name }}</h1>
        <p class="my-2"><span>@</span>{{ $user->username }}</p>
        <p>Posted {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} and recieved {{ $user->recievedLikes->count() }} {{ Str::plural('like', $user->recievedLikes->count()) }}</p>
    </div>
    <div class="bg-base-100 p-6 rounded-lg">
        @if ($posts->count())
        @foreach ($posts as $post)
        <x-post :post="$post" />
        @endforeach

        {{ $posts->links() }}
        @else
        <p>{{ $user->name }} does not have any posts.</p>

        @endif
    </div>
</x-app>