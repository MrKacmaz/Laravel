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




    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('home') }}">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a href="{{ url('electronic') }}" class=" dropdown-item"> <span class=" d-none d-sm-inline w3-text-green
                                    w3-hover-text-deep-orange">Electronic</span></a>
                            </li>
                            <li>
                                <a href="{{ url('mechanism') }}" class=" dropdown-item"> <span class=" d-none d-sm-inline w3-text-green
                                    w3-hover-text-deep-orange">Mechanism</span></a>
                            </li>
                            <li>
                                <a href="{{ url('architect') }}" class=" dropdown-item"> <span class=" d-none d-sm-inline w3-text-green
                                    w3-hover-text-deep-orange">Arthitect</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdropTwo"
                        aria-current="page"><button class="btn btn-outline-primary">Sign-In</button></a>
                </li>
            </ul>
        </div>
    </nav>




    <!-- Products -->
    <div class="container">
        <div class="row">
            <?php
            $counter = 1;
            ?>
            @foreach ($products as $prod)

                <div class="col-4 justify-content-center">
                    <div class="card border-4 mb-3 w3-hover-pale-red"
                        style="max-width: 18rem; text-align: center; margin-top: 25px">
                        <div class="card-header bg-transparent w3-text-deep-orange">
                            {{ $prod->category }}
                        </div>

                        <div class="card-body text-success">
                            <h2 id='nameID{{ $counter }}' class="card-title w3-text-indigo">
                                {{ $prod->name }}</h2>
                            <div style="display: none">
                                <h6 id='stockID{{ $counter }}' class="card-title">{{ $prod->stock }}
                                </h6>
                            </div>
                        </div>

                        <div class="card-footer bg-transparent">
                            <div style="display: none">
                                <h6 id='priceID{{ $counter }}'>${{ $prod->price }}</h6>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-outline-success" type="button" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"
                                    onclick="openModalInfo({{ $counter }})">BUY</button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $counter = $counter + 1;
                ?>

            @endforeach
        </div>
    </div>

    <!-- Modal for Product-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                            </div>
                            <div class="col-4 text-center w3-xxlarge w3-text-deep-orange">
                                <div id="name"></div>
                            </div>
                            <div class="col-4">
                            </div>
                        </div>
                        <br><br><br>
                        <div class="row">
                            <div class="col text-center w3-xlarge w3-text-indigo">
                                <div id="stock"></div>
                            </div>
                            <div class="col text-center w3-xlarge w3-text-indigo">
                                <div id="price"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" onclick="modalBuySwal()">Buy</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal for Sign-->
    <div class="modal fade bg-dark" id="staticBackdropTwo" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabelTwo" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabelTwo">SIGN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="container">
                        <div class="row">

                            {{-- name --}}
                            <div class="input-group input-group-sm mb-3">
                                <input id="modalName" type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-sm" placeholder="User Name">
                            </div>

                            {{-- password --}}
                            <div class="input-group input-group-sm mb-3">
                                <input id="modalPassword" type="password" class="form-control"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                    placeholder="Password">
                            </div>


                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="signUpBtn()">Sign Up</button>
                </div>
            </div>
        </div>
    </div>



    <script>
        $(document).ready(function() {

        });


        function openModalInfo(count) {
            $("#staticBackdropLabel").text("ELECTRONIC");

            $("#name").text($('#nameID' + count).text());

            $('#stock').text("Stock: " + parseInt($('#stockID' + count).text()));

            $("#price").text("Cost: " + $('#priceID' + count).text());
        }

        function modalBuySwal() {
            swal({
                    title: "Are you sure?",
                    text: "You are going to buy this item",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Thanks for using MrKacmaz Online Shopping System!", {
                            icon: "success",
                        });

                        $("#staticBackdrop").modal("hide");
                    } else {
                        $("#staticBackdrop").modal("hide");
                    }
                });
        }

        function signUpBtn() {
            var name = $("#modalName").val();
            var password = $("#modalPassword").val();
        }
    </script>


</body>

</html>
