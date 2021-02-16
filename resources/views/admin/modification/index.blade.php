@extends('admin.layout.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Список модификаций продуктов</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <a href="{{ route('modifications.create') }}" class="btn btn-primary mb-3">Добавить модификацию</a>
            <table class="table table-bordered">
                @if($modifications->count())
                <thead>
                <tr>
                    <th>#</th>
                    <th>title</th>
                    <th>price</th>
                    <th>action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($modifications as $modification)
                    <tr>
                        <td>{{ $modification->id }}</td>
                        <td>{{ $modification->title }}</td>
                        <td>{{ $modification->price }}</td>
                        <td>
                            <a href="{{ route('modifications.edit', ['modification' => $modification->id]) }}"
                               class="btn btn-info btn-sm float-left mr-1">
                                <i class="fas fa-pencil-alt"></i>
                            </a>

                            <form
                                action="{{ route('modifications.destroy', ['modification' => $modification->id]) }}"
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
                        Модификации отсутствуют
                    </td>
                @endif
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">

        </div>
    </div>
@endsection
