@extends('admin.layouts.mainlayout')
@section('title', 'Pages Management')
@section('content')
 <div class="container-fluid page__heading-container">
                        <div class="page__heading">
                            

                            <h1 class="m-0">Pages</h1>
                        </div>
                    </div>
	<div class="container-fluid">
	
	<div class="card card-form">
	
<div class="row no-gutters">
                          <div class="col-lg-4 card-body">
						  <a href="{{ url('admin/page/create') }}"   class="btn btn-dark"><i class="fa-fa-edit">Add</i></a>
						  </div>
                                <div class="search-form search-form--light m-4 col-lg-7" >
                                            <input type="text" class="form-control search" placeholder="Search">
                                            <button class="btn" type="button"><i class="material-icons">search</i></button>
											
                                        </div>
										
									
						</div>				
                                <div class="col-lg-12 card-form__body">


                                    <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values="[&quot;js-lists-values-employee-name&quot;]">
<div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>
                                       <table class="table mb-0 thead-border-top-0">
                                            <thead>
                                                <tr>

                                                    <th style="width: 18px;">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input js-toggle-check-all" data-target="#staff" id="customCheckAll">
                                                            <label class="custom-control-label" for="customCheckAll"><span class="text-hide">Toggle all</span></label>
                                                        </div>
                                                    </th>
                                                    
                                                    <th>Name</th>


                                                    <th>Status</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody class="list" id="staff">
                                              @foreach ($pages as $page)
                                                <tr class="selected">

                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input js-check-selected-row" checked="" id="customCheck1_1">
                                                            <label class="custom-control-label" for="customCheck1_1"><span class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>
													

                                                    <td>

                                                        <div class="media align-items-center">
                                                            
                                                            <div class="media-body">

                                                                <span class="js-lists-values-employee-name">{{ $page->name}}</span>

                                                            </div>
                                                        </div>

                                                    </td>


                                                    <td><span class="badge badge-warning">{{ $page->status}}</span>
                                                    
                                                    
													
													
				<td><a href="{{ url('admin/page/edit') }}/{{$page->id}}" class="btn btn-dark"><i class="fas fa-pencil-alt">&nbsp;Edit</i></a></a>  &nbsp; <a href="{{ url('admin/page/destroy') }}/{{$page->id}}" class="btn btn-dark"><i class="fas fa-trash-alt">&nbsp;Delete</i></a></td>
										
													 @endforeach
                                                </tr>
                                                
                                        

                                                
                                              
													
                                                

                                            </tbody>
                                        </table>
										
                                </div>
								
                                    </div>



                                </div>
                            
                        </div>
                        </div>
@endsection