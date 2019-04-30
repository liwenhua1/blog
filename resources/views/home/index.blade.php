@extends('layouts.home')

@section('title','博客系统')

@section('main-wrap')
 <!-- Main Wrap -->
 <div id="main-wrap">
  <div id="sitenews-wrap" class="container"></div>
  <!-- Header Banner -->
  <!-- /.Header Banner -->
  <!-- CMS Layout -->
  <div class="container two-col-container cms-with-sidebar">
   <div id="main-wrap-left">
    <!-- Stickys -->
    <!-- /.Stickys -->
    @foreach($cate_arts as $k=>$v)

    <section class="catlist-154 catlist clr">
     <div class="catlist-container clr">
      <h2 class="home-heading clr"> <span class="heading-text"> {{$v->cate_name}} </span> <a href="{{url('/lists/'.$v->cate_id)}}">+ 更多</a> </h2>
      @if(!empty($v->article))
       @foreach($v->article as $m=>$n)
         @if($n->art_status==1 && $m<=1)
         <span class="col-left catlist-style2">
            <article class="home-blog-entry clr">
             <a href="{{url('/detail/'.$n->art_id)}}" title="{{$n->art_title}}" class="fancyimg home-blog-entry-thumb">
              <div class="thumb-img">
               <img src="{{$n->art_thumb}}" alt="{{$n->art_title}}" />
               <span><i class="fa fa-pencil"></i></span>
              </div> </a>
             <h3><a href="{{url('/detail/'.$n->art_id)}}" title="{{$n->art_title}}">{{$n->art_title}}</a></h3>
             <div class="postlist-meta">
              <span class="postlist-meta-time">{{date('Y-m-d H:i:s',$n->art_time)}}</span>
              {{--<span class="postlist-meta-comments"><i class="fa fa-comments"></i>&nbsp;<a href="{{url('/detail/'.$n->art_id)}}">0</a></span>--}}
              
              <div class="postlist-meta-like like-btn" style="float:right;" uid="5148" artid="{{$n->art_id}}" title="点击喜欢">
               <i class="fa fa-heart"></i>&nbsp;
               <span>{{$n->art_love}}</span>&nbsp;
              </div>
              @if(empty(session()->get('user')))  
              <div class="postlist-meta-collect collect collect-no" uid=""  artid="{{$n->art_id}}" style="float:right;cursor:default;" title="必须登录才能收藏">
                @else
                <div class="postlist-meta-collect collect collect-no" uid="{{session()->get('user')->user_id}}"  artid="{{$n->art_id}}" style="float:right;cursor:default;" title="点击收藏">
                @endif
               <i class="fa fa-star"></i>&nbsp;
               <span>{{$n->art_collect}}</span>&nbsp;&nbsp;&nbsp;&nbsp;
              </div>
             </div>

             <p> {{$n->art_description}}<a rel="nofollow" class="more-link" style="text-decoration:none;" href="{{url('/detail/'.$n->art_id)}}"></a> </p>
            </article>
          </span>
         @endif
       @endforeach
      @endif

      <span class="col-right catlist-style2">
      @if(!empty($v->article))
        @foreach($v->article as $m=>$n)
         @if($n->art_status==0 && $m<=4)
          <article class="clr col-small">
           <a href="{{url('/detail/'.$n->art_id)}}" title="{{$n->art_title}}" class="fancyimg home-blog-entry-thumb">
            <div class="thumb-img">
             <img src="{{$n->art_thumb}}" alt="{{$n->art_title}}" />
             <span><i class="fa fa-pencil"></i></span>
            </div> </a>
           <h3><a href="{{url('/detail/'.$n->art_id)}}" title="{{$n->art_title}}">{{$n->art_title}}</a></h3>
           <p> {{$n->art_description}}<a rel="nofollow" class="more-link" style="text-decoration:none;" href="{{url('/detail/'.$n->art_id)}}"></a> </p>
          </article>
         @endif
        @endforeach
       @endif
      </span>


     </div>
    </section>

    @endforeach
    <div id="loopad" class="container">
    </div>

    <!-- pagination -->
    <div class="clear">
    </div>
    <div class="pagination">
    </div>
    <!-- /.pagination -->
   </div>
   <script type="text/javascript">
    $('.site_loading').animate({'width':'55%'},50);  //第二个节点
   </script>

   {{--父模板中的右侧边栏--}}
   @parent
   {{--父模板中的右侧边栏--}}


  </div>
  <div class="clear">
  </div>
  <!-- Blocks Layout -->
 </div>
 <!--/.Main Wrap -->
@endsection
