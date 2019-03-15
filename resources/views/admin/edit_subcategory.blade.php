<!--@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
@endif-->
<!--@if(session('status'))
        <p class="alert alert-success">{{ session('status') }}</p>
@endif-->
<form class="form-horizontal" role="form" action="{{route("subcategory_edit",$id)}}" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="category" class="col-sm-3 control-label">Category</label>
        <div class="col-sm-9">
            <select class="form-control selectpicker" required="required" name="categorys_id" id="category" value="">

                <option value="">-- Select--</option>
                     @foreach($categorys as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                     @endforeach
                </select>
            </div>
        </div>
       <div class="form-group">
        <label for="name" class="col-sm-3 control-label">Name</label>
        <div class="col-sm-9">
            <input type="text" name="name" placeholder="Name"  class="form-control"
             id="name" value="{{$subcategory['name']}}">
        </div>
    </div>
    <div class="form-group">
        <label for="imgInp" class="col-sm-3 control-label ">App img</label>
        <div class="col-sm-9">
            <div>
                <input type="file" name="img"  class="form-control"  id="imgInp" onchange="readURL(this)">
                <button type="button" class="close" aria-label="Close" id="closes">
                <span aria-hidden="true">&times;</span>
            </button>
            <input type='hidden' value="{{$subcategory['img']}}" name="old_img"/>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="fff" class="col-sm-3 control-label adminlabel"></label>
        <div class="col-sm-9">
            <img width="100%" height="150px"  id="fff" src="{{ asset('/storage/upload/'.$subcategory['img']) }}">
        </div>
    </div>
    <div class="form-group">
        <label for="blah" class="col-sm-3 control-label adminlabel"></label>
        <div class="col-sm-9">
            <img id="blah" src="#" alt="your new image" width="100%" height="150px" />
        </div>
    </div>
    <div class="form-group">
        <label for="description" class="col-sm-3 control-label">Description</label>
        <div class="col-sm-9">
            <textarea name="description" class="form-control" rows="3" placeholder="Description"
             id="description">{{$subcategory['description']}}</textarea>
        </div>
    </div>
    {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10" style="text-align: center;">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>

