@extends('admin.layout.layout')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Добавление продукта:</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
            <div class="card-body">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" placeholder="title" name="title"
                                   value="{{ old('title') }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label for="content">Content:</label>
                            <textarea class="form-control" rows="5" placeholder="content" name="content"
                                      id="content">{{ old('content') }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" rows="5" placeholder="description" name="description"
                                      id="description">{{ old('description') }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="category_id">Category:</label>
                        <select name="category_id" class="form-control" id="">
                            @include('admin.product.form_category')
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="img">Image: </label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="img" id="img"
                                       class="custom-file-input">
                                <label class="custom-file-label" for="img">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="galleries">Images galleries product:</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="galleries[]" multiple id="img" class="custom-file-input">
                                <label class="custom-file-label" for="galleries">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="text" class="form-control" id="price" placeholder="price" name="price"
                                   value="{{ old('price') }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="old_price">Old price:</label>
                            <input type="text" class="form-control" id="old_price" placeholder="old_price"
                                   name="old_price" value="{{ old('old_price') }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="modifications">Модификации</label>
                            <select name="modifications[]" id="modifications" class="select2" multiple="multiple" data-placeholder="Выбор модификаций" style="width: 100%;">
                                @foreach($modifications as $key => $modification)
                                    <option value="{{ $key }}">{{ $modification }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="related">related products</label>
                            <select name="related[]" id="related" class="select2-selection__rendered" multiple="multiple" data-placeholder="Выбор модификаций" style="width: 100%;">
                                @foreach($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->title }}</option>
                                @endforeach
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
