

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- get - send data thru url -->
    <!-- post - send data thru http -->
 
    <form action="receive_page.php" method="post" id="registerForm">
        <label for="">Fullname: </label>
        <input type="text" name="fullname">
        <br>
        <label for="">Email: </label>
        <input type="email" name="email">
        <br>
        <label for="">Password: </label>
        <input type="password" name="password">
        <br>
        <label for="">Contact No: </label>
        <input type="text" name="contactno">
        <br>
    <input type="submit" name="btnSubmit">
    <button type="button" onclick="clearFormAndUrl()">Clear</button>
    </form>


    <?php print_r($_REQUEST); ?>

    <script>
    function clearFormAndUrl() {
        // Clear form fields
        document.getElementById('registerForm').reset();
        // Remove GET parameters from URL
        window.location.href = window.location.pathname;
    }
    </script>

    

</body>
</html>