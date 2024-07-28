@extends('admin.layouts.master')

@section('title')
    Quản lý Danh mục
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h1 class="m-0">Danh sách</h1>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">
                    <div class="table-responsive">


                        <!-- Button thêm mới -->
                        <a href="{{ route('admin.suppliers.create') }}" class="btn btn-primary">Thêm mới</a>

                        <!-- Bảng danh sách -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            <a href="{{ route('admin.suppliers.show', $item->id) }}"
                                                class="btn btn-info">Xem</a>
                                            <a href="{{ route('admin.suppliers.edit', $item->id) }}"
                                                class="btn btn-warning">Sửa</a>
                                            <a href="{{ route('admin.suppliers.destroy', $item->id) }}"
                                                onclick="return confirm('Chắc chắn xóa không?');"
                                                class="btn btn-danger">Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Phân trang -->
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
