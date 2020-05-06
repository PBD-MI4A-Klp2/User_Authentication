<!DOCTYPE html>
<html lang="en">
<head>
    <title>USER AUTHENTICATION</title>
    <style>
					body {
						background: -webkit-linear-gradient(bottom, #2dbd6e ,#a6f77b);
						background-repeat: no-repeat;
					}
					#card-content {
      					padding: 30px 60px;
                    }
					#card-title {
    					font-family: "Raleway Thin", sans-serif;
     					letter-spacing: 3px;
      					padding-bottom: 30px;
      					padding-top: 10px;
      					text-align: center;
					}
                    #card	{
						background: #fbfbfb;
						border-radius: 8px;
						box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
						height: 410px;
						margin: 6rem auto 8.1rem auto;
						width: 329px;
					}
					.underline-title {
      					background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
      					height: 2px;
      					margin: -1.1rem auto 0 auto;
      					width: 150px;
					}
					.form {
    					align-items: center;
    					display: table-footer-group;
   						flex-direction: column;
					}
					.form-border {
 					    background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
    					height: 1px;
    					width: 200px;
    					position: relative;
   						left: 20px; 
					}
					.form-content {
    					background: #fbfbfb;
    					border: none;
    					outline: none;
    					padding-top: 1px;
    					position: relative;
   						left: 20px;
					}
					#simpan-btn {
    					background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
    					border: none;
    					border-radius: 21px;
    					box-shadow: 0px 1px 8px #24c64f;
    					cursor: pointer;
    					color: white;
    					font-family: "Raleway SemiBold", sans-serif;
    					height: 40px;
    					margin: 0 auto;
    					margin-top: 80px;
    					transition: 0.25s;
    					width: 120px;
    					position: relative;
    					left: 100px;
					}
					#batal-btn {
    					border: none;
    					cursor: pointer;
    					color: #a6f77b;
    					font-family: "Raleway SemiBold", sans-serif;
    					height: 200px;
    					margin: 20 auto;
    					margin-top: 40px;
    					transition: 0.25s;
    					width: 200px;
    					position: relative;
    					left: 20px;
    					top: 10px;
					}
					#submit-btn:hover {
    					box-shadow: 0px 1px 18px #24c64f;
					}
				</style>
</head>
<body>
    <div id='card'>
        <div id='card-content'>
            <div id='card-title'>
            <h2>Login User</h2>
            <div class="underline-title"></div>
            </div>
        </div>
    
    <form action="sistem.php?op=in" method="post" class="form">
        <input type="text" class="form-content" name="usr" placeholder="Username">
    <div class="form-border"></div><br>
        <input type="password" class="form-content" name="psw" placeholder="Password">
    <div class="form=border"></div><br>
        <input id="simpan-btn" type="submit" value="Login">
    </form>
    </div>
</body>
</html>