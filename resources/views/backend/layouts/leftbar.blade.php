<div class="fixed-sidebar-left">
				<ul class="nav navbar-nav side-nav nicescroll-bar">
					<li>
						<a  class="active" href="{{url('/admin/dashboard')}}" data-toggle="collapse" data-target="#dashboard_dr"><i class="icon-picture mr-10"></i>Dashboard <span class="pull-right"><span class="label label-success mr-10">4</span><i class="fa fa-fw fa-angle-down"></i></span></a>
						
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><i class="icon-basket-loaded mr-10"></i>Product<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="ecom_dr" class="collapse collapse-level-1">
							<li>
								<a href="{{route('product.index')}}">All product</a>
							</li>
							<li>
								<a href="{{route('product.create')}}">New product</a>
							</li>	
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#drlist"><i class="icon-basket-loaded mr-10"></i>Employee<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="drlist" class="collapse collapse-level-1">
							<li>
								<a href="{{route('product.index')}}">All Employee</a>
							</li>
							<li>
								<a href="{{route('product.create')}}">New Employee</a>
							</li>	
						</ul>
					</li>
					
				</ul>
			</div>