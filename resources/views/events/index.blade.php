
@extends('layouts.app')


@section('content')



<section>

 	<div class="panel-group">

	    <div class="panel panel-default">

		    <div class="panel-heading">
		      	<h3 class="panel-header"><strong>Calendar</strong></h3>
		    </div>
		    <hr>
		    <div class="panel-body">
		    @include('inc.messages')	

	        <div class="row">



	        <div class="col-lg-3 col-md-3 event-form">


                <form class="form-horizontal" action="{{action('EventsController@store')}}" method="post">
                
                	{{csrf_field()}}
                    <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-4">
                      <label for="event-name">Event</label>
                      <input type="text" class="form-control" name="event-name" autocomplete="off" value="{{session('event_name')}}">
                     </div>

 					<div class="col-lg-6 col-md-12 col-sm-4">
                     
                        <label for="from-days">From</label>
                        
                        <input type="date" class="form-control" name="from-days" value="{{session('from_days')}}" max="2018-07-31" placeholder="yyyy/mm/dd">
    
					</div>

					<div class="col-lg-6 col-md-12 col-sm-4">
                      <label for="to-days">To</label>
                      <input type="date" class="form-control" name="to-days" value="{{session('to_days')}}" max="2018-07-31" placeholder="yyyy/mm/dd">
                 	</div>

                   

                   </div> <!-- end form-group -->

                   <div class="form-group">

					<div class="col-lg-12 col-md-12">

                    <label class="checkbox-inline"><input type="checkbox" value="1" name="event-days[]"
					<?php echo session('event_name') ? in_array(1, session('event_days')) == 1 ? 'checked' : '' : '' ?>>Mon</label>
                    <label class="checkbox-inline"><input type="checkbox" value="2" name="event-days[]"

                    <?php echo session('event_name') ? in_array(2, session('event_days')) == 2 ? 'checked' : '' : '' ?>>Tues</label>
                    <label class="checkbox-inline"><input type="checkbox" value="3" name="event-days[]"
					<?php echo session('event_name') ? in_array(3, session('event_days')) == 3 ? 'checked' : '' : '' ?>>Wed</label>
                    <label class="checkbox-inline"><input type="checkbox" value="4" name="event-days[]"
					<?php echo session('event_name') ? in_array(4, session('event_days')) == 4 ? 'checked' : '' : '' ?>>Thu</label>
                    <label class="checkbox-inline"><input type="checkbox" value="5" name="event-days[]"
					<?php echo session('event_name') ? in_array(5, session('event_days')) == 5 ? 'checked' : '' : '' ?>>Fri</label>
                    <label class="checkbox-inline"><input type="checkbox" value="6" name="event-days[]"
					<?php echo session('event_name') ? in_array(6, session('event_days')) == 6 ? 'checked' : '' : '' ?>>Sat</label>
                    <label class="checkbox-inline"><input type="checkbox" value="7" name="event-days[]"
					<?php echo session('event_name') ? in_array(7, session('event_days')) == 7 ? 'checked' : '' : '' ?>>Sun</label>
                  </div>  
                   </div><!--end form-group -->
                   
                    <div class="form-group">        
                     <div class="col-lg-12 col-md-12">

                        <button type="submit" class="btn btn-lg btn-primary" name="save-event">Save</button>
                      </div>
                    </div><!--end form-group -->
                </form> <!--end form -->



              
            </div> <!--end column -->



            <div class="col-lg-9 col-md-9">


                 <h1 class="sub-header"><strong>July 2018</strong></h1>
                    <div class="table-responsive">
                        <table class="table">
                        
                        <tbody>
                          <?php foreach ($months as $month) :?>
                           
                          	<?php echo session('event_name') ? in_array($month['days_id'], session('event_days')) == $month['days_id'] ? '<tr class="bg-success">' : '<tr>' : '<tr>' ?>

	                            <td><?php echo $month['days']." ".$month['weekdays'] ?></td>
	                            <td>

	                            <?php if (session('event_name')) :?>
                                <?php if (in_array($month['days_id'], session('event_days')) == $month['days_id']) :?>

                                <?php echo session('event_name'); ?>
                                                                
                                <?php endif; ?>                              
                              	<?php endif; ?>

	                            </td>
                            </tr>

                          <?php endforeach; ?>
                        </tbody>

                      	</table> <!-- end table -->

                    </div> <!-- end table-responsive -->

            </div><!--end column -->


        	</div><!-- end row -->


      		</div> <!--end panel-body -->

    	</div><!-- end panel -->


    
  	</div> <!--end panel-group-->

</section>


@endsection
