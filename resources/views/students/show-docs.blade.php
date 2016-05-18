@extends('layouts.app-dashboard')
@section('page-header')
    <!-- Core JS files -->
    <script type="text/javascript" src="{{asset('assets/js/plugins/loaders/pace.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/core/libraries/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/core/libraries/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{asset('assets/js/core/libraries/jquery_ui/core.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/core/libraries/jquery_ui/effects.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/core/libraries/jquery_ui/interactions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/extensions/cookie.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/trees/fancytree_all.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/trees/fancytree_childcounter.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/core/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pages/extra_trees.js')}}"></script>
    <!-- /theme JS files -->
    @parent
@stop
@section('content')
<!-- Default unordered list markup -->
<div class="panel panel-flat">
    <div class="panel-heading">
        <h6 class="panel-title">Sample view</h6>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="reload"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>

    <div class="panel-body">
        <p class="mb-15">The documents per user will be listed like this:</p>

        <div class="tree-default well border-left-info border-left-lg">
            <ul>
                <li class="folder expanded">Expanded folder with children
                    <ul>
                        <li class="expanded">Expanded sub-item
                            <ul>
                                <li class="active focused">Active sub-item (active and focus on init)</li>
                                <li>Basic <i>menu item</i> with <strong class="text-semibold">HTML support</strong></li>
                            </ul>
                        </li>
                        <li>Collapsed sub-item
                            <ul>
                                <li>Sub-item 2.2.1</li>
                                <li>Sub-item 2.2.2</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-tooltip" title="Look, a tool tip!">Menu item with key and tooltip</li>
                <li class="folder">Collapsed folder
                    <ul>
                        <li>Sub-item 1.1</li>
                        <li>Sub-item 1.2</li>
                    </ul>
                </li>
                <li class="selected">This is a selected item</li>
                <li class="expanded">Document with some children (expanded on init)
                    <ul>
                        <li>Document sub-item</li>
                        <li>Another document sub-item
                            <ul>
                                <li>Sub-item 2.1.1</li>
                                <li>Sub-item 2.1.2</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /default unordered list markup -->
@endsection