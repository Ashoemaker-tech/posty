@props(['comment' => $comment])
<div class="py-2 ">
    <div class="border-l-2 border-zinc-700 px-6">
        <div class="mb-4">
            <a href="{{ route('users.posts', $comment->user) }}" class="font-bold">{{ $comment->user->name }}</a><span class="text-primary-content text-sm"> @</span><span class="text-primary-content text-sm">{{ $comment->user->username }}</span> <span class="text-gray-300 text-sm">{{ $comment->created_at->diffForHumans() }}</span> 
        </div>
        {{ $comment->body }}
        <div class="mt-2">
            @can('delete', $comment)
                <div class="flex">
                    <a href="{{ route('comment.edit', $comment) }}" class="text-base-content mr-2 cursor-pointer">Edit</a>
                    <form action="{{ route('comments.destroy', $comment) }}" method="post" class="mb-4">
                        @csrf
                        @method('Delete', $comment)
                        <button type="submit" class="text-base-content cursor-pointer">Delete</button>
                    </form>
                </div>
            @endcan
        </div>
    </div>
    <div class="divider"></div>
</div>


