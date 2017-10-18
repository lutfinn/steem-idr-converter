<!DOCTYPE html>
<html>
  <head>
    <title>Rupiah Indonesia - Steem Converter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <style type="text/css">
      .wrap {
        position: relative;
        padding: 20px;
      }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-64817253-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-64817253-3');
    </script>
  </head>
  <body>
  <div class="wrap">
      <h1 class="text-center"><strong>Rupiah - Steem</strong> Converter</h1>
      <p class="text-center">Converter Rupiah - Steem dipersembahkan untuk para Steemians Indonesia.</p>
      <p class="text-center">Data diambil tiap 5 menit dari <a href="https://goo.gl/xMMwsT">Bitcoin.Co.Id</a> dan <a href="https://poloniex.com">Poloniex</a></p>

      <div class="alert alert-info text-center" role="alert">Rp. 1,000,000 = <span class="infosteem">0</span> STEEM</div>
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="card">
            <div class="card-header">
              CONVERTER #1
            </div>
            <div class="card-body">
              <div class="input-group">
                <select class="form-control input-group-addon" id="currency">
                  <option value="idr">IDR</option>
                  <option value="btc">BTC</option>
                  <option value="steem">STEEM</option>
                  <option value="sbd">SBD</option>
                </select>
                <input type="text" class="form-control" aria-label="RUPIAH" value="0" id="inputval">
              </div>
              <div>
                <span class="outrupiah">0</span> IDR<br>
                <span class="outbtc">0</span> BTC<br>
                <span class="outsteem">0</span> STEEM<br>
                <span class="outsbd">0</span> SBD<br>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="card">
            <div class="card-header">
              CONVERTER #2
            </div>
            <div class="card-body">
              <div class="input-group">
                <select class="form-control input-group-addon" id="currency2">
                  <option value="idr2">IDR</option>
                  <option value="btc2">BTC</option>
                  <option value="steem2">STEEM</option>
                  <option value="sbd2">SBD</option>
                </select>
                <input type="text" class="form-control" aria-label="RUPIAH" value="0" id="inputval2">
              </div>
              <div>
                <span class="outrupiah2">0</span> IDR<br>
                <span class="outbtc2">0</span> BTC<br>
                <span class="outsteem2">0</span> STEEM<br>
                <span class="outsbd2">0</span> SBD<br>
              </div>
            </div>
          </div>
        </div>

      </div>
      <p> </p>
      <p class="text-center">Dibuat oleh <a href="https://steemit.com/@lopezdacruz">@lopezdacruz</a></p>
  </div>

  <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="jquery.number.min.js"></script>
  <script type="text/javascript" src="converter.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>
