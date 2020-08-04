<!DOCTYPE html>
<html>
<head>
	<title>apa aja boleh</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>id</th>
			<th>nama</th>
			<th>jurusan</th>
			<th>status</th>
		</tr>

		@foreach ($tampil as $data)
		<tr>
			<td>{{$data ['id']}}</td>
			<td>{{$data ['nama']}}</td>
			<td>{{$data ['jurusan']}}</td>
			<td>{{$data ['status']}}</td>

		</tr>
		@endforeach;
	</table>

</body>
</html>