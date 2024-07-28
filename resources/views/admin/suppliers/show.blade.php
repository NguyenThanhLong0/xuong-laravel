@extends('admin.layouts.master')

@section('title')
Xem chi tiết danh mục sản phẩm: {{ $model->name }}
@endsection

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>TRƯỜNG</th>
            <th>GIÁ TRỊ</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($model->toArray() as $key => $value)
        <tr>
            <td>{{ $key }}</td>
            <td>{!! $value !!}</td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection