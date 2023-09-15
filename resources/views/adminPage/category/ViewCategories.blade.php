@extends('layout.adminLayout')


@section('page_title','Category')
@section('category_nav','active')
@section('category_nav_show','show')



@section('adminPanelMain')

<div class="container-fluid p-0">
    <div class="mb-3">
        <h1 class="h3 d-inline align-middle"> Created Categories</h1>
    </div>
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h5 class="card-title mb-0">All Categories</h5>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th class="d-none d-xl-table-cell" style="width: 35%;">Description </th>
                            <th class="d-none d-xl-table-cell">Total product</th>
                            <th class="d-none d-md-table-cell">Total order</th>
                            <th class="d-none d-md-table-cell">Date</th>
                            <th class="d-none d-md-table-cell">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category_data as $key=>$category_data)
                        <tr>
                            <td> {{$key+1}} </td>
                            <td> <img src=" {{ asset('asset/image/category/'.$category_data->image) }} " alt="" width="50px"></td>
                            <td>{{ $category_data->category}}</td>
                            <td class="d-none d-xl-table-cell">{{ $category_data->disc}}</td>
                            <td class="d-none d-xl-table-cell"> {{ $category_data->total_item}} </td>
                            <td><span class="badge bg-success">{{ $category_data->total_order}}</span></td>
                            <td class="d-none d-md-table-cell"> {{ date('d-m-Y',strtotime($category_data->created_at)) }}</td>
                            <td class="d-none d-md-table-cell ">
                                <div class="item-action">
                                    <div>
                                        <a href=" {{ route('edit.category', ['id'=> $category_data->category_id]) }} " class="btn btn-primary">
                                            <i class="align-middle" data-feather="edit"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <form class="delete-form" action="{{ route('delete.category', ['id'=> $category_data->category_id]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="align-middle" data-feather="trash-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.delete-form').submit(function(e) {
            e.preventDefault();

            if (confirm('Are you sure you want to delete this item?')) {
                this.submit();
            }
        });
    })
</script>
@endsection