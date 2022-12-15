<!-- Modal Structure -->
<div id="create" class="modal">
    <div class="modal-content">

        <form action="{{ route('admin.produto.store') }}" method="POST" id="form-create" enctype="multipart/form-data" class="col s12">

            <h4><i class="material-icons">card_giftcard</i> Novo produto</h4>

            @csrf

            <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">

            <div class="row">

                <div class="input-field col s6">
                    <input id="nome" name="nome" type="text" class="validate">
                    <label for="nome">Nome</label>
                </div>

                <div class="input-field col s6">
                    <input id="preco" name="preco" type="number" min="1" class="validate">
                    <label for="preco">Preço</label>
                </div>

                <div class="input-field col s12">
                    <input id="descricao" name="descricao" type="text" class="validate">
                    <label for="descricao">Descrição
                </div>

                <div class="col s12">
                    <label style="font-size: 1rem">Categoria</label>
                    <select name="id_categoria" class="browser-default">
                        <option value="" disabled selected>Escolha uma opção</option>

                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="file-field input-field col s12">
                    <div class="btn">
                        <span>Imagem</span>
                        <input name="imagem" type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>

            </div>

            <div class="modal-footer">

                <button type="submit" class="waves-effect waves-green btn green right">Cadastrar</button>
                <a href="#!" onclick="resetarModalCreate()" class="modal-close waves-effect waves-green btn blue right" style="margin-right: 5px">Cancelar</a>

            </div>

        </form>
    </div>
</div>
