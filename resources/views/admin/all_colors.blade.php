
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
                    Title
                </td>
                <td>
                    Delete/Update
                </td>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1 ?>
            @foreach ($colors as $color)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $color->name }}</td>
                    <td>{{ $color->title }}</td>
                    <td><a href="{{ route('color_delete',$color->id) }}" class="btn btn-xs btn-danger" style="margin-left: 5px;">DELETE</a></td>
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