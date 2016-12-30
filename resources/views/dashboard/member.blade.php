@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">Dashboard</h2>
					</div>
					<div class="panel-body">
						Selamat Datang di Larapus.
						<table class="table">
							<tbody>
								<tr>
									<td class="text-muted">Buku dipinjam</td>
									<td>
										@if($borrowLogs->count() == 0)
											Tidak ada buku dipinjam
										@endif
										<ul>
											@foreach($borrowLogs as $borrowLog)
												<li>{{ $borrowLog->book->title }}</li>
											@endforeach
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection