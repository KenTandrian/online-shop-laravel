<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel CRUD Demo</title>
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
            crossorigin="anonymous"
        >
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a href="{{ URL::to('siswa') }}" class="navbar-brand">
                        Laravel CRUD Demo
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ URL::to('siswa') }}">See all students</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"href="{{ URL::to('siswa/create') }}">Create new student</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <br><br>
            <h1 class="display-3">All Students</h1>
            <br>
            @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif

            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Address</td>
                        <td>Phone Number</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa as $key => $value)
                    <tr>
                        <td>{{ $value->id_siswa }}</td>
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->alamat }}</td>
                        <td>{{ $value->no_hp }}</td>
                        <td>
                            <a href="{{ URL::to('siswa/' . $value->id_siswa) }}" class="btn btn-small btn-success">Show Details</a>
                            <a href="{{ URL::to('siswa/' . $value->id_siswa . '/edit') }}" class="btn btn-small btn-secondary">Edit Student Details</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            <footer class="footer fixed-bottom py-3">
                <div class="container d-flex flex-wrap justify-content-between align-items-center my-4 border-top">
                    <p class="col-md-4 mb-0 text-muted">© 2022 Kenrick Tandrian</p>
                
                    <a href="{{ URL::to('siswa') }}" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                        Laravel CRUD Demo
                    </a>
                
                    <ul class="nav col-md-4 justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('siswa') }}">See all students</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"href="{{ URL::to('siswa/create') }}">Create new student</a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
            crossorigin="anonymous"
        ></script>
    </body>
</html>