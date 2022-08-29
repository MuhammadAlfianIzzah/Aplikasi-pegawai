<html>

<head>
    <style>
        @page {
            margin: 100px 25px 0 25px;
        }

        body {
            position: relative;
            width: 21cm;
            height: 29.7cm;
            /* margin: 0px 4px 4px 4px; */
            /* padding: 0.85 cm; */
            color: black;
            background: #FFFFFF;
            font-family: Arial, sans-serif;
            font-family: SourceSansPro;
        }

        header {
            position: fixed;
            top: -60px;
            left: 0px;
            right: 0px;
            /* background-color: lightblue; */
            border-bottom: 2px solid black;
            box-sizing: border-box;
            height: 140px;
        }



        header .wrap {
            position: relative;
            /* border: 2px solid yellow; */
            height: 100%;
        }

        header .parent {
            position: absolute;
            top: 0;
            height: 100%;
            width: 100%;
            /* border: 2px solid green; */
            box-sizing: border-box;
        }

        header .parent .child {
            margin-top: 40px;
            height: 100%;
            /* width: 100%; */
            box-sizing: border-box;
        }

        .child1 {
            padding: 0 20px;
        }

        .child2 {
            line-height: .35cm;
            padding: 0 20px;
        }

        body {
            margin-top: 90px;
        }

        #tableku {
            font-size: 9pt;
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }



        #tableku td,
        #tableku th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #tableku tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #tableku tr:hover {
            background-color: #ddd;
        }

        #tableku th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: rgb(45, 45, 163);
            color: white;
        }

        h1,
        h3 {
            text-align: center;
            line-height: .5cm;
        }
    </style>
</head>

<body style="width: 100%">
    <header>
        <div class="wrap">
            <div class="parent">
                <div class="child child1" style="display:inline-block;">
                    <h1>TRASPAC</h1>
                    <h6 style="text-align: center">MAKMUR SEJAHTERA</h6>
                </div>
                <div class="child child2" style="width: 60%;display:inline-block;">
                    <p>PT. TRASPAC Makmur Sejahtera</p>
                    <p>Office Park Thamrin City Blok AA-02, Jl. KebonKacang Raya</p>
                    <p>Tanah Abang – Jakarta PusatTelp/Fax : +62-21-31997486 </p>
                    <p>Office Park Thamrin City Blok AA-02, Jl. KebonKacang Raya</p>
                </div>
            </div>
        </div>
    </header>

    <main style="page-break-after: always;">
        <h1>Daftar Pegawai</h1>
        <h3>Nama Lembaga/Instansi</h3>
        <table id="tableku">
            <tr>
                <th>No.</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Alamat</th>
                <th>Tgl Lahir</th>
                <th>L/P</th>
                <th>Gol</th>
                <th>Eselon</th>
                <th>Jabatan</th>
                <th>Tempat Tugas</th>
                <th>Agama</th>
                <th>Unit Kerja</th>
                <th>No. HP</th>
                <th>NPWP</th>
            </tr>
            @foreach ($pegawai as $key => $pg)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $pg->nip }}</td>
                    <td>{{ $pg->nama }}</td>
                    <td>{{ $pg->tempat_lahir }}</td>
                    <td>{{ $pg->alamat }}</td>
                    <td>{{ $pg->tgl_lahir }}</td>
                    <td>{{ $pg->jenis_kelamin }}</td>
                    <td>{{ $pg->golongan->nama }}</td>
                    <td>{{ $pg->eselon }}</td>
                    <td>{{ $pg->jabatan->nama }}</td>
                    <td>{{ $pg->unit_kerja->tempat_tugas }}</td>
                    <td>{{ $pg->alamat }}</td>
                    <td>{{ $pg->unit_kerja->nama }}</td>
                    <td>{{ $pg->no_hp }}</td>
                    <td>{{ $pg->npwp }}</td>
                </tr>
            @endforeach

        </table>
    </main>
</body>

</html>
