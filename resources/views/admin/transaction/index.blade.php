@extends('../layouts/backend')
@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Daftar Transaksi</h3>

        <a href="transaction/create" class="btn btn-info btn-md pull-right"><i class="fa fa-plus"></i> Tambah</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pembeli</th>
                    <th>Buku</th>
                    <th>Jumlah</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaction as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->user->name }}</td>
                    <td>{{ $data->book->title }}</td>
                    <td>{{ $data->amount }}</td>
                    <td>
                        <a href="#" class="btn btn-xs btn-info">Detail</a>
                        <a href="{{ 'transaction/'.$data->id.'/edit' }}" class="btn btn-xs btn-warning">Edit</a>
                        <a href="#" class="btn btn-xs btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection

@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{URL::asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('js')
<!-- DataTables -->
<script src="{{URL::asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
    $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
    })
    })
</script>
@endsection
