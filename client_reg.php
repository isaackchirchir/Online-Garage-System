<?php include('header.php'); ?>





	<!-- this is for donor registraton -->
	<div class="recipient_reg" style="background-color:#272327;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Client Registration</h3>

		<div class="formstyle" style="float: right;padding:25px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
		<form enctype="multipart/form-data" method="post" class="text-center">
			 <div class="col-md-12">
				  
			 		<label>
						Your Name: <input type="text" name="name" value="" placeholder="Full name" required>
					</label><br><br>

					<label>
					Location: <select name="bgroup" required>
										<option value="">-select-</option>
										<option value="rongai">Rongai</option>
										<option value="langata">Langata</option>
										<option value="kawangware">Kawangware</option>
										<option value="kikuyu">Kikuyu</option>
										
									</select>
					</label><br><br>
					<label>
						Mobile: <input type="number" name="contact"  placeholder="contact no" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
					</label><br><br>
 					
 					<label>
						Address: <input type="text" name="address" value="" placeholder="address">
					</label><br><br>
					<label>
						Vehicle Model: <select name="bgroup" required>
										<option value="">-select-</option>
										<option value="toyota">Toyota</option>
										<option value="mercedez">Mercedez Benz</option>
										<option value="harrier">Harrier</option>
										<option value="bughati-">Bughati</option>
										
									</select>
					</label><br><br>
					<label>
						Email: <input type="email" name="email"  value="" placeholder="email" required>
					</label><br><br>
					<label>
						Password: <input type="password" name="password"  value="" placeholder="password" required>
					</label><br><br>
					
					
					<button name="submit" type="submit" style="margin-left:60px;width: 85px;border-radius: 3px;">Register</button> <br>
				
			</div>	<!-- col-md-12 -->


				</form>
			</div>




	</div>
	
	



	
	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


	 <!-- validation and insertion -->


				<?php
						include('config.php');
						if(isset($_POST['submit'])){

						$sql1 = "SELECT * FROM client WHERE email='".$_POST["email"]."' ";
             		    $result = $conn->query($sql1);	
             		    if ($result->num_rows > 0) {
			                  echo "<script>alert('Sorry, user already exist!');</script>";
			             }
						else{
							$sql = "INSERT INTO client (name,age,contact,address,location,email, password)
							VALUES ('" . $_POST["name"] ."','" . $_POST["age"] . "','" . $_POST["contact"] . "','" . $_POST["address"] . "','" . $_POST["bgroup"] . "', '" . $_POST["email"] . "','" . $_POST["password"] . "' )";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>location.replace('client_success.php');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
							}

							$conn->close();
						}
					}
				?> 



	<!-- validation and insertion End-->



</body>
</html>