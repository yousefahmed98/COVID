<?php
    $PageTitle = "إختبار صحتك";
    include '../init.php';
    include_once "navbar.php";
    include "../db.php";
    include "../date.php";
   
if(isset($_GET['submit'])){
    if(validate())
    {
        $sick=calc_results();
        insert_quest();
        header("Location:checkDone.php?sick=".$sick."");
    }else{
        echo "<script> alert('Enter All Data'); </script>";
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
                                <label class="control-label"><strong style="font-size: 25px; text-decoration: underline;">الجنس</strong></label></div>
                                    <div class="col-md-4">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-success active p-3">
                                            <input type="radio" name="options" autocomplete="off" id="male" value="ذكر">ذكر</label>
                                            <label class="btn btn-danger p-3">
                                            <input type="radio" name="options" autocomplete="off" id="female" value="أنثى">أنثى</label>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-md-8">
                                        <label class="control-label"><strong style="font-size: 25px; text-decoration: underline;">سنة الميلاد</strong></label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" placeholder="إضغط هنا لتختار التاريخ" id="datepicker" name="Birthdate" required></div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label class="control-label"><strong style="font-size: 25px; text-decoration: underline;">هل أنت مدخن</strong></label></div>
                                        <div class="col-md-4">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-success active p-3">
                                                <input type="radio" name="options1" autocomplete="off" id="smokeNo" value="لا">لا
                                            </label>
                                            <label class="btn btn-danger p-3">
                                                <input type="radio" name="options1" autocomplete="off" id="smokeYes" value="نعم">نعم
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                    <br />
                                <div class="row">
                                        <div class="col-md-8">
                                            <label class="control-label"><strong style="font-size: 25px; text-decoration: underline;">هل تعانى من أمراض مزمنة؟</strong></label></div>
                                        <div class="col-md-4">
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-success active p-3">
                                                    <input type="radio" name="options2" autocomplete="off" id="pastNo" value="لا">
                                                    لا
                                                </label>
                                                <label class="btn btn-danger p-3">
                                                    <input type="radio" name="options2" autocomplete="off" id="pastYes" value="نعم">
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
                                            <strong style="font-size: 25px; text-decoration: underline;">خلال ال 14 يوم الماضية فقط ، هل ظهرت لديك أي من الأعراض الرئيسية التالية؟</strong>
                                        </label>
                                        </div>
                                    </div>
                                    <div class="row mr-5">
                                        <div class="col-md-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom1" name="custom1[]" value="صعوبة شديدة بالتنفس">
                                                    <label class="custom-control-label" for="custom1">صعوبة شديدة بالتنفس (انقطاع او تسارع النفس)</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom2"  name="custom1[]" value="ألم مستمر في الصدر">
                                                    <label for="custom2" class="custom-control-label">
                                                        ألم مستمر في الصدر
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom3" name="custom1[]" value="زرقة الشفاه أو الوجه">
                                                    <label for="custom3" class="custom-control-label">
                                                        زرقة الشفاه أو الوجه
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom4" name="custom1[]" value=" ارهاق شديد و عدم القدرة على النهوض">
                                                    <label for="custom4" class="custom-control-label">
                                                        ارهاق شديد و عدم القدرة على النهوض
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom5" name="custom1[]" value="لا شيء مما ذكر">
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
                                                <strong style="font-size: 25px; text-decoration: underline;">خلال ال 14 يوم الماضية فقط ، هل ظهرت لديك أي من الأعراض الشائعة التالية؟
                                                </strong>
                                            </label></div>
                                            
                                            <div class="row mr-5">
                                                <div class="col-md-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom6" name="custom2[]" value="حمى">
                                                    <label for="custom6" class="custom-control-label">
                                                        حمى
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom7" name="custom2[]" value="سعال جاف">
                                                    <label for="custom7" class="custom-control-label">
                                                        سعال جاف
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom8" name="custom2[]" value="صداع">
                                                    <label for="custom8" class="custom-control-label">
                                                        صداع
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom9" name="custom2[]" value="اجهاد او ارهاق عام">
                                                    <label for="custom9" class="custom-control-label">
                                                        اجهاد او ارهاق عام
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom10" name="custom2[]" value="صعوبة خفيفة او متوسطة بالتنفس">
                                                    <label for="custom10" class="custom-control-label">
                                                        صعوبة خفيفة او متوسطة بالتنفس
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom11" name="custom2[]" value="الم في العظام">
                                                    <label for="custom11" class="custom-control-label">
                                                        الم في العظام
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom12" name="custom2[]" value="ألم في الحلق">
                                                    <label for="custom12" class="custom-control-label">
                                                        ألم في الحلق
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom13" name="custom2[]" value="إسهال">
                                                    <label for="custom13" class="custom-control-label">
                                                        إسهال
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom14" name="custom2[]" value="قشعريرة"> 
                                                    <label for="custom14" class="custom-control-label">
                                                        قشعريرة
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom15" name="custom2[]" value="غثيان">
                                                    <label for="custom15" class="custom-control-label">
                                                        غثيان
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom16" name="custom2[]" value="احتقان في الانف">
                                                    <label for="custom16" class="custom-control-label">
                                                        احتقان في الانف
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom17" name="custom2[]" value="استفراغ">
                                                    <label for="custom17" class="custom-control-label">
                                                        استفراغ
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom18" name="custom2[]" value="بلغم مع دم">
                                                    <label for="custom18" class="custom-control-label">
                                                        بلغم مع دم
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom19" name="custom2[]" value="دوار">
                                                    <label for="custom19" class="custom-control-label">
                                                        دوار (دوخة)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom20" name="custom2[]" value="الم في العضلات">
                                                    <label for="custom20" class="custom-control-label">
                                                        الم في العضلات
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom21" name="custom2[]" value="فقدان الشهية">
                                                    <label for="custom21" class="custom-control-label">
                                                        فقدان الشهية
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom22" name="custom2[]" value="فقدان حاسة الشم">
                                                    <label for="custom22" class="custom-control-label">
                                                        فقدان حاسة الشم
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom23" name="custom2[]" value="فقدان حاسة الذوق">
                                                    <label for="custom23" class="custom-control-label">
                                                        فقدان حاسة الذوق
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom24" name="custom2[]" value="انتفاخ العين">
                                                    <label for="custom24" class="custom-control-label">
                                                        انتفاخ العين
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom25" name="custom2[]" value="احمرار بالعين">
                                                    <label for="custom25" class="custom-control-label">
                                                        احمرار بالعين
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom26" name="custom2[]" value="لا شيء مما ذكر">
                                                    <label for="custom26" class="custom-control-label">
                                                        لا شيء مما ذكر
                                                    </label>
                                                </div>
                                            </div>

                                            </div>
                                            
                                        </div>
                                        <br /><br/>

                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="control-label">
                                                    <strong style="font-size: 25px; text-decoration: underline;">هل قُمت بمخالطة شخص مُصاب بكوفيد-19 خلال 14 يومًا الماضية؟
                                                    </strong>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-success active p-3">
                                                        <input type="radio" name="options3" id="daysNo" autocomplete="off" value="لا">
                                                        لا
                                                    </label>
                                                    <label class="btn btn-danger p-3">
                                                        <input type="radio" name="options3" id="daysYes" autocomplete="off" value="نعم">
                                                        نعم
                                                    </label>

                                                </div>
                                            </div>


                                        </div>
                                        <br />

                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="control-label">
                                                    <strong style="font-size: 25px; text-decoration: underline;">هل عملت في مُنشأة صحيّة (مستشفى، مركز صحي، عيادة طبيب...إلخ) خلال 14 يومًا الماضية؟
                                                    </strong>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-success active p-3">
                                                        <input type="radio" name="options4" id="cliNo" autocomplete="off" value="لا">
                                                        لا
                                                    </label>
                                                    <label class="btn btn-danger p-3">
                                                        <input type="radio" name="options4" id="cliYes" autocomplete="off" value="نعم">
                                                        نعم
                                                    </label>

                                                </div>
                                            </div>


                                        </div>
                                        <br />

                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="control-label">
                                                    <strong style="font-size: 25px; text-decoration: underline;">هل قمت بزيارة دولة أو منطقة يتفشّى فيها فيروس كورونا خلال 14 يومًا الماضية؟
                                                    </strong>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-success active p-3">
                                                        <input type="radio" name="options5" id="plaNo" autocomplete="off" value="لا">
                                                        لا
                                                    </label>
                                                    <label class="btn btn-danger p-3">
                                                        <input type="radio" name="options5" id="plaYes" autocomplete="off" value="نعم">
                                                        نعم
                                                    </label>

                                                </div>
                                            </div>


                                        </div>
                                        <br />

                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="control-label">
                                                    <strong style="font-size: 25px; text-decoration: underline;">هل قمت بحضور اجتماع/ احتفال/ مباراة/ أو أي مكان مزدحم بالأشخاص خلال 14 يومًا الماضية؟
                                                    </strong>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-success active p-3">
                                                        <input type="radio" name="options6" id="attNo" autocomplete="off" value="لا">
                                                        لا
                                                    </label>
                                                    <label class="btn btn-danger p-3">
                                                        <input type="radio" name="options6" id="attYes" autocomplete="off" value="نعم">
                                                        نعم
                                                    </label>

                                                </div>
                                            </div>


                                        </div>
                                        <br />

                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="control-label">
                                                    <strong style="font-size: 25px; text-decoration: underline;">هل تفشّى فيروس كورونا في المنطقة التي تعيش بها؟
                                                    </strong>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-success active p-3">
                                                        <input type="radio" name="options7" id="virNo" autocomplete="off" value="لا">
                                                        لا
                                                    </label>
                                                    <label class="btn btn-danger p-3">
                                                        <input type="radio" name="options7" id="virYes" autocomplete="off" value="نعم">
                                                        نعم
                                                    </label>

                                                </div>
                                            </div>


                                        </div>
                                        <br />

                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="control-label">
                                                    <strong style="font-size: 25px; text-decoration: underline;">هل زرت منشأة صحيّة (مستشفى، مركز صحي، عيادة طبيب...إلخ) خلال 14 يومًا الماضية؟
                                                    </strong>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-success active p-3">
                                                        <input type="radio" name="options8" id="hosNo" autocomplete="off" value="لا">
                                                        لا
                                                    </label>
                                                    <label class="btn btn-danger p-3">
                                                        <input type="radio" name="options8" id="hosYes" autocomplete="off" value="نعم">
                                                        نعم
                                                    </label>

                                                </div>
                                            </div>


                                        </div>
                                        <br />

                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="control-label">
                                                    <strong style="font-size: 25px; text-decoration: underline;">هل تعاني من حساسية الربيع

                                                    </strong>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-success active p-3">
                                                        <input type="radio" name="options9" id="rpNo" autocomplete="off" value="لا">
                                                        لا
                                                    </label>
                                                    <label class="btn btn-danger p-3">
                                                        <input type="radio" name="options9" id="rpYes" autocomplete="off" value="نعم">
                                                        نعم
                                                    </label>

                                                </div>
                                            </div>


                                        </div>
                                        <br />

                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="control-label">
                                                    <strong style="font-size: 25px; text-decoration: underline;">هل تعاني من الربو (ازمة) او امراض مزمنة في التنفس

                                                    </strong>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-success active p-3">
                                                        <input type="radio" name="options10" id="breNo" autocomplete="off" value="لا">
                                                        لا
                                                    </label>
                                                    <label class="btn btn-danger p-3">
                                                        <input type="radio" name="options10" id="breYes" autocomplete="off" value="نعم">
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
                         <br>
                         <br>
                <hr class="style12">
                    <div class="row">
                        <div class="align-self-center mx-auto">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="submit" class="btn btn-outline-success btn-lg" name="submit">
                                <i class="fas fa-thumbs-up"></i><br />طمنى</button>                                  
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    <br />

<div class="modal fade" id="Quest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
        <iframe class="embed-responsive-item"  src="https://docs.google.com/forms/d/e/1FAIpQLSdQxrrxSdcHToVKMO3Si3wydj_gsweVC-mbiuHZ0ZHS4GLh8A/viewform?embedded=true" width="640" height="3298" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
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

