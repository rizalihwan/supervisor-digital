<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Supervisi</title>
</head>
<body>
    <center>
        <hr>
        <h1>Laporan Aplikasi Supervisor Digital</h1>
        <hr>
            <br/>
                <table border="1" cellspacing="0" cellpading="5" align="center" style="width: 100%;">
                    <tr style="background: #00BFFF; color: #ffffff;" align="center">
                        <th>Jadwal Hari</th>
                        <th>Nama Guru</th>
                        <th>Mata Pelajaran</th>
                    </tr>
                    @forelse ($data as $row)
                        <tr>
                            <td>{{ $row->hari }}</td>
                            <td>{{ $row->nama_guru }}</td>
                            <td>{{ $row->mapel }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-danger text-center" align="center">Laporan Kosong!</td>
                        </tr>
                    @endforelse
                </table>
            <br/>
        <em>Created by : Rizalihwan</em>
    </center>
</body>
</html>
