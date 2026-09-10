<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <h1 align ="center" style="margin-top: 30px;"">{{ $judul }}</h1>
    <p align="center">
        Perjalanan Pendidikan saya </p>
    <table border=1 align="center" height=15% width=20% cellpadding=2 cellspacing=1>
        <tr>
            <td colspan="2" align="center"><b>SEKOLAH DASAR<b></td>
        </tr>
        <tr>
            <td>Nama Sekolah</td>
            <td>{{ $SD }}</td>
        </tr>
        <tr>
            <td>TAHUN :</td>
            <td>{{ $thn_SD }}</td>
        </tr>
        <tr>
            <td>ALAMAT :</td>
            <td>{{ $alamat_SD }}</td>
        </tr>
    </table> <br>

    <table border=1 align="center" height=15% width=20% cellpadding=2 cellspacing=1>
        <tr>
            <td colspan="2" align="center"><b>SEKOLAH MENENGAH PERTAMA<b></td>
        </tr>
        <tr>
            <td>Nama Sekolah :</td>
            <td>{{ $SMP }}</td>
        </tr>
        <tr>
            <td>TAHUN :</td>
            <td>{{ $thn_SMP }}</td>
        </tr>
        <tr>
            <td>ALAMAT :</td>
            <td>{{ $alamat_SMP }}</td>
        </tr>
    </table><br>

    <table border=1 align="center" height=15% width=20% cellpadding=2 cellspacing=1>
        <tr>
            <td colspan="2" align="center"><b>SEKOLAH MENENGAH KEJURUAN<b></td>
        </tr>
        <tr>
            <td>Nama Sekolah :</td>
            <td>{{ $SMk }}</td>
        </tr>
        <tr>
            <td>TAHUN :</td>
            <td>{{ $thn_SMk }}</td>
        </tr>
        <tr>
            <td>ALAMAT :</td>
            <td>{{ $alamat_SMk }}</td>
        </tr>
    </table>
    <br>
    <table border=1 align="center" height=15% width=20% cellpadding=2 cellspacing=1>
        <tr>
            <td colspan="2" align="center"><b>PERGURUAN TINGGI<b></td>
        </tr>
        <tr>
            <td>Nama Kampus :</td>
            <td>{{ $kampus }}</td>
        </tr>
        <tr>
            <td>TAHUN :</td>
            <td>{{ $thn_kampus }}</td>
        </tr>
        <tr>
            <td>ALAMAT :</td>
            <td>{{ $alamat_kampus }}</td>
        </tr>
    </table><br>
    <div>
        <form align="center"action="/biodata" method="GET">
            <button type="submit">Kembali</button>
        </form>
    </div>
</div>
