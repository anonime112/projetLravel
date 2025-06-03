<?php
    $setting = App\Models\Auth\Settings::where('id',1)->first();
?>
<button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="{{url('/')}}/assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                <span>Bienvenu,</span>
                @if(Auth::check())
                <i class="fas fa-envelope"></i> {{ auth()->user()->name }}<br/>
                <i class="fas fa-envelope"></i> {{ auth()->user()->email }}<br/>    
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Pamela  {{ auth()->user()->name }}</strong></a>
 
                        @endif
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="{{ route('admin.auth.user.show', auth()->user()->id) }}"><i class="icon-user"></i>Mon Profile</a></li>
                    <li><a href="{{ route('admin.auth.app.inbox') }}"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Paramètre</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ route('frontend.auth.logout') }}"><i class="icon-power"></i>Deconnexion</a></li>
                </ul>
            </div>
            <hr>
            {{-- 
            <ul class="row list-unstyled">
                <li class="col-4">
                    <small>Sales</small>
                    <h6>561</h6>
                </li>
                <li class="col-4">
                    <small>Order</small>
                    <h6>920</h6>
                </li>
                <li class="col-4">
                    <small>Revenue</small>
                    <h6>$23B</h6>
                </li>
            </ul> --}}
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat"><i class="icon-book-open"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#question"><i class="icon-question"></i></a></li>                
        </ul>
            
        <!-- Tab panes -->
        <div class="tab-content padding-0">

            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu li_animation_delay">
                        <li class="{{ Request::is('table/table_demande_gen') ? 'active' : '' }}">
                            <a href="#Tables" class="has-arrow"><i class="fa fa-table"></i><span>Demandes</span></a>
                            <ul>
                                <li class="{{ Request::is('table/table_demande_gen') ? 'active' : '' }}">
                                    <a href="{{ route('table.dirc_gen') }}">Listes des Demandes</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
                      
                
        <div class="tab-pane" id="Chat">
                <form>
                    <div class="input-group m-b-20">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="right_chat list-unstyled li_animation_delay">
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Chris Fox <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">chrisfox@gmail.com</span>
                            </div>
                        </a>                            
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Joge Lucky <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">Jogelucky@gmail.com</span>
                            </div>
                        </a>                            
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Isabella <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">Isabella@gmail.com</span>
                            </div>
                        </a>                            
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Folisise Chosielie <i class="fa fa-heart font-12"></i></span>
                                <span class="message">FolisiseChosielie@gmail.com</span>
                            </div>
                        </a>                            
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Alexander <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">Alexander@gmail.com</span>
                            </div>
                        </a>                            
                    </li>                        
                </ul>
            </div>
            <div class="tab-pane" id="setting">
                <h6>Choose Skin</h6>
                <ul class="choose-skin list-unstyled" id="themeColor">
                    <li value="p" data-theme="purple" class="{{ $setting->theme == 'p' ? 'active':''}}"><div class="purple"></div></li>
                    <li value="b" data-theme="blue" class="{{ $setting->theme == 'b' ? 'active':''}}"><div class="blue"></div></li>
                    <li value="c" data-theme="cyan" class="{{ $setting->theme == 'c' ? 'active':''}}"><div class="cyan"></div></li>
                    <li value="g" data-theme="green" class="{{ $setting->theme == 'g' ? 'active':''}}"><div class="green"></div></li>
                    <li value="o" data-theme="orange" class="{{ $setting->theme == 'o' ? 'active':''}}"><div class="orange"></div></li>
                    <li value="bh" data-theme="blush" class="{{ $setting->theme == 'bh' ? 'active':''}}"><div class="blush"></div></li>
                    <li value="r" data-theme="red" class="{{ $setting->theme == 'r' ? 'active':''}}"><div class="red"></div></li>
                </ul>

                <ul class="list-unstyled font_setting mt-3">
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" data="font-nunito" value="n" {{ $setting->font == "n" ? 'checked':''}}>
                            <span class="custom-control-label">Nunito Google Font</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" data="font-ubuntu" value="u" {{ $setting->font == "u" ? 'checked':''}}>
                            <span class="custom-control-label">Ubuntu Font</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" data="font-raleway" value="r" {{ $setting->font == "r" ? 'checked':''}}>
                            <span class="custom-control-label">Raleway Google Font</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" data="font-IBMplex" value="i" {{ $setting->font == "i" ? 'checked':''}}>
                            <span class="custom-control-label">IBM Plex Google Font</span>
                        </label>
                    </li>
                </ul>

                <ul class="list-unstyled mt-3">
                    <li class="d-flex align-items-center mb-2">
                        <label class="toggle-switch theme-switch">
                            <input type="checkbox" data="dark"  name="dark_mode" value="d" {{ $setting->data_theme == "d" ? "checked" : "" }}>
                            <span class="toggle-switch-slider"></span>
                        </label>
                        <span class="ml-3">Enable Dark Mode!</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <label class="toggle-switch theme-rtl">
                            <input type="checkbox" value="Y" {{ $setting->mode_type == "Y" ? "checked" : "" }}>
                            <span class="toggle-switch-slider"></span>
                        </label>
                        <span class="ml-3">Enable RTL Mode!</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <label class="toggle-switch theme-high-contrast">
                            <input type="checkbox" value="hc" {{ $setting->data_theme == "hc" ? "checked" : "" }}>
                            <span class="toggle-switch-slider"></span>
                        </label>
                        <span class="ml-3">Enable High Contrast Mode!</span>
                    </li>
                </ul>                    

                <hr>
                {{-- <h6>General Settings</h6>
                <ul class="setting-list list-unstyled">
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>Allowed Notifications</span>
                        </label>                      
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Offline</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Location Permission</span>
                        </label>
                    </li>
                </ul> 

                <a href="#" target="_blank" class="btn btn-block btn-primary">Buy this item</a>
                <a href="https://themeforest.net/user/wrraptheme/portfolio" target="_blank" class="btn btn-block btn-secondary">View portfolio</a>
                --}}
            </div>
            {{-- <div class="tab-pane" id="question">
                <form>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="list-unstyled question">
                    <li class="menu-heading">HOW-TO</li>
                    <li><a href="javascript:void(0);">How to Create Campaign</a></li>
                    <li><a href="javascript:void(0);">Boost Your Sales</a></li>
                    <li><a href="javascript:void(0);">Website Analytics</a></li>
                    <li class="menu-heading">ACCOUNT</li>
                    <li><a href="javascript:void(0);">Cearet New Account</a></li>
                    <li><a href="javascript:void(0);">Change Password?</a></li>
                    <li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
                    <li class="menu-heading">BILLING</li>
                    <li><a href="javascript:void(0);">Payment info</a></li>
                    <li><a href="javascript:void(0);">Auto-Renewal</a></li>                        
                    <li class="menu-button mt-3">
                        <a href="../docs/index.html" class="btn btn-primary btn-block">Documentation</a>
                    </li>
                </ul>
            </div> 
                --}}
        </div>          
    </div>
@push('after-scripts')
<script>
    jQuery(document).ready(function() {
        jQuery('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
            localStorage.setItem('activeTab', jQuery(e.target).attr('href'));
        });
        var activeTab = localStorage.getItem('activeTab');
        if(activeTab){
            jQuery('#myTab a[href="' + activeTab + '"]').tab('show');
        }
    
        jQuery(function(){
            jQuery('ul.choose-skin li').click(function() {
                var theme = jQuery(this).attr("value");
                var font = jQuery('ul.font_setting').find('li input:checked').attr('value');
                var is_chk = document.querySelector('.theme-rtl input[type="checkbox"]');
                if(is_chk.checked == true) {
                    $("body").addClass('rtl_mode');
                    var mode_type = 'Y';
                }else{
                    $("body").removeClass('rtl_mode');
                    var mode_type = 'N';
                }
                var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
                var toggleHcSwitch = document.querySelector('.theme-high-contrast input[type="checkbox"]');
                if($('input[name="dark_mode"]').is(':checked')){
                    if(toggleSwitch.checked == true) {
                        $.ajax({
                            url: "{{ route('admin.auth.setting.update', $setting) }}",
                            type: 'PATCH',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "theme": theme,
                                "font": font,
                                "mode_type": mode_type,
                                "data_theme": 'd',
                            }
                        });
                    }else{
                        $.ajax({
                            url: "{{ route('admin.auth.setting.update', $setting) }}",
                            type: 'PATCH',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "theme": theme,
                                "font": font,
                                "mode_type": mode_type,
                                "data_theme": 'l',
                            }
                        });
                    }
                }else{
                    if(toggleHcSwitch.checked == true) {
                        $.ajax({
                            url: "{{ route('admin.auth.setting.update', $setting) }}",
                            type: 'PATCH',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "theme": theme,
                                "font": font,
                                "mode_type": mode_type,
                                "data_theme": 'hc',
                            }
                        });
                    }else{
                        $.ajax({
                            url: "{{ route('admin.auth.setting.update', $setting) }}",
                            type: 'PATCH',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "theme": theme,
                                "font": font,
                                "mode_type": mode_type,
                                "data_theme": 'l',
                            }
                        });
                    }
                }
                return false;
            });
            
            jQuery('.font_setting input:radio').click(function () {
                var theme = jQuery('ul.choose-skin').find('li.active').attr('value');
                var font = jQuery(this).attr("value");
                var bodyClass = $('body').attr('class');
                $('body').removeClass(bodyClass).addClass($(this).attr('data'));
                var is_chk = document.querySelector('.theme-rtl input[type="checkbox"]');
                if(is_chk.checked == true) {
                    $("body").addClass('rtl_mode');
                    var mode_type = 'Y';
                }else{
                    $("body").removeClass('rtl_mode');
                    var mode_type = 'N';
                }

                var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
                var toggleHcSwitch = document.querySelector('.theme-high-contrast input[type="checkbox"]');
                if($('input[name="dark_mode"]').is(':checked')){
                    if(toggleSwitch.checked == true) {
                        $.ajax({
                            url: "{{ route('admin.auth.setting.update', $setting) }}",
                            type: 'PATCH',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "theme": theme,
                                "font": font,
                                "mode_type": mode_type,
                                "data_theme": 'd',
                            }
                        });
                    }else{
                        $.ajax({
                            url: "{{ route('admin.auth.setting.update', $setting) }}",
                            type: 'PATCH',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "theme": theme,
                                "font": font,
                                "mode_type": mode_type,
                                "data_theme": 'l',
                            }
                        });
                    }
                }else{
                    if(toggleHcSwitch.checked == true) {
                        $.ajax({
                            url: "{{ route('admin.auth.setting.update', $setting) }}",
                            type: 'PATCH',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "theme": theme,
                                "font": font,
                                "mode_type": mode_type,
                                "data_theme": 'hc',
                            }
                        });
                    }else{
                        $.ajax({
                            url: "{{ route('admin.auth.setting.update', $setting) }}",
                            type: 'PATCH',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "theme": theme,
                                "font": font,
                                "mode_type": mode_type,
                                "data_theme": 'l',
                            }
                        });
                    }
                }
            });

            jQuery(".theme-rtl input").on('change',function() {
                if(this.checked) {
                    var theme = jQuery('ul.choose-skin').find('li.active').attr('value');
                    var font = jQuery('ul.font_setting').find('li input:checked').attr('value');
                    var mode_type = jQuery(this).attr("value");
                    $("body").addClass('rtl_mode');
                    var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
                    var toggleHcSwitch = document.querySelector('.theme-high-contrast input[type="checkbox"]');
                    if($('input[name="dark_mode"]').is(':checked')){
                        if(toggleSwitch.checked == true) {
                            $.ajax({
                                url: "{{ route('admin.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "data_theme": 'd',
                                    "mode_type": 'Y',
                                }
                            });
                        }else{
                            $.ajax({
                                url: "{{ route('admin.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "data_theme": 'l',
                                    "mode_type": 'Y',
                                }
                            });
                        }
                    }else{
                        if(toggleHcSwitch.checked == true) {
                            $.ajax({
                                url: "{{ route('admin.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "data_theme": 'hc',
                                    "mode_type": 'Y',
                                }
                            });
                        }else{
                            $.ajax({
                                url: "{{ route('admin.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "data_theme": 'l',
                                    "mode_type": 'Y',
                                }
                            });
                        }
                    }
                }else{
                    var theme = jQuery('ul.choose-skin').find('li.active').attr('value');
                    var font = jQuery('ul.font_setting').find('li input:checked').attr('value');
                    var mode_type = jQuery(this).attr("value");
                    $("body").removeClass('rtl_mode');
                    var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
                    var toggleHcSwitch = document.querySelector('.theme-high-contrast input[type="checkbox"]');
                    if($('input[name="dark_mode"]').is(':checked')){
                        if(toggleSwitch.checked == true) {
                            $.ajax({
                                url: "{{ route('admin.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "data_theme": 'd',
                                    "mode_type": 'N',
                                }
                            });
                        }else{
                            $.ajax({
                                url: "{{ route('admin.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "data_theme": 'l',
                                    "mode_type": 'N',
                                }
                            });
                        }
                    }else{
                        if(toggleHcSwitch.checked == true) {
                            $.ajax({
                                url: "{{ route('admin.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "data_theme": 'hc',
                                    "mode_type": 'N',
                                }
                            });
                        }else{
                            $.ajax({
                                url: "{{ route('admin.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "data_theme": 'l',
                                    "mode_type": 'N',
                                }
                            });
                        }
                    }
                }
            }); 

            var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
            var toggleHcSwitch = document.querySelector('.theme-high-contrast input[type="checkbox"]');
            jQuery(toggleSwitch).on('change',function() {
                if(toggleSwitch.checked == true) {
                    var theme = jQuery('ul.choose-skin').find('li.active').attr('value');
                    var font = jQuery('ul.font_setting').find('li input:checked').attr('value');
                    var is_chk = document.querySelector('.theme-rtl input[type="checkbox"]');
                    if(is_chk.checked == true) {
                        var mode_type = 'Y';
                    }else{
                        var mode_type = 'N';
                    }
                    jQuery('body').attr('data-theme', 'dark');
                    $.ajax({
                        url: "{{ route('admin.auth.setting.update', $setting) }}",
                        type: 'PATCH',
                        data: {
                        "_token": "{{ csrf_token() }}",
                        "theme": theme,
                        "font": font,
                        "mode_type": mode_type,
                        "data_theme": 'd',
                        }
                    });
                }else{
                    var theme = jQuery('ul.choose-skin').find('li.active').attr('value');
                    var font = jQuery('ul.font_setting').find('li input:checked').attr('value');
                    var is_chk = document.querySelector('.theme-rtl input[type="checkbox"]');
                    if(is_chk.checked == true) {
                        var mode_type = 'Y';
                    }else{
                        var mode_type = 'N';
                    }
                    jQuery('body').attr('data-theme', 'light');
                    $.ajax({
                        url: "{{ route('admin.auth.setting.update', $setting) }}",
                        type: 'PATCH',
                        data: {
                        "_token": "{{ csrf_token() }}",
                        "theme": theme,
                        "font": font,
                        "mode_type": mode_type,
                        "data_theme": 'l',
                        }
                    });
                }
            });
            jQuery(toggleHcSwitch).on('change',function() {
                if(toggleHcSwitch.checked == true) {
                    var theme = jQuery('ul.choose-skin').find('li.active').attr('value');
                    var font = jQuery('ul.font_setting').find('li input:checked').attr('value');
                    var is_chk = document.querySelector('.theme-rtl input[type="checkbox"]');
                    if(is_chk.checked == true) {
                        var mode_type = 'Y';
                    }else{
                        var mode_type = 'N';
                    }
                    jQuery('body').attr('data-theme', 'high-contrast');
                    $.ajax({
                        url: "{{ route('admin.auth.setting.update', $setting) }}",
                        type: 'PATCH',
                        data: {
                        "_token": "{{ csrf_token() }}",
                        "theme": theme,
                        "font": font,
                        "mode_type": mode_type,
                        "data_theme": 'hc',
                        }
                    });
                }else{
                    var theme = jQuery('ul.choose-skin').find('li.active').attr('value');
                    var font = jQuery('ul.font_setting').find('li input:checked').attr('value');
                    var is_chk = document.querySelector('.theme-rtl input[type="checkbox"]');
                    if(is_chk.checked == true) {
                        var mode_type = 'Y';
                    }else{
                        var mode_type = 'N';
                    }
                    jQuery('body').attr('data-theme', 'light');
                    $.ajax({
                        url: "{{ route('admin.auth.setting.update', $setting) }}",
                        type: 'PATCH',
                        data: {
                        "_token": "{{ csrf_token() }}",
                        "theme": theme,
                        "font": font,
                        "mode_type": mode_type,
                        "data_theme": 'l',
                        }
                    });
                }
            });
        }); 
    });
</script>

@endpush