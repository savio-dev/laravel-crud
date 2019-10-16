<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form method="POST" action="{{url('/Projeto',$id)}}">
@csrf
@method("PUT")
  nome:<br>
  <input type="text" name="nome" value="{{$nome}}">
  <br>
  lider:<br>
  <input type="text" name="lider" value="{{$lider}}">
  <br>
  ano:<br>
  <input type="text" name="ano" value="{{$ano}}">
  <input type="submit" value="Submit">
</form> 
</body>
</html>