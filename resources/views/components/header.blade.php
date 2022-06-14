@php
    $options = [
        [
            'label' => 'Home',
            'value' => '/'
        ],
        [
            'label' => 'About us',
            'value' => '/about-us'
        ],
        [
            'label' => 'Contact us',
            'value' => '/contact-us'
        ],
        [
            'label' => 'Post an article',
            'value' => '/post-an-article'
        ],
];
@endphp

<header class="site-header">
    <div class="flex flex-col items-center">
        <h1 class="text-2xl font-semibold">UBT blog</h1>
        <div class="my-8 flex">
            <nav>
                <ul class="flex">
                    @foreach($options as $option)
                        <li class="mx-4  hover:scale-105">
                            <a href="{{ $option['value'] }}">
                                {{ $option['label']  }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
    <x-filters :categories="$categories" :category="$category" />
</header>
