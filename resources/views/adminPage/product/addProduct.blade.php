@extends('layout.adminLayout')

@section('page_title', 'Product')
@section('product_nav','active')
@section('product_nav_show','show')


@section('adminPanelMain')
<div class="container-fluid p-0">
    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">Add Products</h1>
    </div>
    <form action="{{ route('store.product') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">product</h5>
                    </div>
                    <div class="card-body">
                        <label class="mb-1">Product name <sup class="require-sup">*</sup></label>
                        <input type="text" class="form-control mb-3" name="product" value="{{ old('product') }}" placeholder="Product Name" required>

                        <label class="mb-1">Product Description <sup class="require-sup">*</sup></label>
                        <textarea name="disc" class="form-control mb-3" maxlength="250" rows="2" placeholder="Product description" required>{{ old('disc') }}</textarea>

                        <label class="mb-1">Product short Description <sup class="require-sup">*</sup></label>
                        <textarea name="short_disc" class="form-control mb-3" maxlength="100" rows="2" placeholder="Product short description" required>{{ old('short_disc') }}</textarea>
                        
                        <label class="mb-1">Select Category <sup class="require-sup">*</sup></label>
                        <select class="form-select mb-3" name="category" required="true">
                            <option value="">Select category type</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->category_id}}">{{ $category->category}}</option>
                            @endforeach
                        </select>
                        
                        <label class="mb-1">Price <sup class="require-sup">*</sup></label>
                        <input type="number" class="form-control mb-3" name="price" value="{{ old('price') }}" placeholder="Price" required>

                        <label class="mb-1">Discount Price</label>
                        <input type="number" class="form-control mb-3" name="discount_price" value="{{ old('discount_price') }}" placeholder="Discount Price">
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Product info</h5>
                    </div>
                    <div class="card-body">
                        <label class="mb-1">Available stoke</label>
                        <input type="number" class="form-control mb-3" name="availableStoke" value="{{ old('availableStoke') }}" placeholder="Available stoke">

                        <label class="mb-1">Product model</label>
                        <input type="text" class="form-control mb-3" name="product_model" value="{{ old('product_model') }}" placeholder="Product model">

                        <label class="mb-1">Brand</label>
                        <input type="text" class="form-control mb-3" name="brand" value="{{ old('brand') }}" placeholder="Brand">

                        <label class="mb-1">Warranty</label>
                        <input type="text" class="form-control mb-3" name="warranty" value="{{ old('warranty') }}" placeholder="Warranty">

                        <label class="mb-1"> Delivery option</label>
                        <select class="form-select mb-3" name="delivery" required="true">
                            <option value="0">Free delivery</option>
                            <option value="1" selected>Regular delivery</option>
                        </select>

                        <label class="mb-1">Color variant</label>
                        <div class="product-colors mb-3">
                            <div class="d-flex gap-2">
                                <input type="text" class="form-control" name="color[]" value="{{ old('color.0') }}"  placeholder="Color variant">
                                <div class="btn btn-primary add-new-color">
                                    <i class="align-middle" data-feather="plus"></i>
                                </div>
                            </div>
                        </div>

                        <label class="mb-1">Size variant</label>
                        <div class="product-size mb-3">
                            <div class="d-flex gap-2">
                                <input type="text" class="form-control" name="size[]" value="{{ old('size.0') }}" placeholder="Size variant">
                                <div class="btn btn-primary add-new-size">
                                    <i class="align-middle" data-feather="plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Image</h5>
                    </div>
                    <div class="card-body">
                        <p class=" mb-1">You can select up to 5 image</p>
                        <div class="selection-img">
                            <label for="product_img1" class="btn btn-success mb-1">Image 1</label>
                            <input id="product_img1" type="file" class="form-control mb-3 product_img dn" name="product_imgs[]" accept="image/*">
                            <div class="preview-container">
                            </div>
                        </div>
                        <div class="selection-img">
                            <label for="product_img2" class="btn btn-success mb-1">Image 2</label>
                            <input id="product_img2" type="file" class="form-control mb-3 product_img dn" name="product_imgs[]" accept="image/*">
                            <div class="preview-container">
                            </div>
                        </div>
                        <div class="selection-img">
                            <label for="product_img3" class="btn btn-success mb-1">Image 3</label>
                            <input id="product_img3" type="file" class="form-control mb-3 product_img dn" name="product_imgs[]" accept="image/*">
                            <div class="preview-container">
                            </div>
                        </div>
                        <div class="selection-img">
                            <label for="product_img4" class="btn btn-success mb-1">Image 4</label>
                            <input id="product_img4" type="file" class="form-control mb-3 product_img dn" name="product_imgs[]" accept="image/*">
                            <div class="preview-container">
                            </div>
                        </div>
                        <div class="selection-img">
                            <label for="product_img5" class="btn btn-success mb-1">Image 5</label>
                            <input id="product_img5" type="file" class="form-control mb-3 product_img dn" name="product_imgs[]" accept="image/*">
                            <div class="preview-container">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mx-5 my-3">Add Product</button>
        </div>
    </form>

</div>

<script>
    $(document).ready(function() {

        const addNewRow = (addButton, inputField, appendField) => {
            $(addButton).on('click', function(e) {

                const removeButton = document.createElement('button');
                removeButton.innerHTML = 'x';
                removeButton.className = 'btn btn-danger remove-button';
                removeButton.addEventListener('click', function() {
                    NewColor.remove();
                });

                const NewColorField = inputField;

                const NewColor = document.createElement('div');
                NewColor.className = 'd-flex gap-2 mt-2';
                NewColor.innerHTML = NewColorField;
                NewColor.appendChild(removeButton);

                $(appendField).append(NewColor);

            });
        }

        // add new color row
        const NewColorField =
            `<input type="text" class="form-control" name="color[]" placeholder="Color variant">`;

        addNewRow('.add-new-color', NewColorField, '.product-colors');

        // add new size row
        const NewSizeField =
            `<input type="text" class="form-control" name="size[]" placeholder="Size variant">`;

        addNewRow('.add-new-size', NewSizeField, '.product-size');




        // Image preview
        $('.product_img').on('change', function(e) {
            const previewContainer = $(this).closest('.selection-img').find('.preview-container');
            previewContainer.empty();
            for (let i = 0; i < e.target.files.length; i++) {
                const file = e.target.files[i];

                const reader = new FileReader();

                reader.onload = function(event) {
                    const removeButton = document.createElement('button');
                    removeButton.innerText = 'Remove';
                    removeButton.className = 'btn btn-danger remove-button';
                    removeButton.addEventListener('click', function() {


                        img.remove();
                        imgInfo.remove();
                        newSelection.remove();
                        removeButton.remove();
                    });

                    const imgInfoDiv =
                        `<input type="text" class="form-control mb-2" name="img_title[]" placeholder="Image title" required>
                    <textarea name="img_disc[]" class="form-control mb-2" maxlength="250" rows="2" id="product_desc" placeholder="Image short description" required></textarea>`;

                    const imgInfo = document.createElement('div');
                    imgInfo.className = 'img-info pt-3';
                    imgInfo.innerHTML = imgInfoDiv;
                    imgInfo.appendChild(removeButton);

                    const img = document.createElement('img');
                    img.src = event.target.result;
                    img.className = 'img-preview';


                    previewContainer.append(img).append(imgInfo);
                }

                reader.readAsDataURL(file);
            }
        });
    });
</script>
@endsection