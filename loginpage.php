<html>
    <head>
        <script>
            function validate()
            {
               var email = document.getElementById("email").value;
               var password = document.getElementById("password").value;


               if(email=="")
               {
                   alert("Please Enter email.");
                   return false;
               }
               if(email.length<3)
               {
                   window.alert("email should be greater than 3 characters.");
                   return false;
               }
               if(email.length>20) 
               {
                   window.alert("email should not be greater than 20 characters.");
                   return false;
               }   
            }

        </script>
        <meta charset="utf-8">
        <title>The Artsy Lens Login page</title>
        <link rel="stylesheet" href="Login.css">
    </head>

    <body>

        <form method="POST" action="index.html" class="box" >
            
            <h1>Hello Admin! Kindly Login To continue</h1>

            <input type="text" name="" placeholder="Enter email" id="email">
            <input type="password" name="" placeholder="enter password" id="password">
            <a href="index.html"> <input type="button" name="" value="Login" class="button" onclick="validate()"></a>
        </form>
    </body>
</html>