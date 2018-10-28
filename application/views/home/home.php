<?php 
$month_array = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
?>
<div id="page-content">
    <div class="header-banner">
        <div class="flexslider header-slider">
            <ul class="slides">
                <li>
                    <img src="<?php echo base_url('assets/img/transparent.png');?>" alt="">
                    <div data-image="<?php echo base_url('assets/img/content/slide-1.png');?>"></div>
                </li>

                <li>
                    <img src="<?php echo base_url('assets/img/transparent.png');?>" alt="">
                    <div data-image="<?php echo base_url('assets/img/content/slide-2.png');?>"></div>
                </li>

                <li>
                    <img src="<?php echo base_url('assets/img/transparent.png');?>" alt="">
                    <div data-image="<?php echo base_url('assets/img/content/slide-3.png');?>"></div>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="title-lines">
                <h3 class="mt30" style="margin-bottom: 30px">What are you going to do?</h3>
            </div>
            <div class="row">
                <div class="col-sm-6" style="background-color: #4d4d4d">
                    <div class="header-banner-box register">
                        <div class="counter-container">
                            <ul class="counter clearfix">
                                <li class="zero">0</li>
                                <li>3</li>
                                <li>5</li>
                                <li>1</li>
                                <li>0</li>
                                <li>9</li>
                            </ul>

                            <div><span>Jobs</span></div>
                        </div>

                        <a href="<?php echo site_url('User/Register/1');?>" class="btn btn-default">Register Now</a>
                    </div>
                </div>

                <div class="col-sm-6" style="background-color: #4d4d4d">
                    <div class="header-banner-box post-job">
                        <img src="<?php echo base_url('assets/img/verified.png');?> " alt="">

                        <a href="<?php echo site_url('Jobs/post'); ?>" class="btn btn-red">Post a Job</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 page-content">
                <div class="title-lines">
                    <h3 class="mt0">Latest Jobs</h3>
                </div>

                <!--<div class="find-job-tabs responsive-tabs">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#find-job-tabs-categories">Categories</a></li>
                        <li><a href="#find-job-tabs-skills">Skills</a></li>
                        <li><a href="#find-job-tabs-country">Country</a></li>
                    </ul>

                    <div class="tab-content">

                        <div class="tab-pane active" id="find-job-tabs-categories">
                            <div class="row p30">
                                <div class="col-sm-6">
                                    <h6 class="mt0">Web, Mobile & Software Dev</h6>
                                    <ul class="filter-list">
                                        <li><a href="#">Web, Mobile & Software Dev <span>(34)</span></a></li>
                                        <li><a href="#">All Web, Mobile & Software Dev <span>(142)</span></a></li>
                                        <li><a href="#">Desktop Software Development <span>(67)</span></a></li>
                                        <li><a href="#">Ecommerce Development <span>(24)</span></a></li>
                                        <li><a href="#">Game Development <span>(113)</span></a></li>
                                        <li><a href="#">Mobile Development <span>(27)</span></a></li>
                                        <li><a href="#">Product Management <span>(57)</span></a></li>
                                        <li><a href="#">QA & Testing <span>(29)</span></a></li>
                                        <li><a href="#">Scripts & Utilitie <span>(22)</span></a></li>
                                        <li><a href="#">Web Development <span>(26)</span></a></li>
                                        <li><a href="#">Other - Software Development <span>(4)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="find-job-tabs-skills">
                            <div class="p30">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, harum, optio, repudiandae voluptatum illum et ipsam quisquam at dolore illo eaque odio inventore quos esse reiciendis laudantium nobis aperiam iure!</p>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="filter-list">
                                            <li><a href="#">.NET Developers<span>(581)</span></a></li>
                                            <li><a href="#">Ajax Developers<span>(406)</span></a></li>
                                            <li><a href="#">Android Developers<span>(176)</span></a></li>
                                            <li><a href="#">API Developers<span>(180)</span></a></li>
                                            <li><a href="#">ASP.NET Developers<span>(978)</span></a></li>
                                            <li><a href="#">C# Developers<span>(131)</span></a></li>
                                            <li><a href="#">CSS Developers<span>(318)</span></a></li>
                                            <li><a href="#">Facebook API Developers<span>(61)</span></a></li>
                                            <li><a href="#">HTML Developers<span>(144)</span></a></li>
                                            <li><a href="#">HTML5 Developers<span>(743)</span></a></li>
                                            <li><a href="#">iOS Developers<span>(61)</span></a></li>
                                            <li><a href="#">Java Developers<span>(144)</span></a></li>
                                            <li><a href="#">JavaScript Developers<span>(743)</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="filter-list">
                                            <li><a href="#">jQuery Developers<span>(329)</span></a></li>
                                            <li><a href="#">Magento Developers<span>(326)</span></a></li>
                                            <li><a href="#">MySQL Developers<span>(130)</span></a></li>
                                            <li><a href="#">Objective-C Developers<span>(93)</span></a></li>
                                            <li><a href="#">PHP Developers<span>(1061)</span></a></li>
                                            <li><a href="#">Python Developers<span>(72)</span></a></li>
                                            <li><a href="#">Ruby on Rails Developers<span>(33)</span></a></li>
                                            <li><a href="#">SQL Programmers<span>(155)</span></a></li>
                                            <li><a href="#">SQL Server Developers<span>(744)</span></a></li>
                                            <li><a href="#">Twitter API Developers<span>(546)</span></a></li>
                                            <li><a href="#">Twitter Bootstrap Developers<span>(19)</span></a></li>
                                            <li><a href="#">Wordpress Developers<span>(581)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="find-job-tabs-country">
                            <div class="row p30">
                                <div class="col-sm-6">
                                    <ul class="country-list">
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Afghanistan.png');?>" alt=""> Afghanistan <span>(7)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/African%20Union.png');?>" alt=""> African Union <span>(6)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Aland.png');?>" alt=""> Aland <span>(2)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Albania.png');?>" alt=""> Albania <span>(7)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Alderney.png');?>" alt=""> Alderney <span>(3)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Algeria.png');?>" alt=""> Algeria <span>(4)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/American%20Samoa.png');?>" alt=""> American Samoa <span>(3)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Andorra.png');?>" alt=""> Andorra <span>(5)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Angola.png');?>" alt=""> Angola <span>(3)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Anguilla.png');?>" alt=""> Anguilla <span>(8)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Antarctica.png');?>" alt=""> Antarctica <span>(3)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Antigua%20Barbuda.png');?>" alt=""> Antigua &amp; Barbuda <span>(6)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Arab%20League.png');?>" alt=""> Arab League <span>(3)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Argentina.png');?>" alt=""> Argentina <span>(2)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Armenia.png');?>" alt=""> Armenia <span>(3)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Aruba.png');?>" alt=""> Aruba <span>(8)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/ASEAN.png');?>" alt=""> ASEAN <span>(3)</span></a></li>
                                    </ul>
                                </div>

                                <div class="col-sm-6">
                                    <ul class="country-list">
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Kenya.png');?>" alt=""> Kenya <span>(3)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Kiribati.png');?>" alt=""> Kiribati <span>(4)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Kosovo.png');?>" alt=""> Kosovo <span>(2)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Kuwait.png');?>" alt=""> Kuwait <span>(6)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Kyrgyzstan.png');?>" alt=""> Kyrgyzstan <span>(1)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Laos.png');?>" alt=""> Laos <span>(3)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Latvia.png');?>" alt=""> Latvia <span>(4)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Lebanon.png');?>" alt=""> Lebanon <span>(2)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Lesotho.png');?>" alt=""> Lesotho <span>(5)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Liberia.png');?>" alt=""> Liberia <span>(7)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Libya.png');?>" alt=""> Libya <span>(1)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Liechtenstein.png');?>" alt=""> Liechtenstein <span>(6)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Lithuania.png');?>" alt=""> Lithuania <span>(2)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Luxembourg.png');?>" alt=""> Luxembourg <span>(8)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Macao.png');?>" alt=""> Macao <span>(5)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Macedonia.png');?>" alt=""> Macedonia <span>(2)</span></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('assets/img/flag-icons/Madagascar.png');?>" alt=""> Madagascar <span>(1)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end .find-job-tabs -->

                <!--<div class="title-lines">
                    <h3>Latest Jobs</h3>
                </div>-->

                <div>
                    
                <?php foreach($models as $job):?>
                    <div class="jobs-item with-thumb">
                        <div class="clearfix visible-xs"></div>
                        <?php 
                        $create_date = new Datetime($job->created_at);
                        $month = date_format($create_date, 'm');
                        $day = date_format($create_date, 'd');
                        ?>
                        <div class="date"><?php echo $day;?> <span><?php echo $month_array[$month-1]?></span></div>
                        <h6 class="title"><a href="<?php echo site_url('Jobs/view_single/'.$job->id);?>"><?php echo $job->title;?></a></h6><a href="<?php echo site_url('Jobs/view_single/'.$job->id.'/true');?>">Place a bid</a>

                        <p class="description"><?php if(strlen($job->job_description) > 234)
                        echo substr($job->job_description, 0, 234)."...";
                        else
                            echo $job->job_description;
                        ?> </p>
                    </div>
                <?php endforeach;?>
                </div> <!-- end .latest-jobs-section -->
            </div> <!-- end .page-content -->
        </div>
    </div> <!-- end .container -->
</div> <!-- end #page-content -->