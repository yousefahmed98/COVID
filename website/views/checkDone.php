<?php
    $PageTitle = "أطمن علي صحتك";
    include_once "../init.php";
    include_once "navbar.php";
?>
<div class="d-md-flex h-md-100 align-items-center">
    <div class="col-md-6 p-0 bg-indigo h-md-100">
        <div class="text-white d-md-flex align-items-center h-100 p-5 text-center justify-content-center">
            <div class="logoarea pt-5 pb-5">
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-6 mb-4">
                    <div class="card bg-secondary form-white">
                        <div class="card-body">
                            <!-- Form contact -->
                            <form>
                                <h2 class="text-center py-4 font-bold font-up white-text">Contact us</h2>
                                <div class="md-form">
                                    <i class="fa fa-user prefix white-text"></i>
                                    <input type="text" id="form32" class="form-control">
                                    <label for="form32">Your name</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix white-text"></i>
                                    <input type="text" id="form22" class="form-control">
                                    <label for="form22">Your email</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-tag prefix white-text"></i>
                                    <input type="text" id="form322" class="form-control">
                                    <label for="form342">Subject</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-pencil prefix white-text"></i>
                                    <textarea type="text" id="form82" class="md-textarea" style="height: 100px"></textarea>
                                    <label for="form82">Your message</label>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-info btn-lg">Send</button>
                                </div>
                            </form>
                            <!-- Form contact -->
                        </div>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 p-0 bg-white h-md-100 loginarea">
        <div class="d-md-flex align-items-center h-md-100 p-5 justify-content-center">
            Second half content here
        </div>
    </div>    
</div>
<style>
    @media (min-width: 768px) {
        .h-md-100 { height: 100vh; }
    }
    .btn-round { border-radius: 30px; }
    .bg-indigo { background: indigo; }
    .text-cyan { color: #35bdff; }
</style>

<?php
    include_once "footer.php";
?>