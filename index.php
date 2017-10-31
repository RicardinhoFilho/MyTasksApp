<!DOCTYPE html>
<html>
<head>
  <title>Lista de tarefas WEB1</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <style media="screen">
    .alert a:hover{
      text-decoration: none;
    }
    .alert .tarefa {
      font-size: 1.3em;
    }

    h3.panel-title{
      font-weight: bold;
    }
  </style>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-xs-offset-3 col-xs-6">
      <h1 class="page-header">Lista de tarefas WEB1</h1>


      <form>
        <div class="form-group">
          <label class="sr-only" for="inputTarefa">Inserir nova tarefa</label>
          <input required type="text" name="nova-tarefa" class="form-control" id="inputTarefa" placeholder="Inserir nova tarefa">
        </div>
      </form>

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            <span class="glyphicon glyphicon-list"></span>
            Tarefas pendentes
          </h3>
        </div>
        <div class="panel-body">
          <!-- INICIO TAREFA PENDENTE  -->
          <div class="alert alert-info" role="alert">
            <span class="tarefa">
              <span class="glyphicon glyphicon-chevron-right"></span>
              Tarefa 1!
            </span>
            <div class="pull-right">
              <a href="#">
                <button aria-label="Feito" class="btn btn-sm btn-success" type="button">
                  <span class="glyphicon glyphicon-ok"></span> Feito!
                </button>
              </a>

              <a href="#">
                <button aria-label="Editar" class="btn btn-sm btn-info" type="button">
                  <span class="glyphicon glyphicon-edit"></span>
                </button>
              </a>

              <a href="#">
                <button aria-label="Remover" class="btn btn-sm btn-danger" type="button">
                  <span class="glyphicon glyphicon-trash"></span>
                </button>
              </a>

            </div>
          </div>
          <!-- FIM TAREFA PENDENTE -->
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            <span class="glyphicon glyphicon-ok"></span>
            Tarefas concluídas
          </h3>
        </div>
        <div class="panel-body">
          <!-- INICIO TAREFA CONCLUIDA -->
          <div class="alert alert-success" role="alert">
            <span class="tarefa">
              <span class="glyphicon glyphicon-chevron-right"></span>
              Tarefa N!
            </span>
            <div class="pull-right">
              <a href="#">
                <button aria-label="Desfazer" class="btn btn-sm btn-warning" type="button">
                  <span class="glyphicon glyphicon-remove"></span> Desfazer
                </button>
              </a>
            </div>
          </div>
          <!-- FIM TAREFA CONCLUIDA -->
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
