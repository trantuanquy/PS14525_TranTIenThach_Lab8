<?php
$fullname = !empty($_POST['fullname']) ? $_POST['fullname'] : null;
$password = !empty($_POST['password']) ? $_POST['password'] : null;
$nho = $_POST['nho'];
$mahoapass = base64_encode($password);

if (isset($_POST['nho']) == true) {
    setcookie("fullname", $fullname, time() + 3600 * 24 * 7);
    setcookie("password", $password, time() + 3600 * 24 * 7);
} else {
    setcookie("fullname", $fullname, -1);
    setcookie("password", $password, -1);
}
if ($fullname == "admin" && $password == "caphenhe") {
    $_SESSION['dalogin'] = 1;
} else {
    unset($_SESSION['dalogin']);
}

?>
<?php {{ $layO->getHeader(); }} ?>
<div class="container">
    <form class="border border-primary col-4 m-auto p-2" method="POST" action="">
        <h5>Đăng nhập</h5>
        <div class="form-group">
            <label>Username</label> <input name="fullname" type="text" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Mật khẩu</label> <input name="password" type="password" class="form-control"/>
        </div>
        <div class="form-group checkbox">
            <input name="nho" type="checkbox" /> Ghi nhớ
        </div>
        <div class="form-group btn-group">
            <input name="btn" type="submit" value="Đăng nhập" class="btn btn-primary"/>
            <button class="btn btn-primary">
                <a href="?mod=user&act=register">Đăng ký</a>
            </button>
        </div>
    </form>
</div>
<style>
#container-header{
    padding-bottom: 0px;
}
form {
    margin: 100px auto;
    width: 500px;
    border: 1px solid blue;
    padding-bottom: 10px;
}
h5{
    margin: 0px 0 10px 0;
    padding: 10px;
    background-color: darkblue;
    color: wheat;
    text-align: center;
    font-size: 1.2em;
}
.form-group {
    margin-bottom: 10px;
    padding-left: 30px;
}
label {
    display: inline-block;
    width: 100px;
}
input {
    border-radius: 3px;
    outline: none;
    border: 1px solid #016ff7;
    padding: 7px 5px
}
.btn {
    padding: 7px;
    border: 1px solid #016ff7;
    background-color: #016ff7;
    border-radius: 10px;
    color: white;
    cursor: pointer;
}
.btn a {
    color : white;
    text-decoration: none;
}
.form-control {
    width: 70%;
}
.btn-group {
    text-align: center;
}
.checkbox {
    text-align: center
}
.header-banner {
    display: none;
}
    </style>
<?php {{ $layO->getFooter(); }} ?>