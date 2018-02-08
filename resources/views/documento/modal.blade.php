
<div class="modal fade" id="modal-delete-{{$cat->id_cata_doc}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    {{Form::Open(array('action'=>array('CategoriaDocumentoController@destroy',$cat->id_cata_doc),'method'=>'delete'))}}
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Eliminar categoria?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <p>Confirme si desea Eliminar la categoria {{$cat->tipo_doc}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>
        </div>
    </div>
    {{Form::Close()}}
</div>