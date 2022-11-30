<x-app>

    <div class="p-6 text-center my-5">
        <h1 class="text-5xl font-medium mb-1">Hello, {{ $user->name }}</h1>
        <p class="text-2xl my-2"><span>@</span>{{ $user->username }}</p>
        <p class="text-center">You have posted {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} and recieved {{ $user->recievedLikes->count() }} {{ Str::plural('like', $user->recievedLikes->count()) }}</p>
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