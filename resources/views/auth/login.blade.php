<x-app>
    <h1 class="font-medium normal-case text-2xl flex justify-center mb-5">
        Posty
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
        </svg>
    </h1>

    <h2 class="text-center text-xl font-medium mb-5">Login to your account</h2>
    @if (session('status'))
    <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('login') }}" method="POST">
        @csrf


        <div class="mb-4">
            <label for="email" class="sr-only">Email</label>
            <input type="email" name="email" id="email" placeholder="Your email" class="input input-lg bg-base-300 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

            @error('email')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter password" class="input input-lg bg-base-300 w-full p-4 rounded-lg @error('password') border-red-500 @enderror">

            @error('password')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-4">
            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember">Remember me</label>
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-primary w-full">Login</button>
        </div>
    </form>

    <div class="divider mt-5">OR</div>
    <p class="text-center">Don't have an account? <a class="link link-info" href="{{ route('register') }}">register</a></p>
</x-app>