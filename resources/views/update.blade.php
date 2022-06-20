<x-layout title="Edição de Livro">
    <div class="container">
        <form action="{{route('update.biblioteca', $dados->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="titulo" class="form-label">Nome do Livro</label>
              <input type="text" class="form-control" id="titulo" name="titulo" value="{{$dados->titulo}}" required>
            </div>
            <div class="mb-3">
              <label for="isbn" class="form-label">ISBN</label>
              <input type="text" class="form-control" id="isbn" name="isbn" value="{{$dados->isbn}}" required>
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Nome do Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" value="{{$dados->autor}}" required>
              </div>
            <div class="mb-3">
                <label for="lancamento" class="form-label">Ano de Lançamento</label>
                <input type="number" class="form-control" id="lancamento" name="lancamento" value="{{$dados->lancamento}}" required>
            </div>
            <button type="submit" class="btn btn-success">Atualizar</button>
          </form>
    </div>
</x-layout>