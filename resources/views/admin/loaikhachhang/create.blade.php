@extends('admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header">
            <h1>Product</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tạo loại khách hàng</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.loaikh.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label>Loại khách hàng</label>
                                    <input type="text" class="form-control" name="tenloaikhachhang"
                                        value="{{ old('loaikhachhang') }}">
                                </div>
                                <div class="form-group">
                                    <label>Mức áp dụng giá</label>
                                    <input type="text" class="form-control" name="apply_price"
                                        value="{{ old('apply_price') }}">
                                </div>

                                <button type="submmit" class="btn btn-primary">Create</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
