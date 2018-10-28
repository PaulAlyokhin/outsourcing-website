<div id="page-content">
	<?php //var_dump($bid); ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 page-sidebar">
				<aside>
					<div class="widget sidebar-widget white-container candidates-single-widget">
						<div class="widget-content">
						<?php 
						$month_array = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
						?>

							<h5 class="bottom-line">Job Details</h5>

							<table>
								<tbody>
									<tr>
										<td>Total Proposals</td>
										<td><?php echo count($proposal);?></td>
									</tr>

									<tr>
										<td>Price</td>
										<td><?php echo $model[0]->total_budget;?></td>
									</tr>

									<tr>
										<td>Require Days</td>
										<td><?php echo $model[0]->require_days;?></td>
									</tr>

									<tr>
										<td>Location</td>
										<td>Korea</td>
									</tr>

									<tr>
										<td>Industry</td>
										<td>IT/Computers</td>
									</tr>
								</tbody>
							</table>

						</div>
					</div>
				</aside>
			</div> <!-- end .page-sidebar -->

			<div class="col-sm-8 page-content">
				<div class="clearfix mb30 hidden-xs">
					<a href="<?php echo site_url('Jobs/browse');?>" class="btn btn-gray pull-left">Back to Listings</a>
				</div>
				<?php 
					$create_date = new Datetime($model[0]->created_at);
					$month = date_format($create_date, 'm');
					$day = date_format($create_date, 'd');
				?>
				<div class="jobs-item jobs-single-item">
					<div class="clearfix visible-xs"></div>
					<div class="date"><?php echo $day;?> <span><?php echo $month_array[$month-1]?></span></div>
					<h6 class="title"><a href="#">Need Front-end Developer</a></h6>
					<span class="meta"><?php echo $model[0]->created_at;?></i></span>


					<p><?php echo $model[0]->job_description;?></p>

					<h5>Required Skills</h5>
					<p><?php echo $model[0]->require_skill;?></p>

					<hr>

					<!--<h5>About Employeer</h5>
					<span style="fill: #5dc26a;">
    					<svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
    						<path d="M20.447 2.106c-.34-.17-.744-.133-1.047.095L16 4.75 12.6 2.2c-.355-.266-.844-.266-1.2 0L8 4.75 4.6 2.2c-.304-.227-.708-.264-1.047-.094C3.213 2.276 3 2.622 3 3v9c0 5.524 8.2 9.72 8.55 9.894l.45.227.45-.226C12.8 21.72 21 17.524 21 12V3c0-.378-.214-.724-.553-.894zM15 10h-3.5c-.275 0-.5.225-.5.5 0 .276.225.5.5.5h1c1.38 0 2.5 1.122 2.5 2.5 0 1.208-.86 2.22-2 2.45V17h-2v-1H9v-2h3.5c.276 0 .5-.224.5-.5 0-.275-.224-.5-.5-.5h-1C10.122 13 9 11.878 9 10.5c0-1.206.86-2.217 2-2.45V7h2v1h2v2z"></path>
    					</svg>
					</span>
					<span style="fill: #5dc26a;">
    					<svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
  							<path d="M12 10.823l8.965-5.563C20.677 5.1 20.352 5 20 5H4c-.352 0-.678.1-.965.26L12 10.823z"></path>
  							<path d="M12.527 12.85c-.16.1-.344.15-.527.15s-.366-.05-.527-.15l-9.47-5.877C2.003 6.983 2 6.99 2 7v9c0 1.1.897 2 2 2h16c1.103 0 2-.9 2-2V7c0-.01-.003-.02-.003-.028l-9.47 5.877z"></path>
  						</svg>
					</span>
					<span style="fill: #5dc26a;">
        				<svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							<path d="M12.002 12.006c2.206 0 4-1.795 4-4s-1.794-4-4-4-4 1.795-4 4 1.795 4 4 4zM12.002 13.006c-4.71 0-8 2.467-8 6v1h16v-1c0-3.533-3.29-6-8-6z"></path>
						</svg>
					</span>
					<span style="fill: #5dc26a;">
						<svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							<path d="M15,21h5a1,1,0,0,0,1-1V16a1,1,0,0,0-1-1H16a1,1,0,0,0-1,1v1a6.91,6.91,0,0,1-7-7H9a1,1,0,0,0,1-1V5A1,1,0,0,0,9,4H5A1,1,0,0,0,4,5v5A11,11,0,0,0,15,21Z"></path>
						</svg>
					</span>
					<span style="fill: #5dc26a;">
						<svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
						    <path d="M2 18c0 1.104.897 2 2 2h16c1.104 0 2-.896 2-2v-8H2v8zm13-6h4v2h-4v-2zM5 12h7v2H5v-2zm0 3h5v2H5v-2zM20 4H4C2.897 4 2 4.9 2 6v2h20V6c0-1.102-.896-2-2-2z"></path>
						</svg>
					</span>
					<div class="row">
						<div class="col-md-6">
							<table style="margin: 0px">
								<tbody>
									<tr>
										<td>Clarity in Specification</td>
										<td>
											<ul class="stars">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-o"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</td>
									</tr>
									<tr>
										<td>Communication</td>
										<td>
											<ul class="stars">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</td>
									</tr>

									<tr>
										<td>Payment Promptness</td>
										<td>
											<ul class="stars">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</td>
									</tr>

									<tr>
										<td>Professionalism</td>
										<td>
											<ul class="stars">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-o"></i></li>
												<li><i class="fa fa-star-o"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</td>
									</tr>

									<tr>
										<td>Would Work for Again</td>
										<td>
											<ul class="stars">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-6">
							<table style="margin: 0px">
								<tbody>
									<tr>
										<td>Reviews</td>
										<td>
											21
										</td>
									</tr>
									<tr>
										<td>Total Projects</td>
										<td>
											71
										</td>
									</tr>

									<tr>
										<td>Open Projects</td>
										<td>
											1
										</td>
									</tr>

									<tr>
										<td>Active Projects</td>
										<td>
											4
										</td>
									</tr>

									<tr>
										<td>Closed Projects</td>
										<td>
											66
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<hr>-->
					<?php 
					if(isset($this->session->userdata['userid'])){
						if($this->session->userdata['type'] == 'Freelancer'){
							$flag = 0;
							foreach($proposal as $propose)
							{
							    if ($propose->user_id == $this->session->userdata['userid'])
							    {
							        $msg = 1;
							        break;
							    }
							}
							if($flag != 0){
							?>
					<div class="clearfix">
						<a href="#proposalmodal" data-toggle="modal" data-target="#proposalmodal" class="btn btn-default pull-left">Place a Bid</a>
					</div>							
							<?php
							}
						}
					}
					?>
				</div>
				<div class="modal" tabindex="-1" role="dialog" id="proposalmodal" aria-labelledby="proposalmodal" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
						<form action="<?php echo site_url('Jobs/apply_propose/'.($model[0]->id));?>" method="POST" id="form4">
							<div class="modal-header">
								<h5 class="modal-title" style="margin-top: 0px">Modal title</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<section>
									<div class="row" style="margin-right: 0px;margin-left: 0px;">
										<textarea class="col-sm-12" rows="10" name="proposal" id="proposal" placeholder="Write your description"></textarea>
									</div>
									<div class="row" style="margin-right: 0px;margin-left: 0px;margin-top: 20px">
										<input type="text" class="col-sm-6 form-control" placeholder="Your price." name="price">
									</div>
								</section>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary">Submit proposal</button>
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>
						</form>
						</div>
					</div>
				</div>
				
				<?php
				if(isset($this->session->userdata['userid'])){
					if($this->session->userdata['userid'] == $model[0]->user_id){
				?>
				<div class="title-lines">
					<h3 class="mt0">About the Proposal</h3>
				</div>

				<?php if(!empty($proposal)):?>
				<?php foreach($proposal as $propose):?>
				<div class="about-candidate-item">
					<?php
					$user_information = $this->User_model->get_information($propose->user_id);
					?>
					<div class="thumb"><img src="<?php echo base_url('assets/img/content/face-5.png');?>" alt=""></div>

					<h6 class="title"><a href="<?php echo site_url('freelancers/single_freelancer/'.$user_information[0]->id);?>"><?php echo $user_information[0]->fullname?></a></h6>
					<?php					
					$create_date = new Datetime($user_information[0]->birthdate);
					$year = date_format($create_date, 'y');
					$age = date("Y") - $year;
					?>
					<span class="meta"><?php echo $age;?> Years Old - <?php echo $user_information[0]->address;?></span>

					<div class="list-unstyled">
						<?php echo $propose->propose?>
					</div>

				</div>
				<?php endforeach;?>
				<?php endif;?>
			<?php }} ?>
			</div> <!-- end .page-content -->
		</div>
	</div> <!-- end .container -->
</div> <!-- end #page-content -->