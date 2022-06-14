@props(['categories', 'category'])
<div class="site-filters">
    <div class="py-4">
        <form method="GET" action="/">
            <input class="border border-solid rounded-sm p-1" type="text" name="search" placeholder="Find a post"
                   value="{{ request('search') }}"/>
        </form>
    </div>

    <div class="category-picker">
        <x-dropdown>
            <x-slot name="trigger">
                <button>
                    {{ isset($category) ? ucwords($category->name) :  'Categories'}}
                </button>
            </x-slot>
            <a class="block px-4 py-2 text-sm" href="/">All categories</a>
            @foreach($categories as $category)
                <x-dropdown-item href="/categories/{{ $category->slug }}" :active='request()->is("categories/{$category->slug}")' >
                    {{ ucwords($category->name) }}
                </x-dropdown-item>
            @endforeach

        </x-dropdown>
    </div>
</div>
