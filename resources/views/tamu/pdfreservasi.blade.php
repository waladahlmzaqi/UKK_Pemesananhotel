<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div>
        <h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    font-size: 50px;">HotelMaSSeh
        </h1>
        <br>
        <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                    font-size: 15px;
                    margin-top: -40px;
                    margin-left: 5px;">
            Kami ucapkan terima kasih karena telah memesan penginapan di hotel kami.
            Jangan lupa untuk konfirmasi bila ada kesalahan di laporan ini dan
            tolong bantu kami dengan memberi bintang 5.
        </p>
        <hr>
    </div>

    <div style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
        <p>Nama Pemesan
            <label style="margin-left: 30px;">: {{ $data->nama_pemesan }}</label>
        </p>
        <p>Nama Tamu
            <label style="margin-left: 56px;">: {{ $data->nama_tamu }}</label>
        </p>
        <p>Email
            <label style="margin-left: 105px;">: {{ $data->email }}</label>
        </p>
        <p>No Telephone
            <label style="margin-left: 44px;">: {{ $data->no_tlp }}</label>
        </p>
        <hr>
    </div>

    <div style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; margin-top: 40px;">
        <table>
            <tr>
              <th>Tipe Kamar</th>
              <th>Jumlah Kamar</th>
              <th>Tanggal Check In</th>
              <th>Tanggal Check Out</th>
            </tr>
            <tr>
              <td>{{ $data->tipe_kamar }}</td>
              <td>{{ $data->jml_kamar }}</td>
              <td>{{ $data->cek_in }}</td>
              <td>{{ $data->cek_out }}</td>
            </tr>
        </table>

    </div>


</body>
</html>
