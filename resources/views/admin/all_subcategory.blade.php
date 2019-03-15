@if(session('status'))
    <p class="alert alert-success">{{ session('status') }}</p>
@endif
<div>
    <table class="table table-bordered table-hover" id="apps-table">
        <thead>
        <tr>
            <td>
                ID
            </td>
            <td>
                Title
            </td>
            <td>
                Delete/Update
            </td>

        </tr>
        </thead>
    </table>
</div>
<script>
    $(function() {
        $('#apps-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('allSubCategory.data') !!}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    });
</script>