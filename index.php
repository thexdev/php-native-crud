<?php
// panggil koneksi ke database
require_once 'config/database.php';

// ambil data dari database
$query = "SELECT * FROM member ORDER BY nama_lengkap ASC LIMIT 0, 10";
$sql = mysqli_query($db, $query);
$counter = 1;
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
		<title>PHP NATIVE CRUD</title>
	</head>
	<body>
		<div class="jumbotron text-center" style="background:linear-gradient(40deg, #64B5F6, #8E24AA);color:#ffffff;">
			<h1>Simple PHP Native CRUD with Bootstrap framework.</h1>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="text-center">
						<h3>Data Member INC grup</h3><hr>
						<p style="padding:10pt 0pt 0pt 10pt;">
							<a href="pages/tambah_member.php" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Member</a>
						</p>
					</div>
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>ID</th>
									<th>Nama Lengkap</th>
									<th>Telepon</th>
									<th>Tanggal Bergabung</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($sql as $member) : ?>
								<tr>
									<td><?php echo $counter++; ?></td>
									<td><?php echo $member['id_member']; ?></td>
									<td><?php echo $member['nama_lengkap']; ?></td>
									<td><?php echo $member['telepon']; ?></td>
									<td><?php echo $member['tanggal_bergabung']; ?></td>
									<td>
										<a href="pages/edit_member.php?id=<?php echo $member['id_member']; ?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
										<a href="process/hapus_proses.php?id=<?php echo $member['id_member']; ?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
									</td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>