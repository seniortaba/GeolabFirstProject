@extends('layouts.adminLayout.admin_design')
@section('content')

   <div id="content">
       <div id="content-header">
           <div id="breadcrumb"><a href="index.html" title="Go To home" class="tip-bottom"><i class="icon-home">
                   </i>Home</a> <a href="#">Banner</a><a href="#" class="current">Add Banner</a>
           </div>
           <h1>Banner</h1>
           @if (Session::has('flash_message_error'))
               <div class="alert alert-error alert-block">
                   <button type="button" class="close" data-dismiss="alert">x</button>
                   <strong>{!! session('flash_message_error') !!}</strong>
               </div>
           @endif
           @if (Session::has('flash_message_success'))
               <div class="alert alert-success alert-block">
                   <button type="button" class="close" data-dismiss="alert">x</button>
                   <strong>{!! session('flash_message_success') !!}</strong>
               </div>
           @endif
   </div>
       <div class="container-fulid"><hr>
           <div class="row-fluid">
               <div class="span12">
                   <div class="widget-box">
                       <div class="widget-title"> <span class="icon"><i class="icon-info-sing"></i></span>
                       <h5>Add Banner</h5>
                       </div>
                       <div class="widget-content nopadding">
                           <form enctype="multipart/form-data" class="form-horizontal" method="post"
                                 action="{{ url('admin/add-banner') }}" name="add_banner" id="add_banner" novalidate="novalidate">{{
                                 crf_field()}}
                              <div class="control-group">
                                  <label class="control-label">Banner Image</label>
                                  <div class="controls">
                                      <div class="uploader" id="uniform-undefined"> <input name="image" id="image" type="file"
                                       size="19" style="opacity: 0;"> <span class="filename">No file selected</span>
                                          <span class="action">Choose File</span>
                                  </div>
                              </div>
                               <div class="control-group">
                                   <label class="control-label">Banner Name</label>
                                   <div class="controls">
                                       <input type="text" name="banner_name" id="banner_name">
                                   </div>
                               </div>
                           </form>
                       </div>

                   </div>
               </div>
           </div>
       </div>

