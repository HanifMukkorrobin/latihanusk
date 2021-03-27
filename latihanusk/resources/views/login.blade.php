<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login Me&Lu</title>
  </head>
  <body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Me&Lu Store</a>
        </nav>
    
        <div class="row mt-5">
            <div class="col">
                <h3 class="text-center">Login Me&Lu Store</h3>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-4"></div>
            <div class="col-4">
                @if(session('error'))
                <div class="alert alert-danger" role="alert">{{session('error')}}</div>
                @endif
                <form action="{{url('/postLogin')}}" method="post">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-6">
                            <label>Username</label>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control form-control-sm" name="username" placeholder="Masukkan Username">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <label>Password</label>
                        </div>
                        <div class="col-6">
                            <input type="password" class="form-control form-control-sm" name="password" placeholder="Masukkan Password">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6"></div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-sm">Login</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>