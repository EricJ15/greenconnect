
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/SignUp.css') }}">
<!-- naa sa public/css folder ang css, ignore css sa resources sdfasfda-->
    
</head>
<body>

<div class="container">
    <div class="left-panel">
      <img alt="Green Chef Logo" height="100" src="" width="100" />  <!-- LOGO MISSING PA --> 
      <h1>WELCOME TO GREEN CONNECT</h1>
      <p>GREEN CHEF'S PORTAL TO NUTRITION</p>
      <p>Already have an account?</p>
      <button>Sign In</button>
    </div>

    <form method="POST" action="{{ route('signUp') }}">
        @csrf
      <div class="right-panel" id="step1">
        <!-- Step 1: Diet Program Information -->
        <h2>Diet Program</h2>
        <div class="form-group full-width">
            <label>Diet Program<span> *</span></label>
            <select name="diet_program" required>
                <option value="">Select Diet Program</option>
                <option value="weight_loss">Weight Loss Diet</option>
                <option value="weight_gain">Weight Gain Diet</option>
                <option value="gluten_free">Gluten-Free Diet</option>
                <option value="therapeutic">Therapeutic Diet</option>
            </select>
        </div>
        <div class="form-group">
            <label class="required">First Name<span> *</span></label>
            <input type="text" name="first_name" required />
        </div>
        <div class="form-group">
            <label class="required">Last Name<span> *</span></label>
            <input type="text" name="last_name" required />
        </div>
        <div class="form-group">
            <label>Sex :</label><br />
            Male
            <input name="sex" type="radio" value="Male" required />
            Female 
            <input name="sex" type="radio" value="Female" required /> 
        </div>
        <div class="form-group">
            <label>Age:</label>
            <input type="text" name="age" />
        </div>
        <div class="form-group">
            <label>Height:</label>
            <input name="height" placeholder="cm" type="text" />
        </div>
        <div class="form-group">
            <label>Weight:</label>
            <input name="weight" placeholder="kg" type="text" />
        </div>
        <div class="form-group full-width">
            <label class="required">Delivery Address<span> *</span></label>
            <input type="text" name="delivery_address" required />
        </div>
        <div class="form-group full-width">
            <label class="required">Contact Number<span> *</span></label>
            <input type="text" name="contact_number" required />
        </div>
        <div class="form-group full-width">
            <label>Doctor's Diet Recommendation</label>
            <input type="text" name="doctor_recommendation" />
        </div>
        <br />
        <div class="form-group full-width">
            <button type="button" onclick="showNextStep(2)">Next Page</button>
        </div>
    </div>
        <div class="right-panel hidden" id="step2">
          <h2>Allergies</h2>
          <div class="form-group full-width">
              <div class="allergies-grid">
                  <div class="checkbox-group">
                      
                      <label>Legume</label>
                      <select name="legume_source">
                          <option value="">Select Source</option>
                          <option value="Peanut">Peanut</option>
                          <option value="Soybean">Soybean</option>
                          <option value="Green Peas">Green Peas</option>
                          <option value="Lentils">Lentils</option>
                          <option value="Chickpeas">Chickpeas</option>
                      </select>
                      <input type="checkbox" name="allergies[legume]" />
                  </div>
                  <div class="checkbox-group">
                    <label>Poultry</label>
                    <select>
                    <option value="">Select Source</option>
                    <option value="Chicken">Chicken</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Duck">Duck</option>
                    <option value="Quail">Quail</option>
                    </select>
                    <input type="checkbox" name="allergies[poultry]" />
                  </div>
            <div class="checkbox-group">
    
             <label>Tree nut</label>
             <select>
                <option value="">Select Source</option>
               <option value="Almond">Almond</option>
             <option value="Cashew">Cashew</option>
             <option value="Walnut">Walnut</option>
             <option value="Pecan">Pecan</option>
             <option value="Pistachio">Pistachio</option>
            </select>
            <input type="checkbox" name="allergies[treenut]" />
            </div>
            <div class="checkbox-group">
             <label>Seed</label>
            <select>
        <option value="">Select Source</option>
        <option value="Sesame">Sesame</option>
        <option value="Sunflower">Sunflower</option>
        <option value="Poppy">Poppy</option>
        <option value="Pumpkin">Pumpkin</option>
        <option value="Flax">Flax</option>
            </select>
            <input type="checkbox" name="allergies[seed]" />
            </div>
<div class="checkbox-group">
    
    <label>Crustacean</label>
    <select>
        <option value="">Select Source</option>
        <option value="Shrimp">Shrimp</option>
        <option value="Lobster">Lobster</option>
        <option value="Crab">Crab</option>
        <option value="Prawns">Prawns</option>
    </select>
    <input type="checkbox" name="allergies[crustacean]" />
</div>
<div class="checkbox-group">
    
    <label>Fruit</label>
    <select>
        <option value="">Select Source</option>
        <option value="Banana">Banana</option>
        <option value="Apple">Apple</option>
        <option value="Peach">Peach</option>
        <option value="Kiwi">Kiwi</option>
        <option value="Strawberry">Strawberry</option>
    </select>
    <input type="checkbox" name="allergies[fruit]" />
</div>
<div class="checkbox-group">
    
    <label>Cereal Grain</label>
    <select>
        <option value="">Select Source</option>
        <option value="Wheat">Wheat</option>
        <option value="Barley">Barley</option>
        <option value="Oats">Oats</option>
        <option value="Rye">Rye</option>
        <option value="Corn">Corn</option>
    </select>
    <input type="checkbox" name="allergies[cerealgrain]" />
</div>
<div class="checkbox-group">
    
    <label>Fish</label>
    <select>
        <option value="">Select Source</option>
        <option value="Salmon">Salmon</option>
        <option value="Tuna">Tuna</option>
        <option value="Cod">Cod</option>
        <option value="Haddock">Haddock</option>
        <option value="Mackerel">Mackerel</option>
    </select>
    <input type="checkbox" name="allergies[fish]" />
</div>
<div class="checkbox-group">
    
    <label>Mollusk</label>
    <select>
        <option value="">Select Source</option>
        <option value="Clams">Clams</option>
        <option value="Oysters">Oysters</option>
        <option value="Scallops">Scallops</option>
        <option value="Mussels">Mussels</option>
        <option value="Squid">Squid</option>
    </select>
    <input type="checkbox" name="allergies[mollusk]" />
    
</div>

                  <!-- Repeat for other allergies -->
        </div>
    </div>
          <div class="form-group full-width">
              <label for="food_preference">Food Preference:</label>
              <select id="food_preference" name="food_preference" required>
                  <option value="">Select Food Preference</option>
                  <option value="Pork">Pork</option>
                  <option value="Beef">Beef</option>
                  <option value="Fruit">Fruit</option>
                  <option value="Fish">Fish</option>
                  <option value="Vegetable">Vegetable</option>
              </select>
          </div>
          
        <div class="form-group full-width">
            <button type="button" onclick="showPreviousStep(2)">Back</button>
        </div>
</div>
        <div class="right-panel hidden" id="step3">
          <h2>Account and Payment</h2>
          <div class="form-group">
              <label class="required">Username<span>*</span></label>
              <input type="text" name="username" required />
          </div>
          <div class="form-group">
              <label class="required">Password<span> *</span></label>
              <input type="password" name="password" required />
          </div>
          <div class="form-group">
              <label class="required">Payment Option<span> *</span></label>
              <select name="payment_method" required>
                  <option value="">Select Payment Method</option>
                  <option value="credit_card">Credit Card</option>
                  <option value="gcash">Gcash</option>
                  <option value="maya">Maya</option>
                  <option value="bank_transfer">Bank Transfer</option>
                  <option value="cash">Cash</option>
              </select>
          </div>
          <div class="form-group">
              <label class="required">Ref Number<span> *</span></label>
              <input type="text" name="ref_number" required />
          </div>
          <br />
          <div class="form-group full-width">
              <button type="submit">Proceed</button>
          </div>
          <div class="form-group full-width">
          <button type="button" onclick="showPreviousStep(3)">Back</button>
          </div>
        </div>
      </div>
          <br />
        <br />
        
      </div>
        
          
      </div>
     </form>
  </div>
</div>

</div>


 
<script>
     function showNextStep() {
        
        document.getElementById('step1').classList.add('hidden');
        document.getElementById('step2').classList.remove('hidden');
        document.getElementById('step3').classList.remove('hidden');
        
       
    }

    function showPreviousStep() {
       
        document.getElementById('step1').classList.remove('hidden');
        document.getElementById('step2').classList.add('hidden');
        document.getElementById('step3').classList.add('hidden');
    }
</script>

<!-- Bootstrap JS and dependencies (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
