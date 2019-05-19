<?php // panggil koneksi ke database
require_once '../config/database.php';

$id_member = $_GET['id'];
$query = "SELECT * FROM member WHERE id_member = '$id_member'";
$sql = mysqli_query($db, $query);
$member = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
		<title>Edit Member</title>
	</head>
	<body>
		<div class="container-fluid" style="background:linear-gradient(40deg, #90CAF9, #673AB7);">
			<div class="row" style="height:100vh;">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" style="margin-top:10%;">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="text-center">Edit Member</h3><hr>
							<form role="form" action="../process/edit_proses.php?id=<?php echo $member['id_member']?>" method="post">
								<div class="form-group">
									<label for="nama_lengkap">Nama Lengkap</label>
									<input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="<?php echo $member['nama_lengkap']; ?>">
								</div>
								<div class="form-group">
									<label for="telepon">Telepon</label>
									<input type="number" name="telepon" class="form-control" id="telepon" value="<?php echo $member['telepon']; ?>">
								</div>
								<div class="form-group">
									<label for="tanggal_bergabung">Tanggal Bergabung</label>
									<input type="date" name="tanggal_bergabung" class="form-control" id="tanggal_bergabung" value="<?php echo $member['tanggal_bergabung']; ?>">
								</div>
								<div class="form-group">
									<button type="submit" name="selesai" class="btn btn-lg btn-success" style="width:49%;"><span class="glyphicon glyphicon-ok-sign"></span> Selesai</button>
									<a href="../index.php" class="btn btn-lg btn-danger" style="width:49%;"><span class="glyphicon glyphicon-remove-sign"></span> Kembali</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>