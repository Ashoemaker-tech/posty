@props(['comment' => $comment])
<div class="py-2 ">
    <div class="border-l-2 border-zinc-700 px-6">
        <div class="mb-4">
            <a href="{{ route('users.posts', $comment->user) }}" class="font-bold">{{ $comment->user->name }}</a><span class="text-primary-content text-sm"> @</span><span class="text-primary-content text-sm">{{ $comment->user->username }}</span> <span class="text-gray-300 text-sm">{{ $comment->created_at->diffForHumans() }}</span> 
        </div>
        {{ $comment->body }}
        <div class="mt-2">
            @auth
                <label for="my-modal-2 " class="text-base-content mr-2 cursor-pointer">Edit</label>
                <label for="my-modal-3" class="text-base-content cursor-pointer">Delete</label>
            @endauth
        </div>
    </div>
    <div class="divider"></div>
</div>


<!-- Delete Comment Modal -->
<input type="checkbox" id="my-modal-3" class="modal-toggle" />
<label for="my-modal-4" class="modal cursor-pointer">
<label class="modal-box relative" for="">
<label for="my-modal-3" class="btn btn-error btn-xs bg-red-500 text-white border-red-500 btn-circle absolute right-4 top-4">✕</label>
<h1 class="font-medium normal-case text-2xl flex justify-center mb-5">
            Posty
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
            </svg>
        </h1>

    <h3 class="text-lg font-bold text-center text-red-500">Delete Comment?</h3>
    <p class="py-6 text-center">This comment will be forever lost!</p>
        <form action="{{ route('posts.comments', $comment) }}" method="post">
            @csrf
            @method('DELETE')
            <div class="flex justify-center align-center">
                <button class="btn btn-error bg-red-500 text-white border-red-500 gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                    Delete
                </button>
            </div>
        </form>
</label>
</label>
