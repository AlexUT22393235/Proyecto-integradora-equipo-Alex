<script  src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" ></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="body">
		<div class="veen">
			<div class="wrapper">
				<form id="login" tabindex="500">
          <img src="https://scontent.fisj1-1.fna.fbcdn.net/v/t39.30808-6/431854529_2076197986069430_3812056075368477322_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_ohc=OaaqAOq9aSYAX_Y9YSA&_nc_ht=scontent.fisj1-1.fna&oh=00_AfBEDoCWRoT0_FpxKZfw9vEsVlO03ZOSxOGFfygh-Lfpig&oe=65F1CE08"style="width: 190px">
					<h3>Identíficate con tu correo y contraseña</h3>
					<div class="mail">
						<input type="mail" name="">
						<label>Ingrese su correo</label>
					</div>
					<div class="passwd">
						<input type="password" name="">
						<label>Ingrese su contraseña</label>
					</div>
					<div class="submit">
						<button class="dark">ingresar</button>
					</div>
				</form>
				
			</div>
      <img src="./login.png" style="width: 700px; float: right;">

		</div>	
	</div>

<script>




</script>
	<style type="text/css">
		.site-link{
      padding: 5px 15px;
			position: fixed;
			z-index: 99999;
			background: #fff;
			box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);
			right: 30px;
			bottom: 30px;
			border-radius: 10px;
		}
		.site-link img{
			width: 30px;
			height: 30px;
		}

    .body{
			background: #325b87;
			transition: all .5s;
			padding: 1px;
      min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
		}
		.veen{
			width: 70%;
			margin: 100px auto;
			background: #F4F8FD;
      background-size: 700px;
      background-repeat:unset;
      background-position: right ;
			min-height: 400px;
			display:table;
			position: relative;
			box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);
		}
		.veen > div {
    
			display: table-cell;
			vertical-align: middle;
			text-align: center;
			color: #0D476D; //letras de backgruud
		}
		.veen button{
			background: #0D476D;
			//background-image: linear-gradient(90deg, #e0b722, #ff4931);
			display: inline-block;
			padding: 10px 30px;
			border: 3px solid #fff;
			border-radius: 50px;
			background-clip: padding-box;
			position: relative;
			color: #FFF;
			//box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);
			
		}
		.veen button.dark{
			border-color: #325B87;
			background: #325B87;
		}
		
		.veen button:active{
			box-shadow: none;			
		}
		.veen button:focus{
			outline: none;			
		}
		.veen > .wrapper {
			position: absolute;
			width: 40%;
			height: 120%;
			top: -10%;
			left: 5%;
			background: #fff;
			box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);
			transition: all .5s;
			color: #303030;
			overflow: hidden;
		}
		.veen .wrapper > form{
			padding: 15px 30px 30px;
			width: 100%;
			transition: all .5s;
			background: #fff;
			width: 100%; 
		}
.veen .wrapper > form:focus{
  outline: none;
}
		.veen .wrapper #login{
			padding-top: 20%;
      visibility: visible;
		}

		.veen .wrapper > form > div {
			position: relative;
			margin-bottom: 15px;
		}
		.veen .wrapper label{
			position: absolute;
			top: -7px;
			font-size: 12px;
			white-space: nowrap;
			background: #fff;
			text-align: left;
			left: 15px;
			padding: 0 5px;
			color: #999;
			pointer-events: none;
		}
		.veen .wrapper h3{
			margin-bottom: 25px;
		}
		.veen .wrapper input{
			height: 40px;
			padding: 5px 15px;
			width: 100%;
			border: solid 1px #999;
		}
.veen .wrapper input{
			height: 40px
			padding: 5px 15px;
			width: 100%;
			border: solid 1px #999;
		}
		.veen .wrapper input:focus{
			outline: none;
			border-color: #0D476D;
		}

		@media (max-width: 767px){
			.veen{
				padding: 5px;
				margin: 0;
				width: 100%;
				display: block;
			}
			.veen > .wrapper{
				position: relative;
				height: auto;
				top: 0;
				left: 0;
				width: 100%;
			}
			.veen > div{
				display: inline-block;
			}
			.splits{
				width: 50%;
				background: #fff;
				float: left;
			}

			.veen > .wrapper.move{
				left: 0%;
			}
		}

input:-webkit-autofill, textarea:-webkit-autofill, select:-webkit-autofill{
  box-shadow: inset 0 0 0 50px #fff
}
	</style>