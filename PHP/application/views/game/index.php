	
		<div id="loadingView" class="row">
			<div class="span9 offset2">
				<div class="progress progress-success progress-striped active">
				  <div class="bar" style="width: 100%"></div>
				</div>
			</div>
		</div>
		
		<div class="leaderboard">
			<h2>EL-TANKO</h2>
		</div>
		<!-- Start of Login Form -->
		<div id="container">
			
		</div>
		<!-- End of Login form -->
		
		<!-- start of game form -->
		<div class="container-fluid">  
		  <div class="row-fluid">  
		    <div class="span9">  
				<div class="game_row">
					<a href="#" 
					id="game_instructions_popover" 
					class="" 
					rel="popover" 
					data-content="
					<ul>
						<li>Click to move</li>
						<li>Move mouse to aim</li>
						<li>Press 'Space' to shoot</li>
						<li>Press 'Enter' to activate chat and send messages</li>
					</ul>"
					data-original-title="Instructions">Game Instructions</a>
					
					<!-- In game div -->
					<div id="gameView">
						<canvas id="canvas" width="960" height="540">
						</canvas>
						
						<div id="respawn">
							<input id="respawn_but" class="btn btn-inverse" type="button" value="Click to Respawn">
						</div>
					</div>
					<!-- End of In game div -->
				</div>
		    </div>  
		
			<div id="right-container" class="span3 well game_row">  
					<h4>Chat</h4>
					<div id="chat">
						<div id="insideChat"></div>
					</div>
					<input id="chatmsg" name="chatmsg" type="text" placeholder="Press Enter to start typing..."/>
		    </div>
		  </div>  
		</div>
				
			<div class="game_row row well well-small span12">
				<div id="belowGame">
					<div id="leftBar">
						
						<div class="row">
							<div class="span8">
								<div id="weaponMenu">
									<div class="leaderboard"><h2>Choose your weapon</h2></div>
									<input id="weapon1_but" class="btn btn-inverse" type="button" value ="Classic">
									<input id="weapon2_but" class="btn btn-danger" type="button" value ="Double Shot">
									<input id="weapon3_but" class="btn btn-inverse" type="button" value ="Snipe">
								</div>
							</div>
							
							<div id="hp" class="span4">
								<div id="hp-container" class="progress progress-success progress-striped active">
								  <div id="hp-bar" class="bar" style="width: 100%">100%</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End of Game form -->