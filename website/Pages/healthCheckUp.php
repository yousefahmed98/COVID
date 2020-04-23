<?php
    $PageTitle = "إختبار صحتك";
    include '../init.php';
?>
<div class="content-wrapper">
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">بيانات عامة</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <label class="control-label"><strong>الجنس</strong></label></div>
                                    <div class="col-md-4">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-success active p-3">
                                            <input type="radio" name="options" id="option1" autocomplete="off" checked>ذكر</label>
                                            <label class="btn btn-danger p-3">
                                            <input type="radio" name="options" id="option2" autocomplete="off">أنثى</label>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-md-8">
                                        <label class="control-label"><strong>سنة الميلاد</strong></label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" placeholder="إضغط هنا لتختار التاريخ" id="datepicker"></div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label class="control-label"><strong>هل أنت مدخن</strong></label></div>
                                        <div class="col-md-4">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-success active p-3">
                                                <input type="radio" name="options" id="option1" autocomplete="off" checked>لا
                                            </label>
                                            <label class="btn btn-danger p-3">
                                                <input type="radio" name="options" id="option2" autocomplete="off">نعم
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                    <br />
                                <div class="row">
                                        <div class="col-md-8">
                                            <label class="control-label"><strong>هل تعانى من أمراض مزمنة؟</strong></label></div>
                                        <div class="col-md-4">
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-success active p-3">
                                                    <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                                    لا
                                                </label>
                                                <label class="btn btn-danger p-3">
                                                    <input type="radio" name="options" id="option2" autocomplete="off">
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
                                    <h3 class="card-title">حول صحتك فى اخر اسبوعين</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <label class="control-label">
                                            <strong>خلال ال 14 يوم الماضية فقط ، هل ظهرت لديك أي من الأعراض الرئيسية التالية؟</strong>
                                        </label>
                                    </div>
                                            <div class="col-md-12">
                                                <div class="custom-control custom-checkbox">
                                                <label class="custom-control-label" for="custom1" style="position: absolute;">صعوبة شديدة بالتنفس (انقطاع او تسارع النفس)</label>
                                                    <input class="custom-control-input" type="checkbox" id="custom1" value="option1" required>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom2" value="option2" required>
                                                    <label for="custom2" class="custom-control-label">
                                                        ألم مستمر في الصدر
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom3" value="option3" required>
                                                    <label for="custom3" class="custom-control-label">
                                                        زرقة الشفاه أو الوجه
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom4" value="option4" required>
                                                    <label for="custom4" class="custom-control-label">
                                                        ارهاق شديد و عدم القدرة على النهوض
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="custom5" value="option5" required>
                                                    <label for="custom5" class="custom-control-label">
                                                        لا شيء مما ذكر
                                                    </label>
                                                </div>
                                            </div>


                                        </div>
                                        <br />
                                        <div class="row">
                                            <div class="col-md-12"><label class="control-label">
                                                <strong>خلال ال 14 يوم الماضية فقط ، هل ظهرت لديك أي من الأعراض الشائعة التالية؟
                                                </strong>
                                            </label></div>
                                            
                                            <div class="row">
                                                <div class="col-md-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox6" value="option1">
                                                    <label for="customCheckbox6" class="custom-control-label">
                                                        حمى
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox7" value="option1">
                                                    <label for="customCheckbox7" class="custom-control-label">
                                                        سعال جاف
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox8" value="option1">
                                                    <label for="customCheckbox8" class="custom-control-label">
                                                        صداع
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox9" value="option1">
                                                    <label for="customCheckbox9" class="custom-control-label">
                                                        اجهاد او ارهاق عام
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox10" value="option1">
                                                    <label for="customCheckbox10" class="custom-control-label">
                                                        صعوبة خفيفة او متوسطة بالتنفس
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox11" value="option1">
                                                    <label for="customCheckbox11" class="custom-control-label">
                                                        الم في العظام
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
                                                    <label for="customCheckbox12" class="custom-control-label">
                                                        ألم في الحلق
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox13" value="option1">
                                                    <label for="customCheckbox13" class="custom-control-label">
                                                        إسهال
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox14" value="option1">
                                                    <label for="customCheckbox14" class="custom-control-label">
                                                        قشعريرة
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox15" value="option1">
                                                    <label for="customCheckbox15" class="custom-control-label">
                                                        غثيان
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox16" value="option1">
                                                    <label for="customCheckbox16" class="custom-control-label">
                                                        احتقان في الانف
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox17" value="option1">
                                                    <label for="customCheckbox17" class="custom-control-label">
                                                        استفراغ
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox18" value="option1">
                                                    <label for="customCheckbox18" class="custom-control-label">
                                                        بلغم مع دم
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox19" value="option1">
                                                    <label for="customCheckbox19" class="custom-control-label">
                                                        دوار (دوخة)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox20" value="option1">
                                                    <label for="customCheckbox20" class="custom-control-label">
                                                        الم في العضلات
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox21" value="option1">
                                                    <label for="customCheckbox21" class="custom-control-label">
                                                        فقدان الشهية
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox22" value="option1">
                                                    <label for="customCheckbox22" class="custom-control-label">
                                                        فقدان حاسة الشم
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox23" value="option1">
                                                    <label for="customCheckbox23" class="custom-control-label">
                                                        فقدان حاسة الذوق
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox24" value="option1">
                                                    <label for="customCheckbox24" class="custom-control-label">
                                                        انتفاخ العين
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox25" value="option1">
                                                    <label for="customCheckbox25" class="custom-control-label">
                                                        احمرار بالعين
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox26" value="option1">
                                                    <label for="customCheckbox19" class="custom-control-label">
                                                        لا شيء مما ذكر
                                                    </label>
                                                </div>
                                            </div>

                                            </div>
                                            
                                        </div>
                                        <br />

                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="control-label">
                                                    <strong>هل قُمت بمخالطة شخص مُصاب بكوفيد-19 خلال 14 يومًا الماضية؟
                                                    </strong>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-success active p-3">
                                                        <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                                        لا
                                                    </label>
                                                    <label class="btn btn-danger p-3">
                                                        <input type="radio" name="options" id="option2" autocomplete="off">
                                                        نعم
                                                    </label>

                                                </div>
                                            </div>


                                        </div>
                                        <br />

                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="control-label">
                                                    <strong>هل عملت في مُنشأة صحيّة (مستشفى، مركز صحي، عيادة طبيب...إلخ) خلال 14 يومًا الماضية؟
                                                    </strong>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-success active p-3">
                                                        <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                                        لا
                                                    </label>
                                                    <label class="btn btn-danger p-3">
                                                        <input type="radio" name="options" id="option2" autocomplete="off">
                                                        نعم
                                                    </label>

                                                </div>
                                            </div>


                                        </div>
                                        <br />

                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="control-label">
                                                    <strong>هل قمت بزيارة دولة أو منطقة يتفشّى فيها فيروس كورونا خلال 14 يومًا الماضية؟
                                                    </strong>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-success active p-3">
                                                        <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                                        لا
                                                    </label>
                                                    <label class="btn btn-danger p-3">
                                                        <input type="radio" name="options" id="option2" autocomplete="off">
                                                        نعم
                                                    </label>

                                                </div>
                                            </div>


                                        </div>
                                        <br />

                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="control-label">
                                                    <strong>هل قمت بحضور اجتماع/ احتفال/ مباراة/ أو أي مكان مزدحم بالأشخاص خلال 14 يومًا الماضية؟
                                                    </strong>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-success active p-3">
                                                        <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                                        لا
                                                    </label>
                                                    <label class="btn btn-danger p-3">
                                                        <input type="radio" name="options" id="option2" autocomplete="off">
                                                        نعم
                                                    </label>

                                                </div>
                                            </div>


                                        </div>
                                        <br />

                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="control-label">
                                                    <strong>هل تفشّى فيروس كورونا في المنطقة التي تعيش بها؟
                                                    </strong>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-success active p-3">
                                                        <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                                        لا
                                                    </label>
                                                    <label class="btn btn-danger p-3">
                                                        <input type="radio" name="options" id="option2" autocomplete="off">
                                                        نعم
                                                    </label>

                                                </div>
                                            </div>


                                        </div>
                                        <br />

                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="control-label">
                                                    <strong>هل زرت منشأة صحيّة (مستشفى، مركز صحي، عيادة طبيب...إلخ) خلال 14 يومًا الماضية؟
                                                    </strong>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-success active p-3">
                                                        <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                                        لا
                                                    </label>
                                                    <label class="btn btn-danger p-3">
                                                        <input type="radio" name="options" id="option2" autocomplete="off">
                                                        نعم
                                                    </label>

                                                </div>
                                            </div>


                                        </div>
                                        <br />

                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="control-label">
                                                    <strong>هل تعاني من حساسية الربيع

                                                    </strong>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-success active p-3">
                                                        <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                                        لا
                                                    </label>
                                                    <label class="btn btn-danger p-3">
                                                        <input type="radio" name="options" id="option2" autocomplete="off">
                                                        نعم
                                                    </label>

                                                </div>
                                            </div>


                                        </div>
                                        <br />

                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="control-label">
                                                    <strong>هل تعاني من الربو (ازمة) او امراض مزمنة في التنفس

                                                    </strong>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-success active p-3">
                                                        <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                                        لا
                                                    </label>
                                                    <label class="btn btn-danger p-3">
                                                        <input type="radio" name="options" id="option2" autocomplete="off">
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
                                  <button type="button" class="btn btn-outline-success btn-lg"  data-target="#modalRegisterForm" data-toggle="modal">
                                      <i class="fas fa-thumbs-up"></i>
                                      <br />
                                      طمنى</button>                                  
                              </div>
                        </div>
                    </div>
                </section>
            </div>
       <br />
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">تسجيل مساعدة طبية</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body mx-3">
        <form class="text-center border border-light p-5" action="#!">
            <!-- First name -->
            <div class="form-row mb-4">
                    <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="الأسم"/>
                </div>
            <!-- E-mail -->
            <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="البريد الإلكترونى"/>                       

            <!-- Phone number -->
            <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="رقم الهاتف" aria-describedby="defaultRegisterFormPhoneHelpBlock"/>
            <br><br>
            <!-- Sign up button -->
            <button class="btn btn-info btn-block">تسجيل</button>
            <br><br>
            <!-- Social register -->
            <p>او سجل ب:</p>

            <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
            <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
            <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
            <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

            <hr>

            <!-- Terms of service -->
            <p>
                بالتسجيل فأنت موافق على
            <a href="" target="_blank">الشروط والأحكام</a>
        </form>
        <!-- Default form register -->
    </div>               
</div>
</div>
</div>
    <div class="modal fade" id="Questineer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
    <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">تشخيص كورونا</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body mb-0 p-0">
        <div class="embed-responsive embed-responsive-21by9 z-depth-1-half">
        <iframe class="embed-responsive-item" src="https://docs.google.com/forms/d/e/1FAIpQLSdQxrrxSdcHToVKMO3Si3wydj_gsweVC-mbiuHZ0ZHS4GLh8A/viewform?embedded=true" width="640" height="3298" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            </div>
    </div>               
</div>
</div>
</div>
           <!-- Modal -->
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
        include_once '../global/footer.php';
        ?>