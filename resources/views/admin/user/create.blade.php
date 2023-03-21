@extends('../../layouts/backend')
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Form Create User</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" class="" action="/admin/user" method="post">
            {{csrf_field()}}
            <div class="box-body">
                <div class="form-group">
                    <label for="nama">Name</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password">
                </div>
                <div class="form-group">
                    <h5>Roles</h5>
                    <div class="form-check">
                        <input type="checkbox" id="admin" name="admin" value="Admin">
                        <label for="admin">Admin</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="member" name="member" value="Member">
                        <label for="member">Member</label>
                    </div>
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
