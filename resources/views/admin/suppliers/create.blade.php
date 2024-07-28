@extends('admin.layouts.master')

@section('title')
    Thêm mới Danh mục
@endsection

@section('content')
    <form action="{{ route('admin.suppliers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- chống error --}}
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Address:</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Phone:</label>
                    <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-5">Submit</button>
    </form>
@endsection
