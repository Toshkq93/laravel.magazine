@extends('admin.layout.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Список горячих предложений</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <a href="{{ route('hotdeals.create') }}" class="btn btn-primary mb-3">Добавить предложение</a>
            <table class="table table-bordered">
                @if($hotdeals->count())
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>title product</th>
                        <th>description product</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hotdeals as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->product->title }}</td>
                            <td>{{ $product->product->description }}</td>
                            <td>
                                <a href="{{ route('hotdeals.edit', ['hotdeal' => $product->id]) }}"
                                   class="btn btn-info btn-sm float-left mr-1">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>

                                <form
                                    action="{{ route('hotdeals.destroy', ['hotdeal' => $product->id]) }}"
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
                        Предложения отсутствуют
                    </td>
                @endif
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">

        </div>
    </div>
@endsection
