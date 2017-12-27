<div class="row">
    <div class="col-md-4 divisao">
        <?php require_once 'redesocial1.php';?>      
        
            <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{your-app-id}',
      xfbml      : true,
      version    : 'v2.11'
    });
  
    FB.AppEvents.logPageView();
  
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
    
        
    </div>      
    <div class="col-md-4 divisao">
        <?php require_once 'redesocial2.php';?>        
    </div> 
    <div class="col-md-4 divisao">
        <?php require_once 'redesocial3.php';?>
    </div>     
</div>