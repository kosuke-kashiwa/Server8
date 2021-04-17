@extends('layouts.login')

@section('content')
<h2 class="post-text">何をつぶやこうか...?</h2>

<!-- モーダル機能 -->
<div class="post-modal">
<span >
<img class="dawn-image" src="images/dawn.png">
</span>
<a class="post-window button-link"　href="top" >
    <img src="images/post.png"> 
</a> 
<hr>
</div>
 <!-- モーダル画面作成 -->
 <div class="modal is-hide">
    <div class="post-process">
        {!! Form::open(['url' => 'post/create'])!!}
        <!-- <form method="POST" action="http//homestead.dawn/posts/post.create" enctype="" name="form1"> -->
            {!! Form::textarea('newPost', null,['required','class' => 'textarea form-control','placeholder' => 'つぶやいた内容を表示します。つぶやきは最大を150文字までとし、
            それ以上のテキストが入力フォームに打ち込まれた場合は、投稿できないように設定してください。', 'onChange' => 'check()']) !!}
        <!-- <textarea class="textarea form-control" placeholder="つぶやいた内容を表示します。つぶやきは最大を150文字までとし、
            それ以上のテキストが入力フォームに打ち込まれた場合は、投稿できないように設定してください。" name="text" onChange="check()"></textarea> -->
            <!-- <div class="post-btn"> -->
                <p class="rad">編集画面が表示されると、選択された投稿内容が初期から入っているように<br>
            最大200文字までとする。</p>
                <button class="btn-outline-danger" type="submit" id="post" href=""><img src="images/edit.png"></button>
            <!-- </div> -->
            {!! Form::close() !!}
        </form>
    </div>
  </div>
 @foreach($list as $list)

     <p>{{ $list->user_id}}</p>
     <p>{{ $list->posts}}</p>
     <p>{{ $list->created_at}}</p>

 @endforeach


@endsection