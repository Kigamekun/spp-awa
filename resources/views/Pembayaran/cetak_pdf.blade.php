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
		<h5>Data Pembayaran</h5>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>NISN</th>
				<th>Nama</th>
				<th>Tanggal Bayar</th>
				<th>Nama Petugas</th>
				<th>Bulan</th>
				<th>Tahun</th>
				<th>Nominal</th>
				<th>Jumlah Bayar</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($pembayaran as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $p->nisn}}</td>
				<td>{{ $p->siswa->nama}}</td>
				<td>{{ $p->tgl_bayar }}</td>
				<td>{{ $p->petugas->nama_petugas }}</td>
				<td>{{ $p->bulan_dibayar }}</td>
				<td>{{ $p->tahun_dibayar }}</td>
				<td>{{ $p->spp->nominal }}</td>
				<td>{{ $p->jumlah_bayar}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>
