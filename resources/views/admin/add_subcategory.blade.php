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
<form class="form-horizontal" role="form" action="{{ route('addsubcategory') }}" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="category" class="col-sm-3 control-label">Category</label>
        <div class="col-sm-9">
            <select class="form-control selectpicker" required="required" name="categorys_id" id="category" value="{{ old('category') }}">
                <option value="">-- Select--</option>
                @foreach ($categorys as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 control-label">Name</label>
        <div class="col-sm-9">
            <input name="name" class="form-control" type='text' rows="3" placeholder="Name" id="name" required/>
        </div>
    </div>
    <div class="form-group">
        <label for="app_img" class="col-sm-3 control-label ">App img</label>
        <div class="col-sm-9">
            <div>
                <input type="file" name="img" class="form-control"  id="app_img" >
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

