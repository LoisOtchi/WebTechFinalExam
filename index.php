<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
    /* display: inline-block; */
    width: 50%;
    height: 100%;
    background-color: lightsteelblue;
}
</style>
<body>
    <header>
        <div>
            <h1 style="color:darkslateblue;font-size:40px;text-align:center"><b><i>WELCOME TO CASPERPRO</i></b></h1>  
        </div>
        <form>
            <!-- SIGNUP button -->
            <button type="button"><b><a href="sign_up.php">Sign Up!</a></b></button><br><br>
                
        
            <!--CUSTOMERS button-->
            <button type="button"><b><a href="customers.php">CUSTOMERS</a></b></button>
            <img src="data:image/png;base64,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" alt="Customersicon" width="25%" height="25%" />

            <!-- GHOSTWRITERS button -->
            <button type="button"><b><a href="ghost_writer.php">GHOSTWRITERS</a></b></button>
            <img src="data:image/png;base64,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" alt="Ghostwritersicon" width="25%" height="25%"/><br><br>

            <!-- ESSAYS button -->
            <button type="button"><b><a href="essay.php">ESSAYS</a></b></button>
            <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/essay-2274856-1893592.png"alt="Essayicon" width="25%" height="25%" /><br><br>

                <button type="button"><a href="login_page.php">Login Here</a></button>
            
        </form>
        
       



    </header>
    
    
</body>
<hr> </hr>
	<Footer>

	
	<div>
		<h5>Contact Us</h5>
		<p>Postal Address P.O Box CT 6324 Cantonments, Accra</p>
		<p>Phone & Email: casperPro@outlook.com</p>
		<p>See Also</p>
	</div>
	<span>© CasperPro Limited. Est. 2010.  All rights reserved. </span>
		
	</Footer>
</html>