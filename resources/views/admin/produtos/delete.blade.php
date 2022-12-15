    <!-- Modal Structure -->
    <div id="delete-{{ $produto->id }}" class="modal">
        <div class="modal-content">
            <h4><i class="material-icons">delete</i> Tem certeza?</h4>

            <div class="row">
                <p>Tem certeza que deseja excluir {{ $produto->nome }} ?</p>
            </div>

                <div class="modal-footer">

                    <form action="{{ route('admin.produto.delete', $produto->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="waves-effect waves-green btn blue right">Excluir</button>
                    </form>
                    <button class="modal-close waves-effect waves-green btn red right" style="margin-right: 5px">Cancelar</button>

                </div>


            </div>
        </div>

    </div>
