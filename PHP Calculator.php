<?php 
     $cookie_name1="num";
	 $cookie_value1="";
	 $cookie_name2="opt";
	 $cookie_value2="";
	 $a="Can't Div by Zero";
	 
	     if(isset($_POST['numb'])){
		    $num=$_POST['input'].$_POST['numb'];
			}
			else{
			      $num="";
			}
			if(isset($_POST['opt']))
			{
			      $cookie_value1=$_POST['input'];
				  setcookie($cookie_name1,$cookie_value1,time()+(86400*30),"/");
				  
				  $cookie_value2=$_POST['opt'];
				  setcookie($cookie_name2,$cookie_value2,time()+(86400*30),"/");
			}
			if(isset($_POST['equal']))
			{
			     $num=$_POST['input'];
					 
				 switch($_COOKIE['opt'])
				 {
				       case"+":
					      $result=$_COOKIE['num']+$num;
					      break;
					   case"-":
					      $result=$_COOKIE['num']-$num;
					      break;
					   case"*":
					      $result=$_COOKIE['num']*$num;
					      break;
					   case"/":
					       if($num==0){
							   $result=$a;
						   }else{
					          $result=$_COOKIE['num']/$num;
						   }
					      break;
				 }
					$num=$result;
			     }
					
 ?>

<DOCTYPE html>
  <html>
        <head>
		<title>calc</title>
		   <style>
		       body{ background-color:rgb(168,159,159);
			   }
		      .body_one{
			               margin:auto;
						   border:solid 1px whitesmoke;
						   width:378px;
						   height:480px;
						   background:black;
						   border-radius:20px;
						   box-shadow:10px 10px 40px;
						   padding-left:3px;
						   padding-right:3px;
						}
			  .screen{ 
			              border:solid 1px gray;
						  background:gray;
						  margin:2px;
						  width:375px;
						  height:96px;
						  border-radius:15px;
						  font-size:80px;
						  font-weight:600;
						}
			   .number{
			             padding: 30px 35px;
						 border-radius:45px;
						 font-weight:600;
						 font-size:x-large;
						 background-color:silver;
						 text-align:center;
					   }
			    .number:hover{
				                 background-color:rgb(180,178,178);
								 color:whitesmoke;
						      }
				.oparation{
			             padding: 30px 35px;
						 border-radius:45px;
						 font-weight:600;
						 font-size:x-large;
						 background-color:orange;
						 text-align:center;
					   }
			    .oparation:hover{
				                 background-color:rgb(180,178,178);
								 color:whitesmoke;
						      }
				 .c{
			             padding: 30px 35px;
						 border-radius:45px;
						 font-weight:600;
						 font-size:x-large;
						 background-color:red;
						 text-align:center;
					   }
			    .c:hover {
				                 background-color:rgb(180,178,178);
						      }
			    .decimal{
			             padding: 30px 35px;
						 border-radius:45px;
						 font-weight:600;
						 font-size:x-large;
						 background-color:silver;
						 text-align:center;
					   }
			    .decimal:hover {
				                 background-color:rgb(180,178,178);
								 color:whitesmoke;
						      }
		   </style>
		       
		</head>
		<body > 
		<div class="body_one">  
			       <form action="" method="post">
				     <input type="text" class="screen" name="input" value="<?php echo $num ?>">
				     <input type="submit" class="number" name="numb" value="1">
					 <input type="submit" class="number" name="numb" value="2">
					 <input type="submit" class="number" name="numb" value="3">
					 <input type="submit" class="oparation" name="opt" value="+"><br>
					 <input type="submit" class="number" name="numb" value="4">
					 <input type="submit" class="number" name="numb" value="5">
					 <input type="submit" class="number" name="numb" value="6">
					 <input type="submit" class="oparation" name="opt" value="-"><br>
					 <input type="submit" class="number" name="numb" value="7">
					 <input type="submit" class="number" name="numb" value="8">
					 <input type="submit" class="number" name="numb" value="9">
					 <input type="submit" class="oparation" name="opt" value="*"><br>	
					 <input type="submit" class="c" name="calc" value="c">
					 <input type="submit" class="number" name="numb" value="0">
					 <input type="submit" class="decimal" name="equal" value="=">
					 <input type="submit" class="oparation" name="opt" value="/">
				    </form>	
        </div>					
		</body>
  </html>