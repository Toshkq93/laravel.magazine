@extends('admin.layout.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Список заказов</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                @if($orders->count())
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>user</th>
                        <th>status</th>
                        <th>result sum</th>
                        <th>date created</th>
                        <th>date update</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr  class="@if($order->status) ?? 'success' @endif" >
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>{{ $order->status }}</td>
                            <td>{{ $order->sum . ' ' . $order->currency}}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->updated_at }}</td>

                            <td>
                                <a href="{{ route('order.edit', ['id' => $order->id]) }}"
                                   class="btn btn-info btn-sm float-left mr-1">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form
                                    action="{{ route('order.delete', ['id' => $order->id]) }}"
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
                        Заказы отсутствуют
                    </td>
                @endif
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">

        </div>
    </div>
@endsection
