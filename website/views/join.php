<?php
    $PageTitle = "التواصل";
    include_once "../init.php";
    include_once "navbar.php";
?>
<section class="regSection pt-5 pb-5 mt-5 mb-5">
<div class="container my-5">  
    <h3>مصر أدها</h3>
        <p><a href="https://developer.mozilla.org/en-US/docs/Web/API/HTMLSelectElement/checkValidity">إنضم إلي مجتمع مصر أدها لتكون من فريق العمل</a></p>
        <p><a href="http://getbootstrap.com/docs/4.1/components/forms/#validation">سجل الأن و سنكون علي تواصل قريباً</a></p>
    <hr>
    <div class="card bg-light">
        <form class="card-body" novalidate="" action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" id="bootstrapForm">            
            <div class="form-group">
                <label class="h4 form-control-label" for="input1">الإسم<abbr class="text-danger" title="مطلوب">*</abbr></label>
                <input type="text" class="form-control" name="i1" id="input1" placeholder="أدخل أسمك" required>
                <div class="valid-feedback">ممتاز</div>
                <div class="invalid-feedback">مطلوب</div>
            </div>
            <div class="form-group">
                <label class="h4 form-control-label" for="input2">رقم التليفون<abbr class="text-danger" title="مطلوب">*</abbr></label>
                <input type="tel" placeholder="أدخل رقم هاتفك"
                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" name="i2" id="input2" required>
                <div class="valid-feedback">ممتاز</div>
                <div class="invalid-feedback">مرفوض</div>
            </div>
            
            <div class="form-group">
                <label class="h4 form-control-label" for="input3">البريد الإلكتروني<abbr class="text-danger" title="مطلوب">*</abbr></label>
                <input type="email" placeholder="أدخل بريدك الإلكتروني" class="form-control" name="i3" id="input3" required>
                <div class="valid-feedback">ممتاز</div>
                <div class="invalid-feedback">مرفوض</div>
            </div>
                  
            <div class="form-group">
                <label class="h4 form-control-label" for="input4">التخصص<abbr class="text-danger" title="مطلوب">*</abbr></label>
                <input type="text" placeholder="أدخل تخصصك" class="form-control" name="i4" id="input4" required>
                <div class="valid-feedback">ممتاز</div>
                <div class="invalid-feedback">مرفوض</div>
            </div>

            <div class="form-group">
                <label class="h4 form-control-label" for="input5">الخبرات السابقة أو الملف التعريفي<abbr class="text-danger" title="مطلوب">*</abbr></label>
                <input type="file" placeholder="أدخل الخبرات السابقة" class="form-control" name="i5" id="input5" required>
                <div class="valid-feedback">ممتاز</div>
                <div class="invalid-feedback">مرفوض</div>
            </div>
            <div>
                <button type="submit" class="btn btn-secondary float-right">إرسال</button>
            </div>          
        </form>
    </div>
</div>
  
</section>
  


<?php
    include_once 'footer.php';
?>