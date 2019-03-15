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
<form class="form-horizontal" role="form" action="{{ route('addcategory') }}" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="service" class="col-sm-2 control-label adminlabel">Name</label>
        <div class="col-sm-10">
            <input type="text" name="name" placeholder="Category Name"  class="form-control" id="service">
        </div>
    </div>
    <div class="form-group">
        <label for="description_en" class="col-sm-2 control-label adminlabel">Title</label>
        <div class="col-sm-10">
            <textarea name="title" class="form-control" rows="3" placeholder="Title"  id="description_en"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-5" style="text-align: center">
            <button type="submit" class="btn btn-custom btn-lg btn-block">Save</button>
        </div>
    </div>
    {{ csrf_field() }}
</form>