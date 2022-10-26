<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
	
<link rel="stylesheet" href="sweetalert.min.css">

</head>
<body>
<div class="d-flex justify-content-center align-items-center flex-column">
	<h1>Calculate your Value</h1>
	<div class=" m-3">
	<input type="text" id="input1">
	<input type="text" id="input2">
	<input type="text" id="result" readonly>
	</div>

	<div class="m-3">
	<button class="add btn btn-success">+</button>
	<button class="subs btn btn-success">-</button>
	<button class="mul btn btn-success" >*</button>
	<button class="div btn btn-success">/</button>
	</div>
</div>

	<script src="jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="ajax.js"></script>
	<script src="sweetalert.min.js"></script>
</body>
</html>