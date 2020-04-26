
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
                <form name="FormReg" action="" class="w-100">
                    <h1 class="text-center">تسجيل </h1>
                    <div class="form-input ml-5 mb-5">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6"><label for="username">الاسم</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-6"><input type="text" placeholder="أدخل اسمك...."
                                    id="username" name="username" class="float-right"></div>
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
                                <button name="regSubmit" class="btn regbtn" type="button">تسجيل</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 leftSection">

        </div>
    </div>
</div>

<?php
    include_once "footer.php";
?>