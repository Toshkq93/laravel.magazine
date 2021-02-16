@extends('admin.layout.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Список валют</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <a href="{{ route('currencies.create') }}" class="btn btn-primary mb-3">Добавить валюту</a>
            <table class="table table-bordered">
                @if($currencies->count())
                <thead>
                <tr>
                    <th>#</th>
                    <th>title</th>
                    <th>code</th>
                    <th>value</th>
                    <th>base</th>
                    <th>actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($currencies as $currency)
                    <tr>
                        <td>{{ $currency->id }}</td>
                        <td>{{ $currency->title }}</td>
                        <td>{{ $currency->code }}</td>
                        <td>{{ $currency->value }}</td>
                        <td>
                            @if($currency->base)
                                <a href="" class="btn btn-success">Основная</a>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('currencies.edit', ['currency' => $currency->id]) }}"
                               class="btn btn-info btn-sm float-left mr-1">
                                <i class="fas fa-pencil-alt"></i>
                            </a>

                            <form
                                action="{{ route('currencies.destroy', ['currency' => $currency->id]) }}"
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
                        Валюты отсутствуют
                    </td>
                @endif
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">

        </div>
    </div>
@endsection
