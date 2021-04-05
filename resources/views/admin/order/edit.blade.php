@extends('admin.layout.layout')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Заказ № {{ $order->id }}:</h3>
        </div>

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                    <tr>
                                        <td>Номер заказа</td>
                                        <td>{{ $order->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Дата заказа</td>
                                        <td>{{ $order->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <td>Дата изменения</td>
                                        <td>{{ $order->updated_at }}</td>
                                    </tr>
                                    <tr>
                                        <td>Кол-во позиций в заказе</td>
                                        <td>{{ $order_products->count() }}</td>
                                    </tr>
                                    <tr>
                                        <td>Сумма заказа</td>
                                        <td>{{ $order->sum }} {{ $order->currency }}</td>
                                    </tr>
                                    <tr>
                                        <td>Имя заказчика</td>
                                        <td>{{ $order->user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Статус</td>
                                        <td>{{ $order->status ? 'Завершен' : 'Новый' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Страна</td>
                                        <td>{{ $order->country_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Регион/область</td>
                                        <td>{{ $order->region_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Город</td>
                                        <td>{{ $order->city_name }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <h3>Детали заказа</h3>
                    <div class="box">
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Наименование</th>
                                        <th>Кол-во</th>
                                        <th>Цена</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order_products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->title }}</td>
                                            <td>{{ $product->qty }}</td>
                                            <td>{{ $product->price }} {{ $order->currency }}</td>
                                        </tr>
                                    @endforeach
                                    <tr class="active">
                                        <td colspan="2">
                                            <b>Итого:</b>
                                        </td>
                                        <td><b>{{ $qty }}</b></td>
                                        <td><b>{{ $order->sum }} {{ $order->currency }}</b></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <form action="{{ route('order.update', ['id' => $order->id]) }}">
        @if($order->status)
                <input type="submit"  class="btn btn-primary" value="Вернуть на доработку">
                <input type="hidden" name="status" value="0">

        @else
                <input type="submit"  class="btn btn-success" value="Одобрить">
                <input type="hidden" name="status" value="1">

        @endif
    </form>
@endsection
