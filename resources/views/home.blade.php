<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pagina Inicial</title>
        <link rel="stylesheet" href="css/index.css">


    </head>
        <body>
            <header >
                
                <ul class ="menu">
                    <li><a  href="about.php">Sobre nós</a></li>
                </ul>
                
                <ul class="login">
                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>
                </ul>
                <div class="logo"> 
                    <a href="index.html"><img src="..//img/pucpng.png" alt="logoPuc"></a>
                </div>
            </header>
            <main>
            <nav>
              <div class="usuario">
                @if (session()->exists('statusRegister')) 
                    <div class="Sucessfullyregistered">
                        <ul>  
                           <li> {{ session('statusRegister') }}  </li>
                        </ul>
                    </div>
                @endif
              </div>
                <h1>Olá, este é me trabalho da faculdade!</h1>
            </nav>
            </main>
        </body>
        <style>*{
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
                    
.login{
  position: absolute;
  list-style: none;
  top: 52px;
  right: 10%;
}

.login li{
  display: inline-block;
  margin-right: 10px;
  color: rgb(150, 0, 0);
  }

.login a {
  text-decoration: none;
  color: rgb(150, 0, 0);
  margin-left: 0px;
  }
.login a:hover{
  color: rgb(255, 255, 255);
}
    
.logo img{
  height: 65px;
  width: auto;
  position: absolute;
  top: 7px;
  left: 35px;
}

main{
  position: relative;
  height: 1000px;
  
}

nav{
  text-align: center;
}
nav h1{
  margin-top: 100px;
  font-size:28px;
  color: #333;
}
.Sucessfullyregistered{
  position: absolute;
  list-style: none;
  top: 52px;
  right: 50px;
}
    </style>

</html>