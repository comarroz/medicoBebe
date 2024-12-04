<x-layout titulo="Cadastrar Bebê">
    <form action="cadastrar/salvar" method="GET">
        @csrf <!-- Libera as portas de cadastro -->
        <label name="dataCompromisso">Data de  Nascimento</label>
        <input type="date" name="dataEvento">
        <br><br>

        <label number="CPF">CPF</label>
        <textArea type="number" number="numero"></textArea>
        <br><br>

        <label name="descricao">Nome Bebê</label>
        <textArea type="text" name="nomeBebe"></textArea>
        <br><br>

        <label number="descricao">CPF Mãe Bebê</label>
        <textArea type="numer" number="numero"></textArea>
        <br><br>

        <label number="descricao">Nome da Mãe</label>
        <textArea type="text" name="nomeMae"></textArea>
        <br><br>

       

        <button type="submit">Salvar</button>
    </form>
    <a href="/index"><button>Voltar</button></a>

</x-layout>