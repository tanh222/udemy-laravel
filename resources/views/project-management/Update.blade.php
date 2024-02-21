<!DOCTYPE html>
<html lang="en">

<head>
    <title>THÊM SẢN PHẩM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div class="container mt-2">
    <div class="row mt-3 mb-3 ">
        <div class="col-sm">
            <div>
                <p class="h2 text-center text-uppercase text-dark">Sửa thông tin</p>
                <form method="POST" action="{{ route('updateCustom',['id' => $product->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 mt-3">
                        <label for="text">Tên sản phẩm</label>
                        <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" name="name" value="{{$product->name}}">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="text">Mô tả</label>
                        <input type="text" class="form-control" placeholder="Nhập mô tả"name="describe"value="{{$product->describe}}">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="number"> Giá</label>
                        <input type="number" class="form-control" placeholder="Nhập giá"name="price" value="{{$product->price}}">
                    </div>
                    <button type="submit" class="btn btn-info">Lưu</button>
                    <button type="submit" class="btn btn-info">Hủy</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
