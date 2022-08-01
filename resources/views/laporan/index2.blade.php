<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <h1>test</h1>

    <table id="myTable" class="table table-stripped">
        <thead>
            <tr>
                <th>#</th>
                <th>NAMA LENGKAP</th>                          
                <th>TEMPAT LAHIR</th>
                <th>TANGGAL LAHIR</th>
                <th>L/P</th>
                <th>IBU</th>
                <th>AYAH</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_bayi }}</td>
                        <td>{{ $item->tmp_lahir }}</td>
                        <td>{{ $item->tgl_lahir }}</td>
                        <td>{{ $item->jk_bayi }}</td>
                        <td>{{ $item->nama_ibu }}</td>
                        <td>{{ $item->nama_ayah }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>