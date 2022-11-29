

<table class="tblone">
  <tr>
    <td colspan="2" align="center">Output</td>
  </tr>
   <tr>
     <td>Name</td>
     <td><span id="showName"></span></td>
   </tr>  

    <tr>
     <td>Gender</td>
     <td><span id="showGender"></span></td>
   </tr>   

   <tr>
     <td>Department</td>
     <td><span id="showDept"></span></td>
   </tr>   

   <tr>
     <td>Coder</td>
     <td><span id="showCoder"></span></td>
   </tr>
</table>


<form action="" method="" id="myform" name="myform" onsubmit="myformdat(); return false;" style="
    text-align: center;
    margin-top: 84px;
">
<tr>
<td>Gender</td>
<td><input type="radio" id="gender" name="gender" value="male">Male</td>
<td><input type="radio" id="gender" name="gender" value="female">Femal</td>
<td><input type="radio" id="gender" name="gender" value="others">Others</td>
</tr>
<br><br>
<tr>
<td>Department</td>
<td><input type="checkbox" id="dept" name="dept" value="CEE">CSE</td>
<td><input type="checkbox" id="dept" name="dept" value="CS">CS</td>
<td><input type="checkbox" id="dept" name="dept" value="AI">AI</td>
</tr>
<tr>
<br><br>

<tr>
<td>Coder</td>
  <select id="coder" name="coder">
    <option value="java">java</option>
    <option value="oop">oop</option>
    <option value="php">php</option>
    <option value="c">c</option>
  </select>
</tr>
<tr>
<br><br>
<td>User Name</td>
<td><input type="text" id="name" name="name" value=""></td>
</tr>
  <input type="submit" value="Submit">
  <input type="reset" value="Clear">
</form> 





<script type="text/javascript">
  function myformdat(){  
  var getname = document.myform.name.value;
  document.getElementById('showName').innerHTML =getname;

  var genderlength = document.myform.gender.length;
  for(i=0; i<genderlength; i++){
    var checkGender = document.myform.gender[i].checked;
    if(checkGender){
    gendValue = document.myform.gender[i].value;

    }
  }

  document.getElementById('showGender').innerHTML =gendValue;  

  var deptlength = document.myform.dept.length;
  for(i=0; i<deptlength; i++){
    var checkDept = document.myform.dept[i].checked;
    if(checkDept){
    deptValue = document.myform.dept[i].value;

    }
  }

  document.getElementById('showDept').innerHTML =deptValue;


  var index = document.myform.coder.selectedIndex;
  var coderValue = document.myform.coder.options[index].value;
   document.getElementById('showCoder').innerHTML = coderValue;



}

</script>





