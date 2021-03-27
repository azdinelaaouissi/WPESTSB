<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php  bloginfo('description'); ?></title>  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php  echo get_template_directory_uri().'/style.css'?>"> 
  <link rel="stylesheet" href="<?php  echo get_template_directory_uri().'/css/main.css'?>"> 
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  <link rel="icon" href="<?php bloginfo('template_directory'); ?> /EST_SidiBennour.ico" />
  <?php wp_head();?>
</head>
<header>
 
  <div class="hero-anime">
    <div class="navigation-wrap bg-light start-header start-style">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="navbar navbar-expand-md navbar-light">
            
            <a class="navbar-brand" href="#" target="_blank"><img src='<?php bloginfo('template_directory'); ?>/img/ESTSB.png' alt=""></a>	

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto py-4 py-md-0">
                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                    <a class="nav-link" href="index.php">Acceuil</a>
                  </li>
                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="ecole/" role="button" aria-haspopup="true" aria-expanded="false">Ecole</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="Presentation">Presentation</a>
                      <a class="dropdown-item" href="mots-de-directeur">Mots de directeur</a>
                      <a class="dropdown-item" href="corps-enseignants">Corps Enseignants</a>
                    </div>
                  </li>
                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="formations/" role="button" aria-haspopup="true" aria-expanded="false">Filière</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="formation-initial">GI</a>
                      <a class="dropdown-item" href="formation-continue">TM</a>
                      <a class="dropdown-item" href="formation-continue">GA</a>

                    </div>
                  </li>
                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="espace-etudiant/" role="button" aria-haspopup="true" aria-expanded="false">Espace Etudiant</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="reglement-des-etudes">Reglement Des Etudes</a>
                      <a class="dropdown-item" href="planning-annuel">Planning Annuel</a>
                      <a class="dropdown-item" href="Bourse">Bourse</a>
                      <a class="dropdown-item" href="Emploi Du Temps A.U.2019-2020">Emploi Du Temps A.U.2019-2020</a>
                    </div>
                  </li>
                 
                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="contact/">Contact</a>
                  </li>
                </ul>
              </div>
              
            </nav>		
          </div>
        </div>
      </div>
    </div>
    <div class="section full-height">
      <div class="absolute-center">
        <div class="section">
          <div class="container">
            <div class="row">
              <div class="col-12">
              <h1><span>E</span><span>S</span><span>T</span>  <span>S</span><span>i</span><span>d</span><span>i</span><span>B</span><span>e</span><span>n</span><span>n</span><span>o</span><span>u</span><span>r</span><br>
          <p>Ecole Supérieur de technologie</p>	
              </div>	
            </div>		
          </div>		
        </div>
      </div>
    </div>
  <!-- last /div of class="hero-anime" -->
  </div> 
</header>
<body>	 

<a onclick="topFunction()" id="button_top" class="link-to-homepage" target=”_blank”></a>

  

  


