<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        /* body {
            font-size: 0.875rem;
            line-height: 1.25rem;
        } */
        /* .table {
            table-layout: auto;
            width: 100%;
        }

        .table thead tr th, .table tbody tr td {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            padding-top: 1rem;
            padding-bottom: 1rem;
            border-width: 1px;
            border-color: black;
        } */
    </style>
</head>

<body style="font-size: 0.875rem">
    <center>
        <h1 style="font-weight: 700; font-size: 1.25rem; line-height: 1.75rem; margin-bottom: 2rem">Laporan Hasil Prediksi Kualitas Sperma</h1>
    </center>
    @foreach( $dates as $date )
    <div style="margin-bottom: 0.5rem">{{ Carbon\Carbon::parse($date[0]->created_at)->isoFormat('D MMMM YYYY') }}</div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Waktu</th>
                <th>Normal</th>
                <th>Altered</th>
                <th>Hasil</th>
                <th>Persentase</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $date as $result )
            <tr>
                <td>{{ $loop->iteration }}.</td>
                <td>{{ $result->user->name }}</td>
                <td>{{ Carbon\Carbon::parse($result->created_at)->isoFormat('HH:mm') }}</td>
                <td>{{ round($result->normal_value, 8) }}</td>
                <td>{{ round($result->altered_value, 8) }}</td>
                <td style="text-transform: capitalize;">{{ $result->output }}</td>
                <td>{{ round($result->percentage, 2) }}%</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endforeach

</body>

</html>