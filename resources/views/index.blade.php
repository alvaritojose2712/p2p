<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset("js/app.js")}}"></script>
    <title>P2p</title>
</head>
<body>
    
    <script>
        (()=>{
            let base = "https://api.binance.com";
            let uri1 = "/sapi/v1/c2c/ads/getAvailableAdsCategory";

            
            let params = [
                //"adsNo"=> "s2fd311778df635d3ae5cfe76b7ad4fd9",
                //"timestamp" => 1591702613943
            ];
            
            let config = {
                headers: {
                    "X-MBX-APIKEY": "e3ZKbZ2Cc9MbbmIcMQKi2HFZmidOVcmPVvx58FUYA8jjVgfTtSfl62D0vDK1PIf3",
                    "X-MBX-secretKey": "ir95xIdxdC8ZxK6aOlupO9cJlnMSVwj3UfLLYTRTvQCbrN4kBLTWrRT1RAK8w7DE",
                    "Access-Control-Allow-Origin": "*"
                }
            }

            axios.post(base+uri1, params, config).then(res=>{
                //console.log(res)
            })
        })()
    </script>
</body>
</html>