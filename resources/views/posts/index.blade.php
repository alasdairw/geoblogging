@extends('app')
@section('header')
<h1>
  List Posts
</h1>
@endsection

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Posts</h3>
    </div><!-- /.box-header -->
    <div class="box-body" ng-app="PostsApp" ng-controller="PostController">
        <table>
            <tr>
                <td>Title</td>
                <td>Body</td>
                <td>Type</td>
                  <td>Lat</td>
                  <td>Long</td>
            </tr>
            <tr ng-repeat="post in posts">
                <td>
                  <% post.title %>
                </td>
                <td>
                  <% post.body %>
                </td>
                <td>
                  <% post.type %>
                </td>
                <td>
                  <% post.lat %>
                </td>
                <td>
                  <% post.long %>
                </td>
            </tr>
        </table>

        <form ng-submit="addPost()">
            <div class="form-group">
                {!! Form::label('Title','Title:')!!}
                {!! Form::text('title',null,['class'=>'form-control','ng-model'=>"newPostTitle"])!!}
            </div>
            <div class="form-group">
                {!! Form::label('Body','body:')!!}
                {!! Form::text('body',null,['class'=>'form-control','ng-model'=>"newPostBody"])!!}
            </div>
            <div class="form-group"> 
                {!! Form::label('post_type_id','Post Type:')!!}
                {!! Form::select('post_type_id',\App\PostType::lists('name','id'),null,['class'=>'form-control','ng-model'=>"newPostType"])!!}
            </div>
            <div class="form-group">
                <style> .angular-google-map-container { height: 400px; } </style>
                <ui-gmap-google-map center='map.center' zoom='map.zoom'>
                    <ui-gmap-marker coords="marker.coords" options="marker.options" events="marker.events" idkey="marker.id">
                    </ui-gmap-marker>
                </ui-gmap-google-map>


                {!! Form::hidden('lat',null,['id'=>'lat','ng-model'=>"newLatitude"]) !!}
                {!! Form::hidden('long',null,['id'=>'long','ng-model'=>"newLongitude"]) !!}
            </div>
        <button type="submit">Add Post</button>
    </form>
<script src="/js/main.js"></script>



    
  </div><!-- /.box-body -->
</div>
@section('extra-js')
    <script type="text/javascript">
        function updateDatabase(newLat, newLng)
        {
            $('#lat').val(newLat);
            $('#long').val(newLng);
            console.log($('#lat'));
            console.log($('#long'));
        }
    </script>
@endsection

@stop
