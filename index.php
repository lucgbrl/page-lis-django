<?php
  include ('pages/head.php');
  include ('pages/nav.php');
?>

<style>
.container .row{
  padding-bottom: 100px;
  padding-top: 50px;
}
#cartao{
  position: fixed;
  width: 300px;
  bottom: 50px;
  right: 23px;
}
#vote.btn{
  width: 64px;
  height: 64px;
  border-radius: 100px;
}
</style>


  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script type = "text/javascript">

    $(document).ready(function){
        $("#cartao").hide();
    });
  </script>


<div class = "container">
  <div class = "row">
    <div class = "col-md-6 col-sm-6 mb-3 p-3">
      <br><br>
      <h1>Repositório</h1>
      <br>
      <p>Projeto construído de forma colaborativa. <br>I(Re)novação constante.</p>
      <button class ="btn btn-primary">Acesso ao Repositório</button>
    </div>
    <div class = "col-md-6 col-sm-6  mb-3 p-3">
      <br><br>
      <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRShN4_EC9pwSg9HBuH_HJeyYDWFp4d4IwWQkpH2ijBtOmrvCqo">
    </div>
  </div>
</div>

<div class = "container">
  <div class = "row">
    <div class = "col-md-4">
      <h1>Code</h1>
      <i class = "fab fa-2x fa-vuejs"></i>
      <i class = "fab fa-2x fa-python"></i>
      <i class = "fab fa-2x fa-js-square"></i>
      <p>
        As linguagens da moda<br>
        Python + PHP + C/C++ + Java + ...
      </p>
    </div>

    <div class = "col-md-4">
      <h1>Café</h1>
      <i class = "fa fa-2x fa-mug-hot"></i>
      <i class = "fab fa-2x fa-python"></i>
      <p>
        Grupo de estudos e discussão de<br>
        Python + PHP
      </p>
    </div>

    <div class = "col-md-4">
      <h1>Gestão</h1>
      <i class = "fab fa-2x fa-github-square"></i>
      <i class = "fa fa-2x fa-code-branch"></i>
      <p>
        Grupos de estudos e discussão de gestão de projetos<br>
        Scrum + Agile
      </p>
    </div>

  </div>
</div>
<section id = "cartao" align = "right">
  <div id = "poll" class = "card shadow-lg">
    <div class = "card-body">
      <p>Give us a call</p>
    </div>
  </div>
  <br>
  <button id = "vote" class = "btn btn-success shadow-sm" onclick="hide(poll)">vote</button>
</section>
