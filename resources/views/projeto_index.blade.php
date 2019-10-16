@forelse ($projetos as $projeto) 
     {{$projeto->nome}}
     {{$projeto->lider}}
     {{$projeto->ano}}
     <a href="/Projeto/{{$projeto->id}}"> visualizar </a>
     <a href="/Projeto/{{$projeto->id}}/edit"> editar </a>
     <form method="POST" action="/Projeto/{{$projeto->id}}">
     @csrf
     @method("delete")
     <input type="submit" value="Excluir"/> 
     </form>
     <br>
		@empty
       <p>Nenhum Projeto Encontrado! </p>
@endforelse

<a href="/Projeto/create">Criar novo Projeto</a>