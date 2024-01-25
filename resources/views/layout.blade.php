<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage School</title>
    <!-- Inclure Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <style>
        .cardsShow{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin: 20px 200px;
            border:3px solid rgb(117, 8, 117);
            border-radius: 15px;
            padding: 30px;
            background-color: rgb(214, 188, 221);
        }
        .cardsEdit{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin: 10px 150px;
            border:3px solid rgb(117, 8, 117);
            border-radius: 15px;
            padding: 20px;
            background-color: rgb(214, 188, 221);
        }
        .cardsCreate{
            margin: 10px 150px;
            border:3px solid rgb(117, 8, 117);
            border-radius: 15px;
            padding: 20px;
            background-color: rgb(214, 188, 221);
        }
        .size{
            font-size: 20px;
        }
        .color{
            background-color: rgb(194, 19, 194) !important;
            border:3px solid rgb(121, 14, 121) !important;
            font-weight: bold!important;
        }
    </style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container">
            <div>
                <img src="/images/im.png" width="150" height="100" style="border-radius: 40%; margin:5px">
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
    <a class="nav-link" href="{{ route('students.create') }}">Create</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('students.index') }}">Index</a>
</li>

                  
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

<!-- Inclure jQuery -->
<!-- Inclure jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Inclure Bootstrap JS et les dépendances -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>


</head>

</head>

</body>
</html>
