<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>
 
	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>judul</th>
			<th>isi</th>
			<th>gambar</th>
			<th>lokasi</th>
			<th>linkyt</th>
            <th>gfrom</th>
			<th>kategori</th>
		</tr>
		@foreach($bppup as $b)
		<tr>
			<td>{{ $b->judul }}</td>
			<td>{{ $b->isi }}</td>
			<td>{{ $b->gambar }}</td>
			<td>{{ $b->lokasi }}</td>
            <td>{{ $b->linkyt }}</td>
			<td>{{ $b->googleform }}</td>
            <td>{{ $b->kategori }}</td>
			
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>