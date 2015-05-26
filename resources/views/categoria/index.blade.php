@extends('template.main')

@section('title', 'Categoria')

@section('content')
	<h4 class="left">Categoria</h4>
	<a href="#" class="button radius tiny right"> <i
		class="step fi-plus size-12"></i> Nova categoria
	</a>
	
	<hr>
	
	<table role="grid">
		<thead>
			<tr>
				<th width="800">Nome</th>
				<th width="170">Ações</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Content Goes Here</td>
				<td>
					<span data-tooltip aria-haspopup="true" title="Visualizar">
						<a href="#"><i class="step fi-eye size-24 action-icon"></i></a>
					</span>
					<span data-tooltip aria-haspopup="true" title="Editar">
						<a href="#"><i class="step fi-pencil size-24 action-icon"></i></a>
					</span> 
					<span data-tooltip aria-haspopup="true" title="Excluir">
						<a href="#"><i class="step fi-x size-24 action-icon"></i></a>
					</span>
				</td>
			</tr>
		</tbody>
	</table>
@stop
