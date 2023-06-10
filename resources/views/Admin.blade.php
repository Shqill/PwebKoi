<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    {{-- Navbar --}}
    <nav class="">
        <div class="background bg-dark">
            <div class="container">
                <h1 class="fw-bold p-5 " style="color: white">Sign Up</h1>
            </div>
        </div>
    </nav>

    {{-- Content BOX--}}
    {{-- Sejarah --}}
    <div class="container p-0">
        <a href="">
            <div class="detail-content d-flex flex-column bg-secondary ms-0 me-0 mt-4" style="border-radius: 10px">
                <h1 class="m-3 ps-3" style="color: white">Sejarah</h1>
            </div>
        </a>
        {{-- Button --}}
        <div class="button d-flex flex-row mt-1">
            {{-- Create --}}
            <a href="{{url("admin/change")}}">
                <button type="button" class="btn btn-success me-1">Create</button>
            </a>
            {{-- Edit --}}
            <a href="{{url("admin/change")}}">
                <button type="button" class="btn btn-primary me-1">Edit</button>
            </a>
            {{-- Delete --}}
            <button type="button" class="btn btn-danger me-1">Delete</button>
        </div>
    </div>


    {{-- Varietas --}}
    <div class="container p-0">
        <div class="detail-content d-flex flex-column bg-secondary ms-0 me-0 mt-4" style="border-radius: 10px">
            <h1 class="m-3 ps-3" style="color: white">Varietas</h1>

        </div>
        {{-- Button --}}
        <div class="button d-flex flex-row mt-1">
            {{-- Create --}}
            <a href="{{url("admin/change")}}">
                <button type="button" class="btn btn-success me-1">Create</button>
            </a>
            {{-- Edit --}}
            <a href="{{url("admin/change")}}">
                <button type="button" class="btn btn-primary me-1">Edit</button>
            </a>
            {{-- Delete --}}
            <button type="button" class="btn btn-danger me-1">Delete</button>
        </div>
    </div>


    {{-- Pakan --}}
    <div class="container p-0">
        <div class="detail-content d-flex flex-column bg-secondary ms-0 me-0 mt-4" style="border-radius: 10px">
            <h1 class="m-3 ps-3" style="color: white">Pakan</h1>

        </div>
        {{-- Button --}}
        <div class="button d-flex flex-row mt-1">
            {{-- Create --}}
            <a href="{{url("admin/change")}}">
                <button type="button" class="btn btn-success me-1">Create</button>
            </a>
            {{-- Edit --}}
            <a href="{{url("admin/change")}}">
                <button type="button" class="btn btn-primary me-1">Edit</button>
            </a>
            {{-- Delete --}}
            <button type="button" class="btn btn-danger me-1">Delete</button>
        </div>
    </div>


    {{-- Obat --}}
    <div class="container p-0">
        <div class="detail-content d-flex flex-column bg-secondary ms-0 me-0 mt-4" style="border-radius: 10px">
            <h1 class="m-3 ps-3" style="color: white">Obat</h1>

        </div>
        {{-- Button --}}
        <div class="button d-flex flex-row mt-1">
            {{-- Create --}}
            <a href="{{url("admin/change")}}">
                <button type="button" class="btn btn-success me-1">Create</button>
            </a>
            {{-- Edit --}}
            <a href="{{url("admin/change")}}">
                <button type="button" class="btn btn-primary me-1">Edit</button>
            </a>
            {{-- Delete --}}
            <button type="button" class="btn btn-danger me-1">Delete</button>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>