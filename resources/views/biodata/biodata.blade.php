<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Maria Skłodowska-Curie -->
    <h1 align="center" style="margin-top: 30px;">{{ $judul }}</h1><br>
    <table border=1 align="center" height=20% width=15% cellpadding=2 cellspacing="1">
        <tr>
            <td colspan=2 align="center"><img src="{{ asset($foto) }}" align="center" width="220" height="270"></td>
        </tr>
    </table>
    <table border=1 align="center" height=30% width=33% cellpadding=2 cellspacing="1">>
        <tr>
            <td colspan=2 align=center valign=center><b>MY BIODATA<b></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>{{ $nama }}
        </tr>
        <tr>
            <td>Tempat Tanggal Lahir</td>
            <td>{{ $tgl }}</td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>{{ $Nim }}</td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>{{ $prodi }}</td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>{{ $jurusan }}</td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>{{ $hobi }}</td>
        </tr>
        <tr>
            <td>Cita-Cita</td>
            <td>{{ $cita }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>{{ $alamat }}</td>
        </tr>
        <tr>
            <td>No.Telpon</td>
            <td>{{ $hp }}</td>
        </tr>
    </table><br><br>

    <div align="center">
        <form action="/mykeluarga" method="GET" style="display: inline">
            <button type="submit" margin-right:20px;>keluarga</button>
        </form>
        <form action="/myskola" method="GET" style="display: inline">
            <button type="submit" margin-right:50px;>sekolah</button>
        </form>
        <form action="/myprestasi" method="GET" style="display: inline">
            <button type="submit">prestasi</button>
        </form>
    </div>

</div>
