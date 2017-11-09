    <div class="container-fluid">
	    <div class="content_area">
			<div class="row">
				<div class="col-md-6 col-lg-12">	
					<div class="content">
							<div id="login_area">
								<div id="login_wrapper">
								 <h2>Log In </h2>
									<form >
										User Name : <input type="text" name=""></input><br><br>
										Password : <input type="text" name=""></input><br><br>
										<button type="submit"> Submit</button>
									</form><br>
								  <a id="sign_up" onclick="signUp()">Sign Up </a>  
								</div>
							</div>
								
							<div id ="signUp_area">
									<div id = "signUp_wrapper">
									 <h2>Sign Up Form </h2>
									   <form id="form" action ="signup_post.php" method="post" >
												Name : <input type="text" name="name"></input><br>
												Last : <input type="text" name="last" ></input><br>
												email : <input type="text" name="email" ></input><br>
												phone : <input type="text" name="phone" ></input><br><br>
												User Name : <input type="text" name="username" ></input><br>
												Make Password : <input type="text" name="makePassword" ></input><br>
												Confirm PW : <input type="text" name="confirmPW" ></input><br><br>
												<button type="submit"> Submit</button>
										</form>
										<a onclick = "login()">Log In</a> 
									</div>							
								</div>	
				
					</div>
				</div>			
			</div>
	    
	    </div>
		
		
	</div>