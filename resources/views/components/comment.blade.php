@props(['comment' => $comment])
<div class="py-2 ">
    <div class="border-l-2 border-zinc-700 px-6">
        <div class="mb-4">
            <a href="{{ route('users.posts', $comment->user) }}" class="font-bold">{{ $comment->user->name }}</a><span class="text-primary-content text-sm"> @</span><span class="text-primary-content text-sm">{{ $comment->user->username }}</span> <span class="text-gray-300 text-sm">{{ $comment->created_at->diffForHumans() }}</span> 
        </div>
        {{ $comment->body }}
        <div class="mt-2">
            @auth
                <label for="my-modal-2" class="text-base-content mr-2 cursor-pointer">Edit</label>
                <label for="my-modal-3" class="text-base-content cursor-pointer">Delete</label>
            @endauth
        </div>
    </div>
    <div class="divider"></div>
</div>

