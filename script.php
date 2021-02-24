<?php 
    // $context = array('timeout' => 10,
    // 'header'=> "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8\r\n");
    // $stockXResponse = file_get_contents('https://stockx.com/api/browse?productCategory=sneakers&currency=EUR&_search=Nike%20Dunk%20Low&dataType=product', $context);

    // echo $stockXResponse;

    // $url  = 'https://stockx.com/api/browse?productCategory=sneakers&currency=EUR&_search=Nike%20Dunk%20Low&dataType=product';

    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, $url);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // $productList = curl_exec($ch);
    // curl_close($ch);
    // $response = json_decode($productList);
    // var_dump($response);
?>


<!DOCTYPE html>
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

</html>