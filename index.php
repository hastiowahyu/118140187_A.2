<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>
<body>
    <form method="post" id="form_mahasiswa">
        <label>NIM  </label>
        <input type="number" name="nim"><br>
        <label>Nama </label>
        <input type="text" name="nama"><br>
        <label>Prodi</label>
        <label>angkatan </label>
        <input type="text" name="angkatan"><br>
        <select name="prodi">
            <option value="IF">Teknik Informatika</option>
            <option value="EL">Teknik Elektro</option>
            <option value="SI">Teknik Sipil</option>
            <option value="TG">Teknik Geofisika</option>
            <option value="MA">Matematika</option>
        </select>
    </form>
    <input type="button" name="btn_tampil" value="tambah">
    <hr>
    <div id="tampil_data"></div>
    <script>
        $(document).ready(function(){
            $('#tampil_data').load("tampil.php");
            var rename;
            $('#btn_tampil').click(function(){
                var data = $('#form_mahasiswa').serialize();
                var tampil = $('#btn_tampil').val();
                var nim = $("#nim").val();
				var nama = $("#nama").val();
				var prodi = $("#prodi").val();
                var angkatan = $("#angkatan").val();
                if(tampil=="tambah"){
                    $.ajax({
                        type    : 'POST',
                        url : "tambah.php",
                        data: data,
                        cache   : false,
                        success : function(data){
                            $('tampil_data').load("tampil.php");
                        }
                    });
                }else{
                    $("#btn_tampil").val("tambah");
					$.ajax({
						type: 'POST',
						url: "update.php",
						data: {
							nim: nim,
							nama: nama,
							prodi: prodi,
							angkatan: angkatan
						},
						cache: false,
						success: function(data) {
							$('#tampil_data').load('tampil.php');
						}

					});
					$("#nim").val("");
					$("#nama").val("");
                }
            });
            $("#tampil_data").on('click', '#Edit', function() {
                var nim = $(this).attr('value');
                rename = nim;
                var nama = $(this).attr('nama');
                var prodi = $(this).attr('prodi');
                var angkatan = $(this).attr('angkatan');
                $("#nim").val(nim);
                $("#nama").val(nama);
                $("#prodi").val(prodi);
                $("#angkatan").val(angkatan);
                $("#btn_tampil").val("Update");
            });
            $("#tampil_data").on("click", "#Delete", function() {
				var nim = $(this).attr("value");
				$.ajax({
					url: 'delete.php',
					type: 'POST',
					data: {
						nim: nim
					},
					success: function(data) {
						$('#tampil_data').load('tampil.php');
					}
				});
			});
        });
    </script>
</body>
</html>