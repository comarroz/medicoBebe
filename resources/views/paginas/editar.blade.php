<x-layout titulo="Editar">
    <form action="../atualizar/{{$dado->id}}" method="get">
        <label>Id </label>
        <input type="number" id="number" value="{{$dado->id}}" disabled required/>
        <br><br>
 
        <label>Data </label>
        <input type="date" id="dataEvento" name="dataEvento"  value="{{$dado->dataEvento}}" required/>
        <br><br>
 
        <label>Descrição </label>
        <input type="text" id="descricao" name="descricao" value="{{$dado->descricao}}" required/>
        <br><br>
 
        <button type="submit">Atualizar</button>
    </form>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>


        <div class="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>

    <a href="/excluir;/{{$dado->id}}"><button>Excluir</button></a>
    <a href="index"><button>Voltar</button></a>

</x-layout>