<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form method="POST" action="{{url('/Projeto')}}">
@csrf
  nome:<br>
  <input type="text" name="nome">
  <br>
  lider:<br>
  <input type="text" name="lider">
  <br>
  ano:<br>
  <input type="text" name="ano" >
  <input type="submit" value="Submit">
</form> 
</body>
</html>