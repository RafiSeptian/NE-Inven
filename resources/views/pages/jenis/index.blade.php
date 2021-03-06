@extends('layouts.dashboard')

@section('title')
	| Jenis
@endsection

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-md-4">
								<h4>Jenis</h4>
							</div>
							<div class="col-md-8 d-flex justify-content-end">
								<a href="{{ route('jenis.create') }}" class="btn btn-primary" id="btn-create">
									<i class="fas fa-plus"></i> Tambah Jenis
								</a>

								<a href="{{ route('jenis.excel') }}" class="btn btn-success ml-3">
									<i class="fas fa-table"></i> Download Excel
								</a>

								<a href="{{ route('jenis.pdf') }}" class="btn btn-danger ml-3">
									<i class="fas fa-file-pdf"></i> Download PDF
								</a>

								<a href="#" class="btn btn-warning ml-3" id="btn-print" data-title="Data Jenis Barang">
									<i class="fas fa-print"></i> Print Laporan
								</a>
							</div>
						</div>
					</div>

					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-stripped" id="tableJenis">
							<thead>
								<tr>
									<th>
										No
									</th>
									<th>
										Nama Jenis
									</th>
									<th>
										Kode Jenis
									</th>
									<th>
										Keterangan
									</th>
									<th>
										Aksi
									</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
						</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('script')

	<script>
		 $(document).ready(function(){
               $('#tableJenis').DataTable({
                    responsive: true,
                    processing:true,
                    serverSide:true,
                    ajax: "{{ route('jenis.data') }}",
                    columns : [
                         {data: "DT_RowIndex", orderable: false, searchable: false},
                         {data: "nama_jenis"},
                         {data:'kode_jenis'},
                         {data:'keterangan'},
                         {data:'action', orderable: false, searchable: false},
                    ]
               });  
          });
	</script>

@endpush