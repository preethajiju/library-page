<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library app</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body class="bgcolour">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                <h1>Library Details
                </h1>
                <table class="table">
                    <tr>
                        <td>BookName</td>
                        <td><input type="text" class="formcontrol" id="name"></td>
            
                    </tr>
                    <tr>
                        <td>Author</td>
                        <td><input type="text" class="formcontrol" id="name1"></td>
                    </tr>
                    <tr>
                        <td>Distribution</td>
                        <td><input type="text" class="formcontrol" id="name2"></td>
                    </tr>
                    <tr>
                        <td>Publisher</td>
                        <td><input type="text" class="formcontrol"id="name3"></td>
                    </tr>
                    <tr>
                        <td>MRP</td>
                        <td><input type="text" class="formcontrol" id="price"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button onclick="buttonclick()" class="btn btn-primary">OK</button></td>
                    </tr>
                </table>
                
            </div>
        </div>
    </div>
    <script>
        function buttonclick()
        {
            var getname=document.getElementById("name").value
            var getauth=document.getElementById("name1").value
            var getdist=document.getElementById("name2").value
            var getpub=document.getElementById("name3").value
            var getprice=document.getElementById("price").value
            console.log(getname)
            console.log(getauth)
            console.log(getdist)
            console.log(getpub)
            console.log(getprice)
        }



    </script>
    
    
</body>
</html>