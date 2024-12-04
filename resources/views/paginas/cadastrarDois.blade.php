<x-layout titulo="Cadastrar Médico">
    <form action="cadastrar/salvar" method="GET">
        @csrf <!-- Libera as portas de cadastro -->
      

        <label number="CPF">CPF</label>
        <textArea type="number" number="numero"></textArea>
        <br><br>

        <label number="CRM">CRM</label>
        <textArea type="number" number="numero"></textArea>
        <br><br>

        <label number="descricao">Nome</label>
        <textArea type="text" name="nome"></textArea>
        <br><br>

        <label number="descricao">Telefone</label>
        <textArea type="text" number="numero"></textArea>
        <br><br>

       

        <button type="submit">Salvar</button>
    </form>
    <a href="/index"><button>Voltar</button></a>

</x-layout>