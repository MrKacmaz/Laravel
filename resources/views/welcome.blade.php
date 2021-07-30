<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Main Page</title>

    <!-- W3 School -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>

    <div class="container col-md-4 my-4">

        <h1 class="text-center">SIGN</h1>
        <hr>

        {{-- TAB PANEL --}}
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="signIn-tab" data-bs-toggle="tab" data-bs-target="#signIn"
                    type="button" role="tab" aria-controls="signIn" aria-selected="true">Sign-In</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="signUp-tab" data-bs-toggle="tab" data-bs-target="#signUp" type="button"
                    role="tab" aria-controls="signUp" aria-selected="false">Sign-Up</button>
            </li>
        </ul>
        {{-- TAB PANEL CONTENT --}}
        <div class="tab-content" id="myTabContent">

            {{-- user sign in --}}
            <div class="tab-pane fade show active" id="signIn" role="tabpanel" aria-labelledby="signIn-tab">
                <br>

                <form action="{{ url('newUserSign') }}" method="post">

                    @csrf {{ csrf_field() }}


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="userSignInName" name="userSignInName"
                            placeholder="Name">
                        <label for="userSignInName">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="userSignInSurname" name="userSignInSurname"
                            placeholder="Surname">
                        <label for="userSignInSurname">Surname</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="userSignInEmail" name="userSignInEmail"
                            placeholder="name@example.com">
                        <label for="userSignInEmail">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="userSignInPassword" name="userSignInPassword"
                            placeholder="Password">
                        <label for="userSignInPassword">Password</label>
                    </div>
                    <br>

                    <div class="d-grid gap-2 mb-3">
                        <button type="submit" class="btn btn-primary" id="signInBtn" name="signInBtn">Sign In</button>
                    </div>
                </form>

            </div>

            {{-- user sign up --}}
            <div class="tab-pane fade" id="signUp" role="tabpanel" aria-labelledby="signUp-tab">
                <br>

                <form action="{{ url('userLogin') }}" method="post">

                    @csrf {{ csrf_field() }}


                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="userSignUpEmail" name="userSignUpEmail"
                            placeholder="name@example.com">
                        <label for="userSignUpEmail">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="userSignUpPassword" name="userSignUpPassword"
                            placeholder="Password">
                        <label for="userSignUpPassword">Password</label>
                    </div>
                    <br>
                    <div class="d-grid gap-2 mb-3">
                        <button type="submit" class="btn btn-primary" id="signUpBtn" name="signUpBtn">Sign Up</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>

</html>
