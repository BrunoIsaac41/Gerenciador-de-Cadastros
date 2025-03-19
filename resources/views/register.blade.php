<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar-se</title>
        <script src="../script/formValidation.js"></script>
        <script src="https://unpkg.com/imask"></script>

    </head>
        <body>
            <header >
                
                <ul class="menu">
                    <li><a  href="index.html">Pagina incial</a></li>
                    <li><a href="about.html">Sobre nós</a></li>
                </ul>
                
                <ul id = "alreadyExists">
                    <li>Já possui uma conta?<a href="formLogin.php"> Login</a></li>
                </ul>

                <div class="logo"> 
                    <img src="..//img/pucpng.png" alt="logoPuc"> 
                </div>
            </header>
            
            <main>  
                
                <form  method="POST" action='{{route("registerAuth")}} '>

                        <h2>Cadastrar-se</h2>
                        @csrf

                        <input type="text" name="nome" value="{{old('nome')}}" placeholder='Nome' min="3" maxlength="55" required>

                        <input type="text" name="sobrenome" value="{{old('sobrenome')}}" placeholder='Sobrenome' minlength="3" maxlength="55" required>
                        
                        <input type="email" name="email" value="{{old('email')}}" placeholder='Email' minlength="15" required>
                     

                        <input type="tel" name="phone" placeholder="(DD) 99999-9999">
                            <script>
                                var telefoneMask = IMask(
                                document.getElementsByName('phone')[0], {
                                mask: '(00) 9 0000-0000'
                                });</script>                        

                        <input type="password" name="password" value="{{old('password')}}" placeholder='Crie uma senha' required>
                       
                        <input type="submit" value ="Cadastrar"></input>
                        
                        <span class="register-{{$errors->any() ? 'error' : 'sucessRegister'}}"
                                
                                @if ($errors->any())>

                                    <ul>
                                        @foreach($errors->all() as $error)
                                        @error('$error') <span class="text-danger">{{ $message }}</span> @enderror
                                        @endforeach
                                    </ul>
                                        
                               @endif 
       
                        </span>
                       
                       
                    </form>
            
                    
                  
            </main>
      
        
        </body>
        <style>
                *{
                    margin: 0px;
                    padding: 0px;
                }

                body {    
                    font-family: sans-serif;
                    background-color: #f4f4f4; 
                    position: relative;
                    }
                    
                header {
                    width: auto;
                    height: 80px;
                    display: flex;
                    align-items: last baseline;
                    background-color: #c3cdd1;
                    position: relative;
                    box-shadow: 0px 2px 4px -1px rgb(0,0,0,0.2),
                    0 4px 5px 0px rgba(0, 0, 0, 0.14), 
                    0 1px 10px 0 rgba(0, 0, 0, 0.12);
                    }
                    
                .menu {
                    display: flex;
                    position: absolute;
                    list-style: none; 
                    margin-left: 150px;
                    margin-bottom: 7px ;
                    width: auto;
                }
                
                .menu li a{
                    display: flex; 
                    margin-left: 20px;
                    text-decoration: none; 
                    color: white; 
                    font-size: 24px ;
                    
                }
                
                .menu li a:hover {
                    color: rgb(150, 0, 0); 
                }
                    
            #alreadyExists{
                position: absolute;
                list-style: none;
                top: 52px;
                right: 50px;
            }

            #alreadyExists li{
                display: inline-block;
                margin-right: 35px;
                color: rgb(150, 0, 0);
                }

            #alreadyExists a {
                text-decoration: none;
                color: white;
                margin-left: 10px;
                }
            #alreadyExists a:hover{
                color: rgb(150, 0, 0);
            }


            .logo img{
                    height: 65px;
                    width: auto;
                    position: absolute;
                    top: 7px;
                    left: 35px;
                }


            form{
                position: relative;
                max-width: 400px;
                display: block;
                margin: 150px 650px;
                display: block;
                font-size: 13px;
                text-align: center;
                
            }
            form input{
                    height: 22px;
                    width: 280px;
                    margin: 5px;
                    padding-left: 5px;
                }
                
            
  
            .register-error {
                background-color: #ffebee;
                border: 1px solid #ef5350;
                border-radius: 4px;
                color: #c62828;
                margin: 10px auto;
                padding: 10px;
                width: 280px;
                display: block;
            }

            .register-error ul {
                margin: 0;
                padding: 0;
                list-style: none;
            }

            .register-error li {
                text-align: center;
                font-size: 14px;
            }
        </style>

</html>