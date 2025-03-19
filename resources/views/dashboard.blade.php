<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <script src="https://unpkg.com/imask"></script>

    </head>
        <body>
            <header >
                
                <ul class="menu">
                    <li><a href="{{route('home')}}">Pagina inicial</a></li>
                    <li><a href="{{route('estudantes.create')}}">Sobre Nós</a></li>    
                </ul>
                

                <div class="logo"> 
                    <img src="..//img/pucpng.png" alt="logoPuc"> 
                </div>
            </header>
            
            <main>  
                <nav>
                    <div class= "table-choose">
                        <h2>Selecione a tabela desejada</h2>
                        <form action="{{route('showTable')}}" method="post">
                            @csrf
                            <select name="table">
                                <option value="selecionar">Selecione</option>
                                <option value="Estudante">Estudantes</option>
                                <option value="Turma">Turmas</option>

                            </select>
                            <input type= "submit" value="Buscar"> 
                                
                                
                        </form>
                    </div>
                    <table>
                        
                        <thead class= "header">
                            <tr>
                                    {{dd(session('data'))}}
                                     @foreach($data as $d)
                                            dd($d)
                                        
                                        @endforeach
                                            <th scope='col'>$key</th>
                                        
                                        <th scope='col'>Editar</th>
                                        <th scope='col'>Excluir</th>
                                        <h2 class = "Selecione">Selecione uma tabela</h2>
                                    
                            </tr>
                        </thead>
                       

                    </table>
                </nav>
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
                    
                #login{
                    position: absolute;
                    list-style: none;
                    top: 35px;
                    right: 20%;
                }

                #login li{
                    display: inline-block;
                    margin-right: 20px;
                }

                #login a {
                text-decoration: none;
                color: white;
                }
    
                #login a:hover{
                color: rgb(150, 0, 0);
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
                .table-choose{
                    position: absolute;
                    top: 5%;
                    left: 40%;
                    text-align: center;
                }
                .table-choose form{
                    display: flex;
                    justify-content: center;
                    margin-top: 15px;
                    margin-bottom: 200px;
                }
                .table-choose select{
                    background-color:rgb(83, 146, 170);
                    color: white;
                    padding: 5px;
                    margin: 8px;
                    cursor: pointer;
                    border-radius: 5px;
                    border-color:#c3cdd1;
                
                }
                .table-choose input{
                    padding: 5px;
                    margin: 2x;
                    cursor: pointer;
                    border-radius: 5px;
                    border-color:#c3cdd1;
                }
                table{
                    position: absolute;
                    bottom:50%;
                    margin-left: 20%;
                    border-collapse: collapse;
                }
                .Selecione{
                    position: absolute;
                    top: 30%;
                    left: 43%;
                }

                th{
                    background-color: #c3cdd1;
                    color: white;
                    text-align: center;
                    padding: 7px;
                    border: 0.7px solid black;
                    position: sticky;
                }

                td{
                    background-color: white;
                    color: black;
                    text-align: center;
                    padding: 5px;
                    border: 0.7px solid black;
                }

                .btn-edit img , .btn-delete img{
                    width: 20px;
                    height: 20px;
                    margin-top: 2px;
                    
                }

                .btn-delete , .btn-edit{
                    background-color: transparent;
                    border: none;
                    cursor: pointer;
                }
                footer{
                    position: static;
                    bottom: 0;
                    width: 100%;
                    height: 50px;
                    background-color: #c3cdd1;
                    padding: 10px;
                }
            </style> 
        </body>
</html> 