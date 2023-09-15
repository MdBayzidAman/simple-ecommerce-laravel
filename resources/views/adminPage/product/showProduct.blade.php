@extends('layout.adminLayout')

@section('page_title', 'Product')
@section('product_nav','active')
@section('product_nav_show','show')

@section('adminPanelMain')
<div class="container-fluid p-0">
    <div class="mb-3">
        <h1 class="h3 d-inline align-middle"> {{ $product_data->name}}</h1>
    </div>
    <div class="row">
        <div class="col-12 col-lg-9 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <!-- <div class="card-header">
                    <h5 class="card-title mb-0">All Products</h5>
                </div> -->
                <div class="card">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <div class="card-body">
                                <h5 class="card-title ">Created at: {{ date('d-m-Y', strtotime($product_data->created_at)) }} </h5>

                                <h5 class="card-title ">
                                    Category:
                                    <span class="badge bg-success"> {{$product_data->category}} </span>
                                </h5>

                                <h5 class="card-title mt-4 mb-0">Short description:</h5>
                                <p class="card-text"> {{$product_data->short_desc}} </p>

                                <h5 class="card-title mb-0">Description</h5>
                                <p class="card-text"> {{$product_data->desc}} </p>

                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Price: </h5>
                                <p class="card-text"> {{$product_data->price}} </p>
 
                                <h5 class="card-title mb-0">discount price: </h5>
                                <p class="card-text"> {{$product_data->discount_price}} </p>
 
                                <h5 class="card-title mb-0">Product model: </h5>
                                <p class="card-text"> {{$product_data->product_model_number}} </p>
 
                                <h5 class="card-title mb-0">Brand: </h5>
                                <p class="card-text"> {{$product_data->brand}} </p>
 
                                <h5 class="card-title mb-0">Color: </h5>
                                <p class="card-text">
                                    @foreach (json_decode($product_data->color) as $color_data)
                                        {{$color_data}},
                                    @endforeach
                                </p>
 
                                <h5 class="card-title mb-0">Size: </h5>
                                <p class="card-text">
                                    @foreach (json_decode($product_data->size) as $size_data)
                                        {{$size_data}},
                                    @endforeach
                                </p>
 
                                <h5 class="card-title mb-0">Warranty: </h5>
                                <p class="card-text"> {{$product_data->warranty}} </p>
 
                                <h5 class="card-title mb-0">delivery option: </h5>
                                <p class="card-text"> {{$product_data->delivery_cost}} </p>

                                <h5 class="card-title mb-0">Available stoke: </h5>
                                <p class="card-text"> {{$product_data->available_stoke}} </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-xxl-3">
            @foreach (json_decode($product_data->image) as $img_data)
            <div class="card">
                <img src="{{ asset('asset/image/product/'.$img_data->img) }}" alt="" class="card-img-top">
                <div class="card-header">
                    <h4 class="card-title"> {{$img_data->title}} </h4>
                </div>
                <div class="card-body pt-0">
                    <p class="card-text"> {{$img_data->disc}} </p>
                </div>
            </div>
            @endforeach
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