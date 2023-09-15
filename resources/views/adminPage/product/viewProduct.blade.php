@extends('layout.adminLayout')

@section('page_title', 'Product')
@section('product_nav','active')
@section('product_nav_show','show')

@section('adminPanelMain')
<div class="container-fluid p-0">
    <div class="mb-3">
        <h1 class="h3 d-inline align-middle"> Created Products</h1>
    </div>
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h5 class="card-title mb-0">All Products</h5>
                </div>
                <div class="overflow-x-scroll">
                    <table class="table table-hover my-0 product-table">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Product ID</th>
                                <th>Created date</th>
                                <th>Name</th>
                                <th >Category </th>
                                <th>Product model </th>
                                <th>Brand</th>
                                <th>Color</th>
                                <th>Size</th>
                                <th>Warranty</th>
                                <th>Delivery option</th>
                                <th>Available stoke</th>
                                <th>Price</th>
                                <th>Discount price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product_data as $key=>$data)
                            <tr>
                                <td> {{$key+1}} </td>
                                <td> <span class="badge bg-primary">{{$data->product_id}}</span></td>
                                <td>{{ date('d-m-y', strtotime($data->created_at))}}</td>
                                <td>{{ $data->name}}</td>
                                <td> <span class="badge bg-success">{{ $data->category}}</span></td>
                                <td> {{ $data->product_model_number}} </td>
                                <td>{{ $data->brand}}</td>
                                <td>
                                    @foreach (json_decode($data->color) as $data_color)
                                    {{$data_color}}
                                    @endforeach
                                </td>
                                <td>
                                    @foreach (json_decode($data->size) as $data_size)
                                    {{$data_size}}, 
                                    @endforeach
                                </td>
                                <td> {{ $data->warranty }}</td>
                                <td> {{ $data->delivery_cost }}</td>
                                <td> {{ $data->available_stoke }}</td>
                                <td> {{ $data->price }}</td>
                                <td> {{ $data->discount_price }}</td>
                                <td>
                                    <div class="item-action">
                                        <div>
                                            <a href=" {{ route('show.product', ['id'=> $data->product_id]) }} " class="btn btn-info">
                                                <i class="align-middle" data-feather="eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a href=" {{ route('edit.product', ['id'=> $data->product_id]) }} " class="btn btn-primary">
                                                <i class="align-middle" data-feather="edit"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <form class="delete-form" action="{{ route('delete.product', ['id'=> $data->category]) }}" method="post">
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