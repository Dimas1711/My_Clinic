
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
</head>
<body>
<div class="col-md-3"></div>
<div class="col-md-6 well">
	<h3 class="text-primary">Jurnalweb.com - Menghitung Umur Berdasarkan Tanggal Lahir</h3>
      <p>Baca tutorial lengkapnya disini</p>
        <hr style="border-top:1px dotted #ccc;"/>
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="form-inline">
            <label for="tanggal">Tanggal</label>
			<input type="date" name="tanggal" id="birthday">
            <button onclick="getAge();">USIA</button>
			<!-- <button class="btn btn-primary" onclick="getAge();">Hitung</button> -->
			<!-- <h2>Umur Anda adalah: <span id="result" class="text-primary"></span></h2> -->
		</div>
	</div>
</div>
</body>
</html>
<script>
function getAge() {
	var date = document.getElementById('birthday').value;
 
	if(date === ""){
		alert("Please complete the required field!");
    }else{
		var today = new Date();
		var birthday = new Date(date);
		var year = 0;
		if (today.getMonth() < birthday.getMonth()) {
			year = 1;
		} else if ((today.getMonth() == birthday.getMonth()) && today.getDate() < birthday.getDate()) {
			year = 1;
		}
		var age = today.getFullYear() - birthday.getFullYear() - year;
 
		if(age < 0){
			age = 0;
		}
		document.getElementById('result').innerHTML = age;
        
	}
}
</script>
    