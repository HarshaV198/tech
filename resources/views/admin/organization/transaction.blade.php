@extends('admin/layouts/app')

@section('main-content')
	<div class="content-wrapper">
		<section class="content-header">
	      <h1>
	      Transactions
	    </h1>
	    <ol class="breadcrumb">
	      <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
	      <li class="active">Transactions</li>
	    </ol>
	    </section>

	    <section class="content">
	    	<div class="row">
	    		<div class="col-xs-12">
	    			<div class="box">
			          <div class="box-body">

			          	<table id="example1" class="table table-bordered table-striped">
			              	<thead>
				              	<tr>
					                <th>Order ID</th>
					                <th>Date</th>
					                <th>Description</th>
					                <th>Product ID</th>
					                <th>Rate(Rs.)</th>
					                <th>Quantity</th>
					                <th>Total(Rs.)</th>
					                <th>Payment</th>
					                <th>Status</th>
					                <th>Deatils</th>
				              	</tr>
			              	</thead>
			              	<tbody>
				                <tr>
					                <td>00001</td>
					                <td>01/05/2017</td>
					                <td>Premium ad 3 months</td>
					                <td>10005</td>
					                <td>2700</td>
					                <td>1</td>
					                <td>2500</td>
					                <td>visa</td>
					                <td>Active</td>
					                <td>
					                	<a href="#" target="_blank">
					                      <input type="button" name="view" value="view" class="btn btn-info btn-xs" />
					                    </a>
					                </td>
				                </tr>  

				                <tr>
					                <td>00005</td>
					                <td>02/06/2017</td>
					                <td>Premium ad 6 months</td>
					                <td>10004</td>
					                <td>5500</td>
					                <td>6</td>
					                <td>5500</td>
					                <td>visa</td>
					                <td>Expired</td>
					                <td>
					                	<a href="#" target="_blank">
					                      <input type="button" name="view" value="view" class="btn btn-info btn-xs" />
					                    </a>
					                </td>
				                </tr> 

				                <tr>
					                <td>00013</td>
					                <td>01/06/2017</td>
					                <td>Bluetooth Display Board</td>
					                <td>10001</td>
					                <td>6000</td>
					                <td>2</td>
					                <td>12000</td>
					                <td>AMEX</td>
					                <td>Shipped</td>
					                <td>
					                	<a href="#" target="_blank">
					                      <input type="button" name="view" value="view" class="btn btn-info btn-xs" />
					                    </a>
					                </td>
				                </tr>                                            
			              	</tbody>
			            </table>

			            
			          </div><!-- /.box-body -->
			        </div><!-- /.box -->
	    		</div>
	    	</div>
	    </section>
	</div>
@endsection
