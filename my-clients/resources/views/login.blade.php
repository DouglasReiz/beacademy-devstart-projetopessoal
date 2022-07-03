<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;800;900&family=Poppins:wght@300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

</head>
<body>

    <div class="s-login">

        <div class="container">
            <div class="title-login">
                <h2>Faça seu login</h2>
            </div>
    
            <form class="form-login" action="#" method="post">
                <div class="input-group">
                    <input 
                    type="text" 
                    class="l-email" 
                    placeholder="Email aqui">
                </div>
    
                <div class="input-group">
                    <input type="password"
                    class="l-password"
                    placeholder="Senha">
                </div>

                <div class="input-button">
                    <button class="btn-primary">Login</button>
                
                    <button class="btn-primary">Cadastre-se</button>
                </div>
            </form>
    
        </div>
    </div>






</body>
</html>