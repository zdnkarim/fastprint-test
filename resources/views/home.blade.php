<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Data Produk
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

    @yield('css')
</head>

<body>
    <div class="col" style="margin: 15px">
        <a type="button" href="/" class="btn btn-primary">Home</a>
        <button data-href="/update-data" class="btn btn-primary" data-toggle="modal" data-target="#popupModal">Update
            Data</button>
        <button data-href="/add-product" class="btn btn-primary" data-toggle="modal" data-target="#popupModal">Tambah
            Produk</button>
        <a type="button" href="/available-product" class="btn btn-primary">Produk yang Tersedia</a>
    </div>

    @yield('content')

    <div id="popupModal" class="modal" tabindex="-1">

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.13.4/sorting/currency.js"></script>
    <script>
        $(document).ready(function() {
            $('.data-table').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            // Capture button click event
            $('button[data-toggle="modal"]').click(function() {
                var url = $(this).data('href');
                $('#popupModal').load(url, function() {
                    $('#popupModal').modal('show');
                });
            });
        });
    </script>

    @yield('script')
</body>

</html>
