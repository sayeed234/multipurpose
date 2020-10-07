   <footer class="page-footer text-right">
               
<?php $result=DB::table('companies')->first(); ?> 
      <span style="text-align: center;
      margin: auto;">
      <b style="font-size: 14px;"> Copyright &copy; <a href="#">{{$result->company_name}}</a>&nbsp; <?php echo date("Y") ?>.</b>

      </span>
      <span>Develop By <a href="https://sites.google.com/view/lssoft" target=_blank >LS Soft</a></span>
     </footer>