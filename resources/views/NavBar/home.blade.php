@extends('layout.plantilla')
@section('title')
  Home
@endsection

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Plantilla de móvil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
	<style type="text/css">



body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
		  margin: 0;
}

		.mobile {
      display: flex;
      margin: auto !important;
      background-color: #000;
      border-radius: 20px;
      height: 667px;
      margin: 20px auto;
      overflow: hidden;
      width: 375px;
      box-shadow: 0 0 0 1px #222, 0 0 20px #444;
      position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
	}

	.mobile:before {
  	  display: flex;
			background-color: #000;
			border-radius: 20px;
			height: 667px;
			margin: 20px auto;
			overflow: hidden;
			width: 375px;
			box-shadow: 0 0 0 1px #222, 0 0 20px #444;
	}

	.mobile:after {
    display: flex;
		background-color: #ccc;
		border-radius: 50%;
		content: "";
		height: 25px;
		left: 50%;
		margin-left: -12.5px;
		position: absolute;
		top: -20px;
		width: 25px;
	}

  
.screen {
  position: absolute;
  top: 40px;
  left: 20px;
  right: 20px;
  bottom: 20px;
  background-color: white;
  border-radius: 10px;
}

.bottom-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: absolute;
  bottom: 100px;
  left: 0;
  right: 0;
  margin: 0 auto;
  width: 200px;
}

.button-rounded {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.red {
  background-color: #ff3b30;
}

.green {
  background-color: #4cd964;
}

	</style>
</head>
<body>
	<div class="mobile"> 
  <div class="screen">
    <div class="bottom-bar">
      <div class="button-rounded red">
        <i class="fas-solid fa-phone fa-beat-fade"></i>
      </div>
      <div class="button-rounded green">
        <i class="fas-solid fa-phone fa-beat-fade"></i>
      </div>
    </div>
  </div>

  </div>
</body>
</html>
@endsection
