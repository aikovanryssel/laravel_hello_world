<x-layout >
    <x-slot name="content">
        
        @include('posts._header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            @if(isset($posts))
                <x-post-featured-card :post="$posts[0]"/>

                <div class="lg:grid lg:grid-cols-2">
                @foreach ( $posts->skip(1) as $post )
                    
                    <x-post-card :post="$post"/>
                @endforeach
                </div>
                <div class="block w-full">
                    {{ $posts->links() }}
                </div>
            @else
            
                <p class="text-center">No post atm..</p>
            
            @endif
            {{-- <div class="lg:grid lg:grid-cols-3">
                <x-post-card/>
                <x-post-card/>
                <x-post-card/>
            </div> --}}
        </main>
    </x-slot>
</x-layout>