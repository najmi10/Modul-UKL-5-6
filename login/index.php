<html>
<head>
<title>Login Petugas Nature Library</title>
</head>
<body>
<style>
    body {
        background: -webkit-linear-gradient(#3851f5,#8d9bf7);
       
    }

    #card {
        background: #00FFFF;
        border-radius: 80px;
        box-shadow: 10px 20px 80px rgba(0, 0, 0, 0.65);
        height: 300px;
        margin: 6rem auto 8.1rem auto;
        width: 600px;
    }

    #card-content {
        padding: 12px 44px;
    }

    #card-title {
        font-family: "Raleway Thin", sans-serif;
        letter-spacing: 10px;
        padding-bottom: 52px;
        padding-top: 23px;
        text-align: center;
    }

    .underline-title {
        background: -webkit-linear-gradient(right, #7a110a, #7a110a);
        height: 2px;
        margin: -1.1rem auto 0 auto;
        width: 500px;
    }

    a {
        text-decoration: none;
    }

    label {
        font-family: "Raleway", sans-serif;
        font-size: 11pt;
    }

    #forgot-pass {
        color: #7a110a;
        font-family: "Raleway", sans-serif;
        font-size: 10pt;
        margin-top: 3px;
        text-align: right;
    }

    .form {
        align-items: left;
        display: flex;
        flex-direction: column;
    }

    .form-border {
        background: -webkit-linear-gradient(right, #7a110a, #7a110a);
        height: 1px;
        width: 100%;
    }

    .form-content {
        background: #fbfbfb;
        border: none;
        outline: none;
        padding-top: 14px;
    }
    #signup {
    color: #7a110a;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
}
#submit-btn {
    background: -webkit-linear-gradient(right, #ec59ff, #4ae7ff);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #7a110a;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 153px;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #ff0400;
}
#copy{
  font-family: "Raleway Thin", sans-serif;
  color:#ffffff;
  letter-spacing: 1px;
  padding-bottom: 2px;
  padding-top: 20px;
  text-align: center;
}
</style>
<body>
<div id="card">
<div id="card-content">
    <div id="card-title">
        <h2>Login Nature Library</h2>
        <div class="underline-title"></div>
        </div>
<form action="proses-login.php" method="post">
<table>
        <tr>
            <td><label for="">Username</label></td>
            <td> <input type="text" name="username" id=""></td>
        </tr>
        <tr>
            <td><label for="">Password</label></td>
            <td> <input type="password" name="password" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td>
            <input type="submit" value="Login" name="btnlogin">
            </td>
        </tr>
    </table>
</form>
</div>
</div>
</body>
</html>


