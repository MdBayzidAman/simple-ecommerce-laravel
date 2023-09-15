@extends('layout.adminLayout')

@section('page_title','Category')
@section('category_nav','active')
@section('category_nav_show','show')


@section('adminPanelMain')

<div class="container-fluid p-0">
    <div class="mb-3">
        <h1 class="h3 d-inline align-middle"> Products Categories</h1>
    </div>
    <div class="row">
        <div class="col-12 col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Add Category</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('store.category') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="category_parent" class="mb-1">Select Parent Category</label>
                        <select class="form-select mb-3" name="parent" required="true">
                            <option>Select category type</option>
                            <option value="0">New</option>
                            @foreach ($first_categories as $first_category)
                            <option value="{{$first_category->category_id}}">{{ $first_category->category}}</option>
                            @endforeach
                        </select>
                        <label for="category_name" class="mb-1">Category name</label>
                        <input  type="text" class="form-control mb-3" id="category_name" name="category" placeholder="Category Name" required>
                        <label for="category_desc" class="mb-1">Category Description</label>
                        <textarea name="disc" class="form-control mb-3" maxlength="250" rows="2" id="category_desc" placeholder="Category description" required></textarea>
                        <label for="category_img" class="mb-1">Select Category Image</label>
                        <input  id="category_img" type="file" class="form-control mb-3" name="category_img" placeholder="Category Name">
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Folder by Category</h5>
                </div>
                <div class="card-body">
                    <div class="accordion-menu">
                        <ul class="list-group">

                            <?php
                            function renderCategories($parentId)
                            {
                                if (App\Models\category::where('parent', $parentId)->first()) {
                                    echo '<ul class="sub-list-item list-group p-0">';
                                    foreach (App\Models\category::where('parent', $parentId)->get() as $childCategory) {
                                        echo '<li class="list-item pl-2 ">';
                                        echo '<div class="item-text toggle-sub-list">' . $childCategory->category . '</div>';
                                        renderCategories($childCategory->category_id);
                                        echo '</li>';
                                    }
                                    echo '</ul>';
                                }
                            }
                            ?>

                            @foreach ($first_categories as $first_category)
                            <li class="list-group-item bg-white">
                                <div class="item-text toggle-sub-list">{{ $first_category->category }}</div>

                                <?php
                                renderCategories($first_category->category_id);
                                ?>

                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<script>
    $(document).ready(function() {
        $('.toggle-sub-list').click(function() {
            const content = $(this).next('.sub-list-item');
            content.slideToggle(300);
        });
    });
</script>
@endsection