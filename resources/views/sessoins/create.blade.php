<x-layout >
    <x-slot name="content">
        <section class=" px-6 py-8">
            <main class="max-w-lg mx-auto">
                <h1 >Log in</h1>
                <form method="POST" action="/login" class="mt-10">
                    @csrf{{--csrf zorgt ervoor dat er niet aan Cross Site Request Forgery kan worden gedaan (andere website stuurt request naar jou)   --}}

                    <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="email"
                    >
                        Email
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="email"
                           name="email"
                           id="email"
                           value="{{ old('email') }}"
                           required
                    >
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    </div>

                    <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password"
                    >
                        Password
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="password"
                           name="password"
                           id="password"
                           required
                    >
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    </div>

                    <div class="mb-6">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                    >
                        Login
                    </button>
                    </div>
                    {{-- @if($error->any())    
                        <ul>
                            @foreach ( $errors->all() as $error )
                                <li class="text-red-500 text-xs">{{ $error }}</li>

                            @endforeach
                        </ul>
                    @endif --}}
                </form>
            </main>
        </section>   
    </x-slot>     
</x-layout >