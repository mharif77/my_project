<div class="fixed-sidebar-left">
	<ul class="nav navbar-nav side-nav nicescroll-bar">
		<li>
			<a class="active" href="{{url('/admin/dashboard')}}" data-toggle="collapse" data-target="#dashboard_dr"><i
					class="icon-picture mr-10"></i>Dashboard <span class="pull-right"><span
						class="label label-success mr-10">4</span><i class="fa fa-fw fa-angle-down"></i></span></a>

		</li>

		<li>
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#emlist"><i
					class="icon-basket-loaded mr-10"></i>Employees<span class="pull-right"><i
						class="fa fa-fw fa-angle-down"></i></span></a>
			<ul id="emlist" class="collapse collapse-level-1">
				<li>
					<a href="{{route('employee.index')}}">Employees List</a>
				</li>
				<li>
					<a href="{{route('employee.create')}}">New Employee</a>
				</li>
			</ul>
		</li>
		
		
		<li>
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#cat"><i
					class="icon-basket-loaded mr-10"></i>Catagory<span class="pull-right"><i
						class="fa fa-fw fa-angle-down"></i></span></a>
			<ul id="cat" class="collapse collapse-level-1">
				<li>
					<a href="{{route('category.index')}}">All Catagory</a>
				</li>
				<li>
					<a href="{{route('category.create')}}">New Catagory</a>
				</li>
			</ul>
		</li>


		<li>
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><i
					class="icon-basket-loaded mr-10"></i>Product<span class="pull-right"><i
						class="fa fa-fw fa-angle-down"></i></span></a>
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
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#exlist"><i
					class="icon-basket-loaded mr-10"></i>Expenses<span class="pull-right"><i
						class="fa fa-fw fa-angle-down"></i></span></a>
			<ul id="exlist" class="collapse collapse-level-1">
				<li>
					<a href="{{route('expense.index')}}">All expenses</a>
				</li>
				<li>
					<a href="{{route('expense.create')}}">New expenses</a>
				</li>
			</ul>
		</li>


		
		<li>
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#pplist"><i
					class="icon-basket-loaded mr-10"></i>Purchases<span class="pull-right"><i
						class="fa fa-fw fa-angle-down"></i></span></a>
			<ul id="pplist" class="collapse collapse-level-1">
				<li>
					<a href="{{route('purchase.index')}}">All Purchase</a>
				</li>
				<li>
					<a href="{{route('purchase.create')}}">New Purchase</a>
				</li>
			</ul>
		</li>


	</ul>

</div>