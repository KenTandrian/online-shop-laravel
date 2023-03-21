@extends('../../layouts/backend')
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Form Create Buku</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/book" method="post">
            {{csrf_field()}}
            <div class="box-body">
                <div class="form-group">
                    <label for="title">Nama Buku</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Masukkan Nama Buku">
                </div>
                <div class="form-group">
                    <label for="author">Pengarang</label>
                    <input type="text" name="author" id="author" class="form-control" placeholder="Masukkan Nama Pengarang">
                </div>
                <div class="form-group">
                    <label for="publisher">Penerbit</label>
                    <input type="text" name="publisher" id="publisher" class="form-control" placeholder="Masukkan Nama Pengarang">
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