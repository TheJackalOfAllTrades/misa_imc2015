<section id="register"><div class="container">
  <h1>Register</h1>

  <div class="col-md-12">
  	<div class="row s12">
  		<ul class="tabs">
  			<li class="tab col s6"><a href="#individualform">Individual</a></li>
  			<li class="tab col s6"><a href="#groupform">Group</a></li>
  		</ul>

  		<div id="individualform" class="col s10 offset-s1">
	  		<form class="col s12 cyan-text text-lighten-5" action="scripts/idvapplication.php" method="post">
		    	<div class="row">
		    		<div class="input-field col s8">
			          <input placeholder="Last name, First name" id="name" type="text" class="validate" required class="form-control" name="name">
			          <label for="name">Name</label>
			        </div>
			        <div class="input-field col s4">
			          <input id="nickname" type="text" class="validate" required class="form-control" name="nickname">
			          <label for="nickname">Nickname</label>
			        </div>
			    </div>
			    <div class="row">
			        <div class="input-field col s6">
			          <input placeholder="mm/dd/yy" id="birthday" type="text" class="validate" required class="form-control" name="birthday">
			          <label for="birthday">Birthday</label>
			        </div>
			        <div class="input-field col s6">
			          <input placeholder="Ex: 09177777777" id="number" name="number" type="number" min="09000000000" max="09999999999" class="validate" required class="form-control">
			          <label for="number">Cellphone Number</label>
			        </div>
			    </div>
			    <div class="row">
			        <div class="input-field col s12">
			          <input id="email" type="email" name="email" class="validate" required>
			          <label for="email">Email</label>
			        </div>
			    </div>
			    <div class="row">
			        <div class="input-field col s12">
			          <input id="school" name="school" type="text" class="validate" required class="form-control">
			          <label for="school">School</label>
			        </div>
			    </div>
			    <div class="row">
			        <div class="input-field col s4">
			          <input placeholder="Ex: 3" id="yr" name="yr" type="number" min="0" max="7" class="validate" required class="form-control">
			          <label for="yr">Year</label>
			        </div>
			        <div class="input-field col s8">
			          <input placeholder="Ex: BS CS" id="crs" name="crs" type="text" class="validate" required>
			          <label for="crs">Course</label>
			        </div>
			    </div>
			    <div class="row">
			        <div class="input-field col s12">
			          <input placeholder="N/A if none" id="org" name="org" type="text" class="validate" required class="form-control">
			          <label for="org">Organization</label>
			        </div>
			    </div>
			    <div class="row">
			        <div class="input-field col s12">
			          <textarea id="greencomputing" name="greencomputing" class="materialize-textarea" length="200" required class="form-control"></textarea>
		          	  <label for="greencomputing">What is green computing?</label>
		          	</div>
		        </div>
		        <div class="row">
		          	<div class="input-field col s12">
			          <textarea id="greenindustry" name="greenindustry" class="materialize-textarea" length="200" required class="form-control"></textarea>
		          	  <label for="greenindustry">Why is it important to practice green computing in the industry?</label>
		          	</div>
		          	<button class="btn btn-lg btn-primary teal lighten-3" type="submit">SUBMIT</button>
		    	</div>
		    </form>
		</div>

		<div id="groupform" class="col s10 offset-s1">
	  		<form class="col s12" action="scripts/grpapplication.php" method="post">
		    	<div class="row">
		    		<div class="input-field col s8">
			          <input placeholder="Last name, First name" id="name1" name="name1" type="text" class="validate" required class="form-control">
			          <label for="name1">Name of Member 1 (also the contact person of the group)</label>
			        </div>
			        <div class="input-field col s4">
			          <input id="nickname1" type="text" name="nickname1" class="validate" required class="form-control">
			          <label for="nickname1">Nickname of Member 1</label>
			        </div>
			    </div>
			    <div class="row">
		    		<div class="input-field col s8">
			          <input placeholder="Last name, First name" id="name2" name="name2" type="text" class="validate" required class="form-control">
			          <label for="name2">Name of Member 2</label>
			        </div>
			        <div class="input-field col s4">
			          <input id="nickname2" type="text" name="nickname2" class="validate" required class="form-control">
			          <label for="nickname2">Nickname of Member 2</label>
			        </div>
			    </div>
			    <div class="row">
		    		<div class="input-field col s8">
			          <input placeholder="Last name, First name" id="name3" name="name3" type="text" class="validate" required class="form-control">
			          <label for="name3">Name of Member 3</label>
			        </div>
			        <div class="input-field col s4">
			          <input id="nickname3" type="text" name="nickname3" class="validate" required class="form-control">
			          <label for="nickname3">Nickname of Member 3</label>
			        </div>
			    </div>
			    <div class="row">
		    		<div class="input-field col s8">
			          <input placeholder="Last name, First name" id="name4" name="name4" type="text" class="validate" required class="form-control">
			          <label for="name4">Name of Member 4</label>
			        </div>
			        <div class="input-field col s4">
			          <input id="nickname4" type="text" name="nickname4" class="validate" required class="form-control">
			          <label for="nickname4">Nickname of Member 4</label>
			        </div>
			    </div>
			    <div class="row">
		    		<div class="input-field col s8">
			          <input placeholder="Last name, First name" id="name5" name="name5" type="text" class="validate" required class="form-control">
			          <label for="name5">Name of Member 5</label>
			        </div>
			        <div class="input-field col s4">
			          <input id="nickname5" type="text" name="nickname5" class="validate" required class="form-control">
			          <label for="nickname5">Nickname of Member 5</label>
			        </div>
			    </div>
			    <label>For the fields below, enter the details of the contact person of the group.</label>
			    <div class="row">
			        <div class="input-field col s6">
			          <input placeholder="mm/dd/yy" id="birthday" type="text" class="validate" required class="form-control" name="birthday">
			          <label for="birthday">Birthday</label>
			        </div>
			        <div class="input-field col s6">
			          <input placeholder="Ex: 09177777777" id="number" name="number" type="number" min="09000000000" max="09999999999" class="validate" required class="form-control">
			          <label for="number">Cellphone Number</label>
			        </div>
			    </div>
			    <div class="row">
			        <div class="input-field col s12">
			          <input id="email" type="email" name="email" class="validate" required>
			          <label for="email">Email</label>
			        </div>
			    </div>
			    <div class="row">
			        <div class="input-field col s12">
			          <input id="school" name="school" type="text" class="validate" required class="form-control">
			          <label for="school">School</label>
			        </div>
			    </div>
			    <div class="row">
			        <div class="input-field col s4">
			          <input placeholder="Ex: 3" id="yr" name="yr" type="number" min="0" max="7" class="validate" required class="form-control">
			          <label for="yr">Year</label>
			        </div>
			        <div class="input-field col s8">
			          <input placeholder="Ex: BS CS" id="crs" name="crs" type="text" class="validate" required>
			          <label for="crs">Course</label>
			        </div>
			    </div>
			    <div class="row">
			        <div class="input-field col s12">
			          <input placeholder="N/A if none" id="org" name="org" type="text" class="validate" required class="form-control">
			          <label for="org">Organization</label>
			        </div>
			    </div>
			    <div class="row">
			        <div class="input-field col s12">
			          <textarea id="greencomputing" name="greencomputing" class="materialize-textarea" length="200" required class="form-control"></textarea>
		          	  <label for="greencomputing">What is green computing?</label>
		          	</div>
		        </div>
		        <div class="row">
		          	<div class="input-field col s12">
			          <textarea id="greenindustry" name="greenindustry" class="materialize-textarea" length="200" required class="form-control"></textarea>
		          	  <label for="greenindustry">Why is it important to practice green computing in the industry?</label>
		          	</div>
		          	<button class="btn btn-lg btn-primary teal lighten-3" type="submit">SUBMIT</button>
		    	</div>
		    </form>
	  		
		</div>

  	</div>
    
  </div>
</div></section>
