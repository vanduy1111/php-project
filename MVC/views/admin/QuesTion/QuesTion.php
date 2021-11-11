
<style>
 table, th , td {  
    border: 1px solid black;
    border-collapse: collapse;

    
}  

.trangthai ul li {
    float: left;
    list-style: none;
    margin-left: 40px;
    font-weight: 700;
}
.trangthai ul li  a{
   text-decoration: none;
   color: orangered;
   font-size: 25px;
}
table tr > td  {  
height: 50px;

}
table tr th{
width: 10%;

}
table tr td a{
text-decoration: none;

}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
  background-color: #fff;
}
#t01 th {
  color: white;
  background-color: black;
}
</style>
<aside class="container" style=" height: 100%;  margin-top: 10px; float: left; margin-left: 7rem; ">


<div  style="border: solid  1px red; height: 55rem; text-align: center;height: 100%; ">
    <h5 class="" style="height: 40px; background-color: #231e1e91; color: white; " >Câu hỏi khách hàng khách hàng</h5>   
 

<div class="bang">
<table id="t01" style="margin-top: 2rem; width: 94%;margin-left: 2rem; margin-bottom: 4rem;">  
 <tr> <th >USERNAME</th> <th>number Phone</th> <th style="width: 40%;">QUESTION</th>
</tr>  
<?php foreach($question as $question): ?>
<tr> <td><?= $question['fullname'] ?></td> <td><?= $question['numberphone'] ?></td> <td><?= $question['chat'] ?></td> </tr>
<?php endforeach; ?>



 </table> </div>
 
</div>


</aside>
 

</body>
</html>
