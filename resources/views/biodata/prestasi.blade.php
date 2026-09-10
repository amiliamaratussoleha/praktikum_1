<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <h1 align="center" style="margin-top:30px">{{ $judul }}</h1>
    <p align="center">
        {{ $p1 }}<br>
        {{ $p2 }}
    </p><br>

    <table border=1 align="center" height=30% width=70% cellpadding=2 cellspacing=1>
        <tr>
            <td colspan=6 align=center valign=center><b>DAFTAR PRESTASI & PENGHARGAAN<b></td>
        </tr>
        <tr align="center">
            <td><b>{{ $no }}</b> </td>
            <td><b>{{ $prestasi }}</b></td>
            <td><b>{{ $kegiatan }}</b></td>
            <td><b>{{ $Tingkat }}</b></td>
            <td><b>{{ $Penyelenggara }}</b></td>
            <td><b>{{ $tahun }}</b></td>
        </tr>
        <tr>
            <td align="center">{{ $no1 }}</td>
            <td>{{ $prestasi1 }}</td>
            <td>{{ $kegiatan1 }}</td>
            <td>{{ $Tingkat1 }}</td>
            <td>{{ $Penyelenggara1 }}</td>
            <td>{{ $tahun1 }}</td>
        </tr>
        <tr>
            <td align="center">{{ $no2 }}</td>
            <td>{{ $prestasi2 }}</td>
            <td>{{ $kegiatan2 }}</td>
            <td>{{ $Tingkat2 }}</td>
            <td>{{ $Penyelenggara2 }}</td>
            <td>{{ $tahun2 }}</td>
        </tr>
        <tr>
            <td align="center">{{ $no3 }}</td>
            <td>{{ $prestasi3 }}</td>
            <td>{{ $kegiatan3 }}</td>
            <td>{{ $Tingkat3 }}</td>
            <td>{{ $Penyelenggara3 }}</td>
            <td>{{ $tahun3 }}</td>
        </tr>
        <tr>
            <td align="center">{{ $no4 }}</td>
            <td>{{ $prestasi4 }}</td>
            <td>{{ $kegiatan4 }}</td>
            <td>{{ $Tingkat4 }}</td>
            <td>{{ $Penyelenggara4 }}</td>
            <td>{{ $tahun4 }}</td>
        </tr>
        <tr>
            <td align="center">{{ $no5 }}</td>
            <td>{{ $prestasi5 }}</td>
            <td>{{ $kegiatan5 }}</td>
            <td>{{ $Tingkat5 }}</td>
            <td>{{ $Penyelenggara5 }}</td>
            <td>{{ $tahun5 }}</td>
        </tr>
        <tr>
            <td align="center">{{ $no6 }}</td>
            <td>{{ $prestasi6 }}</td>
            <td>{{ $kegiatan6 }}</td>
            <td>{{ $Tingkat6 }}</td>
            <td>{{ $Penyelenggara6 }}</td>
            <td>{{ $tahun6 }}</td>
        </tr>
        <tr>
            <td align="center">{{ $no7 }}</td>
            <td>{{ $prestasi7 }}</td>
            <td>{{ $kegiatan7 }}</td>
            <td>{{ $Tingkat7 }}</td>
            <td>{{ $Penyelenggara7 }}</td>
            <td>{{ $tahun7 }}</td>
        </tr>

        <tr>
            <td align="center">{{ $no8 }}</td>
            <td>{{ $prestasi8 }}</td>
            <td>{{ $kegiatan8 }}</td>
            <td>{{ $Tingkat8 }}</td>
            <td>{{ $Penyelenggara8 }}</td>
            <td>{{ $tahun8 }}</td>
        </tr>
        <tr>
            <td align="center">{{ $no9 }}</td>
            <td>{{ $prestasi9 }}</td>
            <td>{{ $kegiatan9 }}</td>
            <td>{{ $Tingkat9 }}</td>
            <td>{{ $Penyelenggara9 }}</td>
            <td>{{ $tahun9 }}</td>
        </tr>
    </table><br>
    <table border=1 align="center" height=20% width=70% cellpadding=2 cellspacing=1>
        <tr align="center">
            <td colspan="2" align="center"><b>Sedikit Moment Foto Prestasi<b></td>
        </tr>
        <tr>
            <td align="center"><img src="{{ asset($foto) }}" width="1000" height="250">
            </td>
        </tr>
    </table><br>
    <div>
        <form align="center" action="/mybio" method="GET">
            <button type="submit">Kembali</button>
        </form>
    </div>
</div>
