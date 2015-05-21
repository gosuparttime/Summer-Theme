<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/library/js/jquery.validate.min.js"></script>
<script>
jQuery(function ($) {
	
	$(document).ready(function() {
		$("#requestForm").validate({
			errorLabelContainer: $("#signupForm div.field_error"),
			// validate signup form on keyup and submit
			rules: {
				"50387[71516]": "required", // First name
				"50388[71517]": "required", // Last name
				"50389": { // Email
					required: true,
					email: true
				},
				"50395[922212]": "required", // Student Type
			},
			messages: {
				"50387[71516]": "Please enter your first name",
				"50388[71517]": "Please enter your last name",
				"50389": "Please enter a valid email address",
				"50395[922212]": "Please enter the type of student you consider yourself",
			},
			
			submitHandler: function() {
				//alert("submitted!");
				form.submit();
			}
			
		});
		$('#campus').hide();
		$('#field_922212').change(function() {
		   if ($(this).val() != 'Attending SU full-time'){
			   //$('#province').show();
			   $('#field_72436').val('');
		   } else {
			   //$('#province').hide();
			   $('#field_72436').val('SU Full-time Student');
		   };
		});
		$('#on_campus').change(function() {
		   if ($(this).prop('checked')){
			   $('#campus').show();
		   } else {
			  $('#campus').hide();
		   };
		});		
	});
});
</script>


<form action="http://demandengine.bm23.com/public/webform/process/" method="post" id="requestForm" class="pad-one-t">
  <input type="hidden" name="fid" value="esa87q28rfe4njmx08ig6a8juz7b0" />
  <input type="hidden" name="sid" value="d4a671f6b0808e341eee3571eae99448" />
  <input type="hidden" name="delid" value="" />
  <input type="hidden" name="subid" value="" />
  
  <h4 class="block">To Request A Course Schedule</h4>
  <p><em class="text-error">* Indicates required field</em></p>
  <div class="row-fluid">
    <div class="span6"> 
      <!-- First Name -->
      <label id="caption_71516"><strong>First/Given Name</strong> <span class="text-error big">*</span> </label>
      <div class="field">
        <input type="text" id="field_71516" class="span11" size="35" name="50387[71516]" value="" />
      </div>
    </div>
    <div class="span6" field_id="71517"> 
      <!-- Last Name -->
      <label id="caption_71517"><strong>Last/Family Name</strong> <span class="text-error big">*</span> </label>
      <div class="field">
        <input type="text" id="field_71517" class="span11" size="35" name="50388[71517]" value="" />
      </div>
    </div>
  </div>
  <div class="row-fluid pad-one-t">
    <div class="span6"> 
      <!-- Email -->
      <label id="50389"><strong>Email Address</strong> <span class="text-error big">*</span></label>
      <div class="field">
        <input type="text" class="span11 fb-email" size="35" name="50389" value="" />
      </div>
    </div>
  </div>
  <hr />
  <h4>Off Campus Mailing Address</h4>
  <p><em class="text-error">US Addresses Only</em></p>
  <div class="row-fluid pad-one-t">
    <div class="span6"> 
      <!-- Address -->
      <label id="caption_71519"><strong>Address</strong></label>
      <div class="field">
        <input type="text" id="field_71519" class="span11" size="35" name="50390[71519]" value="" />
      </div>
    </div>
    <div class="span6" field_id="71520"> 
      <!-- Address 2 -->
      <label id="caption_71520"><strong>Address 2</strong> <em>(Apt/Suite/Building)</em></label>
      <div class="field">
        <input type="text" id="field_71520" class="span11" size="35" name="50391[71520]" value="" />
      </div>
    </div>
  </div>
  <div class="row-fluid pad-one-t">
    <div class="span4"> 
      <!-- City -->
      <label id="caption_71665"><strong>City</strong></label>
      <div class="field">
        <input type="text" id="field_71665" class="span12" size="35" name="50392[71665]" value="" />
      </div>
    </div>
    <div class="span5" field_id="72411"> 
      <!-- State -->
      <label id="caption_72411"><strong>State</strong></label>
      <div class="field">
        <select id="field_72411" class="span12" name="50393[72411]" >
          <option value="Please Choose:" selected="selected" disabled="disabled">Please Choose:</option>
          <option value="AL" >Alabama</option>
          <option value="AK" >Alaska</option>
          <option value="AZ" >Arizona</option>
          <option value="AR" >Arkansas</option>
          <option value="CA" >California</option>
          <option value="CO" >Colorado</option>
          <option value="CT" >Connecticut</option>
          <option value="DE" >Delaware</option>
          <option value="DC" >District of Columbia</option>
          <option value="FL" >Florida</option>
          <option value="GA" >Georgia</option>
          <option value="HI" >Hawaii</option>
          <option value="ID" >Idaho</option>
          <option value="IL" >Illinois</option>
          <option value="IN" >Indiana</option>
          <option value="IA" >Iowa</option>
          <option value="KS" >Kansas</option>
          <option value="KY" >Kentucky</option>
          <option value="LA" >Louisiana</option>
          <option value="ME" >Maine</option>
          <option value="MD" >Maryland</option>
          <option value="MA" >Massachusetts</option>
          <option value="MI" >Michigan</option>
          <option value="MN" >Minnesota</option>
          <option value="MS" >Mississippi</option>
          <option value="MO" >Missouri</option>
          <option value="MT" >Montana</option>
          <option value="NE" >Nebraska</option>
          <option value="NV" >Nevada</option>
          <option value="NH" >New Hampshire</option>
          <option value="NJ" >New Jersey</option>
          <option value="NM" >New Mexico</option>
          <option value="NY" >New York</option>
          <option value="NC" >North Carolina</option>
          <option value="ND" >North Dakota</option>
          <option value="OH" >Ohio</option>
          <option value="OK" >Oklahoma</option>
          <option value="OR" >Oregon</option>
          <option value="PA" >Pennsylvania</option>
          <option value="RI" >Rhode Island</option>
          <option value="SC" >South Carolina</option>
          <option value="SD" >South Dakota</option>
          <option value="TN" >Tennessee</option>
          <option value="TX" >Texas</option>
          <option value="UT" >Utah</option>
          <option value="VT" >Vermont</option>
          <option value="VA" >Virginia</option>
          <option value="WA" >Washington</option>
          <option value="WV" >West Virginia</option>
          <option value="WI" >Wisconsin</option>
          <option value="WY" >Wyoming</option>
          <option disabled>----------------------------</option>
          <option value="AA" >Armed Forces the Americas</option>
          <option value="AE" >Armed Forces Europe</option>
          <option value="AP" >Armed Forces Pacific</option>
          <option value="AS" >American Samoa</option>
          <option value="GU" >Guam</option>
          <option value="MP" >Northern Mariana Islands</option>
          <option value="PR" >Puerto Rico</option>
          <option value="UM" >U.S. Minor Outlying Islands</option>
          <option value="VI" >U.S. Virgin Islands</option>
        </select>
      </div>
    </div>
    <div class="span3" field_id="71523"> 
      <!-- Zip Code -->
      <label id="caption_71523"><strong>Zip / Postal Code</strong></label>
      <div class="field">
        <input type="text" id="field_71523" class="span12" size="35" name="50394[71523]" value="" />
      </div>
    </div>
  </div>
  <hr />
  <div class="row-fluid pad-one-t">
    <div class="span9" field_id="922212">
      <label id="caption_922212"><strong>What Type Of Student Are You?</strong> <span class="text-error big">*</span></label>
      <div class="field">
        <select id="field_922212" class="span12" name="50395[922212]" >
          <option value="Please Choose:" selected="selected" disabled="disabled">Please Choose:</option>
          <option value="Attending SU full-time" >Currently attending SU full-time</option>
          <option value="Attending SU part-time" >Currently attending SU part-time</option>
          <option value="Attending a college/university not part of SU" >Attending a college/university not part of SU</option>
          <option value="Not attending any college/university" >Not attending any college/university</option>
        </select>
        <div class="field_error"> </div>
      </div>
    </div>
  </div>
  <div class="row-fluid pad-one-t">
    <div class="span12" field_id="72658" >
      <div class="field_block" field_id="746971">
        <div class="checkbox field"> <span>
          <input type="checkbox" id="on_campus" class="checkbox" name="on_campus" value="1" />
          <label id="caption_746971" for="on_campus" class="caption"><strong>Yes, please send my copy of the course catalog to my current residence hall</strong> </label>
          </span>
          <div class="field_error"> </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="pad-one-t" id="campus">
  <h4>On Campus Mailing Address</h4>
  <p><em class="text-error">If you live in SU provided <a href="http://housingmealplans.syr.edu/facilityinformation_Otheroptions.cfm" target="_blank">alternative location</a>, we are unable to send the course schedule via campus mail.</em></p>
  <div class="row-fluid">
    <div class="span9" field_id="924074">
      <label id="caption_924074"><strong>SU Residence Hall</strong></label>
      <div class="field">
        <select id="field_924074" class="span12" name="50396[924074]" >
          <option value="Please Choose:" selected="selected" disabled="disabled">Please Choose:</option>
          <option value="Booth Hall" >Booth Hall</option>
          <option value="Brewster, Boland & Brockway Halls" >Brewster, Boland & Brockway Halls</option>
          <option value="Day Hall" >Day Hall</option>
          <option value="DellPlain Hall" >DellPlain Hall</option>
          <option value="Ernie Davis Hall" >Ernie Davis Hall</option>
          <option value="Flint Hall" >Flint Hall</option>
          <option value="Haven Hall" >Haven Hall</option>
          <option value="Kimmel & Marion Halls" >Kimmel & Marion Halls</option>
          <option value="Lawrinson Hall" >Lawrinson Hall</option>
          <option value="Oren Lyons Hall" >Oren Lyons Hall</option>
          <option value="Sadler Hall" >Sadler Hall</option>
          <option value="Shaw Hall" >Shaw Hall</option>
          <option value="Skyhall I" >Skyhall I</option>
          <option value="Skyhall II" >Skyhall II</option>
          <option value="Skyhall III" >Skyhall III</option>
          <option value="Walnut Hall" >Walnut Hall</option>
          <option value="Washington Arms" >Washington Arms</option>
          <option value="Watson Hall" >Watson Hall</option>
        </select>
        <div class="field_error"> </div>
      </div>
    </div>
    <div class="span3" field_id="924075">
      <label id="caption_924075"><strong>Hall Mailbox #</strong></label>
      <div class="field">
        <input type="text" id="field_924075" class="span11" size="35" name="50397[924075]" value="" />
        <div class="field_error"> </div>
      </div>
    </div>
  </div>
  
  </div>
  <div class="row-fluid pad-two-t" id="row_16460">
    <div class="span6">
      <button type="submit" class="btn btn-orange">Submit My Request</button>
    </div>
    <div class="hidden"> 
      <!-- List Subscribes -->
      <input type="hidden" name="50399[374597]" value="true" />
      <!-- Initial Inquiry Date -->
      <input type="hidden" id="field_71531" class="hidden field" name="50398[71531]" value="" />
      <input type="hidden" id="field_72436" class="hidden field" name="50400[72436]" value="" />
    </div>
  </div>
</form>
<script>
(window.jQuery)
//
var currentDate = new Date()
var day = currentDate.getDate()
if (day < 10) { day = '0' + day; }
var month = currentDate.getMonth() + 1
if (month < 10) { month = '0' + month; }
var year = currentDate.getFullYear()
var newDay = month + "/" + day + "/" + year
document.getElementById("field_71531").value = newDay;
</script> 
