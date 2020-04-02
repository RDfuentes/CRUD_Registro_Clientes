<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$clien->id_cliente}}">
	{{Form::Open(array('action'=>array('ClientesController@destroy',$clien->id_cliente),'method'=>'delete'))}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn btn-danger">
                     <span aria-hidden="true">CERRAR</span>
                </button>
			</div>
			<div class="modal-body">
				<p>Confirme si desea Eliminar al cliente</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Confirmar</button>
			</div>
		</div>
	</div>
	{{Form::Close()}}

</div>