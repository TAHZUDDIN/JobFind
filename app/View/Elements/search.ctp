 <div id="search_area" class="col_12 column">
      	<form class="horizontal" method="post" action="<?php echo $this->webroot;?>jobs/browse">
      		<input name="keywords" id="keywords" type="text" placeholder="Enter Keywords..."/>
      		<select name="states" id="state_select">
      			<option>Select State</option>
      			<option value="AL">Albania</option>   			
      			<option value="AK">Alaska</option>
      			<option value="AZ">Arizona</option>
      			<option value="AR">Arkansas</option>
      			<option value="CA">California</option>
      			<option value="CO">Colorado</option>
      			<option value="FL">Florida</option>
      			<option value="GA">Georgia</option>
      			<option value="HI">Hawaii</option>
      			<option value="IN">Indiana</option>
      			<option value="KS">Kansas</option>
      			<option value="IA">Lowa</option>      			
      		</select>


      		<select id="category_select" name="category">
      			<option>Select Category</option>
                        <?php foreach ($categories as $category):  ?>
      			  <option value="<?php echo $category['Category']['id']; ?>"><?php echo $category['Category']['name']; ?></option>
      			<?php endforeach; ?>
      		</select>
            
            <button type="submit">Submit</button>

      	</form>
      </div>