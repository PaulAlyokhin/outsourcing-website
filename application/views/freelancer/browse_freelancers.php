<div id="page-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 page-content">

				<div class="title-lines">
					<h3 class="mt0">Available Freelancers</h3>
				</div>

				<!--<div class="clearfix mb30">
					<select class="form-control pull-left">
						<option value="">Sort By</option>
						<option value="">1</option>
						<option value="">2</option>
						<option value="">3</option>
						<option value="">4</option>
					</select>

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
				<?php foreach($models as $job):?>
					<?php
					$result = $this->db->get_where('user_informations', array('user_id' => $job->id))->result();
					?>
				<?php if(!empty($result)):?>
				<div class="candidates-item">
					<h6 class="title"><a href="#"><?php echo $job->username; ?></a></h6>
					<span class="meta"><?php echo $job->address; ?>, <?php echo $job->type; ?></span>

					<ul class="top-btns">
						<li><a href="#" class="btn btn-gray fa fa-plus toggle"></a></li>
						<li><a href="#" class="btn btn-gray fa fa-star"></a></li>
						<li><a href="#" class="btn btn-gray fa fa-link"></a></li>
					</ul>
					<p class="description"><?php if(strlen($result[0]->profile) > 234)
					echo substr($result[0]->profile, 0, 234)."...";
					else
						echo $result[0]->profile;
					?> <a href="#" class="read-more">Read More</a></p>

					<div class="clearfix"></div>

					<div class="content">
						<?php
						if(strlen($result[0]->profile) > 234)
							echo "<p>".substr($result[0]->profile, 234)."</p>";
						?>

						<ul class="list-unstyled">
							<li><strong>Phone:</strong> <?php echo $job->phone; ?></li>
							<li><strong>Hourly Price:</strong> <?php echo $job->hourly_price; ?></li>
							<li><strong>E-mail:</strong> <?php echo $job->email; ?></li>
							<li><strong>Skills:</strong> <?php echo $result[0]->offer_skill; ?></li>
						</ul>
					</div>
				</div>
				<?php endif;?>
				<?php endforeach;?>
				<!--<div class="clearfix">
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
			</div>
		</div>
	</div> <!-- end .container -->
</div> <!-- end #page-content -->