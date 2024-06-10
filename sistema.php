<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sistema de Cardápios </title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
  
       

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#"> <i class="fa-solid fa-building-wheat"></i> NutriEscola</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(página atual)</span></a>
            </li>


            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Usuarios</a>
                <a class="dropdown-item" href="#">Cidade</a>
                <a class="dropdown-item" href="#">Escola</a>
                <a class="dropdown-item" href="#">Cardápio</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="sair.php">Sair</a>
              </div>
            </li>

          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>
        </div>
      </nav>


      <div class="container-fluid">
        
        <!-- linha -->
        <div class="row">
            <!-- coluna -->
            <div class="col-md-3 menu">
              <ul class="menu">
                <li> <a href="" class="menu-item"> Usuários </a>  </li>
                <li> <a href="" class="menu-item"> Cidade </a>  </li>
                <li> <a href="" class="menu-item"> Escola </a>  </li>
                <li> <a href="" class="menu-item"> Cardápio </a>  </li>
                <li> <a href="sair.php" class="menu-item"> Sair </a>  </li>
              </ul>
              
            </div>
            <div class="col-md-9">

              <div class="row">
                <div class="col-md-4 card">

                  <form action="salvar.php">
                    <h3>Cadastro de usuário</h3>
                    <hr>
                    
                    
                    <div class="form-group">
                      <label> Código </label>
                      <input type="text" class="form-control" id="codigo" placeholder="Código">
                    </div>

                    <div class="form-group">
                      <label> Nome </label>
                      <input type="text" class="form-control" id="nome" placeholder="Nome">
                    </div>

                    <div class="form-group">
                      <label> Email </label>
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                      <label>Senha</label>
                      <input type="password" class="form-control" id="senha" placeholder="Senha">
                    </div>
          
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </form>  
                  
                </div>
                
                <div class="col-md card"> 
                  <table class="table " id="tabela">
                    <thead>
                      <tr>
                        <th scope="col" class="col-1">cód</th>
                        <th scope="col"> Nome </th>
                        <th scope="col"> Email </th>
                        <th scope="col" class="col-2"> Opções </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td> Asdrubo</td>
                        <td> Asdrubo@gmail.com</td>
                        <td> <a href="" title="Editar"> <i class="fa-solid fa-pen-to-square editar"></i> </a> 
                         <a href="" title="Excluir"> <i class="fa-solid fa-trash excluir"></i></a> </td>
                      </tr>
                    
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
            
        </div>

      </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>


    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
    <script src="script.js"></script>

</body>

</html>