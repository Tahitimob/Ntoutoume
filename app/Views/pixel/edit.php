<?php $this->layout('layout', ['title' => "Edit - Pix'Hell"]) ?>

<?php $this->start('main_content') ?>
<style>
.case{
  width: 50px;
  height: 50px;
}</style>
<div id="creation" class="mef">
  <hr class="hr">
  <div class="container-fluid">
    <div class="title-crea">
      <p>Edition</p>
    </div>
    <h3 class="text-danger bg-danger">Attention ! La taille de votre écran ne permet pas la création dans de bonnes conditions, essayer depuis un ordinateur.</h3>
    <div class="container-fluid">
        <div class="col-md-4">
           <div class="color_picker">
           <p class="text-color"> < Rectangle Color ></p>
           <input class="jscolor" value="000000">
          </div>
          <p class="text-color text-align">< Background ></p>
            <div class="row background col-md-6" style="background-color: rgb(255,255,255)"></div>
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg btn-crud" data-toggle="modal" data-target="#myModal">
          Aide
        </button>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header modal-style">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Quelques astuces</h4>
              </div>
              <div class="modal-body modal-style">
                <div>
                  <p>< A > Colore tous les carrés survolés</p>
                  <br>
                  <p>< S > Récupère la couleur du carré survolé</p>
                  <br>
                  <p>< G > Pour gommer</p>
                  <br>
                  <p>Cliquez sur la case background pour colorier tous les pixels de la même couleur</p>
                </div>
              </div>
              <div class="modal-footer modal-style">
                <button type="button" class="btn btn-default btn-contact-modal" data-dismiss="modal">Ok !</button>
              </div>
            </div>
          </div>
        </div> <!-- end of modal -->
      </div> <!-- end of container -->
        <div class="col-md-4 wrap-color">
          <p class="text-color placement"> < Couleurs Prédéfinies > </p>
          <div class="row box-placement">
            <p class="text-color title-color-placement">Rouge</p>
            <div class="col-md-2 box red1"></div>
            <div class="col-md-2 box red2"></div>
            <div class="col-md-2 box red3"></div>
            <div class="col-md-2 box red4"></div>
            <div class="col-md-2 box red5"></div>
            <div class="col-md-2 box red6"></div>
          </div>
          <div class="row box-placement">
            <p class="text-color title-color-placement">Bleu</p>
            <div class="col-md-2 box blue1"></div>
            <div class="col-md-2 box blue2"></div>
            <div class="col-md-2 box blue3"></div>
            <div class="col-md-2 box blue4"></div>
            <div class="col-md-2 box blue5"></div>
            <div class="col-md-2 box blue6"></div>
          </div>
          <div class="row box-placement">
            <p class="text-color title-color-placement">Vert</p>
            <div class="col-md-2 box green1"></div>
            <div class="col-md-2 box green2"></div>
            <div class="col-md-2 box green3"></div>
            <div class="col-md-2 box green4"></div>
            <div class="col-md-2 box green5"></div>
            <div class="col-md-2 box green6"></div>
          </div>
          <div class="row box-placement">
            <p class="text-color title-color-placement">Jaune</p>
            <div class="col-md-2 box yellow1"></div>
            <div class="col-md-2 box yellow2"></div>
            <div class="col-md-2 box yellow3"></div>
            <div class="col-md-2 box yellow4"></div>
            <div class="col-md-2 box yellow5"></div>
            <div class="col-md-2 box yellow6"></div>
          </div>
          <div class="row box-placement">
            <p class="text-color title-color-placement">Noir</p>
            <div class="col-md-3 box black1"></div>
            <div class="col-md-3 box black2"></div>
            <div class="col-md-3 box black3"></div>
            <div class="col-md-3 box black4"></div>
          </div>
          <div class="row box-placement">
            <p class="text-color title-color-placement">Blanc</p>
            <div class="col-md-3 box white1"></div>
            <div class="col-md-3 box white2"></div>
            <div class="col-md-3 box white3"></div>
            <div class="col-md-3 box white4"></div>
          </div>
        </div>
      
      <div class="container-fluid">
       <br>
        <?php
        echo $pixel->create();
        ?>
       <br>
      </div>
    <form method="POST">
      <button class="submit btn-create"><h4>Editer</h4></button>
      <button name="view" class="submit btn-create"><h4>Visualiser</h4></button>
    </form> 
  </div>
</div>


<?php $this->stop('main_content') ?>

<?php $this->start('add_js') ?>
<script src="<?= $this->assetUrl('js/jscolor.js') ?>"></script>
<?php $this->stop('add_js') ?>