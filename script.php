<?php 
    $url  = "https://stockx.com/api/browse?productCategory=sneakers&currency=EUR&_search=Nike%20Dunk%20Low&dataType=product";
    $defaults = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36',
        CURLOPT_SSL_VERIFYPEER => FALSE
    );

    $ch = curl_init();
   curl_setopt_array($ch, ($defaults));





     echo $productList = curl_exec($ch);
    curl_close($ch);
//     $response = json_decode($productList);
//     var_dump($response);

//    $w = stream_get_wrappers();
// echo 'openssl: ',  extension_loaded  ('openssl') ? 'yes':'no', "\n";
// echo 'http wrapper: ', in_array('http', $w) ? 'yes':'no', "\n";
// echo 'https wrapper: ', in_array('https', $w) ? 'yes':'no', "\n";
// echo 'wrappers: ', var_export($w);
// ?>


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