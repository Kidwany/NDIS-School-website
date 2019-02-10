

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        @for($i=0;$i<count($filedname);$i++)
            <th>{{$filedname[$i]}}</th>
        @endfor


    </tr>
    </thead>
    <tfoot>
    <tr>
        @for($i=0;$i<count($filedname);$i++)
            <th>{{$filedname[$i]}}</th>
        @endfor

    </tr>
    </tfoot>
</table>
<input type="hidden" value="{{$tablename}}" id="tb">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">

    $(document).ready(function () {
        var tb = $('#tb').val();

        $('#example').DataTable({
            "ajax": '../filldata/'+tb
        });
    });
</script>
