@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('status'))
    <p class="alert alert-success">{{ session('status') }}</p>
@endif
<form class="form-horizontal" role="form" action="{{ route('addproduct') }}" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="category" class="col-sm-3 control-label">Category</label>
        <div class="col-sm-9">
            <select class="form-control selectpicker" required="required" name="category_id" id="category" value="{{ old('category') }}">
                <option value="">-- Select--</option>
                @foreach ($categorys as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="sub_categorys_id" class="col-sm-3 control-label">Subcategory</label>
        <div class="col-sm-9">
            <select class="form-control selectpicker" required="required" name="sub_categorys_id" id="sub_categorys_id">
                <option value="">-- Select--</option>
                @foreach ($subCategorys as $subCategory)
                    <option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="brand_id" class="col-sm-3 control-label">Brand</label>
        <div class="col-sm-9">
            <select class="form-control selectpicker" required="required" name="brand_id" id="brand_id">
                <option value="">-- Select--</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="color_id" class="col-sm-3 control-label">Color</label>
        <div class="col-sm-9">
            <select class="form-control selectpicker" required="required" name="color_id" id="color_id">
                <option value="">-- Select--</option>
                @foreach ($colors as $color)
                    <option value="{{ $color->id }}">{{ $color->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="typebelt_id" class="col-sm-3 control-label">Belt Type</label>
        <div class="col-sm-9">
            <select class="form-control selectpicker" required="required" name="belt_id" id="typebelt_id">
                <option value="">-- Select--</option>
                @foreach ($belts as $belt)
                    <option value="{{ $belt->id }}">{{ $belt->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="name_en" class="col-sm-3 control-label">Name</label>
        <div class="col-sm-9">
            <input type="text" name="name" placeholder="Name" class="form-control" id="name_en">
        </div>
    </div>
    <div class="form-group">
        <label for="app_img" class="col-sm-3 control-label ">Images</label>
        <div class="col-sm-9">
            <div>
                <input type="file" name="img[]"  required="required" class="form-control"  id="app_img" multiple >
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="quantity" class="col-sm-3 control-label">Quantity</label>
        <div class="col-sm-9">
            <input type="text" name="quantity" placeholder="quantity" class="form-control" id="quantity">
        </div>
    </div>
    <div class="form-group">
        <label for="price" class="col-sm-3 control-label ">Price</label>
        <div class="col-sm-9">
            <div>
                <input type="number" name="price"  required="required" class="form-control"  id="price" >
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="description_en" class="col-sm-3 control-label">Description</label>
        <div class="col-sm-9">
            <textarea name="description" class="form-control" rows="3" placeholder="Description" id="description_en"></textarea>
        </div>
    </div>

    {{ csrf_field() }}
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10" style="text-align: center;">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>

