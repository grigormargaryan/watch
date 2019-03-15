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
<form class="form-horizontal" role="form" action="{{ route('addbrand') }}" method="POST" enctype="multipart/form-data">
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
                <input type="file" name="img"  required="required" class="form-control"  id="app_img" >
            </div>
        </div>
    </div>

    {{ csrf_field() }}
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10" style="text-align: center;">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>

