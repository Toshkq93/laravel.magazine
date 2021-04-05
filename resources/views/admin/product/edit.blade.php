@extends('admin.layout.layout')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Редактирование продукта {{ $product->title }}:</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{ route('products.update', ['product' => $product->id]) }}" enctype="multipart/form-data">
            <div class="card-body">
                @csrf
                @method('PUT')
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" placeholder="title" name="title" value="{{ $product->title }}">
                        </div>

                        <div class="form-group">
                            <label for="content">Content:</label>
                            <textarea class="form-control" rows="5" placeholder="content" name="content" id="content">{{ $product->content }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" rows="5" placeholder="description" name="description" id="description">{{ $product->description }}</textarea>
                        </div>

                    <div class="form-group">
                        <label for="category_id">Category:</label>
                        <select name="category_id" class="form-control" id="">
                            @include('admin.product.form_category')
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="img">Image: </label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="img" id="img"
                                       class="custom-file-input">
                                <label class="custom-file-label" for="img">Choose file</label>
                            </div>
                        </div>
                        <div><img src="{{ \App\Http\Helpers\ProductHelper::getImage($product->img) }}" alt="" class="img-thumbnail mt-2" width="200"></div>
                    </div>

                    <div class="form-group">
                        <label for="galleries">Images galleries product:</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="galleries[]" multiple id="img" class="custom-file-input">
                                <label class="custom-file-label" for="galleries">Choose file</label>
                            </div>
                        </div>
                        <div>
                            @foreach($galleries as $image)
                                <img src="{!! \App\Http\Helpers\ProductHelper::getImage($image->img) !!}" alt="">
                            @endforeach
                        </div>
                    </div>

                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="text" class="form-control" id="price" placeholder="price" name="price" value="{{ $product->price }}">
                        </div>

                        <div class="form-group">
                            <label for="old_price">Old price:</label>
                            <input type="text" class="form-control" id="old_price" placeholder="old_price" name="old_price" value="{{ $product->old_price }}">
                        </div>

                        <div class="form-group">
                            <label for="status">
                                <input type="checkbox" name="status" @if($product->status) checked @endif>
                            Status
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="bestseller">
                                <input type="checkbox" name="bestseller" @if($product->bestseller) checked @endif>
                            Bestseller
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="modifications">Modification</label>
                            <select name="modifications[]" id="modifications" class="select2" multiple="multiple" data-placeholder="Выбор модификаций" style="width: 100%;">
                                @foreach($modifications as $key => $modification)
                                    <option value="{{ $key }}" @if(in_array($key, $product->modifications->pluck('id')->all())) selected @endif>{{ $modification }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="related">Related</label>
                            <select name="related[]" id="related" multiple="multiple" data-placeholder="Выбор связей" style="width: 100%;">
                                @foreach($products as $key => $prod)
                                    <option value="{{ $prod->id }}" @if(in_array($key, $related->pluck('id')->all())) selected @endif>{{ $prod->title }}</option>
                                @endforeach
                            </select>
                        </div>

            </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
    </div>
@endsection
<script>
</script>
