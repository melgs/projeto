<div class="col-md-12">
    <?php
    /**
     * @param $url    URI to page to parse for Open Graph data
     * @return OpenGraph
     */
    function getPage($url){
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 15);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

        $response = curl_exec($curl);
        $response = json_decode($response, true);

        curl_close($curl);
        return $response;
    }

    // Define valores
    $url    = "https://www.facebook.com/Dimochila-Baiana-552284691525171/"; // ou ID numérico
    $token  ="ACCESS_TOKEN";

    // Faz a requisição para API do Facebook
    $postagens  = getPage("https://graph.facebook.com/".$url."/posts?access_token=".$token);
    $amigos     = getPage("https://graph.facebook.com/".$url."/friends?access_token=".$token);
    $curtidas   = getPage("https://graph.facebook.com/".$url."/likes?access_token=".$token);

    // Postagens
    echo "<h2>Postagens</h2>";
    if(is_array($postagens) && array_key_exists('data', $postagens)){
        foreach ($postagens['data'] as $key => $postagem) {
            echo $postagem['message'] . "<br />";
        }
    }else{ 
        echo 'Nenhuma postagem'; 
    }

    // Amigos
    echo "<h2>Amigos</h2>";
    if(is_array($amigos) && array_key_exists('data', $amigos)){
        foreach ($amigos['data'] as $key => $amigo){
            //echo $amigo['NAO_SEI_QUAL_CHAVE_USAR'] . "<br />";
        }
    }else{ 
        echo 'Nenhum amigo'; 
    }

    // Curtidas
    echo "<h2>Curtidas</h2>";
    if(is_array($curtidas) && array_key_exists('data', $curtidas)){
        foreach ($curtidas['data'] as $key => $curtida){
            echo $curtida['name'] . "<br />";
        }
    }else{ 
        echo 'Nenhuma curtida'; 
    }
    ?>
</div>