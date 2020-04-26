<?php
    $PageTitle = "أطمن علي صحتك";
    include_once "../init.php";
    include_once "navbar.php";
?>
<div class="d-md-flex h-md-100 align-items-center">
    <div class="col-md-6 p-0 bg-indigo h-md-100">
        <div class="text-white d-md-flex align-items-center h-100 p-5 text-center justify-content-center">
            <div class="logoarea pt-5 pb-5">
            </div>
        </div>
    </div>
    <div class="col-md-6 p-0 bg-white h-md-100 loginarea">
        <div class="d-md-flex align-items-center h-md-100 p-5 justify-content-center">
            <div class="formModel">
                <form name="FormReg" action="saveRegInfo.php" method="post" onsubmit="return validateRegForm();">
                    <h1 class="text-center">تسجيل </h1>
                    <div class="form-input ml-5 mb-5">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6"><label for="username">الاسم</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-6"><input type="text" placeholder="أدخل اسمك...." id="username" name="username" class="float-right"></div>
                        </div>
                    </div>
                    <div class="form-input ml-5 mb-5">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6"><label for="email">البريد </label></div>
                            <div class="col-lg-6 col-md-6 col-sm-6"><input type="email" placeholder="أدخل بريدك الإلكتروني...." id="email" name="email" class="float-right"></div>
                        </div>
                    </div>
                    <div class="form-input ml-5 mb-5">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6"><label for="phoneNumber">رقم التليفون</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-6"><input type="text" placeholder="أدخل رقم تليفونك...." id="phoneNumber" name="phoneNumber" class="float-right"></div>
                        </div>
                    </div>
                    <div class="form-button">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button name="regSubmit" class="btn regbtn" onclick="validateRegForm();" type="submit">تسجيل</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<style>
    @media (min-width: 768px) {
        .h-md-100 { height: 100vh; }
    }
    .btn-round { border-radius: 30px; }
    .bg-indigo { background: rgba(0, 173, 101, 0.9); }
    .text-cyan { color: #35bdff; }
</style>
<script>
    function validateRegForm(){
        var username = document.forms["FormReg"]["username"].value;
        var email = document.forms["FormReg"]["email"].value;
        var phone = document.forms["FormReg"]["phoneNumber"].value;

        /*alert(username);
        alert(email);
        alert(phone);*/

        if(username==""||email==""||phone=="")
        {
            alert("ادخل كل البيانات المطلوبة");
            return false;
        }
        else{
            var emailPattern=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (!emailPattern.test(email)){
                alert("البريد الالكترونى غير صحيح");
                return false;
            }    
            var phonePattern = /^01[0125]\d{8}$/;
            if(!phonePattern.test(phone))
            {
                alert("رقم الهاتف غير صحيح");
                return false;
            }
            var namePattern = /^[a-zA-Z\ ]+$/;
            if(!namePattern.test(username))
            {
                alert("الاسم غير صحيح");
                return false;
            }
        }
        return true;
    }
</script>    
<?php
    include_once "footer.php";
?>