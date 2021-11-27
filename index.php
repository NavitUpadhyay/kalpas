<!DOCTYPE html>

<html>
    <head>
        <title>Kalpas</title>
    </head>
    <style>
        table
        {
            width: 100%;
            border: 1px solid black;
        }
        body
        {
            width: 30%;
            margin: auto;
        }
        td
        {
            width: 100%;
        }
        #phone11{            display: block;       }
        #email11{            display: none;        }
        #phone22{            display: block;       }
        #email22{            display: none;        }
        #phone33{            display: block;       }
        #email33{            display: none;        }
    </style>
<body>
    <form action = "register.php" method="GET">
        <Table>
            <caption>Register</caption>
            
            <tr>
                <td>
                     <input name = "option" type = "radio" value="phone" checked onclick="phone1()"> Phone
                     <input name = "option" type = "radio" value="email" onclick="email1()"> Email
                </td>
            </tr>
            
            <tr id = "phone11">
                <td>
                    Phone : <input name = "phone" type = "text">
                </td>
            </tr>
            <tr id = "email11">
                <td>
                    Email : <input name = "email" type = "email">
                </td>
            </tr>
            <tr>
                <td>
                    Password : <input name = "password" type = "password">
                </td>
            </tr>
            <tr>
                <td>
                    <input name = "register" type = "submit">
                </td>
            </tr>
        </Table>
    </form>
    <br>
    <form action = "login.php" method="GET">
        <Table>
            <caption>Login</caption>
            
            <tr>
                <td>
                    <input name = "option" type = "radio" value="phone" checked onclick="phone2()"> Phone
                    <input name = "option" type = "radio" value="email" onclick="email2()">Email
                </td>
            </tr>
            
            <tr id = "phone22">
                <td>
                    Phone : <input name = "phone" type = "text">
                </td>
            </tr>
            <tr id = "email22">
                <td>
                    Email : <input name = "email" type = "email">
                </td>
            </tr>
            <tr>
                <td>
                    Password : <input name = "password" type = "password">
                </td>
            </tr>
            <tr>
                <td>
                    <input name = "login" type = "submit">
                </td>
            </tr>
        </Table>
    </form>
    <br>
    <form action = "update.php" method="GET">
        <Table>
            <caption>Update</caption>
            <tr>
                <td>
                    ID : <input name = "id" type = "text">
                </td>
            </tr>
            
            <tr>
                <td>
                    <input name = "option" type = "radio" value="phone" checked onclick="phone3()">  Phone
                     <input name = "option" type = "radio" value="email" onclick="email3()">Email
                </td>
            </tr>
            
            <tr id = "phone33">
                <td>
                    New Phone : <input name = "phone" type = "text">
                </td>
            </tr>
            <tr id = "email33">
                <td>
                    New Email : <input name = "email" type = "email">
                </td>
            </tr>
            <tr>
                <td>
                    New Password : <input name = "password" type = "password">
                </td>
            </tr>
            <tr>
                <td>
                    <input name = "update" type = "submit">
                </td>
            </tr>
        </Table>
    </form>
    <script>
        function phone1()
        {
            
            var email11 = document.getElementById('email11');
            email11.style.display = 'none';
            var phone11 = document.getElementById('phone11');
            phone11.style.display = 'block';
        }
        function email1()
        {
            var email11 = document.getElementById('email11');
            email11.style.display = 'block';
            var phone11 = document.getElementById('phone11');
            phone11.style.display = 'none'; 
        }
        function phone2()
        {
            
            var email11 = document.getElementById('email22');
            email11.style.display = 'none';
            var phone11 = document.getElementById('phone22');
            phone11.style.display = 'block';
        }
        function email2()
        {
            var email11 = document.getElementById('email22');
            email11.style.display = 'block';
            var phone11 = document.getElementById('phone22');
            phone11.style.display = 'none'; 
        }
        function phone3()
        {
            
            var email11 = document.getElementById('email33');
            email11.style.display = 'none';
            var phone11 = document.getElementById('phone33');
            phone11.style.display = 'block';
        }
        function email3()
        {
            var email11 = document.getElementById('email33');
            email11.style.display = 'block';
            var phone11 = document.getElementById('phone33');
            phone11.style.display = 'none'; 
        }

    </script>
</body>
</html>