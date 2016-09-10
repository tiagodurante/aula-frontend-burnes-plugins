<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Datatables</title>

    <script src="js/jquery-3.1.0.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="js/jquery.dataTables.min.js" charset="utf-8"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css" media="screen" title="no title">
    <script type="text/javascript">
      $(document).ready(function(){
        $("#alunos").DataTable({
          "language":{
            "lengthMenu":"Mostrar _MENU_ registros por página",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty":"Nenhum registro",
            "infoFiltered":"filtrados de _MAX_ registros"
          }
        });
      });
    </script>
  </head>
  <body>
    <h1>Datatables</h1>

    <table id="alunos" class="display table table-bordered table-hover table-striped">
      <thead>
        <tr>
          <th>
            Nome do aluno
          </th>
          <th>
            Idade
          </th>
          <th>
            Nota do aluno
          </th>
          <th>
            Opções
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            Alex
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Alex
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
        <tr>
          <td>
            Tiago Amado Durante
          </td>
          <td>
            23
          </td>
          <td>
            8.0
          </td>
          <td>
            <a href="#" class="btn btn-default btn-sm glyphicon glyphicon-cog"></a>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
