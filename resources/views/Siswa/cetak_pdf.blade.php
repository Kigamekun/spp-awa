<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h4>Pembayaran Spp</h4>
		<h5>Data Siswa</h5>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nisn</th>
            <th>Nis</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Kompetensi Keahlian</th>
            <th>Alamat</th>
            <th>No.Telp</th>
            <th>Tahun</th>
            <th>Nominal</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($siswa as $p)
			<tr>
				<td>{{ $i++ }}</td>
                <td>{{ $p->nisn}}</td>
                <td>{{ $p->nis}}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ !is_null($p->id_kelas) ? $p->kelas->nama_kelas :'' }}</td>
                <td>{{ !is_null($p->id_kelas) ? $p->kelas->kompetensi_keahlian:'' }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ $p->no_telp }}</td>
                <td>{{ !is_null($p->id_spp) ? $p->spp->tahun :'' }}</td>
                <td>{{ !is_null($p->id_spp) ? $p->spp->nominal :'' }}</td>

			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>
