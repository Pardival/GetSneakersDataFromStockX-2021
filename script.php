<?php 
  $stoxkXUrl  = "https://stockx.com/api/browse?productCategory=sneakers&currency=EUR&_search=Nike%20Dunk%20Low&dataType=product";
  $defaults = array(
    CURLOPT_URL => $stoxkXUrl,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36',
    CURLOPT_SSL_VERIFYPEER => FALSE
  );

  $curl = curl_init();
  curl_setopt_array($curl, ($defaults));

  $response = curl_exec($curl);
  curl_close($curl);

    $response = json_decode($response);
    // echo $response->Products[0];
    echo $response->Products[0]->brand;

    

    class StockXAPI {

      private String $reponse;    // Contiendra le json retourné par la requête
      
      /**
       * Appel la requête http afin de récupérer une réponse sous format json
       * @param httpsStockXRequest conteint l'url d'appel 
       */
      function __construct($httpsStockXRequest) {
        /* Utilisation de CUrl pour récupérer la réponse */
        $defaults = array(
          CURLOPT_URL => $httpsStockXRequest,
          CURLOPT_RETURNTRANSFER => TRUE,
          CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36',
          CURLOPT_SSL_VERIFYPEER => FALSE
        );

        $curl = curl_init();
        curl_setopt_array($curl, $defaults);

        $this->$response = curl_exec($curl);
        curl_close($curl);
      }

      public boolean function  insertDataFromResponse() {
        return TRUE;  // STUB
      }

      /** 
       * @return la reponse sous format json
       */
      public String function getJsonResponse() {
        return $this->$response;
      }

      /** 
       * @return la reponse sous format objet
       */
      public String function getObjectResponse() {
        return $this->json_decode($response);
      }

      /** 
       * Affiche la réponse
       */
      public void function dump() {
        var_dump($response->Products[0]->brand);
      }
    }

 ?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="app">
    {{ info }}
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js"></script>
<script>
    new Vue({
  el: '#app',
  data () {
    return {
      info: null
    }
  },
  mounted () {
    axios
      .get('https://stockx.com/api/browse?productCategory=sneakers&currency=EUR&_search=Nike%20Dunk%20Low&dataType=product')
      .then(response => (this.info = response))
  }
})
</script>

</html> -->