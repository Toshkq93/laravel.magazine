@extends('admin.layout.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Список продуктов</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Добавить продукт</a>
            <table class="table table-bordered">
                @if($products->count())
                <thead>
                <tr>
                    <th>#</th>
                    <th>title</th>
                    <th>slug</th>
                    <th>description</th>
                    <th>content</th>
                    <th>category</th>
                    <th>price</th>
                    <th>old price</th>
                    <th>status</th>
                    <th>bestseller</th>
                    <th>raiting</th>
                    <th>action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->slug }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->content }}</td>
                        <td>{{ $product->category->title }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->old_price }}</td>
                        <td>
                            @if($product->status)
                                <a href="" class="btn btn-success">Опубликован</a>
                            @else
                                <a href="" class="btn btn-danger">Не опубликован</a>
                            @endif
                        </td>
                        <td>
                            @if($product->bestseller)
                                <a href="" class="btn btn-info">Бестселлер</a>
                            @endif
                        </td>
                        <td>{{ $product->raiting }}</td>
                        <td>
                            <a href="{{ route('products.edit', ['product' => $product->id]) }}"
                               class="btn btn-info btn-sm float-left mr-1">
                                <i class="fas fa-pencil-alt"></i>
                            </a>

                            <form
                                action="{{ route('products.destroy', ['product' => $product->id]) }}"
                                method="post" class="float-left">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Подтвердите удаление')">
                                    <i
                                        class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                @else
                    <td>
                        Продукты отсутствуют
                    </td>
                @endif
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">

        </div>
    </div>
@endsection
