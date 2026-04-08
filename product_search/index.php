<!DOCTYPE html>
<html>
<head>
    <title>Product Search</title>

    <script>
        function searchProduct() {
            var input = document.getElementById("search").value;

            var xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("result").innerHTML = xhr.responseText;
                }
            };

            xhr.open("GET", "search.php?q=" + input, true);
            xhr.send();
        }
    </script>

</head>
<body>

<h2>Live Product Search</h2>

<input type="text" id="search" onkeyup="searchProduct()" placeholder="Type product name">

<div id="result"></div>

</body>
</html>