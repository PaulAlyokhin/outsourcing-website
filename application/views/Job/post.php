<header id="header" class="header-style-1">
    <div class="header-page-title">
        <div class="container">
            <h1>Post a Job</h1>

            <ul class="breadcrumbs">
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Post a Job</a></li>
            </ul>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-sm-12 page-content">

            <div class="white-container sign-up-form">
                <div>
                    <form action="<?php echo site_url('Jobs/post_job/');?>" method="POST" id="form3">
                    <section>
                        <h6 class="bottom-line"  style="margin-top: 0px">Job Title:</h6>
                        <div class="row">
                            <input type="text" class="form-control" placeholder="Write Job Title." name="title">
                        </div>
                        <h6 class="bottom-line">Job Description:</h6>
                        <div class="row">
                            <textarea class="col-sm-12" rows="20" name="job_description" id="job_description" placeholder=""></textarea>
                        </div>
                        <h6 class="label">Needs Skills</h6>

                        <div class="row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="Write Skills which you need." name="require_skill">
                            </div>
                        </div>

                        <h6 class="label">Additional Requirements</h6>

                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Require Days" name="require_days">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Total Budget" name="total_budget">
                            </div>
                        </div>
                    </section>
                    </form>
                </div>

                <hr class="mt60">

                <div class="clearfix">
                    <a href="javascript:form_submit()" class="btn btn-default btn-large pull-right">Post a Job</a>
                </div>
            </div>
        </div> <!-- end .page-content -->
    </div>
</div> <!-- end .container -->
<script type="text/javascript">
    function form_submit(){
        $('#form3').submit();
    }
</script>