@extends('singin&singup.master_singin&up')
@section('mainContent')
<form class="form-login" method="" action="">
{{--     {{ csrf_field() }} --}}
        <h2 class="form-login-heading">Forget Password</h2>
    <div class="login-wrap">
      
      <input type="email" class="form-control" name="email" placeholder="Email" autofocus>
      <br>
      <button class="btn btn-theme btn-block" > Submit</button> 
    </div>  
    <div>
      <div class="copywrite text-center" style="font-size: 12px;margin-top: 15px;">
        <div class="text-center"> <b style="font-size: 14px;"> Copyright &copy; <a href="https://www.creativepos.com.bd">জারা ক্ষুদ্র ব্যবসায়ী সমবায় সমিতি লিঃ</a>&nbsp; <?php echo date("Y") ?>.</b><br>
    </div>
  </div>
  </form>
@endsection