
<x-layout title="Seus Livros">
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Titulo</th>
                <th scope="col">ISBN</th>
                <th scope="col">Autor</th>
                <th scope="col">Lançamento</th>
                <th scope="col">Açôes</th>
              </tr>
            </thead>
            @foreach($dados as $dado)
            <tbody>
              <tr>
                <td>{{$dado->titulo}}</th>
                <td>{{$dado->isbn}}</td>
                <td>{{$dado->autor}}</td>
                <td>{{$dado->lancamento}}</td>
                <td>
                  <a class="btn btn-primary" href="{{route('editar.biblioteca', $dado->id)}}" role="button">Editar</a>
                  <form action="{{route('destroy.biblioteca', $dado->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Excluir</button>
                  </form>
                </td>
              </tr>
            </tbody>
            @endforeach
          </table>
    </div>
</x-layout>

