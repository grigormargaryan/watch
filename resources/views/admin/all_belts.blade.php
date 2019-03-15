
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
            @foreach ($belts as $belt)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $belt->name }}</td>
                    <td><a href="{{ route('belt_delete',$belt->id) }}" class="btn btn-xs btn-danger" style="margin-left: 5px;">DELETE</a></td>
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