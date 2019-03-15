@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="form-horizontal" role="form" action="{{ route('category_edit', $categorys->id) }}" method="POST">
    <div class="form-group">
        <label for="name_en" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" name="name" placeholder="Name"  class="form-control" id="name_en" value="{{ $categorys->name }}">
        </div>
    </div>
    <div class="form-group">
        <label for="description_en" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
            <textarea name="title" class="form-control" rows="3" placeholder="Title"  id="description_en">{{ $categorys->title }}</textarea>
        </div>
    </div>
    {{ csrf_field() }}
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>