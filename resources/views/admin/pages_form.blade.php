@extends('admin.layouts.mainlayout')
@section('title', 'Pages Management')
@section('content')
<div class="card card-form">
                            <div class="row no-gutters">
                                
                                <div class="col-lg-8 card-form__body card-body">
								
								<form method="POST" action="{{ route('admin.pagestore') }}" id="form-container" class="container">{{ method_field('POST') }}
  
           
  
            {{ csrf_field() }}
                                        <div class="was-validated">
                                            <div class="form-row">
                                                <div class="col-12 col-md-12 mb-3">
                                                    <label for="validationSample01">Name</label>
                                                    <input type="text" name="name" class="form-control" id="validationSample01" placeholder="name"  required="">
                                                    <div class="invalid-feedback">Please provide a name.</div>
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
												
                                                <div class="col-12 col-md-12 mb-3" ><label for="validationSample01">Content</label>
												
                                                    <div   style="height: 150px;" id="editor-container" data-quill-placeholder="Content">
                                                   
													</div>
												 <input type="hidden" name="content" class="form-control" id="content" placeholder="content"  required=""><p></p>
                                                    <div class="invalid-feedback">Please provide a title.</div>
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
												
												
												
											
												
												
												
												
												
                                                <div class="col-12 col-md-12 mb-3">
                                                    <label for="validationSample03">Image</label>
                                                    <input type="file" name="image" class="form-control" id="validationSample03" placeholder="Image" required="">
                                                    <div class="invalid-feedback">Please provide a Image.</div>
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-12 col-md-12 mb-3">
                                                    <label for="validationSample04">Meta Title</label>
                                                    <input type="text" name="meta_title" class="form-control" id="validationSample04" placeholder="Meta Title" required="">
                                                    <div class="invalid-feedback">Please provide a metatitle.</div>
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
												<div class="col-12 col-md-12 mb-3">
                                                    <label for="validationSample05">Meta keywords</label>
                                                    <input type="text" name="meta_keywords" class="form-control" id="validationSample05" placeholder="Meta keywords" required="">
                                                    <div class="invalid-feedback">Please provide a metakeywords.</div>
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
												<div class="col-12 col-md-12 mb-3">
                                                    <label for="validationSample06">Meta description</label>
                                                    <textarea type="text" name="meta_description" class="form-control" id="validationSample06" placeholder="Meta description" required=""></textarea>
                                                    <div class="invalid-feedback">Please provide a metadescription.</div>
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
												
												
												
												
												
												
												
												
												<div class="flex">
                                        <label for="subscribe">Status</label><br>
                                        <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                                            <input checked="" type="checkbox" name="status1" id="subscribe" class="custom-control-input">
                                            <label class="custom-control-label" for="subscribe">1</label>
											<input type="hidden" name="status" id="status" class="custom-control-input">
                                        </div>
										
                                        <label for="subscribe" class="mb-0">1</label>
                                    </div>
												
												
												
												
												
												
												
												
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            
                                        </div>
                                        <button class="btn btn-primary" type="submit"> Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
@endsection