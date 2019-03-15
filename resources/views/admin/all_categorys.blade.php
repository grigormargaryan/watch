
@if(session('status'))
    <p class="alert alert-success">{{ session('status') }}</p>
@endif
<div >
    <div>
        <table class="table table-bordered table-hover" id="myTable">
            <thead>
                <tr>
                    <td>
                        No
                    </td>
                    <td>
                        Name
                    </td>
                    <td>
                        Delete/Update
                    </td>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                @foreach ($categorys as $category)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $category->name }}</td>
                        <td><a href="{{ route('category_edit_form',$category->id) }}" class="btn btn-xs btn-primary">EDIT</a><a href="{{ route('category_delete',$category->id) }}" class="btn btn-xs btn-danger" style="margin-left: 5px;">DELETE</a></td>
                    </tr>
                    <?php  $i++; ?>
                @endforeach

            </tbody>
        </table>

    </div>
</div>
<script>
    jQuery(document).ready(function(){
        jQuery('#myTable').DataTable();
    });
</script>