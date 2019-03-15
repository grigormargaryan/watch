@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="form-horizontal" role="form" action="{{ route('product_edit', $products->id) }}" method="POST">
    <div class="form-group">
        <label for="category" class="col-sm-2 control-label">Category</label>
        <div class="col-sm-10">
            <select class="form-control selectpicker" required="required" name="categorys_id" id="category" value="">

                <option value="">-- Select--</option>
                @foreach($categorys as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="sub_categorys_id" class="col-sm-2 control-label">Category</label>
        <div class="col-sm-10">
            <select class="form-control selectpicker" required="required" name="sub_categorys_id" id="sub_categorys_id" value="">
                <option value="">-- Select--</option>
                @foreach($subCategorys as $subCategory)
                    <option value="{{$subCategory->id}}">{{$subCategory->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="name_en" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" name="name" placeholder="Name" class="form-control" id="name_en" value="{{ $products->name }}">
        </div>
    </div>
    <div class="form-group">
        <label for="quantity" class="col-sm-2 control-label">Quantity</label>
        <div class="col-sm-10">
            <input type="text" name="quantity" placeholder="Quantity" class="form-control" id="quantity" value="{{ $products->quantity }}">
        </div>
    </div>
    <div class="form-group">
        <label for="description_en" class="col-sm-2 control-label">Description</label>
        <div class="col-sm-10">
            <textarea name="description" class="form-control" rows="3" placeholder="Description" id="description_en">{{ $products->description }}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="price" class="col-sm-2 control-label">Price</label>
        <div class="col-sm-10">
            <input type="number" name="price" placeholder="Price" class="form-control" id="price" value="{{ $products->price }}">
        </div>
    </div>
    {{ csrf_field() }}
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>