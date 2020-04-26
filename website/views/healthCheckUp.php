<?php
    $PageTitle = "إختبار صحتك";
    include '../init.php';
    include_once "navbar.php";
    include "../db.php";
   
if(isset($_GET['submit'])){
    if(validate())
    {
        $sickness_value=calc_sickness();
        insert_quest();
        header("Location:checkDone.php? sickness = $sickness_value");

        die();
    }else{
        echo "<script> alert('ادخل كل البيانات المطلوبة'); </script>";
        }
}

    
?>

<section class="content" style="overflow: hidden;">
    <form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>" name="checkUpForm">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title" style="font-size: 40px;">بيانات عامة</h1>
                        </div>
                        <div class="card-body ml-5">
                            <div class="row">
                                <div class="col-md-8">
                                    <label class="control-label"><strong
                                            style="font-size: 25px; text-decoration: underline;">الجنس</strong></label>
                                </div>
                                <div class="col-md-4">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-success active p-3">
                                            <input type="radio" name="options1" id="option1" value="ذكر"
                                                autocomplete="off">
                                            <label class="btn btn-danger p-3">
                                                <input type="radio" name="options1" id="option2" value="أنثى"
                                                    autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-md-8">
                                    <label class="control-label"><strong
                                            style="font-size: 25px; text-decoration: underline;">سنة
                                            الميلاد</strong></label>
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="text" name="Birthdate"
                                        placeholder="click to show datepicker" id="datepicker">
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-8">
                                        <label class="control-label"><strong
                                                style="font-size: 25px; text-decoration: underline;">هل أنت
                                                مدخن</strong></label></div>
                                    <div class="col-md-4">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-success active p-3">
                                                <input type="radio" name="options2" id="option1" value="لا"
                                                    autocomplete="off">لا

                                            </label>
                                            <label class="btn btn-danger p-3">
                                                <input type="radio" name="options2" id="option2" value="نعم"
                                                    autocomplete="off">نعم
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-8">
                                        <label class="control-label"><strong
                                                style="font-size: 25px; text-decoration: underline;">هل تعانى من أمراض
                                                مزمنة؟</strong></label></div>
                                    <div class="col-md-4">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-success active p-3">
                                                <input type="radio" name="options3" id="option1" value="لا"
                                                    autocomplete="off">
                                                لا
                                            </label>
                                            <label class="btn btn-danger p-3">
                                                <input type="radio" name="options3" id="option2" value="نعم"
                                                    autocomplete="off">
                                                نعم
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h1 class="card-title" style="font-size: 40px;">حول صحتك فى اخر اسبوعين</h1>
                            </div>
                            <div class="card-body ml-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">
                                            <strong style="font-size: 25px; text-decoration: underline;">خلال ال 14 يوم
                                                الماضية فقط ، هل ظهرت لديك أي من الأعراض الرئيسية التالية؟</strong>
                                        </label>
                                    </div>
                                </div>
                                <div class="row mr-5">
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox1"
                                                name="check1" value="تسارع النفس">
                                            <label class="custom-control-label" for="custom1">صعوبة شديدة بالتنفس
                                                (انقطاع او تسارع النفس)</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox2"
                                                name="check1" value="ألم مستمر في">
                                            <label for="custom2" class="custom-control-label">
                                                ألم مستمر في الصدر
                                            </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox3"
                                                name="check1" value="زرقة الشفاه أو الوجه">
                                            <label for="custom3" class="custom-control-label">
                                                زرقة الشفاه أو الوجه
                                            </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox4"
                                                name="check1" value="عدم القدرة على النهوض">
                                            <label for="custom4" class="custom-control-label">
                                                ارهاق شديد و عدم القدرة على النهوض
                                            </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox5"
                                                name="check1" value="لا شيء مما ذكر">
                                            <label for="custom5" class="custom-control-label">
                                                لا شيء مما ذكر
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">
                                            <strong style="font-size: 25px; text-decoration: underline;">خلال ال 14 يوم
                                                الماضية فقط ، هل ظهرت لديك أي من الأعراض الشائعة التالية؟
                                            </strong>
                                        </label></div>

                                    <div class="row mr-5">
                                        <div class="col-md-4">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox6"
                                                    name="check2" value="حمى">
                                                <label for="custom6" class="custom-control-label">
                                                    حمى
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <<input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox7" name="check2" value="سعال جاف">
                                                    <label for="custom7" class="custom-control-label">
                                                        سعال جاف
                                                    </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox8"
                                                    name="check2" value="صداع">
                                                <label for="custom8" class="custom-control-label">
                                                    صداع
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox9"
                                                    name="check2" value="ارهاق عام">
                                                <label for="custom9" class="custom-control-label">
                                                    اجهاد او ارهاق عام
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox10" name="check2" value=" صعوبة خفيفة بالتنفس">
                                                <label for="custom10" class="custom-control-label">
                                                    صعوبة خفيفة او متوسطة بالتنفس
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox11" name="check2" value="الم في العظام">
                                                <label for="custom11" class="custom-control-label">
                                                    الم في العظام
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox12" name="check2" value="ألم في الحلق">
                                                <label for="custom12" class="custom-control-label">
                                                    ألم في الحلق
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox13" name="check2" value="إسهال">
                                                <label for="custom13" class="custom-control-label">
                                                    إسهال
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox14" name="check2" value="قشعريرة">
                                                <label for="custom14" class="custom-control-label">
                                                    قشعريرة
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox15" name="check2" value="غثيان">
                                                <label for="custom15" class="custom-control-label">
                                                    غثيان
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox16" name="check2" value="احتقان في الانف">
                                                <label for="custom16" class="custom-control-label">
                                                    احتقان في الانف
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox17" name="check2" value="استفراغ">
                                                <label for="custom17" class="custom-control-label">
                                                    استفراغ
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox18" name="check2" value="بلغم مع دم">
                                                <label for="custom18" class="custom-control-label">
                                                    بلغم مع دم
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox19" name="check2" value="دوار">
                                                <label for="custom19" class="custom-control-label">
                                                    دوار (دوخة)
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox20" name="check2" value="الم في العضلات">
                                                <label for="custom20" class="custom-control-label">
                                                    الم في العضلات
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox21" name="check2" value="فقدان الشهية">
                                                <label for="custom21" class="custom-control-label">
                                                    فقدان الشهية
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox22" name="check2" value="فقدان حاسة الشم">
                                                <label for="custom22" class="custom-control-label">
                                                    فقدان حاسة الشم
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox23" name="check2" value="فقدان حاسة الذوق">
                                                <label for="custom23" class="custom-control-label">
                                                    فقدان حاسة الذوق
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox24" name="check2" value="انتفاخ العين">
                                                <label for="custom24" class="custom-control-label">
                                                    انتفاخ العين
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox25" name="check2" value="احمرار بالعين">
                                                <label for="custom25" class="custom-control-label">
                                                    احمرار بالعين
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox26" name="check2" value="لا شيء مما ذكر">
                                                <label for="custom26" class="custom-control-label">
                                                    لا شيء مما ذكر
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <br /><br />

                                <div class="row">
                                    <div class="col-md-8">
                                        <label class="control-label">
                                            <strong style="font-size: 25px; text-decoration: underline;">هل قُمت بمخالطة
                                                شخص مُصاب بكوفيد-19 خلال 14 يومًا الماضية؟
                                            </strong>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-success active p-3">
                                                <input type="radio" name="options30" id="option1" value="لا"
                                                    autocomplete="off">
                                                لا
                                            </label>
                                            <label class="btn btn-danger p-3">
                                                <input type="radio" name="options30" id="option2" value="نعم"
                                                    autocomplete="off">
                                                نعم
                                            </label>

                                        </div>
                                    </div>


                                </div>
                                <br />

                                <div class="row">
                                    <div class="col-md-8">
                                        <label class="control-label">
                                            <strong style="font-size: 25px; text-decoration: underline;">هل عملت في
                                                مُنشأة صحيّة (مستشفى، مركز صحي، عيادة طبيب...إلخ) خلال 14 يومًا الماضية؟
                                            </strong>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-success active p-3">
                                                <input type="radio" name="options4" id="option1" value="لا"
                                                    autocomplete="off">
                                                لا
                                            </label>
                                            <label class="btn btn-danger p-3">
                                                <input type="radio" name="options4" id="option2" value="نعم"
                                                    autocomplete="off">
                                                نعم
                                            </label>

                                        </div>
                                    </div>


                                </div>
                                <br />

                                <div class="row">
                                    <div class="col-md-8">
                                        <label class="control-label">
                                            <strong style="font-size: 25px; text-decoration: underline;">هل قمت بزيارة
                                                دولة أو منطقة يتفشّى فيها فيروس كورونا خلال 14 يومًا الماضية؟
                                            </strong>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-success active p-3">
                                                <input type="radio" name="options5" id="option1" value="لا"
                                                    autocomplete="off">
                                                لا
                                            </label>
                                            <label class="btn btn-danger p-3">
                                                <input type="radio" name="options5" id="option2" value="نعم"
                                                    autocomplete="off">
                                                نعم
                                            </label>

                                        </div>
                                    </div>


                                </div>
                                <br />

                                <div class="row">
                                    <div class="col-md-8">
                                        <label class="control-label">
                                            <strong style="font-size: 25px; text-decoration: underline;">هل قمت بحضور
                                                اجتماع/ احتفال/ مباراة/ أو أي مكان مزدحم بالأشخاص خلال 14 يومًا الماضية؟
                                            </strong>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-success active p-3">
                                                <input type="radio" name="options6" id="option1" value="لا"
                                                    autocomplete="off">
                                                لا
                                            </label>
                                            <label class="btn btn-danger p-3">
                                                <input type="radio" name="options6" id="option2" value="نعم"
                                                    autocomplete="off">
                                                نعم
                                            </label>

                                        </div>
                                    </div>


                                </div>
                                <br />

                                <div class="row">
                                    <div class="col-md-8">
                                        <label class="control-label">
                                            <strong style="font-size: 25px; text-decoration: underline;">هل تفشّى فيروس
                                                كورونا في المنطقة التي تعيش بها؟
                                            </strong>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-success active p-3">
                                                <input type="radio" name="options7" id="option1" value="لا"
                                                    autocomplete="off">
                                                لا
                                            </label>
                                            <label class="btn btn-danger p-3">
                                                <input type="radio" name="options7" id="option2" value="نعم"
                                                    autocomplete="off">
                                                نعم
                                            </label>

                                        </div>
                                    </div>


                                </div>
                                <br />

                                <div class="row">
                                    <div class="col-md-8">
                                        <label class="control-label">
                                            <strong style="font-size: 25px; text-decoration: underline;">هل زرت منشأة
                                                صحيّة (مستشفى، مركز صحي، عيادة طبيب...إلخ) خلال 14 يومًا الماضية؟
                                            </strong>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-success active p-3">
                                                <input type="radio" name="options8" id="option1" value="لا"
                                                    autocomplete="off">
                                                لا
                                            </label>
                                            <label class="btn btn-danger p-3">
                                                <input type="radio" name="options8" id="option2" value="نعم"
                                                    autocomplete="off">
                                                نعم
                                            </label>

                                        </div>
                                    </div>


                                </div>
                                <br />

                                <div class="row">
                                    <div class="col-md-8">
                                        <label class="control-label">
                                            <strong style="font-size: 25px; text-decoration: underline;">هل تعاني من
                                                حساسية الربيع

                                            </strong>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-success active p-3">
                                                <input type="radio" name="options9" id="option1" value="لا"
                                                    autocomplete="off">
                                                لا
                                            </label>
                                            <label class="btn btn-danger p-3">
                                                <input type="radio" name="options9" id="option2" value="نعم"
                                                    autocomplete="off">
                                                نعم
                                            </label>

                                        </div>
                                    </div>


                                </div>
                                <br />

                                <div class="row">
                                    <div class="col-md-8">
                                        <label class="control-label">
                                            <strong style="font-size: 25px; text-decoration: underline;">هل تعاني من
                                                الربو (ازمة) او امراض مزمنة في التنفس

                                            </strong>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-success active p-3">
                                                <input type="radio" name="options10" id="option1" value="لا"
                                                    autocomplete="off">
                                                لا
                                            </label>
                                            <label class="btn btn-danger p-3">
                                                <input type="radio" name="options10" id="option2" value="نعم"
                                                    autocomplete="off">
                                                نعم
                                            </label>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

                <hr class="style12">
                <div class="row">
                    <div class="align-self-center mx-auto mt-3 pt-2">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="submit" class="btn btn-outline-success btn-lg pt-2 pb-2 pr-5 pl-5"
                                name="submit">
                                <i class="fas fa-thumbs-up"></i><br />طمنى</button>
                        </div>
                    </div>
                </div>
    </form>
</section>
</div>

<div class="modal fade" id="Quest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100 font-weight-bold">تشخيص كورونا</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9" style="height:3298px;">
                    <iframe class="embed-responsive-item"
                        src="https://docs.google.com/forms/d/e/1FAIpQLSdQxrrxSdcHToVKMO3Si3wydj_gsweVC-mbiuHZ0ZHS4GLh8A/viewform?embedded=true"
                        width="640" height="3298" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</form>

<?php
    include_once 'footer.php';
?>