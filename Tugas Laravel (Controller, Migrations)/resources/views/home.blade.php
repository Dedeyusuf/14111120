@extends('templates.index')
@section('content')
<form method="post">
<br>
<table widht="60%"
align="center">
	<tr>
	<th align="center" colspan="2">Login</th>
	</tr>

	<tr>
	<td>Username</td>
	<td><input type="text" name="username" size="80"></td>
	</tr>

	<tr>
	<td>Password</td>
	<td><input type="password" name="password" size="80"></td>
	</tr>

	<tr>
	<td colspan="2" align="center"><a href="{{URL('beranda')}}"><input type="button" value="Login" id="login" name="login"></a>
	<input type="button" value="Batal" name="batal"></td>
	</tr>
</table>
<br>
<br>
</form>

@stop