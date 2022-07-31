<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title', $title)</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="card" >
                <!-- <img src="../assets/img/logo-dark.png" class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    @if($errors->any())
                    @foreach($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                    @endif
                    <form action="{{ route('register.action') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Nama <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
                        </div>
                        <div class="mb-3">
                            <label>Username <span class="text-danger">*</span></label>
                            <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
                        </div>
                        <div class="mb-3">
                            <label>Password <span class="text-danger">*</span></label>
                            <input class="form-control" type="password" name="password" />
                        </div>
                        <div class="mb-3">
                            <label>Masukkan Ulang Password<span class="text-danger">*</span></label>
                            <input class="form-control" type="password" name="password_confirm" />
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary">Register</button>
                            <a class="btn btn-danger" href="{{ route('dashboard.index') }}">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
</body>

</html>