@extends('../../layouts/backend')
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Form Edit Buku</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/book/{{ $book->id }}/update" method="post">
            {{csrf_field()}}
            <div class="box-body">
                <div class="form-group">
                    <label>Nama Buku</label>
                    <input type="text" name="title" class="form-control" value="{{ $book->title }}" placeholder="Masukkan Nama Buku">
                </div>
                <div class="form-group">
                    <label>Pengarang</label>
                    <input type="text" name="author" class="form-control" value="{{ $book->author }}" placeholder="Masukkan Nama Pengarang">
                </div>
                <div class="form-group">
                    <label>Penerbit</label>
                    <input type="text" name="publisher" class="form-control" value="{{ $book->publisher }}" placeholder="Masukkan Nama Pengarang">
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