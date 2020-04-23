
        <div class="content-wrapper">
                <section class="content">
                    <form name="QuestForm" action="SaveQuestResults.php"  method="post" onsubmit="return validateQuestForm();">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Form Element sizes -->
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
                                                        <label class="btn btn-success active">
                                                            <input type="radio" name="options1" id="option1" value="ذكر" autocomplete="off">
                                                            ذكر
                                                        </label>
                                                        <label class="btn btn-success">
                                                            <input type="radio" name="options1" id="option2" value="أنثى" autocomplete="off">
                                                            أنثى
                                                        </label>

                                                    </div>
                                                </div>


                                            </div>
                                            <br />
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label class="control-label"><strong>سنة الميلاد</strong></label></div>
                                                <div class="col-md-4">
                                                    <input class="form-control" type="text" name="date" placeholder="click to show datepicker" id="datepicker">
                                                </div>
                                            </div>
                                            <br />
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label class="control-label"><strong>هل أنت مدخن</strong></label></div>
                                                <div class="col-md-4">
                                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                        <label class="btn btn-success active">
                                                            <input type="radio" name="options2" id="option1" value ="لا" autocomplete="off">
                                                            لا
                                                        </label>
                                                        <label class="btn btn-success">
                                                            <input type="radio" name="options2" id="option2" value ="نعم" autocomplete="off">
                                                            نعم
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
                                                        <label class="btn btn-success active">
                                                            <input type="radio" name="options3" id="option1" value="لا" autocomplete="off">
                                                            لا
                                                        </label>
                                                        <label class="btn btn-success">
                                                            <input type="radio" name="options3" id="option2" value="نعم" autocomplete="off">
                                                            نعم
                                                        </label>

                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                    <!-- Form Element sizes -->
                                    <div class="card card-success">
                                        <div class="card-header">
                                            <h3 class="card-title">حول صحتك فى اخر اسبوعين</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <label class="control-label">
                                                    <strong>خلال ال 14 يوم الماضية فقط ، هل ظهرت لديك أي من الأعراض الرئيسية التالية؟
                                                    </strong>
                                                </label>
                                                <div class="col-md-8">
                                                    <div class="custom-control custom-checkbox" >
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" name="check1" value="تسارع النفس">
                                                        <label for="customCheckbox1" class="custom-control-label">
                                                            صعوبة شديدة بالتنفس (انقطاع او تسارع النفس)
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox2" name="check1" value="ألم مستمر في">
                                                        <label for="customCheckbox2" class="custom-control-label">
                                                            ألم مستمر في الصدر
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox3" name="check1" value="زرقة الشفاه أو الوجه">
                                                        <label for="customCheckbox3" class="custom-control-label">
                                                            زرقة الشفاه أو الوجه
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox4" name="check1" value="عدم القدرة على النهوض">
                                                        <label for="customCheckbox4" class="custom-control-label">
                                                            ارهاق شديد و عدم القدرة على النهوض
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox5"  name="check1" value="لا شيء مما ذكر">
                                                        <label for="customCheckbox5" class="custom-control-label">
                                                            لا شيء مما ذكر
                                                        </label>
                                                    </div>
                                                </div>


                                            </div>
                                            <br />
                                            <div class="row">
                                                <div class="col-md-8"><label class="control-label">
                                                    <strong>خلال ال 14 يوم الماضية فقط ، هل ظهرت لديك أي من الأعراض الشائعة التالية؟
                                                    </strong>
                                                </label></div>
                                                
                                                <div class="row">
                                                    <div class="col-md-4">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox6"  name="check2" value="حمى">
                                                        <label for="customCheckbox6" class="custom-control-label">
                                                            حمى
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox7" name="check2" value="سعال جاف">
                                                        <label for="customCheckbox7" class="custom-control-label">
                                                            سعال جاف
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox8" name="check2" value="صداع">
                                                        <label for="customCheckbox8" class="custom-control-label">
                                                            صداع
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox9" name="check2" value="ارهاق عام">
                                                        <label for="customCheckbox9" class="custom-control-label">
                                                            اجهاد او ارهاق عام
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox10" name="check2" value=" صعوبة خفيفة بالتنفس">
                                                        <label for="customCheckbox10" class="custom-control-label">
                                                            صعوبة خفيفة او متوسطة بالتنفس
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox11" name="check2" value="الم في العظام">
                                                        <label for="customCheckbox11" class="custom-control-label">
                                                            الم في العظام
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox12" name="check2" value="ألم في الحلق">
                                                        <label for="customCheckbox12" class="custom-control-label">
                                                            ألم في الحلق
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox13" name="check2" value="إسهال">
                                                        <label for="customCheckbox13" class="custom-control-label">
                                                            إسهال
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox14" name="check2" value="قشعريرة">
                                                        <label for="customCheckbox14" class="custom-control-label">
                                                            قشعريرة
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox15" name="check2" value="غثيان">
                                                        <label for="customCheckbox15" class="custom-control-label">
                                                            غثيان
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox16" name="check2" value="احتقان في الانف">
                                                        <label for="customCheckbox16" class="custom-control-label">
                                                            احتقان في الانف
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox17" name="check2" value="استفراغ">
                                                        <label for="customCheckbox17" class="custom-control-label">
                                                            استفراغ
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox18" name="check2" value="بلغم مع دم">
                                                        <label for="customCheckbox18" class="custom-control-label">
                                                            بلغم مع دم
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox19" name="check2" value="دوار">
                                                        <label for="customCheckbox19" class="custom-control-label">
                                                            دوار (دوخة)
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox20" name="check2" value="الم في العضلات">
                                                        <label for="customCheckbox20" class="custom-control-label">
                                                            الم في العضلات
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox21" name="check2" value="فقدان الشهية">
                                                        <label for="customCheckbox21" class="custom-control-label">
                                                            فقدان الشهية
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox22" name="check2" value="فقدان حاسة الشم">
                                                        <label for="customCheckbox22" class="custom-control-label">
                                                            فقدان حاسة الشم
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox23" name="check2" value="فقدان حاسة الذوق">
                                                        <label for="customCheckbox23" class="custom-control-label">
                                                            فقدان حاسة الذوق
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox24" name="check2" value="انتفاخ العين">
                                                        <label for="customCheckbox24" class="custom-control-label">
                                                            انتفاخ العين
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox25" name="check2" value="احمرار بالعين">
                                                        <label for="customCheckbox25" class="custom-control-label">
                                                            احمرار بالعين
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox26" name="check2" value="لا شيء مما ذكر">
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
                                                        <label class="btn btn-success active">
                                                            <input type="radio" name="options30" id="option1" value="لا" autocomplete="off">
                                                            لا
                                                        </label>
                                                        <label class="btn btn-success">
                                                            <input type="radio" name="options30" id="option2" value="نعم" autocomplete="off">
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
                                                        <label class="btn btn-success active">
                                                            <input type="radio" name="options4" id="option1" value="لا" autocomplete="off">
                                                            لا
                                                        </label>
                                                        <label class="btn btn-success">
                                                            <input type="radio" name="options4" id="option2" value="نعم" autocomplete="off">
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
                                                        <label class="btn btn-success active">
                                                            <input type="radio" name="options5" id="option1" value="لا" autocomplete="off">
                                                            لا
                                                        </label>
                                                        <label class="btn btn-success">
                                                            <input type="radio" name="options5" id="option2" value="نعم" autocomplete="off">
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
                                                        <label class="btn btn-success active">
                                                            <input type="radio" name="options6" id="option1" value="لا" autocomplete="off">
                                                            لا
                                                        </label>
                                                        <label class="btn btn-success">
                                                            <input type="radio" name="options6" id="option2" value="نعم" autocomplete="off">
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
                                                        <label class="btn btn-success active">
                                                            <input type="radio" name="options7" id="option1" value="لا" autocomplete="off">
                                                            لا
                                                        </label>
                                                        <label class="btn btn-success">
                                                            <input type="radio" name="options7" id="option2" value="نعم" autocomplete="off">
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
                                                        <label class="btn btn-success active">
                                                            <input type="radio" name="options8" id="option1" value="لا" autocomplete="off">
                                                            لا
                                                        </label>
                                                        <label class="btn btn-success">
                                                            <input type="radio" name="options8" id="option2" value="نعم" autocomplete="off">
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
                                                        <label class="btn btn-success active">
                                                            <input type="radio" name="options9" id="option1" value="لا" autocomplete="off">
                                                            لا
                                                        </label>
                                                        <label class="btn btn-success">
                                                            <input type="radio" name="options9" id="option2" value="نعم" autocomplete="off">
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
                                                        <label class="btn btn-success active">
                                                            <input type="radio" name="options10" id="option1" value="لا" autocomplete="off">
                                                            لا
                                                        </label>
                                                        <label class="btn btn-success">
                                                            <input type="radio" name="options10" id="option2" value="نعم" autocomplete="off">
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
                    <hr class="style12">
                            <div class="row">
                                <div class="align-self-center mx-auto">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button  class="btn btn-outline-success btn-lg" onclick="validateQuestForm();" type="submit" value="submit">
                                        <i class="fas fa-thumbs-up"></i>
                                        <br />
                                        طمنى</button>                                  
                                </div>
                            </div>
                        </div>
                    </form>    
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
                                <input type="text" id="defaultRegisterFormFirstName" runat="server" class="form-control" placeholder="الأسم"/>
                            </div>
                        <!-- E-mail -->
                        <input type="email" id="defaultRegisterFormEmail" runat="server" class="form-control mb-4" placeholder="البريد الإلكترونى"/>                       

                        <!-- Phone number -->
                        <input type="text" id="defaultRegisterPhonePassword" runat="server" class="form-control" placeholder="رقم الهاتف" aria-describedby="defaultRegisterFormPhoneHelpBlock"/>
                       
                      
                        <!-- Sign up button -->
                        <button ID="regbtn" runat="server" class="btn btn-info my-4 btn-block" Text="تسجيل" OnClick="regbtn_Click" PostBackUrl="~/Home.aspx" />
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
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>   
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       
        
        <script src="https://cdn.rtlcss.com/bootstrap/v4.0.0/js/bootstrap.min.js" integrity="sha384-54+cucJ4QbVb99v8dcttx/0JRx4FHMmhOWi4W+xrXpKcsKQodCBwAvu3xxkZAwsH" crossorigin="anonymous"></script>	
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/fontawesome.min.js"></script>
         <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script type="text/javascript">
          $(document).ready(function () {
              $('#datepicker').datepicker({
                  uiLibrary: 'bootstrap4'
              }); 
          });
          function validateQuestForm() {
           
                var sex = document.forms["QuestForm"]["options1"].value;
                var date = document.forms["QuestForm"]["date"].value;

                var smoker = document.forms["QuestForm"]["options2"].value;
                var options3 = document.forms["QuestForm"]["options3"].value;

                var check1 = document.forms["QuestForm"]["check1"].value;
                var check2 = document.forms["QuestForm"]["check2"].value;
                

                var options30 = document.forms["QuestForm"]["options30"].value;

                var options4 = document.forms["QuestForm"]["options4"].value;
                var options5 = document.forms["QuestForm"]["options5"].value;
                var options6 = document.forms["QuestForm"]["options6"].value;
                var options7 = document.forms["QuestForm"]["options7"].value;
                var options8 = document.forms["QuestForm"]["options8"].value;
                var options9 = document.forms["QuestForm"]["options9"].value;
                var options10 = document.forms["QuestForm"]["options10"].value;
                
                
                if (sex==""||date==""||smoker==""||options3==""||check1==""||check2==""||options30==""||options4==""||options5==""||options6==""||options7==""||options8==""||options9==""||options10=="") {
                alert(check1);
                return false;
                }
                return true;
                
            }   
        </script>
	</body>
</html>