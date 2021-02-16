@foreach($categories as $category)
    <option value="{{ $category->id }}"

            @isset ($product->category_id)

            @if ($product->category_id == $category->id)
            selected style="background: #0b5ed7"
            @endif

        @endisset

            @if ($category->children->count())
            disabled
            @endif
    >
        {{ $delimiter }}{{ $category->title }}
    </option>

    @isset ($category->children)
        @include('admin.product.form_category', [
            'categories' => $category->children,
            'delimiter' => ' - ' . $delimiter
        ])
    @endisset
@endforeach
