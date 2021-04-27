@extends('backend.layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">   
    
<link rel="stylesheet" href="{{ URL::asset('site_assets/summernote/summernote.css') }}">    
<script src="{{ URL::asset('site_assets/summernote/summernote.js') }}"></script>
    
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 250,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                  // set focus to editable area after initializing summernote
        });
        $('.js-example-basic-multiple').select2();
    });
</script>  


  <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                                Newsletter  
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li><a href="{{ URL::to('admin/dashboard') }}">Dashboard</a></li>
                                <li><a class="link-effect" href="">Newsletter</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header"> 
                            
                        <div class="block-content">                            
                             @if(Session::has('flash_message'))
                                <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    {{ Session::get('flash_message') }}
                                </div>
                            @endif
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
			{!! Form::open(array('url' => array('admin/newslettermail'),'class'=>'form-horizontal padding-15'
                         ,'name'=>'newslettermail','id'=>'newslettermail','role'=>'form','enctype' => 'multipart/form-data')) !!}	
                         
                            <div class="text-right">
                                   <button type="button"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#varsha"><i class="fa fa-envelope"></i> Send Mail</button>
                            </div>
                         
                            <table class="table table-bordered table-striped cat-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sr No</th>
					<th class="text-center">Select</th>
                                        <th class="text-center">Customer Email</th>
                                        <th class="text-center">Customer Gender</th>  
                                        <th class="text-center">Action</th>  
                                    </tr>
                                </thead>
                                <tbody>
				<?php $count=0; ?>
				@foreach($data as $row)
                                    <tr>
					<td class="text-center"><?php echo ++$count; ?></td>
					<td class="text-center"> <input  type="checkbox" name="newsletter[]" value="{{$row->customer_email}}" / ></td>
					<td class="text-center">{{ $row->customer_email }}</td>
                                        <td class="text-center">{{ $row->gender }}</td>
                                        <td class="text-center"><a href="{{ url('admin/newslatter/delete/'.$row->id) }}" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Remove" onclick="return confirm('Are you sure? You will not be able to recover this.')"><i class="fa fa-times"></i></a></td>
                                        
                                    </tr>
				@endforeach                                    
                                </tbody>
                            </table>
                         
                         
                         <div class="modal fade newsletter" id="varsha" role="dialog">
                                    <div class="modal-dialog">                                    
                                       <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">Newslatter</h4>
                                            </div>

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="subject">Subject:</label>
                                                    <input type="text" class="form-control" name="subject" id="subject">
                                                </div>

                                                <div class="form-group">
                                                  <label for="content">Content:</label>
                                                  <textarea  id="summernote" class="js-summernote form-control" name="content"></textarea>
                                                </div>

                                                <div class="modal-footer">
                                                  <button type="submit" name='btn' class="btn btn-default">send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          
                         
                        {!! Form::close() !!} 
                        </div>
                    </div>
                    <!-- END Dynamic Table Full -->

                    
                </div>
                <!-- END Page Content -->
				
			

@endsection
