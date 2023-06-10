<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    {{-- Navbar --}}
    <nav class="">
        <div class="background bg-dark">
            <div class="container">
                <h1 class="fw-bold p-5 " style="color: white">Hello Admin</h1>
            </div>
        </div>
    </nav>

    {{-- Content --}}
    <div class="form-floating container mt-5">
        <textarea class="form-control p-3 bg-secondary
        " placeholder="Leave a comment here" id="" style="height: 150px; font-size: 25px; color: white"></textarea>
        <button type="button" class="btn btn-success mt-1">Publish</button>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>