

<table class="tblone">
   <tr>
     <td>Department</td>
     <td><span id="showDept"></span></td>
   </tr>   

</table>


<form action="" method="" id="myform" name="myform" onsubmit="myformdat(); return false;" style="
    text-align: center;
    margin-top: 84px;
">

<td>Department</td>
<td><input type="checkbox" id="dept" name="dept" value="CEE">CSE</td>
<td><input type="checkbox" id="dept" name="dept" value="CS">CS</td>
<td><input type="checkbox" id="dept" name="dept" value="AI">AI</td>
</tr>
<tr>
<br><br>

  <input type="submit" value="Submit">
  <input type="reset" value="Clear">
</form> 

<script type="text/javascript">
  function myformdat(){  
  var deptlength = document.myform.dept.length;
  var $resultsotre = "";
  for(i=0; i<deptlength; i++){
    var checkDept = document.myform.dept[i].checked;
    if(checkDept){
    $resultsotre += document.myform.dept[i].value + ", ";

    }
  }

  document.getElementById('showDept').innerHTML = $resultsotre;

}

</script>





