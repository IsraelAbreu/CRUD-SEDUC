<x-layout title="Cadastro de Livro">
    <div class="container">
        <form action="{{route('store.biblioteca')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="titulo" class="form-label">Nome do Livro</label>
              <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="mb-3">
              <label for="isbn" class="form-label">ISBN</label>
              <input type="text" class="form-control" id="isbn" name="isbn" required>
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Nome do Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" required>
              </div>
            <div class="mb-3">
                <label for="lancamento" class="form-label">Ano de Lançamento</label>
                <input type="number" class="form-control" id="lancamento" name="lancamento" required>
            </div>
            <button type="submit" class="btn btn-success">Cadastrar</button>
          </form>    
    </div>
</x-layout>