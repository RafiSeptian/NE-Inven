<table>
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Pegawai</th>
			<th>Jumlah</th>
			<th>Tanggal Pinjam</th>
		</tr>
	</thead>
	<tbody>
		@foreach($peminjaman as $data)
			<tr>
				<td>{{ $loop->index + 1 }}</td>
				<td>{{ $data->detail->inventaris->nama }}</td>
				<td>{{ $data->pegawai->nama_pegawai }}</td>
				<td>{{ $data->detail->jumlah }}</td>
				<td>{{ $data->tanggal_pinjam }}</td>
			</tr>
		@endforeach
	</tbody>
</table>