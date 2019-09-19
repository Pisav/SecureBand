

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax | MyBand</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="css/wedstrijd_style.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
  <!-- navbar -->
	<div class="wedstrijd_navbar">

	   <div class="pages">
         <a href="index.php?page=wedstrijden"> <button>WEDSTRIJDEN</button></a>
         <a href="index.php?page=homepage"> <button>SPELERS</button></a>
         <a href="index.php?page=stadion"> <button>STADION</button></a>
     </div>

 <div class="search">
    <form>
      <input type="text" id="searchCountry" placeholder="Search.." name="search">

      <div id="txtHint"></div>
    </form>
</div>

	</div>
<script src="ajax/ajax.js"></script>
