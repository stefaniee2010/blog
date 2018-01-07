<div class="col-md-12 blog-post">
      <div class="app/post-image">
          <img src="/storage/{{$post->image}}" alt="">                                       
        </div> 
        <div class="post-title">
          <a href="/post/{{ $post->slug }}"><h1>{{ $post->title }}</h1></a>
        </div>  
        <div class="post-info">
          <span>November 23, 2016 / by <a href="#" target="_blank">{{ $post->author->name }}</a></span>
        </div>  
        <p>{{ $post->excerpt }}</p>                                
        <a href="single.html" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
    </div>