@extends('../../layouts/backend')
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Form Create Transaction</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" class="" action="/admin/transaction" method="post">
            {{csrf_field()}}
            <div class="box-body">
                <div class="form-group">
                    <label for="buku_id">Pilih Buku</label>
                    <select class="form-control" name="buku_id" id="buku_id">
                        <option value=":id1">Buku 1</option>
                        <option value=":id2">Buku 2</option>
                        <option value=":id3">Buku 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah">
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.box -->
</div>
@endsection
