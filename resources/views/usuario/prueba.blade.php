@extends ('admin.header')

@section('content')               
<!-- BEGIN CONTENT -->

            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <!-- END THEME PANEL -->
                    <h1 class="page-title"> Toastr Notifications
                        <small>gnome & growl type non-blocking bootstrap toastr notifications</small>
                    </h1>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.html">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>UI Features</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADER-->
                    <div class="m-heading-1 border-green m-bordered">
                        <h3>Bootstrap Toastr</h3>
                        <p> Bootstrap Toastr is a Javascript library for Gnome / Growl type non-blocking notifications. jQuery is required. The goal is to create a simple core library that can be customized and extended.. For more info please check out
                            <a
                                href="http://codeseven.github.io/toastr/" target="_blank">the official documentation</a>. </p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-bubble font-green-sharp"></i>
                                        <span class="caption-subject font-green-sharp sbold">Toastr Notification Demo</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label" for="title">Title</label>
                                                <input id="title" type="text" class="form-control" value="Toastr Notifications" placeholder="Enter a title ..." /> </div>
                                            <div class="form-group">
                                                <label class="control-label" for="message">Message</label>
                                                <textarea class="form-control" id="message" rows="3" placeholder="Enter a message ...">Gnome & Growl type non-blocking notifications</textarea>
                                            </div>
                                            <div class="form-group">
                                                <div class="mt-checkbox-list">
                                                    <label class="mt-checkbox mt-checkbox-outline" for="closeButton">
                                                        <input id="closeButton" type="checkbox" value="checked" checked class="input-small" />Close Button
                                                        <span></span>
                                                    </label>
                                                    <label class="mt-checkbox mt-checkbox-outline" for="addBehaviorOnToastClick">
                                                        <input id="addBehaviorOnToastClick" type="checkbox" value="checked" class="input-small" />Add behavior on toast click
                                                        <span></span>
                                                    </label>
                                                    <label class="mt-checkbox mt-checkbox-outline" for="debugInfo">
                                                        <input id="debugInfo" type="checkbox" value="checked" class="input-small" />Debug
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group" id="toastTypeGroup">
                                                <label>Toast Type</label>
                                                <div class="mt-radio-list">
                                                    <label class="mt-radio mt-radio-outline">
                                                        <input type="radio" name="toasts" value="success" checked/>Success
                                                        <span></span>
                                                    </label>
                                                    <label class="mt-radio mt-radio-outline">
                                                        <input type="radio" name="toasts" value="info" />Info
                                                        <span></span>
                                                    </label>
                                                    <label class="mt-radio mt-radio-outline">
                                                        <input type="radio" name="toasts" value="warning" />Warning
                                                        <span></span>
                                                    </label>
                                                    <label class="mt-radio mt-radio-outline">
                                                        <input type="radio" name="toasts" value="error" />Error
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group" id="positionGroup">
                                                <label>Position</label>
                                                <div class="mt-radio-list">
                                                    <label class="mt-radio mt-radio-outline">
                                                        <input type="radio" name="positions" value="toast-top-right" checked/>Top Right
                                                        <span></span>
                                                    </label>
                                                    <label class="mt-radio mt-radio-outline">
                                                        <input type="radio" name="positions" value="toast-bottom-right" />Bottom Right
                                                        <span></span>
                                                    </label>
                                                    <label class="mt-radio mt-radio-outline">
                                                        <input type="radio" name="positions" value="toast-bottom-left" />Bottom Left
                                                        <span></span>
                                                    </label>
                                                    <label class="mt-radio mt-radio-outline">
                                                        <input type="radio" name="positions" value="toast-top-left" />Top Left
                                                        <span></span>
                                                    </label>
                                                    <label class="mt-radio mt-radio-outline">
                                                        <input type="radio" name="positions" value="toast-top-center" />Top Center
                                                        <span></span>
                                                    </label>
                                                    <label class="mt-radio mt-radio-outline">
                                                        <input type="radio" name="positions" value="toast-bottom-center" />Bottom Center
                                                        <span></span>
                                                    </label>
                                                    <label class="mt-radio mt-radio-outline" l>
                                                        <input type="radio" name="positions" value="toast-top-full-width" />Top Full Width
                                                        <span></span>
                                                    </label>
                                                    <label class="mt-radio mt-radio-outline">
                                                        <input type="radio" name="positions" value="toast-bottom-full-width" />Bottom Full Width
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label class="control-label" for="showEasing">Show Easing</label>
                                                    <input id="showEasing" type="text" placeholder="swing, linear" class="form-control input-small" value="swing" />
                                                    <label class="control-label" for="hideEasing">Hide Easing</label>
                                                    <input id="hideEasing" type="text" placeholder="swing, linear" class="form-control input-small" value="linear" />
                                                    <label class="control-label" for="showMethod">Show Method</label>
                                                    <input id="showMethod" type="text" placeholder="show, fadeIn, slideDown" class="form-control input-small" value="fadeIn" />
                                                    <label class="control-label" for="hideMethod">Hide Method</label>
                                                    <input id="hideMethod" type="text" placeholder="hide, fadeOut, slideUp" class="form-control input-small" value="fadeOut" /> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label class="control-label" for="showDuration">Show Duration</label>
                                                    <input id="showDuration" type="text" placeholder="ms" class="form-control input-small" value="1000" />
                                                    <label class="control-label" for="hideDuration">Hide Duration</label>
                                                    <input id="hideDuration" type="text" placeholder="ms" class="form-control input-small" value="1000" />
                                                    <label class="control-label" for="timeOut">Time out</label>
                                                    <input id="timeOut" type="text" placeholder="ms" class="form-control input-small" value="5000" />
                                                    <label class="control-label" for="timeOut">Extended time out</label>
                                                    <input id="extendedTimeOut" type="text" placeholder="ms" class="form-control input-small" value="1000" /> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="button" class="btn green" id="showtoast">Show Toast</button>
                                            <button type="button" class="btn btn-outline dark" id="cleartoasts">Clear Toasts</button>
                                            <button type="button" class="btn btn-outline dark" id="clearlasttoast">Clear Last Toast</button>
                                        </div>
                                    </div>
                                    <div class="row margin-top-30">
                                        <div class="col-md-12"> <pre id='toastrOptions' class="well">Settings...
						</pre> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
@endsection