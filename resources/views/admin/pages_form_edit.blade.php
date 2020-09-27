@extends('admin.layouts.mainlayout')
@section('title', 'Pages Management')
@section('content')
<div class="card card-form">
                            <div class="row no-gutters">
                                
                                <div class="col-lg-8 card-form__body card-body">
								<form method="POST"  action="{{ url('admin/page/update/') }}/{{$input['id']}}" id="form-container" class="container" enctype="multipart/form-data" >{{ method_field('POST') }}
  
            {{ csrf_field() }}
                                        <div class="was-validated">
                                            <div class="form-row">
                                                <div class="col-12 col-md-12 mb-3">
                                                    <label for="validationSample01">Name</label>
                                                    <input type="text" name="name" class="form-control" id="validationSample01" placeholder="name"  required="" value="<?php echo isset($input['name'])?$input['name']:''?>">
                                                    <div class="invalid-feedback">Please provide a name.</div>
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
												
                                                <div class="col-12 col-md-12 mb-3" ><label for="validationSample02">Content</label>
												
                                                    <div   style="height: 150px;" id="editor-container" data-quill-placeholder="Content">
                                                   <?php echo isset($input['content'])?$input['content']:''?>
													</div>
												 <input type="hidden" name="content" class="form-control" id="content" placeholder="content"  required="" value="">
                                                    <div class="invalid-feedback">Please provide a title.</div>
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
												
												
												
											
												
												
												
												
												
                                                <div class="col-12 col-md-12 mb-3">
                                                    <label for="validationSample03">Image</label>
													
													<div class="col-sm-2">
                                    @if(isset($input['image']) && !empty($input['image']) && file_exists(public_path(('/uploads/pages/').$input['image'])))
                                        <img src="{{ asset(('/uploads/pages/').$input['image']) }}" class="img-thumbnail" width="100" height="100" />
                                    @else

                                        <img src="http://placehold.it/100x100" class="img-thumbnail" width="100" height="100" />
                                    @endif
                                </div>
                                                    <input type="file" name="image" class="form-control" id="validationSample03" placeholder="Image" required="" value="<?php echo isset($input['image'])?$input['image']:''?>">
                                                    <div class="invalid-feedback">Please provide a Image.</div>
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
												
                                                <div class="col-12 col-md-12 mb-3">
                                                    <label for="validationSample04">Meta Title</label>
                                                    <input type="text" name="meta_title" class="form-control" id="validationSample04" placeholder="Meta Title" required="" value="<?php echo isset($input['meta_title'])?$input['meta_title']:''?>">
                                                    <div class="invalid-feedback">Please provide a metatitle.</div>
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
												<div class="col-12 col-md-12 mb-3">
                                                    <label for="validationSample05">Meta keywords</label>
                                                    <input type="text" name="meta_keywords" class="form-control" id="validationSample05" placeholder="Meta keywords" required="" value="<?php echo isset($input['meta_keywords'])?$input['meta_keywords']:''?>">
                                                    <div class="invalid-feedback">Please provide a metakeywords.</div>
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
												<div class="col-12 col-md-12 mb-3">
                                                    <label for="validationSample06">Meta description</label>
                                                    <textarea type="text" name="meta_description" class="form-control" id="validationSample06"  required="" value=""><?php echo isset($input['meta_description'])?$input['meta_description']:''?></textarea>
                                                    <div class="invalid-feedback">Please provide a metadescription.</div>
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
												
												
												
												
												
												
												
												
												<div class="flex">
                                        <label for="subscribe">Status</label><br>
                                        <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                                            <input checked="" type="checkbox" name="status1" id="subscribe" class="custom-control-input">
                                            <label class="custom-control-label" for="subscribe">1</label>
											<input type="hidden" name="status" id="status" class="custom-control-input" value="<?php echo isset($input['status'])?$input['status']:''?>">
                                        </div>
										
                                        <label for="subscribe" class="mb-0">1</label>
                                    </div>
												
												
												
												
												
												
												
												
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            
                                        </div>
                                        <button class="btn btn-primary" type="submit" >Update </button>
                                    </form>
                                </div>
                            </div>
                        </div>
@endsection