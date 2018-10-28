<header id="header" class="header-style-1">
    <div class="header-page-title">
        <div class="container">
            <h1>Sign Up</h1>

            <ul class="breadcrumbs">
                <li><a href="#">Home</a></li>
                <li><a href="#">Sign Up</a></li>
            </ul>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-sm-12 page-content">
            <ul class="form-steps four clearfix">
                <li class="<?php if($id == 1) echo 'active'; ?><?php if($id == 2) echo 'completed'; ?>">Step 1</li>
                <li class="<?php if($id == 2) echo 'active'; ?><?php if($id == 3) echo 'completed'; ?>">Step 2</li>
                <li class="<?php if($id == 3) echo 'active'; ?><?php if($id == 4) echo 'completed'; ?>"i>Step 3</li>
                <li class="<?php if($id == 4) echo 'active'; ?>">Step 4</li>
            </ul>

            <div class="white-container sign-up-form">
                <div <?php if($id != 1) echo 'style = "display:none"';?>>
                    <form action="<?php echo site_url('user/register/2');?>" method="POST" id="form1">
                    <h2>1. Fill in your account information</h2>
                    <section>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Username" name="username">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="E-mail" name="email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="password" class="form-control" placeholder="Confirm Password" name="confirm" id="confirm">
                            </div>
                        </div>
                    </section>
                    </form>
                </div>

                <div <?php if($id != 2) echo 'style = "display:none"';?>>
                    <form action="<?php echo site_url('user/register/3');?>" method="POST" id="form2">
                    <h2>2. Fill in your personal information</h2>
                    <input type="hidden" name="username" value="<?php if(isset($username)) echo $username?>"/>
                    <input type="hidden" name="email" value="<?php if(isset($email)) echo $email?>"/>
                    <input type="hidden" name="password" value="<?php if(isset($password))  echo $password?>"/>
                    <section>
                        <h6 class="bottom-line">You are:</h6>

                        <div class="radio-inline">
                            <label><input type="radio" name="type" value="Employee"> Employee</label>
                        </div>

                        <div class="radio-inline">
                            <label><input type="radio" name="type" value="Freelancer" checked> Freelancer</label>
                        </div>
                    </section>

                    <section>
                        <h6 class="bottom-line">Personal Info:</h6>

                        <h6 class="label">Full Name</h6>

                        <div class="row">
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="name" id="name">
                            </div>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Surname" id="surname">
                            </div>
                            <input type="hidden" name="fullname" id="fullname" value=""/>
                        </div>

                        <h6 class="label">Date of Birth</h6>

                        <div class="row">
                            <div class="col-sm-12">
                                <input type="text" class="month-input" placeholder="MM" id="month">
                                <input type="text" class="day-input" placeholder="DD" id="day">
                                <input type="text" class="year-input" placeholder="YYYY" id="year">
                            </div>
                            <input type="hidden" name="birthdate" id="birthdate" value=""/>
                        </div>

                        <h6 class="label">Phone</h6>

                        <div class="row">
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Mobile" name = "mobile">
                            </div>
                        </div>

                        <h6 class="label">Address</h6>

                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Address" name = "address">
                            </div>
                        </div>
                    </section>

                    <section>
                        <h6 class="bottom-line">Hourly Price:</h6>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="range-slider clearfix">
                                    <div class="slider" data-min="10" data-max="250" data-current-min="10" data-current-max="250"></div>
                                    <div class="first-value">$ <span id="first_value">10</span></div>
                                    <input type="hidden" name="first_price" id="first_price" value=""/>
                                    <div class="last-value">$ <span id="last_value">250</span></div>
                                    <input type="hidden" name="last_price" id="last_price" value=""/>
                                </div>
                            </div>
                        </div>
                    </section>
                    </form>
                </div>
                <div <?php if($id != 3) echo 'style = "display:none"';?>>
                    <form action="<?php echo site_url('user/register_profile/');?>" method="POST" id="form3" enctype="multipart/form-data">
                    <section>
                        <div class="row">
                            <div class="col-sm-12 col-xs-2 col-md-2 columns">
                            <style>
                            .profile-pic {
                                max-width: 200px;
                                max-height: 200px;
                                display: block;
                            }

                            .file-upload {
                                display: none;
                            }
                            .circle {
                                border-radius: 1000px !important;
                                overflow: hidden;
                                width: 128px;
                                height: 128px;
                                border: 3px solid rgba(77, 77, 77, 0.3);
                                top: 72px;
                            }
                            img {
                                max-width: 100%;
                                height: auto;
                            }
                            .p-image {
                                top: 167px;
                                right: 30px;
                                color: #666666;
                                transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
                            }
                            .p-image:hover {
                                transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
                            }
                            .upload-button {
                                font-size: 1.2em;
                            }

                            .upload-button:hover {
                                transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
                                color: #999;
                            }
                            </style>
                                <div class="circle">
                                <!-- User Profile Image -->
                                <img class="profile-pic" src="http://cdn.cutestpaw.com/wp-content/uploads/2012/07/l-Wittle-puppy-yawning.jpg">

                                <!-- Default Image -->
                                <!-- <i class="fa fa-user fa-5x"></i> -->
                                </div>
                                <div class="p-image">
                                <i class="fa fa-camera upload-button"></i>
                                    <input class="file-upload" type="file" accept="image/*" name="profile_image"/>
                                </div>
                                <script>
                                    $(document).ready(function() {

    
                                    var readURL = function(input) {
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();

                                            reader.onload = function (e) {
                                                $('.profile-pic').attr('src', e.target.result);
                                            }

                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }


                                    $(".file-upload").on('change', function(){
                                        readURL(this);
                                    });

                                    $(".upload-button").on('click', function() {
                                            $(".file-upload").click();
                                        });
                                    });
                                </script>
                            </div>
                            <div class="col-sm-12 col-md-10">
                            <h6 class="label">Job Title</h6>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" placeholder="Job Title" name="job_title">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="bottom-line">Overview:</h6>
                        <input type="hidden" name="user_id" value="<?php if(isset($user_id)) echo $user_id;?>"/>
                        <div class="row">
                            <textarea class="col-sm-12" rows="20" name="overview" id="overview"></textarea>
                            <input type="hidden" name="profile" id="profile"/>
                        </div>
                        <h6 class="label">Offered Skills</h6>

                        <div class="row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="Write Skills which you will offer clients." name="offer_skill">
                            </div>
                        </div>
                    </section>
                    </form>
                </div>

                <hr class="mt60">

                <div class="clearfix">
                    <a href="javascript:form_submit(<?php echo $id;?>)" class="btn btn-default btn-large pull-right">Continue to Step <?php echo $id;?></a>
                </div>
            </div>
        </div> <!-- end .page-content -->
    </div>
</div> <!-- end .container -->
<script>
    function form_submit(id){
        if(id == 1){
            password = $('#password').val();
            confirm = $('#confirm').val();
            if(password == confirm)
                $('#form1').submit();
            else
                alert("Confirm password doesn't match!");
        }
        if(id == 2){
            var name = $('#name').val();
            var surname = $('#surname').val();
            $('#fullname').val(name + ' ' + surname);
            var mm = $('#month').val();
            var dd = $('#day').val();
            var yy = $('#year').val();
            $('#birthdate').val(yy+'-'+mm+'-'+dd);
            var first_value = $('#first_value').text();
            $('#first_price').val(first_value);
            var last_value = $('#last_value').text();
            $('#last_price').val(last_value);
            $("#form2").submit();
        }
        if(id == 3){
            var overview = $('#overview').text();
            $('#profile').val(overview);
            $('#form3').submit();
        }
    }
</script>