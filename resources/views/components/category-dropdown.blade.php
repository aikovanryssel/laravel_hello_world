<div>
    <x-dropdown>
        <x-slot name="trigger">
            <button class="p-2 ">
                <strong>
                    {{ isset($currentCategory) ? ucwords($currentCategory->name) : "Categories" }}
                </strong>
            </button>
        </x-slot>
        <x-dropdownitem href="/?{{ http_build_query(request()->except('category','page')) }}" :active="request()->routeIs('home')">All</x-dropdownitem>
        @foreach ($categories as $category)   
            <x-dropdownitem 
            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category','page')) }}" 
            :active='request()->is("categories/{$category->slug}")'> 
                {{ ucwords($category->name) }}
            </x-dropdownitem>
            
        @endforeach
    </x-dropdown>
</div>