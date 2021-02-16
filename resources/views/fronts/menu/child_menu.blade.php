@if ($child_category->categories)
        @foreach ($child_category->categories as $childCategory)
            <li><a href="{{ route('category', ['slug' => $childCategory->slug]) }}">{{ $childCategory->title }}</a></li>
            @include('fronts.menu.child_menu', ['child_category' => $childCategory])
        @endforeach

@endif

