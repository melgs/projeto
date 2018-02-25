<div class="row">
    <div class="col-md-12">
        <a href="javascript:;" class="btn btn-default" data-toggle="modal" data-target="#twitter">
            <h4>Nova Postagem</h4>
        </a>
    </div>
    <br/><br/><br/><br/>
    <div class="col-md-4 divisao">
        <?php require_once('includes/redesSociais/redesocial1.php'); ?>      
    </div>      
    <div class="col-md-4 divisao">
        <?php require_once('includes/redesSociais/redesocial2.php'); ?>        
    </div> 
    <div class="col-md-4 divisao">
        <?php require_once('includes/redesSociais/redesocial3.php'); ?>
    </div>     
</div>

<!-- Modal -->
<div class="modal fade" id="twitter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Nova Postagem</h4>
            </div>

            <input id="imgInput" type="file">
            <script>
                $("#imgInput").change(function () {
                    if (this.files && this.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#view-img').attr('src', e.target.result);
                        }
                        reader.readAsDataURL(this.files[0]);
                    }
                });
            </script>
            <br/><br/>
            <textarea cols="120">No que você está pensando?</textarea>

            <img id="view-img" src="default.jpg">

            <div class="modal-body">
                <br/><br/>

                <!-- TWITTER --> 
                <br/><br/>
                <a href="http://twitter.com/share" class="twitter-share-button" 
                   accesskey=""data-url="https://twitter.com/mellgs_" data-text="No que você está pensando?" 
                   data-count="horizontal" data-via="mellgs_" data-lang="pt">Tweetar</a>
                <br/><br/>
                <g:plusone size="medium"></g:plusone>
                <br/><br/>
                <!-- FACEBOOK -->
                <a  target="_blank" href="http://www.facebook.com/sharer.php?u=https://www.facebook.com/?ref=tn_tnmn">
                    <img src="img/face.png">
                </a>               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>