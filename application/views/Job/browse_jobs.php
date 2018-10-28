<div id="page-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 page-content">
				<?php 
				$month_array = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
				?>
				<div class="clearfix mb30">
					<ul class="jobs-view-toggle pull-left">
						<li><a href="#" data-layout="" class="btn btn-gray fa fa-list"></a></li>
						<li><a href="#" data-layout="compact" class="btn btn-gray fa fa-align-justify"></a></li>
					</ul>

					<!--<select class="form-control pull-left">
						<option value="">Sort By</option>
						<option value="">Latest</option>
						<option value="">Oldest</option>
						<option value="">Lowest Price</option>
						<option value="">Highest Price</option>
						<option value="">Most Bids</option>
						<option value="">Fewest Bids</option>
					</select>

					<ul class="pagination pull-right">
						<li><a href="#" class="fa fa-angle-left"></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#" class="fa fa-angle-right"></a></li>
					</ul>-->
				</div>
				<?php foreach($models as $job):?>
				<div class="jobs-item with-thumb">
					<div class="clearfix visible-xs"></div>
					<?php 
					$create_date = new Datetime($job->created_at);
					$month = date_format($create_date, 'm');
					$day = date_format($create_date, 'd');
					?>
					<div class="date"><?php echo $day;?> <span><?php echo $month_array[$month-1]?></span></div>
					<h6 class="title"><a href="<?php echo site_url('Jobs/view_single/'.$job->id);?>"><?php echo $job->title;?></a></h6><a href="<?php echo site_url('Jobs/view_single/'.$job->id.'/true');?>">View detail</a>

					<p class="description"><?php if(strlen($job->job_description) > 234)
					echo substr($job->job_description, 0, 234)."...";
					else
						echo $job->job_description;
					?> <a href="#" class="read-more">Read More</a></p>

					<div class="content">
						<?php
						if(strlen($job->job_description) > 234)
							echo "<p>".substr($job->job_description, 234)."</p>";
						?>
						

						<h5>Required Skills</h5>
						<p><?php echo $job->require_skill;?></p>

						<h5>Additional Requirements</h5>

						<ul class="additional-requirements clearfix">
							<li>Finish in <?php echo $job->require_days;?></li>
							<li>Limit Budget : <?php echo $job->total_budget;?></li>
						</ul>

					</div>
				</div>
				<?php endforeach;?>
<!--
				<div class="clearfix">
					<ul class="pagination pull-right">
						<li><a href="#" class="fa fa-angle-left"></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#" class="fa fa-angle-right"></a></li>
					</ul>
				</div>-->
			</div> <!-- end .page-content -->
		</div>
	</div> <!-- end .container -->
</div> <!-- end #page-content -->