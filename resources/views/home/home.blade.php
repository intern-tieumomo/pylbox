<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('home/css/Toast.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('home/assets/images/icon-p.png') }}">

    <script src="https://kit.fontawesome.com/fab5b84e56.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('home/js/Toast.js') }}"></script>

    <title>{{ trans('text.home.title') }}</title>
</head>
<body>
    <div class="container">
        <header class="head my-3">
            <nav class="navbar navbar-expand-lg navbar-light head__custom-nav">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="{{ asset('home/assets/images/logo-p.png') }}" alt="website logo">
                    <span>{{ trans('text.pylation') }}</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span><img src="{{ asset('home/assets/images/menu.png') }}" alt=""></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link showMaintananceToast" href="#">{{ trans('text.home.go') }} <i class="fas fa-location-arrow"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link showMaintananceToast" href="#">{{ trans('text.home.about') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ trans('text.home.languages') }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{!! route('home.change-language', ['vi']) !!}">Tiếng Việt</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{!! route('home.change-language', ['en']) !!}">English</a>
                            </div>
                            <style type="text/css">
                                .dropdown-toggle::after { 
                                    content: none;
                                }
                                .dropdown-item::hover {
                                    background-color: none;
                                }
                            </style>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary showMaintananceToast" href="#">{{ trans('text.home.contact') }}</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>
    <div class="container">
        <div class="row custom-section d-flex align-items-center">
            <div class="col-12 col-lg-4">
                <h2>{{ trans('text.pylation') }}</h2>
                <p>{{ trans('text.home.lorem') }}</p>
                <a href="{{ route('countday.home') }}" {{-- data-bs-toggle="modal" data-bs-target="#exampleModal" --}}>{{ trans('text.home.explore') }}</a>

                <!-- Modal -->
                {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="col-12 col-lg-8">
                <img src="{{ asset('home/assets/images/mainbenner.png') }}" alt="Team process banner">
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            $('.showErrorToast').on('click', function() {
                new Toast({
                    message: 'Oops! Something went wrong ❌',
                    type: 'danger',
                });
            });

            $('.showMaintananceToast').on('click', function() {
                new Toast({
                    message: 'Sorry! We are fixing this feature 🛠 ',
                    type: 'warning',
                });
            });

            // new Toast({
            //     message: 'This is an example with custom buttons',
            //     type: 'success',
            //     customButtons: [
            //     {
            //         text: 'Refresh the page',
            //         onClick: function() {
            //             window.location.reload();
            //         }
            //     },
            //     {
            //         text: 'Follow ',
            //         onClick: function() {
            //             window.open('https://twitter.com/ireaderinokun');
            //         }
            //     }
            //     ]
            // });
        });
    </script>
</body>
</html>