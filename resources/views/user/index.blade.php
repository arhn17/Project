@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>DATA USER</h2>
    </div>
    <div class="card">            
            <div class="header">
            	 <ul class="header-dropdown m-r--5"></ul>
            </div>
            <div class="body">  
                <a href="{!! route('user.create') !!}" class="btn btn-primary">Add</a>
			<br>
			<br>
            <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
				<thead>
					<tr>
						<th class="text-center">Nama</th>
                    	<th class="text-center">Email</th>
                    	<th class="text-center">Status</th>
                    	<th class="text-center">Aksi</th>
                    </tr>
				</thead>
				<tbody>
					@foreach($users as $user)
						<tr>
							<td class="text-center">{!! $user->name !!}</td>
							<td class="text-center">{!! $user->email !!}</td>
                            <td class="text-center">
                                @if($user->status == 1)
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        Aktif (NonAktifkan)
                                    </a>
                                @else
                                    <a href="#" class="btn btn-sm btn-outline-secondary">
                                        Nonaktif (Aktifkan)
                                    </a>
                                 @endif
                                </td>
                            <!-- <td class="text-center">{!! $user->aksi !!}</td> -->
							<td class="text-center">
                                <a href="{{ route('user.show', [$user->id]) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="material-icons">account_balance_wallet</i>
                                </a>
                                <a href="{{ route('user.edit', [$user->id]) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="material-icons">mode_edit</i>
                                </a>
                                <button onclick="event.preventDefault();confirmDeletion('{{ route('user.destroy', [$user->id]) }}');" class="btn btn-sm btn-outline-danger">
                                    <i class="material-icons">delete</i>
                                </button>                      
                            </td>
						</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>
    </div>
</div>
@endsection