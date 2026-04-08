<!DOCTYPE html>
<html>
<head>
    <title>AJAX Live Search</title>
    <script>
        function showResult(str) {
            if (str.length == 0) {
                document.getElementById("result").innerHTML = "";
                return;
            }

            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("result").innerHTML = this.responseText;
                }
            };

            xhttp.open("GET", "fetch.php?q=" + str, true);
            xhttp.send();
        }
    </script>
</head>
<body>

<h2>AJAX Live Search</h2>

Search Student: 
<input type="text" onkeyup="showResult(this.value)">

<div id="result"></div>

</body>
</html>