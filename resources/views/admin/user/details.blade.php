<!DOCTYPE html>
<html class="x-admin-sm">
  
  <head>
    <meta charset="UTF-8">
    <title>用户详情页</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />

  @include('admin.public.styles')
  @include('admin.public.script')

    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
    <div class="x-body">
        <form class="layui-form">
          <div class="layui-form-item">
              <label for="L_email" class="layui-form-label">
                  用户名
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="L_username" value="{{$user->user_name}}" name="user_name" required="" lay-verify="nikename"
                  autocomplete="off" class="layui-input" disabled>
              </div>
          </div>

            <div class="layui-form-item">
                <label for="L_email" class="layui-form-label">
                    邮箱
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_username" value="{{$user->email}}" name="email" required="" lay-verify="nikeemail"
                           autocomplete="off" class="layui-input" disabled>
                </div>
            </div>
            <div class="layui-form-item">
                <label for="L_email" class="layui-form-label">
                    手机号码
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_username" value="{{$user->phone}}" name="phone" required="" lay-verify="nikephone"
                           autocomplete="off" class="layui-input" disabled>
                </div>
            </div>
      </form>
    </div>

    {{--<script>--}}
        {{--layui.use(['form','layer'], function(){--}}
            {{--$ = layui.jquery;--}}
          {{--var form = layui.form--}}
          {{--,layer = layui.layer;--}}
        {{----}}
          {{--//自定义验证规则--}}
          {{--form.verify({--}}
            {{--nikename: function(value){--}}
              {{--if(value.length < 3){--}}
                {{--return '昵称至少得3个字符啊';--}}
              {{--}--}}
            {{--}--}}
            {{--,pass: [/(.+){6,12}$/, '密码必须6到12位']--}}
            {{--,repass: function(value){--}}
                {{--if($('#L_pass').val()!=$('#L_repass').val()){--}}
                    {{--return '两次密码不一致';--}}
                {{--}--}}
            {{--}--}}
            {{--,nikephone:[/^1[34578]\d{9}$/,'手机号码有误，请重填']--}}

          {{--});--}}

          {{--//监听提交--}}
          {{--form.on('submit(edit)', function(data){--}}
              {{--var uid = $("input[name='uid']").val();--}}
            {{--//发异步，把数据提交给php--}}
              {{--$.ajax({--}}
                      {{--type:'PUT',--}}
                      {{--url:'/admin/user/'+uid,--}}
                      {{--dataType:'json',--}}
                      {{--headers: {--}}
                          {{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
                      {{--},--}}
                      {{--data:data.field,--}}
                      {{--success:function(data){--}}
                          {{--// 弹层提示添加成功，并刷新父页面--}}
                          {{--console.log(data);--}}
                          {{--if(data.status == 0){--}}
                              {{--layer.alert(data.message,{icon:6},function () {--}}
                                    {{--parent.location.reload(true);--}}
                              {{--})--}}
                          {{--}else {--}}
                              {{--layer.alert(data.message, {icon: 5});--}}
                          {{--}--}}
                      {{--},--}}
                      {{--error:function(){--}}
                          {{--//返回错误信息--}}

                      {{--},--}}

                  {{--});--}}
            {{--// layer.alert("增加成功", {icon: 6},function () {--}}
            {{--//     //关闭当前frame--}}
            {{--//     x_admin_close();--}}
            {{--//--}}
            {{--//     // 可以对父窗口进行刷新--}}
            {{--//     x_admin_father_reload();--}}
            {{--// });--}}
            {{--return false;--}}
          {{--});--}}
          {{----}}
          {{----}}
        {{--});--}}
    {{--</script>--}}


  </body>

</html>