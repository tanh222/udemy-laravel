<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Trang chủ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdownMenuLink"
                           role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Danh mục
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Váy</a></li>
                            <li><a class="dropdown-item" href="#">Quần</a></li>
                            <li><a class="dropdown-item" href="#">Áo</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" aria-current="page" href="#">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Liên hệ </a>
                    </li>
                </ul>
                <span class="navbar-text">
          <button type="submit" class="btn btn-primary" name='dangxuat'> Đăng xuất </button>
          </span>
            </div>
        </div>
    </nav>
</div>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://giaythethao.giaodienwebmau.com/wp-content/uploads/2019/10/bigbanner-1.jpg"
                 class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block"></div>
        </div>
        <div class="carousel-item">
            <img src="https://giaythethao.giaodienwebmau.com/wp-content/uploads/2019/10/banner-1.jpg"
                 class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block"></div>
        </div>
        <div class="carousel-item">
            <img src="https://giaythethao.giaodienwebmau.com/wp-content/uploads/2019/10/slider_2.jpg"
                 class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block"></div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container mt-3">
    <h1 class="text-center mt-5 ">Quản Lý Sản Phẩm</h1>
    <div class="btn btn-info">
        <a href="{{route('createProduct')}}">Thêm mới</a>
    </div>
    <table class="table table-bordered border-dark">
        <thead>
        <tr class="text-center ">
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Mô tả</th>
            <th>Giá</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $row)
{{--            @dump($row)--}}
            <tr class="btn-reveal-trigger">
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->describe}} </td>
                <td>{{$row->price}}</td>
                <td class="align-middle d-flex text-center">
                    <a class="dropdown-item text-danger" href="{{ route('updateProduct', ['id' => $row->id]) }}">Sửa</a>
                    <a class="dropdown-item text-danger" href="{{ route('deleteProduct', ['id' => $row->id]) }}">Xóa</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
