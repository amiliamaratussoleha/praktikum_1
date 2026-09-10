<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->

    <h1 align="center" style="margin-top:40px;"">{{ $judul }}</h1><br>

    <table border=1 align="center" height=25% width=60% cellpadding=2 cellspacing=1>
        <tr align="center">
            <td align="center"><b><b></td>
            <td><b>Nama<b></td>
            <td><b>Tempat, Tanggal lahir<b></td>
            <td><b>Agama<b></td>
            <td><b>Pendidikan<b></td>
            <td><b>Pekerjaan<b></td>
        </tr>
        <tr>
            <td align="center">{{ $no }}</td>
            <td>Tohir (Alm)</td>
            <td>{{ $tgl_ayah }}</td>
            <td>{{ $agama_ayah }}</td>
            <td>{{ $pendidikan_ayah }}</td>
            <td>{{ $pekerjaan_ayah }}</td>
        </tr>
        <tr>
            <td align="center">{{ $no2 }}</td>
            <td>Sumiriyah</td>
            <td>{{ $tgl_ibu }}</td>
            <td>{{ $agama_ibu }}</td>
            <td>{{ $pendidikan_ibu }}</td>
            <td>{{ $pekerjaan_ibu }}</td>
        </tr>
        <tr>
            <td align="center">{{ $no3 }}</td>
            <td>Amilia Maratus Soleha</td>
            <td>{{ $tgl_anak1 }}</td>
            <td>{{ $agama_anak1 }}</td>
            <td>{{ $pendidikan_anak1 }}</td>
            <td>{{ $pekerjaan_anak1 }}</td>
        </tr>
        <tr>
            <td align="center">{{ $no4 }}</td>
            <td>Siti Aisyah</td>
            <td>{{ $tgl_anak2 }}</td>
            <td>{{ $agama_anak2 }}</td>
            <td>{{ $pendidikan_anak2 }}</td>
            <td>{{ $pekerjaan_anak2 }}</td>
        </tr>

    </table>
    <br>
    <table border=1 align="center" height=30% width=60% cellpadding=2 cellspacing=1>
        <tr align="center">
            <td colspan="2" align="center"><b>Foto Keluarga<b></td>
        </tr>
        <tr>
            <td align="center"><img src="{{ asset($foto1) }}" width="300" height="400"></td>
            <td align="center"><img src="{{ asset($foto2) }}" width="350" height="400"></td>
        </tr>
    </table><br>
    <div>
        <form align="center" action="/biodata" method="GET">
            <button type="submit">Kembali</button>
        </form>
    </div>
</div>
