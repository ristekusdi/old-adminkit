@extends('layouts.app')

@push('style')
	<style>
		.nested-sort {
			padding: 0;
		}

		.nested-sort--enabled li {
			cursor: move;
		}

		.nested-sort li {
			list-style: none;
			margin: 0 0 5px;
			padding: 10px;
			background: #fff;
			border: 1px solid #ddd;
		}

		.nested-sort li ol {
			padding: 0;
			margin-top: 10px;
			margin-bottom: -5px;
		}

		/* ns-dragged is the class name of the item which is being dragged */
		.nested-sort .ns-dragged {
			border: 1px solid red;
		}

		/* ns-targeted is the class name of the item on which the dragged item is hovering */
		.nested-sort .ns-targeted {
			border: 1px solid green;
		}
	</style>
	<link rel="stylesheet" href="{{ asset('css/notyf.min.css') }}">
@endpush

@push('script')
	<script src="{{ asset('js/notyf.min.js') }}"></script>
	<script src="{{ asset('js/nested-sort.umd.min.js') }}"></script>
	<script>
		new NestedSort({
			el: '#draggable',
			actions: {
				onDrop(data) {
					console.log(data);
					const url_refresh_sort_menu = document.querySelector('input[name="url_refresh_sort_menu"]').value;
					const csrf_token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
					fetch(url_refresh_sort_menu, {
						headers: {
							'Content-Type': 'application/json',
							'X-CSRF-TOKEN': csrf_token
						},
						method: 'POST',
						body: JSON.stringify({
							items: data
						})
					})
					.then(response => response.json())
					.then(result => {
						console.log(result);
					})
					.catch(error => {
						console.log(error);
					});
				}
			},
			listClassNames: 'list-group',
			listItemClassNames: 'list-group-item',
			nestingLevels: 4
		});
	</script>
@endpush

@section('content')
<h1 class="h3 mb-3">Menu Page</h1>
<div class="row">
	<div class="col">
		<a href="#" class="btn btn-primary float-end mb-2">Tambah</a>
	</div>
</div>
<div class="row">
	<div class="col">
		{!! load_nested_sortable() !!}
		<input type="hidden" name="url_refresh_sort_menu" value="{{ route('admin-rbac.menus.refresh') }}">
	</div>
</div>
@endsection
