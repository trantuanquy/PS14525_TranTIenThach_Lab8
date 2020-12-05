<?php { {
        $layO->getHeader();
    }
} ?>
<div class="container">
    <div class="register">
        <h2>đăng ký thành viên</h2>
        <form action="xuly.php" method="POST" class="form-regis">
            <label>Tên đăng nhập</label>
            <input name="id" type="text" class="inp-regis">
            <label>Mật khẩu</label>
            <input name="pass" type="password" class="inp-regis">
            <label>Nhập lại mật khẩu</label>
            <input name="pass-again" type="password" class="inp-regis">
            <label>Email</label>
            <input name="mail" type="email" class="inp-regis">
            <div class="sex">
                <label>Giới tính :</label>
                <input type="radio" name="sex[]" value="0" id="Nu">
                <label for="Nu">Nữ</label>

                <input type="radio" name="sex[]" value="1" id="Nam">
                <label for="Nam">Nam</label>
            </div>
            <div class="habbit">
                <label>Sở thích : </label>
                <input type="checkbox" checked name="habbit[]" value="The thao">The thao
                <input type="checkbox" name="habbit[]" value="Doc sach">Doc sach
                <input type="checkbox" name="habbit[]" value="Du lich">Du lich
            </div>
            <select name="job" id="option" class="job">
                <option selected>Bạn làm nghề gì ?</option>
                <option value="Đi học">Đi học</option>
                <option value="Công an">Công an</option>
                <option value="Giáo viên">Giáo viên</option>
            </select>
            <label>Giới thiệu bản thân</label>
            <textarea placeholder="Giới thiệu bản thân" rows="10" name="info" class="inp-regis"></textarea>
            <div class="button">
                <input type="submit" value="Đăng ký" name="btn_reg" class="btn-regis">
                <input type="reset" value="Nhập lại" class="btn-regis">
            </div>
        </form>
    </div>
</div>
<?php { {
        $layO->getFooter();
    }
} ?>