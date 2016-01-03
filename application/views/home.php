<div class="container" style="margin-top: 70px;">
    <div class="row">

    <div class="col-md-9" id="leftCol">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="<?php echo base_url("assets/imgs/12951008.jpg"); ?>" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url("assets/imgs/12951009.jpg"); ?>" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url("assets/imgs/12951011.jpg"); ?>" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url("assets/imgs/12951012.jpg"); ?>" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url("assets/imgs/12951013.jpg"); ?>" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url("assets/imgs/12951014.jpg"); ?>" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url("assets/imgs/12951015.jpg"); ?>" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>


                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              
                <h2 id="sec1">¿Qué es BeatMusic?</h2>
                <p>  
              Es una aplicación para la asignatura de Programación Web del Grado de Ingeniería Informática de la UCA realizada con CodeIgniter.
              Simula una tienda de música donde se puede escuchar y comprar música (de manera ficticia).
                </p>
            

                <hr>
              
                <h2 id="sec2">Nuevo</h2>
                <div class="row">
                <ul class="new-items-group">
                <?= $newitems; ?>
                  <?php
                  
                  // foreach ($data['allTracks']->result() as $row)
                  // {
                  //         echo $row->nombre;
                  //         echo $row->id_album;
                  //         echo $row->likes;
                  // }
                  // while ($fila = mysql_fetch_array($datos_vista)){
                  //   echo '<li class="item col-md-2">
                  //           <img src="' .base_url('assets/imgs/tracks/12680829.jpg'). ' " class="img-responsive">
                  //           <div class="item-info">
                  //             '.$fila["nombre"].'<br>
                  //             Autor<br>
                  //             Label<br>
                  //           </div>    
                  //         </li>';
                  // }
                  ?>
                  <!-- <li class="item col-md-2">
                    <img src="<?php echo base_url('assets/imgs/tracks/12680829.jpg') ?>" class="img-responsive">
                    <div class="item-info">
                      Track<br>
                      Autor<br>
                      Label<br>
                    </div>
                  </li> -->
                </ul>
                  
                  <!-- <div class="col-md-2"><img src="<?php echo base_url('assets/imgs/tracks/12774914.jpg') ?>" class="img-responsive"></div>
                  <div class="col-md-2"><img src="<?php echo base_url('assets/imgs/tracks/12804537.jpg') ?>" class="img-responsive"></div>
                  <div class="col-md-2"><img src="<?php echo base_url('assets/imgs/tracks/12680829.jpg') ?>" class="img-responsive"></div>
                  <div class="col-md-2"><img src="<?php echo base_url('assets/imgs/tracks/12774914.jpg') ?>" class="img-responsive"></div>
                  <div class="col-md-2"><img src="<?php echo base_url('assets/imgs/tracks/12804537.jpg') ?>" class="img-responsive"></div>
                  <div class="col-md-2"><img src="<?php echo base_url('assets/imgs/tracks/12680829.jpg') ?>" class="img-responsive"></div>
                  <div class="col-md-2"><img src="<?php echo base_url('assets/imgs/tracks/12774914.jpg') ?>" class="img-responsive"></div>
                  <div class="col-md-2"><img src="<?php echo base_url('assets/imgs/tracks/12804537.jpg') ?>" class="img-responsive"></div>
                  <div class="col-md-2"><img src="<?php echo base_url('assets/imgs/tracks/12680829.jpg') ?>" class="img-responsive"></div> -->

                </div>
                
        </div> 

        <div class="col-md-3">        
            <div class="list-group">
              <a href="#" class="list-group-item active">
                TOP 10
              </a>
              <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
              <a href="#" class="list-group-item">Morbi leo risus</a>
              <a href="#" class="list-group-item">Porta ac consectetur ac</a>
              <a href="#" class="list-group-item">Vestibulum at eros</a>
              <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
              <a href="#" class="list-group-item">Morbi leo risus</a>
              <a href="#" class="list-group-item">Porta ac consectetur ac</a>
              <a href="#" class="list-group-item">Vestibulum at eros</a>
              <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
              <a href="#" class="list-group-item">Morbi leo risus</a>
              
            </div>

        </div> 
    </div> 
            
</div>