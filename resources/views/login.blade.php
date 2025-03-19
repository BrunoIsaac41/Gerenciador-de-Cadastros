<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Entre em sua conta</title>
        <link rel="stylesheet" href="css/register.css">
        <script src="https://unpkg.com/imask"></script>
        

    </head>
        <body>
            <header >
                
                <ul class="menu">
                    <li><a  href="index.html">Pagina incial</a></li>
                    <li><a href="about.html">Sobre nós</a></li>
                </ul>
                
                <ul id = "notExists">
                    <li>Não tem uma conta?<a href="{{route('register')}}">Registre-se</a></li>
                </ul>

                <div class="logo"> 
                    <img src="/Gerenciador-de-Cadastros/public/assets/img/pucpng.png" alt="logoPuc"> 
                </div>
            </header>
            
            <main>  
                
                <form method="POST"  action="{{route('loginAuth')}}">

                        <h2>Login</h2>
                        @csrf
                        <input type="email" name="email" placeholder="Email" minlength="15" required>
                            

                        <input type="password" name="password" placeholder="Senha" required>
                     
                                    
                                    @if (session()->exists('status')) 
                                        <div class="{{session('status.type') == 'error' ? 'error' : 'sucessRegister'}}">
                                            <ul>  
                                               <li> {{ session('status.message') }}  </li>
                                            </ul>
                                        </div>
                                    @endif 
                                
                        <input type="submit" value ="login"></input>

                       
                    </form>
            
                    
                  
            </main>
      
        
        </body>
        <footer>
            <p>Desenvolvido por: Bruno Sansalone</p>
        </footer>
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
                    
            #notExists{
                position: absolute;
                list-style: none;
                top: 52px;
                right: 50px;
            }

            #notExists li{
                display: inline-block;
                margin-right: 35px;
                color: rgb(150, 0, 0);
                }

            #notExists a {
                text-decoration: none;
                color: white;
                margin-left: 10px;
                }
            #notExists a:hover{
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
                
            
  
            .error {
                background-color: #ffebee;
                border: 1px solid #ef5350;
                border-radius: 4px;
                color: #c62828;
                margin: 10px auto;
                padding: 10px;
                width: 280px;
                display: block;
            }

            .error ul, .sucessRegister ul {
                margin: 0;
                padding: 0;
                list-style: none;
            }

            .error ul, .sucessRegister li {
                text-align: center;
                font-size: 14px;
            }

            .sucessRegister{
                background-color:rgb(167, 255, 194);
                border: 1px solidrgb(28, 211, 83);
                border-radius: 4px;
                color:rgb(28, 202, 66);
                margin: 10px auto;
                padding: 10px;
                width: 280px;
                display: block;
            }
            
           </style>
</html>