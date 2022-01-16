@extends('website.master')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <!-- <link href="style.css" rel="stylesheet"> -->
    <style type="text/css">
        body{margin-top:20px;}

.content-item {
    padding:30px 0;
    background-color:#FFFFFF;
}

.content-item.grey {
    background-color:#F0F0F0;
    padding:50px 0;
    height:100%;
}

.content-item h2 {
    font-weight:700;
    font-size:35px;
    line-height:45px;
    text-transform:uppercase;
    margin:20px 0;
}

.content-item h3 {
    font-weight:400;
    font-size:20px;
    color:#555555;
    margin:10px 0 15px;
    padding:0;
}

.content-headline {
    height:1px;
    text-align:center;
    margin:20px 0 70px;
}

.content-headline h2 {
    background-color:#FFFFFF;
    display:inline-block;
    margin:-20px auto 0;
    padding:0 20px;
}

.grey .content-headline h2 {
    background-color:#F0F0F0;
}

.content-headline h3 {
    font-size:14px;
    color:#AAAAAA;
    display:block;
}


#comments {
    box-shadow: 0 -1px 6px 1px rgba(0,0,0,0.1);
    background-color:#FFFFFF;
}

#comments form {
    margin-bottom:30px;
}

#comments .btn {
    margin-top:7px;
}

#comments form fieldset {
    clear:both;
}

#comments form textarea {
    height:100px;
}

#comments .media {
    border-top:1px dashed #DDDDDD;
    padding:20px 0;
    margin:0;
}

#comments .media > .pull-left {
    margin-right:20px;
}

#comments .media img {
    max-width:100px;
}

#comments .media h4 {
    margin:0 0 10px;
}

#comments .media h4 span {
    font-size:14px;
    float:right;
    color:#999999;
}

#comments .media p {
    margin-bottom:15px;
    text-align:justify;
}

#comments .media-detail {
    margin:0;
}

#comments .media-detail li {
    color:#AAAAAA;
    font-size:12px;
    padding-right: 10px;
    font-weight:600;
}

#comments .media-detail a:hover {
    text-decoration:underline;
}

#comments .media-detail li:last-child {
    padding-right:0;
}

#comments .media-detail li i {
    color:#666666;
    font-size:15px;
    margin-right:10px;
}

</style>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

<section class="content-item" id="comments">
    <div class="container">   
        <div class="row">
            <div class="col-sm-8"> 
               @if(!empty($post))
                <form action="{{route('comment.do',$post->id)}}" method="post">
                    @csrf
                    <h3 class="pull-left">New Comment <br><br></h3>
                    <button type="submit" class="btn btn-info">submit</button>
                    <!-- <a type="submit" class="btn btn-normal pull-right">Submit</a> -->
                    <fieldset>
                        <div class="row">
                            <!-- <div class="col-sm-3 col-lg-2 hidden-xs">
                                <img class="img-responsive" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                            </div> -->
                            <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                                <input name="text" textarea class="form-control" id="message" placeholder="Your message" required=""></input>
                            </div>
                        </div>      
                    </fieldset>
                </form>
                @else
                <P>This post is not a valid post.</P>
                @endif
                
                <h3>Comments</h3>
                
                <!-- COMMENT 1 - START -->
                @if(!empty($comment))
                @foreach($comment as $comments)
                <div class="media">
                    <!-- <a class="pull-left" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a> -->
                    <div class="media-body">
                        <h4 class="media-heading">{{$comments->user->name}}</h4>
                        <p>{{$comments->new_comment}}</p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li><i class="fa fa-calendar"></i>{{$comments->created_at}}</li>
                            <li><i class="fa fa-thumbs-up"></i>13</li>
                        </ul>
                        <ul class="list-unstyled list-inline media-detail pull-right">
                            <li class="" name="like"><a href="">Like</a></li>
                            <!-- <li class="" name="reply"><a href="">Reply</a></li> -->
                        </ul>
                    </div>
                </div>
                @endforeach
                @else
                    <p>No comments for this post</p>
                @endif
                <!-- COMMENT 1 - END -->
                
                <!-- COMMENT 2 - START -->
                <!-- <div class="media"> -->
                    <!-- <a class="pull-left" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt=""></a> -->
                    <!-- <div class="media-body">
                        <h4 class="media-heading">John Doe</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li><i class="fa fa-calendar"></i>27/02/2014</li>
                            <li><i class="fa fa-thumbs-up"></i>13</li>
                        </ul>
                        <ul class="list-unstyled list-inline media-detail pull-right">
                            <li class=""><a href="">Like</a></li>
                            <li class=""><a href="">Reply</a></li>
                        </ul>
                    </div>
                </div> -->
                <!-- COMMENT 2 - END -->
                
                <!-- COMMENT 3 - START -->
                <!-- <div class="media"> -->
                    <!-- <a class="pull-left" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></a> -->
                    <!-- <div class="media-body">
                        <h4 class="media-heading">John Doe</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li><i class="fa fa-calendar"></i>27/02/2014</li>
                            <li><i class="fa fa-thumbs-up"></i>13</li>
                        </ul>
                        <ul class="list-unstyled list-inline media-detail pull-right">
                            <li class=""><a href="">Like</a></li>
                            <li class=""><a href="">Reply</a></li>
                        </ul>
                    </div>
                </div> -->
                <!-- COMMENT 3 - END -->
                
                <!-- COMMENT 4 - START -->
                <!-- <div class="media"> -->
                    <!-- <a class="pull-left" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar4.png" alt=""></a> -->
                    <!-- <div class="media-body">
                        <h4 class="media-heading">John Doe</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li><i class="fa fa-calendar"></i>27/02/2014</li>
                            <li><i class="fa fa-thumbs-up"></i>13</li>
                        </ul>
                        <ul class="list-unstyled list-inline media-detail pull-right">
                            <li class=""><a href="">Like</a></li>
                            <li class=""><a href="">Reply</a></li>
                        </ul>
                    </div>
                </div> -->
                <!-- COMMENT 4 - END -->
            
            </div>
        </div>
    </div>
</section>

</body>
</html>





@endsection