<?php
    $PageTitle = "مصر أدها";
    include_once "init.php";
    
    
?>
        <header>
            <div class="overlay"></div>
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="<?php echo $vd . 'EgyptFlag.mp4'?>" type="video/mp4">
            </video>
            <div class="container h-100">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1 class="display-3">مصر أدها</h1>
                        <h1 class="lead mb-0">من أجل
                            <span class="txt-rotate" data-period="2000" data-rotate='["صحة أفضل", " مستقبل مشرق", "مصر"]'></span>
                        </h1>
                    </div>
                </div>
            </div>
        </header>
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="container">
                    <!-- Small boxes (Stat box) -->
                        <div class="row">      
                            <div class="align-self-center mx-auto">
                                <h3 style="text-align: center;" class="mb-3">مساعدة طبية</h3>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <form action="<?php echo $pg. 'healthCheckUp.php'?>" method="get">
                                        <button type="submit" class="btn btn-outline-success btn-lg mr-2 feelYes" style="margin-right: 10px;">
                                            <i class="fas fa-thumbs-up"></i><br /> لا أشعر بأعراض</button>
                                    </form>
                                    <button type="button" class="btn btn-outline-danger btn-lg ml-2 feelNo" style="margin-right: 10px;" data-target="#Quest" data-toggle="modal">
                                         <i class="fas fa-thumbs-down"></i><br />أشعر بأعراض</button>
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr class="style12">
                        <br>
                        <div class="row">
                            <h1 >مبادرة مصر-أدها لدعم التحول الرقمي في مصر</h1>
                            <p class="lead"> تمر مصرنا الحبيبه والعالم بمرحله صعبة للغايه تتطلب الحرص الشديد من كل فرد منا لنكون يداً بيد حكومة وشعباً حتى نتخطى الازمه ومن أجل خدمة المجمتع في هذه الظروف الاستثنائية أطلقت مبادرة مصر-أدها برنامج صحه للرعايه الصحيه عن بعد للمشاركة في الجهود الرسمية لمكافحة انتشار فيروس كورونا حيث يجب ان نزيد الجهود التطوعية دائما اوقات الطوارئ والازمات باعتبار ذلك فرصة ذهبية لاستثمار طاقات المتطوعين والمبادرين من اهل الخير والخبره استجابة لنداء الوطن</p>
                            <p class="lead">كما أن ظهور فيروس كورونا والتباعد الاجتماعي غير الحياة العصرية تمامًا؟ ربما تغيرت حقًا طريقة التواصل المستمر مع الأسرة والأصدقاء، وشراء السلع والحصول على الخدمات، وحتى البحث عن المعلومات فيما يتعلق بالمشكلات الصحية ويوفر برنامج صحه فرصًا لجعل الرعاية الصحية أكثر فاعلية وأفضل تنسيقًا عن طريق استخدام الزيارات الافتراضية كوسيلة لعلاج المرضى بأمان واحتواء انتشار العدوى في المستشفيات والعيادات</p>
                            <p class="lead">بالتنسيق مع مقدمي الخدمات الطبيه وكبرى الشركات ورجال الاعمال لدعم المبادره والعمل على انجاحها لدعم عمل الأجهزة الحكومية الرسمية في هذا الإطار</p>
                            <p class="lead" style="text-align:center;">جاءت تسمية المبادرة ”مصر-أدها“، تأكيدا أن المصرين وبالتكاتف مع جهود الدوله والقطاعات كافة سيكونون قادرين على تجاوز الازمه والتخفيف من اثارها</p>
                        </div>
                        <br>
                        <hr class="style12">
                        <br>
                        <div class="row">
                            <div class="card-group">
                               <div class="card">                            
                                    <img src="/Images/Whowe.png" class="bd-placeholder-img card-img-top img-circle" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" style="text-align:center;">من نحن</h5>
                                        <p class="card-text">نحن مجموعه من الاطباء والمهندسين والمفكرون المتطوعين غير التقليديين نشترك بشغف مع أولئك الذين يشاركوننا رؤيتنا في تشكيل مستقبل تقديم الرعاية الصحيه المنزليه عن بعد لنوفر الدعم الطبي المنزلي للمواطنين بالمجان في جميع أنحاء جميع انحاء جمهوريه مصر العربيه وذلك تحت رعايه جمعيه القلب المصريه</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="/Images/GoalsWe.png" class="bd-placeholder-img card-img-top img-circle" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title" style="text-align:center;">أهدفنا</h5>
                                        <p class="card-text">مع إمكانية استمرار الابتعاد الاجتماعي المتقطع خلال هذا العام ، فإن التغيير للرعاية الصحية عن بعد في مصر هو تحدينا ومهمتنا ومعًا يمكننا قيادة تجربة رعاية صحية أفضل من خلال التكنولوجيا والدعم الذي يحدث فرقًا حقيقيًا ولن نتوقف حتى نبني نظامًا أفضل معًا لتمكين المقيمين من الحصول على الرعاية الصحيه في منازلهم بامان للحد من انتشار العدوى وتقليل الضغط على المستشفيات</p>
                                    
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="/Images/HealthWe.png" class="bd-placeholder-img card-img-top img-circle" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" style="text-align:center;">برنامج صحه</h5>
                                        <p class="card-text">هو منصة الرعاية الصحيه المنزليه المجانيه المساند في حالات الطوارئ عن بعد والخط الأمامي لمقدمي الرعاية الصحية المتتطوعين في جميع أنحاء البلاد لتوفير الخدمه الطبيه لأكثر من ١٠٠ مليون مصري بكفاءة  لتقليل الاتصال وجهاً لوجه مع المرضى المعرضين للخطر، ومعالجتهم خارج العيادات بأمان حيث يجب ان يتم تشجيعهم على تجنب المستشفيات إلا إذا لزم الأمر
                                        وذلك عن طريق تقنيات المعلومات والاتصالات الرقمية مثل أجهزة الكمبيوتر وأجهزة المحمول </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr class="style12">
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <h1>برنامج صحتك مع دكتوره جميله</h1>
                                <p>في رمضان كل يوم معلومه عن كيفيه المحافظه على صحتك وصحة من تحب</p>
                                <p><strong>دكتورة جميلة محمد نصر
                                            استاذ القلب و رئيس شعبة الوقاية وأمين عام جمعية القلب المصرية 
                                            عضو لجنة الصحة المجلس القومى للمرأة</strong></p>
                                <p><strong>وبرعايه شعبه الوقاية جمعيه القلب المصريه</strong></p>
                            </div>
                            <div class="col-md-6">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?php echo $vd .'v1.mp4'?>?rel=0&cc_load_policy=1"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
       <br />
        <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <i class="fas fa-user prefix grey-text"></i>
                            <input type="text" id="orangeForm-name" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
                        </div>
                        <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="email" id="orangeForm-email" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
                        </div>
                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <input type="password" id="orangeForm-pass" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-deep-orange">Sign up</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Questineer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

// to get clinet location 
    <script>
    (function () {
    navigator.geolocation.getCurrentPosition(function (position) {
      var latitude= position.coords.latitude;
      var longitude=  position.coords.longitude;
       document.cookie="latitude="+latitude;
       document.cookie="longitude="+longitude;
    },
    function (error) {
        console.log("The Locator was denied. :(")
    })
    })();
    </script>

    <?php
        include_once "functions/functions.php";
        debug(getUserIp());
        
    ?>



<?php
    include_once $gl .'footer.php';
?>