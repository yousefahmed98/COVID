
<?php
    $PageTitle = "أطمن علي صحتك";
    include_once "../init.php";
    include_once "navbar.php";
?>

<!--chating part -->
<script src="//code.tidio.co/ahtxzk8g4feko8u3z6c6ont9srshl5oe.js" async></script>

<!--chating part -->
<script>
  window.callbellSettings = {
    token: "xVvdeCuV6FWDvuLJage2fwMY"
  };
</script>
<script>
  (function(){var w=window;var ic=w.callbell;if(typeof ic==="function"){ic('reattach_activator');ic('update',callbellSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Callbell=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://dash.callbell.eu/include/'+window.callbellSettings.token+'.js';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()
</script>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 rightSection no-padding">
            <div class="formModel w-100 tempCard">
                <form name="FormReg" class="w-100 action="saveRegInfo.php" method="post" onsubmit="return validateRegForm();">
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
                            <div class="col-lg-6 col-md-6 col-sm-6"><input type="email"
                                    placeholder="أدخل بريدك الإلكتروني...." id="email" name="email" class="float-right">
                            </div>
                        </div>
                    </div>
                    <div class="form-input ml-5 mb-5">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6"><label for="phoneNumber">رقم التليفون</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-6"><input type="text"
                                    placeholder="أدخل رقم تليفونك...." id="phoneNumber" name="phoneNumber"
                                    class="float-right"></div>
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