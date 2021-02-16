@extends('admin.layout.layout')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Редактирование категории:</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{ route('currencies.update', ['currency' => $currency->id]) }}">
            <div class="card-body">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" placeholder="title" name="title" value="{{ $currency->title }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="code">Code:</label>
                            <input type="text" class="form-control" id="code" placeholder="code" name="code" value="{{ $currency->code }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="value">Value:</label>
                            <input type="text" class="form-control" id="value" placeholder="value" name="value" value="{{ $currency->value }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="base">Base:</label>
                            <select class="form-control" name="base" id="base">
                                @if($currency->base)
                                    <option value="1" selected>Основная</option>
                                    <option value="0">Не основная</option>
                                @else
                                    <option value="0" selected>Не основная</option>
                                    <option value="1">Основная</option>
                                @endif
                            </select>
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
