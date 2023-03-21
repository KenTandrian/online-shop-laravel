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
                    <label for="book_id">Pilih Buku</label>
                    <select class="form-control" name="book_id" id="book_id">
                        @foreach ($book as $books)
                        <option value="{{ $books->id }}">{{ $books->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="amount">Jumlah</label>
                    <input type="number" name="amount" class="form-control" id="amount" placeholder="Jumlah">
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
