<x-app>
    <div class="hero min-h-screen bg-base-200 my-32 lg:my-5">
        <div class="flex flex-col align-center lg:flex-row">
            <div class="text-center lg:text-left lg:my-auto mb-5">
                <h1 class="text-5xl font-bold">See What All The Posts Are About!</h1>
                <p class="py-6 lg:pr-6">Posty is a short text social media platform for people from all over to connect and chat with each other. Posty is built with the PHP framework Laravel and is connected to a MySQL database. The beautiful styling is designed with Tailwindcss & DaisyUI. Thank you for checking out my project! I hope to see you post about it!</p>
                <a href="{{ route('register') }}" class="btn btn-primary">Register Today!</a>
            </div>
            <div class="lg:w-2/3 mx-auto">
                <div class="mockup-phone">
                    <div class="camera"></div>
                    <div class="display">
                        <div class="artboard artboard-demo bg-base-200 phone-1">
                            <div class="navbar bg-base-100 pt-5">
                                <a class="btn btn-ghost normal-case text-xl" href="{{ route('home') }}">
                                    Posty
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                                    </svg>
                                </a>
                            </div>
                            <div class="chat chat-start mr-auto mt-auto">
                                <div class="chat-header">
                                    Ian Influencer
                                    <time class="text-xs opacity-50">12:45</time>
                                </div>
                                <div class="chat-bubble">Posty is the best!</div>
                                <div class="chat-footer opacity-50">
                                    Delivered
                                </div>
                            </div>
                            <div class="chat chat-end ml-auto mb-5">
                                <div class="chat-header">
                                    Paul Poster
                                    <time class="text-xs opacity-50">12:46</time>
                                </div>
                                <div class="chat-bubble">I completely agree!</div>
                                <div class="chat-footer opacity-50">
                                    Seen at 12:46
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>