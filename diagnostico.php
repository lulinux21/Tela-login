<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style>

.swal-height {
  height: 80vh;
  right: 10;
}
body{
    background-color:#2BBBAD ;
}

    </style>

@extends('novaview')
@section('conteudo')




 

   <br>
   <br>
    <div class="row">
        <div class="col s12 m6">
          <div class="card">
            
            <div class="card-content">
                <div style="min-height: 40vh"></div>
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Tele Consulta    
                    
                </span>
                

                <a class="waves-effect waves-light btn"><i class="material-icons">autorenew</i></a>
                    <a class="waves-effect waves-light btn"><i class="material-icons">camera_enhance</i></a>

                </a>
                
              </div>
          </div>
        </div>
        <div class="col s12 m6">
            <div class="card">
              <div class="card-image">
              </div>
              <div class="card-content">
                <img class="  responsive-img" src="https://www.w3schools.com/w3images/bandmember.jpg">
                <img class="responsive-img" src="https://www.w3schools.com/w3images/bandmember.jpg">
                

              </div>
              <div class="card-action">
                <div class="">
                    <span class="card-title activator grey-text text-darken-4">Imagens Paciente  
                    </span>
                     
                   <p> <a class="waves-effect waves-light btn"><i class="material-icons">add_a_photo</i></a> <a class="waves-effect waves-light btn"><i class="material-icons">add_box</i></a> </p>
                       
      
                  </div>
              </div>
            </div>
          </div>
      </div>
         
      
      <div class="row">
        <div class="col s12 m6">
          <div class="card">
            
            <div class="card-content">
                <div style="min-height: 20vh"></div>
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Tele Consulta    
                    <a class="waves-effect waves-light btn"><i class="material-icons">autorenew</i>&nbsp;&nbsp;
                </a>
                </span>
                
              </div>
          </div>
        </div>
        <div class="col s12 m6">
            <div style="min-height: 60vh" class="card">
              <div class="card-image">
              </div>
              <div class="card-content">
                <iframe  style="min-height: 60vh"  id="if1" width="100%" height="254" style="visibility:visible" src="https://googlecustomsearch.appspot.com/element/layoutdemo/results-only_url_v2.html?q=test"></iframe>


              </div>
              <div class="card-action">
                <div class="">
                    <span class="card-title activator grey-text text-darken-4">Google Search<span class="material-icons"></span>
                    </span>
                     <br>
                    <a id="btnsr" onclick="pesquisa()" class="waves-effect waves-light btn"><i class="material-icons"></i>Pesquisa personalizada</a>
                    <a id="btnsr" onclick="pesquisa_window()" class="waves-effect waves-light btn"><i class="material-icons"></i>Pesquisa FullWindow</a>

      
                  </div>
              </div>
            </div>
          </div>
      </div>