@extends('admin.layout.layout')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Добавление предложения:</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{ route('hotdeals.store') }}" enctype="multipart/form-data">
            <div class="card-body">
                @csrf
                <div class="row">
                    <div class="col-ms-6">
                        <div class="form-group">
                            <label for="product_id">Product:</label>
                            <select class="form-control" name="product_id">
                                @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->title }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-ms-6">
                        <div class="form-group">
                            <label>Date:</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="timer"/>
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
    </div>
@endsection
