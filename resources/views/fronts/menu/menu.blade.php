<ul>
    @foreach ($categories as $category)
        <li class="@if($category->children->count()) arrow-plus @endif">
            <a @if(!$category->children->count()) href="{{ route('category', ['slug' => $category->slug]) }}" @endif>{{ $category->title }}</a>
            @if($category->children->count())
        <div class="cat-left-drop-menu">
            @foreach ($category->children as $childCategory)
                <div class="cat-left-drop-menu-left">
                <a class="menu-item-heading">{{ $childCategory->title }}</a>
                    <ul>
                @include('fronts.menu.child_menu', ['child_category' => $childCategory])
                    </ul>
                </div>
            @endforeach
        </div>
                @endif
        </li>
    @endforeach

</ul>
{{--@if($category->count() > 7)
            <li class=" rx-parent">
                <a class="rx-default">
                    More categories <span class="cat-thumb  fa fa-plus"></span>
                </a>
                <a class="rx-show">
                    close menu <span class="cat-thumb  fa fa-minus"></span>
                </a>
            </li>
        @endif--}}
