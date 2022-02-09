<?php
include '../@Database@/config.php';
include '../@Database@/settings.php';
include '../php/insertnonprofitchurchform.php';

if($fetchRow['owneremail'] == '') {
    $colorbro = 'red';
    $siteowneremail = 'No owner email set.';
}else {
    $colorbro = 'green';
    $siteowneremail = $fetchRow['owneremail'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="images/favicon.ico" rel="icon" />
    <meta name="description" content="Non-Profit Church Formation Questionnaire Form">
	<meta name="author" content="AsalentsTech">
    <title> Non-Profit Church Formation Questionnaire </title>
   
    <link type="text/css" rel="stylesheet" href="../css/golden-forms.css"/>
    <link type="text/css" rel="stylesheet" href="../css/font-awesome.min.css"/>
    
</head>

<body class="bg-linen">
<center>

    <div class="gforms">
    
        <div class="golden-forms wrapper">
            <form method="post">
                <br>
                <center>
		<font color="green">
		<?php if ($response): ?>
		<h2><?php echo $response; ?></h2>
		<?php endif; ?>
		</font>
		    <font color="red">
		<?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    </font>
		</center><br>
                <div class="form-title">
                    <h2><font color = "black">Non-Profit Church Formation Questionnaire</font></h2>
                </div>
                <div class="form-enclose">
                    <div class="form-section">
                        <center><p><font color="blue">If you created an account before coming here, make sure to use the same "<strong>First And Last</strong>" name you used when creating your account.</font></p></center><br>
					<h1 id="header1">General Information</h1><br>
                       <section name="question1">
                       		<label class="lbl-text"><font color = "black">Will you be the person to answer questions about your church?</font></label>
							<label class="lbl-ui select">
                              <select name="question1answer1">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                              </select>
                            </label>                            
                       </section>
                       <section name="question2">
                       		<label class="lbl-text"><font color = "black">If not you, then provide the name, phone number, and email address for the
						person who will answer / complete the questionnaire.</font><font color="red">(If 'Yes' above then skip)</font></label>
							<label class="lbl-ui">
                            	<input type="text" name="question2answer1" class="input" placeholder="Enter First And Last Name" />
                            </label><br>
                            <label class="lbl-ui">
                            	<input type="text" name="question2answer2" class="input" placeholder="Enter Phone Number ( +1 888 888 8888 )"/>
                            </label><br>  
							<label class="lbl-ui">
                            	<input type="text" name="question2answer3" class="input" placeholder="Enter Email Address"/>
                            </label><br>							
                       </section> 
					   <section name="question3">
                       		<label class="lbl-text"><font color = "black">Do you have an accountant assisting with this application?</font></label>
							<label class="lbl-ui select">
                              <select name="question3answer1" >
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                              </select>
                            </label>                            
                       </section>
                       <section name="question4">
                       		<label class="lbl-text"><font color = "black">If so, please provide their contact information.</font> <font color="red">(If 'No' above then skip)</font></label>
                            <label class="lbl-ui">
                            	<input type="text" name="question4answer1" class="input" placeholder="Enter Their Company Name" />
                            </label><br>
							<label class="lbl-ui">
                            	<input type="text" name="question4answer2" class="input" placeholder="Enter First And Last Name" />
                            </label><br>
                            <label class="lbl-ui">
                            	<input type="text" name="question4answer3" class="input" placeholder="Enter Phone Number ( +1 888 888 8888 )"/>
                            </label><br>  
							<label class="lbl-ui">
                            	<input type="text" name="question4answer4" class="input" placeholder="Enter Email Address"/>
                            </label><br>
							<label class="lbl-ui">
                            	<input type="text" name="question4answer5" class="input" placeholder="Company Website ( https://www.website.com )"/>
                            </label>  							
                       </section> 
					   <h1 id="header2">Selection Of A Corporate Name</h1><br>
						<section name="question5">
						<div class="notification warning">
                                    <p><font color = "black">Your church's corporate name must be checked for availability with the
						Secretary of State to determine that your corporate name is not the same or
						confusingly similar to the name of an existing corporation or registered out-ofstate corporation. Please provide 3 names in order of your preference.</font></p></div><br><br>
                            <label class="lbl-ui">
                            	<input type="text" name="question5answer1" class="input" placeholder="Company Name #1" />
                            </label><br>
							<label class="lbl-ui">
                            	<input type="text" name="question5answer2" class="input" placeholder="Company Name #2" />
                            </label><br>
							<label class="lbl-ui">
                            	<input type="text" name="question5answer3" class="input" placeholder="Company Name #3" />
                            </label><br> 							
                       </section>	 
						<h1 id="header3">Qualification As A Charitable organization Under IRS §501 (c) (3)UNDER IRS §501(c)(3)</h1><br>
						<div class="notification warning">
                                    <p><font color = "black">To qualify as a tax exempt charitable
						organization an entity must be organized and operated primarily for exempt
						purposes, no part of its net earnings may inure to the benefit of any private
						shareholder or individual, and must refrain from electioneering and substantial
						lobbying activities. 501(c)(3) includes organizations organized and operated
						exclusively for purposes that are charitable, religious, scientific, testing
						for public safety, literary, educational, fostering amateur sports competition,
						or preventing cruelty to children or animals.</font></p></div><br><br>
						<section name="question6">
                       		<label class="lbl-text"><font color = "black">Will the organization be organized and operated for one or more of the exempt
						purposes described above?</font></label>
							<label class="lbl-ui select">
                              <select name="question6answer1" >
                                <option value="Charitable">Charitable</option>
                                <option value="Education">Education</option>
								<option value="Scientific">Scientific</option>
                                <option value="Religious">Religious</option>
								<option value="No">No, Will Not Be Exempt</option>
                              </select>
                            </label>                            
                       </section>		
						<section name="question7">
                          <label for="multi" class="lbl-text"><font color = "black">What will be the primary source(s) of financial support? Select all that apply.</font></label> 
                          <label class="lbl-ui select-multiple">
                              <select name="question7answer1" multiple="multiple" size="6">
                                    <option value="Gross receipts from the operation of an exempt activity"> Gross receipts from the operation of an exempt activity</option>
                                    <option value="Fundraising activities">Fundraising activities</option>
                                    <option value="Grants (private or governmental)">Grants (private or governmental)</option>
                                    <option value="Donations from a large number of unrelated people">Donations from a large number of unrelated people</option>
                                    <option value="Donations from you, friends and relatives .">Donations from you, friends and relatives .</option>                  
                              </select>
                          </label>                       
                       </section> 	
						<h1 id="header4">Certificate Of Formation Documents</h1><br>	
						<section name="question8">
                       		<label class="lbl-text"><font color = "black">What will be the principal address of the corporation?</font></label>
                            <label class="lbl-ui">
                            	<textarea name="question8answer1" class="textarea no-resize" placeholder="Your Answer Here"></textarea>
                            </label>                          
                       </section>	
						<section name="question9">
                       		<label class="lbl-text"><font color = "black">What will be the purpose(s) of your non-profit?</font></label>
                            <label class="lbl-ui">
                            	<textarea name="question9answer1" class="textarea no-resize" placeholder="Your Answer Here"></textarea>
                            </label>                          
                       </section>
						<section name="question10">
                       		<label class="lbl-text"><font color = "black">If the non-profit dissolves (closes), who will receive the corporation’s assets?</font> <font color="red">(This must be another non-profit organization)</font></label>
                            <label class="lbl-ui">
                            	<input type="text" name="question10answer1" class="input" placeholder="Enter Their Company Name" />
                            </label><br>
							<label class="lbl-ui">
                            	<input type="text" name="question10answer2" class="input" placeholder="Enter First And Last Name" />
                            </label><br>
                            <label class="lbl-ui">
                            	<input type="text" name="question10answer3" class="input" placeholder="Enter Phone Number ( +1 888 888 8888 )"/>
                            </label><br>  
							<label class="lbl-ui">
                            	<input type="text" name="question10answer4" class="input" placeholder="Enter Email Address"/>
                            </label><br>
							<label class="lbl-ui">
                            	<input type="text" name="question10answer5" class="input" placeholder="Company Website ( https://www.website.com )"/>
                            </label>  							
                       </section>	
						<div class="notification warning">
                                    <p><font color = "black">All corporations, including non-profits, must have a registered agent to accept
						mail and notices from the Secretary of State and other entities. A registered
						agent may be the founder, a board member, or any person who agrees to
						serve as the registered agent.</font></p></div><br><br>

							<section name="question11">
                       		<label class="lbl-text"><font color = "black">Who will be the agent for service of process of the corporation?</font></label>
                            <label class="lbl-ui">
                            	<input type="text" name="question11answer1" class="input" placeholder="Enter Their Company Name" />
                            </label><br>
							<label class="lbl-ui">
                            	<input type="text" name="question11answer2" class="input" placeholder="Enter First And Last Name" />
                            </label><br>
                            <label class="lbl-ui">
                            	<input type="text" name="question11answer3" class="input" placeholder="Enter Phone Number ( +1 888 888 8888 )"/>
                            </label><br>  
							<label class="lbl-ui">
                            	<input type="text" name="question11answer4" class="input" placeholder="Enter Email Address"/>
                            </label><br>
							<label class="lbl-ui">
                            	<input type="text" name="question11answer5" class="input" placeholder="Company Website ( https://www.website.com )"/>
                            </label>  							
                       </section>	
					   <h1 id="header5">Corporation Management</h1><br>	
					   <div class="notification warning">
                                    <p><font color = "black">A non-profit organization may be managed by a board of directors or members
						of the organization. For many churches, this is referred to as a Deacon Board,
						Judicial Elders, or Board of Trustees. Regardless of the name, the organization
						must have a minimum of three board members (president, secretary, and
						treasurer) or a member that is responsible for managing it. Board members
						may be related, but federal grants frown on nepotism.</font></p></div><br><br>
                       
					   <section name="question12">
                       		<label class="lbl-text"><font color = "black">What will be the name of your board?</font></label>
							<label class="lbl-ui">
                            	<input type="text" name="question12answer1" class="input" placeholder="Enter Board Name" />
                            </label><br>							
                       </section>
					   <section name="question13">
                       		<label class="lbl-text"><font color = "black">What will be the total number of directors?</font></label>
							<label class="lbl-ui">
                            	<input type="text" name="question13answer1" class="input" placeholder="Enter Total Number" />
                            </label><br>							
                       </section>
					   <section name="question14">
                       		<label class="lbl-text"><font color = "black">Who will be the president/chairman of the board?</font></label>
                            <label class="lbl-ui">
                            	<input type="text" name="question14answer1" class="input" placeholder="Enter Their Company Name" />
                            </label><br>
							<label class="lbl-ui">
                            	<input type="text" name="question14answer2" class="input" placeholder="Enter First And Last Name" />
                            </label><br>
                            <label class="lbl-ui">
                            	<input type="text" name="question14answer3" class="input" placeholder="Enter Phone Number ( +1 888 888 8888 )"/>
                            </label><br>  
							<label class="lbl-ui">
                            	<input type="text" name="question14answer4" class="input" placeholder="Enter Email Address"/>
                            </label><br>
							<label class="lbl-ui">
                            	<input type="text" name="question14answer5" class="input" placeholder="Company Website ( https://www.website.com )"/>
                            </label>  							
							</section>
					   		<section name="question15">
                       		<label class="lbl-text"><font color = "black">who will be the Secretary of the Board?</font></label>
                            <label class="lbl-ui">
                            	<input type="text" name="question15answer1" class="input" placeholder="Enter Their Company Name" />
                            </label><br>
							<label class="lbl-ui">
                            	<input type="text" name="question15answer2" class="input" placeholder="Enter First And Last Name" />
                            </label><br>
                            <label class="lbl-ui">
                            	<input type="text" name="question15answer3" class="input" placeholder="Enter Phone Number ( +1 888 888 8888 )"/>
                            </label><br>  
							<label class="lbl-ui">
                            	<input type="text" name="question15answer4" class="input" placeholder="Enter Email Address"/>
                            </label><br>
							<label class="lbl-ui">
                            	<input type="text" name="question15answer5" class="input" placeholder="Company Website ( https://www.website.com )"/>
                            </label>  							
                       </section>
					   	<section name="question16">
                       		<label class="lbl-text"><font color = "black">who will be the Treasurer of the Board?</font></label>
                            <label class="lbl-ui">
                            	<input type="text" name="question16answer1" class="input" placeholder="Enter Their Company Name" />
                            </label><br>
							<label class="lbl-ui">
                            	<input type="text" name="question16answer2" class="input" placeholder="Enter First And Last Name" />
                            </label><br>
                            <label class="lbl-ui">
                            	<input type="text" name="question16answer3" class="input" placeholder="Enter Phone Number ( +1 888 888 8888 )"/>
                            </label><br>  
							<label class="lbl-ui">
                            	<input type="text" name="question16answer4" class="input" placeholder="Enter Email Address"/>
                            </label><br>
							<label class="lbl-ui">
                            	<input type="text" name="question16answer5" class="input" placeholder="Company Website ( https://www.website.com )"/>
                            </label>  							
                       </section>
					   <section name="question17">Will you have more board members?</font></label>
							<label class="lbl-ui select">
                              <select name="question17answer1" >
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                              </select>
                            </label>                            
                       </section>
					   <section name="question18">
                       		<label class="lbl-text"><font color = "black">If yes, please list their name, address, and email address below.</font></label>
							<font color="red">(If 'No' above then skip)</font>
							<label class="lbl-ui">
								<textarea name="question18answer1" class="textarea no-resize" placeholder="Please Enter Requested Information"></textarea>
                            </label><br>							
                       </section>
					   <section name="question19">
                       		<label class="lbl-text"><font color = "black">How will you select the board members? What are the minimum qualifications?</font></label>
							<label class="lbl-ui">
                            	<textarea name="question19answer1" class="textarea no-resize" placeholder="Your Answer Here"></textarea>
                            </label><br>							
                       </section>
					   <section name="question20">
                       		<label class="lbl-text"><font color = "black">What are the term limits for board members?</font></label>
							<font color="red">(For public benefit and mutual
							benefit corporations that have no statutory members, the maximum term is 6
							years, but the term limitations do not preclude an individual from being
							reelected to consecutive terms unless such restrictions are set forth in the
							articles or bylaws.)</font>
							<label class="lbl-ui">
                            	<textarea name="question20answer1" class="textarea no-resize" placeholder="Your Answer Here"></textarea>
                            </label><br>							
                       </section>
					   <section name="question21">
                       		<label class="lbl-text"><font color = "black">Will there be officers in addition to the President/Chairman of the Board, Secretary, and Treasurer? If so, what are their titles?</font></label>
							<label class="lbl-ui">
                            	<textarea name="question21answer1" class="textarea no-resize" placeholder="Your Answer Here"></textarea>
                            </label><br>							
                       </section>
					   <section name="question22">
                       		<label class="lbl-text"><font color = "black">What will be the term of office for officers?</font></label>
							<font color="red">(For public benefit corporations, the
						term of office for any officer position to be filled by election by members is one
						year unless a longer term not to exceed 3 years is set forth in the articles or
						bylaws.)</font>
							<label class="lbl-ui select">
                              <select name="question22answer1" >
                                <option value="1 Year">1 Year</option>
                                <option value="2 Years">2 Years</option>
								<option value="3 Years">3 Years</option>
                              </select>
                            </label>                            
                       </section>
					   <section name="question23">
                       		<label class="lbl-text"><font color = "black">Do you intend to pay your board members?</font></label>
							<label class="lbl-ui select">
                              <select name="question23answer1" >
                                <option value="No">No</option>
								<option value="Yes">Yes</option>
                              </select>
                            </label>                            
                       </section>
					   <section name="question24">
                       		<label class="lbl-text"><font color = "black">If so, why will you pay them?</font></label>
							<font color="red">(Nonprofit board members should not be paid salaries.)</font>
							<label class="lbl-ui">
                            	<textarea name="question24answer1" class="textarea no-resize" placeholder="Your Answer Here"></textarea>
                            </label><br>							
                       </section>
					   <section name="question25">
                       		<label class="lbl-text"><font color = "black">Provide a brief biography for Board President/Chairman.</font></label>
							<label class="lbl-ui">
                            	<textarea name="question25answer1" class="textarea no-resize" placeholder="Your Answer Here"></textarea>
                            </label><br>							
                       </section>
					   <section name="question26">
                       		<label class="lbl-text"><font color = "black">Provide a brief biography for Board Secretary. R</font></label>
							<label class="lbl-ui">
                            	<textarea name="question26answer1" class="textarea no-resize" placeholder="Your Answer Here"></textarea>
                            </label><br>							
                       </section>
					   <section name="question27">
                       		<label class="lbl-text"><font color = "black">Provide a brief biography for Board Treasurer.</font></label>
							<label class="lbl-ui">
                            	<textarea name="question27answer1" class="textarea no-resize" placeholder="Your Answer Here"></textarea>
                            </label><br>							
                       </section>
					   <h1 id="header6">Financial Management/Accounting</h1><br>
					   <section name="question28">
                       		<label class="lbl-text"><font color = "black">What will be the fiscal year of the corporation? Fiscal years may be calendar
						based, or you may choose an "off-season" term to save money on audits and
						accounting. Please select one below.</font></label>
							<label class="lbl-ui select">
                              <select name="question28answer1" >
                                <option value="Calendar year (January-December)">Calendar year (January-December)</option>
								<option value="Federal tax year (October-September)">Federal tax year (October-September)</option>
								<option value="Summer tax year (July-June)">Summer tax year (July-June)</option>
								<option value="Other">Other</option>
                              </select>
                            </label>                            
                       </section>
					   <section name="question29">
                       		<label class="lbl-text"><font color = "black">If you selected Other, what is the term?</font></label>
							<label class="lbl-ui">
                            	<input type="text" name="question29answer1" class="input" placeholder="Your Answer" />
                            </label><br>							
                       </section>
					   <section name="question30">
                       		<label class="lbl-text"><font color = "black">What is the name, address, and telephone number of the bank where the nonprofit corporation will open its bank account?</font></label>
							</label><br>
							<label class="lbl-ui">
                            	<input type="text" name="question30answer1" class="input" placeholder="Enter First And Last Name" />
                            </label><br>
                            <label class="lbl-ui">
                            	<input type="text" name="question30answer2" class="input" placeholder="Enter Phone Number ( +1 888 888 8888 )"/>
                            </label><br>  
							<label class="lbl-ui">
                            	<input type="text" name="question30answer3" class="input" placeholder="Enter Address"/>
                            </label>  							
                       </section>	
					   <h1 id="header7">IRS Determination Application</h1><br>	
					   <section name="question31">
                       		<label class="lbl-text"><font color = "black">What is the corporation's history?</font></label>
							<font color = "red">(Why did you feel there was a need to create the non-profit?)</font>
							<label class="lbl-ui">
                            	<textarea name="question31answer1" class="textarea no-resize" placeholder="Your Answer Here"></textarea>
                            </label><br>							
                       </section>
					   <section name="question32">
                       		<label class="lbl-text"><font color = "black">What, if any, services will you provide in addition to religious services? For
						example, will you have a community pantry, clothing ministry, or drug
						addiction program?</font></label>
							<label class="lbl-ui">
                            	<textarea name="question32answer1" class="textarea no-resize" placeholder="Your Answer Here"></textarea>
                            </label><br>							
                       </section>
					   <section name="question33">Will the church charge for these services or product?</font></label>
							<label class="lbl-ui select">
                              <select name="question33answer1" >
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                              </select>
                            </label>                            
                       </section>
					   <section name="question34">
                       		<label class="lbl-text"><font color = "black">If yes, how much?</font></label>
							<font color = "red">(If "No" above then skip.)</font>
							<label class="lbl-ui">
                            	<input type="text" name="question34answer1" class="input" placeholder="Your Answer" />
                            </label><br>							
                       </section>
					   <section name="question35">
                       		<label class="lbl-text"><font color = "black">What assets will the corporation purchase or lease to pursue its activities?</font></label>
							<label class="lbl-ui">
                            	<textarea name="question35answer1" class="textarea no-resize" placeholder="Your Answer Here"></textarea>
                            </label><br>							
                       </section>
					   <section name="question36">Do you have a proposed budget, or financial statements, such as a profit and
						loss report, balance sheet, and/or cash flow statement?</font></label>
							<label class="lbl-ui select">
                              <select name="question36answer1" >
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                              </select>
                            </label>                            
                       </section>
					   <section>
                       		<label class="lbl-text"><font color = "green">If yes above, please <a href="../Account/Login">login</a> or <a href="../Account/Login">create an account</a> and go to the "File Uploader" section and upload the file after you complete this form.</font></label>							
                       </section>
					   <h1 id="header8">Employees</h1><br>
						<section name="question37">What is the title of your executive officer? </font></label>
							<label class="lbl-ui select">
                              <select name="question37answer1" >
                                <option value="Executive Director">Executive Director</option>
                                <option value="President">President</option>
								<option value="CEO">CEO</option>
                                <option value="Other">Other</option>
                              </select>
                            </label>                            
                       </section>	
						<section name="question38">
                       		<label class="lbl-text"><font color = "black">If you selected Other, what is the title?</font></label>
							<font color = "red">(If you selected anything else above then skip.)</font>
							<label class="lbl-ui">
                            	<input type="text" name="question38answer1" class="input" placeholder="Your Answer" />
                            </label><br>							
                       </section>
						<section name="question39">
                       		<label class="lbl-text"><font color = "black">Who will serve as the executive in the first year?</font></label>
							<label class="lbl-ui">
                            	<input type="text" name="question39answer1" class="input" placeholder="Your Answer" />
                            </label><br>							
                       </section>
						<section name="question40">
                       		<label class="lbl-text"><font color = "black">Who will serve as the executive in the first year?</font></label>
							<label class="lbl-ui">
                            	<input type="text" name="question40answer1" class="input" placeholder="Your Answer" />
                            </label><br>							
                       </section>
						<section name="question41">
                       		<label class="lbl-text"><font color = "black">Why is this person qualified to hold this position?</font></label>
							<label class="lbl-ui">
                            	<textarea name="question41answer1" class="textarea no-resize" placeholder="Your Answer Here"></textarea>
                            </label><br>							
                       </section>
					   <section name="question42">
                       		<label class="lbl-text"><font color = "black">Please give a brief bio for the executive.</font></label>
							<label class="lbl-ui">
                            	<textarea name="question42answer1" class="textarea no-resize" placeholder="Your Answer Here"></textarea>
                            </label><br>							
                       </section>
					   <section name="question43">
                       		<label class="lbl-text"><font color = "black">Will you hire employees? How many do you anticipate hiring in the first year?</font></label>
							<label class="lbl-ui">
                            	<textarea name="question43answer1" class="textarea no-resize" placeholder="Your Answer Here"></textarea>
                            </label><br>							
                       </section>
					   <section name="question44">
                       		<label class="lbl-text"><font color = "black">How much will you pay them?</font></label>
							<label class="lbl-ui">
                            	<textarea name="question44answer1" class="textarea no-resize" placeholder="Your Answer Here"></textarea>
                            </label><br>							
                       </section>
					   <h1 id="header9">Fundraising</h1><br>
					   <section name="question45">
                          <label for="multi" class="lbl-text"><font color = "black">How will you raise funds? Select all that apply.</font></label> 
                          <label class="lbl-ui select-multiple">
                              <select name="question45answer1" multiple="multiple" size="6">
                                    <option value="Mail solicitation">Mail solicitation</option>
                                    <option value="Email solicitation">Email solicitation</option>
                                    <option value="Personal solicitation">Personal solicitation</option>
									<option value="Phone solicitation">Phone solicitation</option>
									<option value="Foundation grant solicitations">Foundation grant solicitations</option>
									<option value="Government grant solicitations">Government grant solicitations</option>
									<option value="Accept donations on your website">Accept donations on your website</option>
									<option value="Receive donations from another organization’s website">Receive donations from another organization’s website</option>
									<option value="Vehicle, boat, plane, or similar donations">Vehicle, boat, plane, or similar donations</option>
									<option value="Other">Other</option>
									</select>
                          </label>                       
                       </section> 
						<section name="question46">
                       		<label class="lbl-text"><font color = "black">If you selected other, what method will you use?</font></label>
							<font color = "red">(If you selected anything else above then skip.)</font>
							<label class="lbl-ui">
                            	<input type="text" name="question46answer1" class="input" placeholder="Your Answer" />
                            </label><br>							
                       </section>
					   <section name="question47">Will you lobby or conduct other political activities?</font></label>
							<label class="lbl-ui select">
                              <select name="question47answer1" >
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                              </select>
                            </label>                            
                       </section>
					   <section name="question48">
                       		<label class="lbl-text"><font color = "black">If yes, describe the nature and extent of any proposed political activities?</font></label>
							<label class="lbl-ui">
                            	<textarea name="question48answer1" class="textarea no-resize" placeholder="Your Answer Here"></textarea>
                            </label><br>							
                       </section>
					   
                   </div>
                </div>
                <div class="form-buttons">
                    <section name="ResetAndSubmitButtons">
					   <button type="reset" class="button red"><i class="icon-trash"> Reset Form</i></button>
                       <button type="submit" name="SubmitNonProfitChurchFormationForm" class="button green"><i class="icon-signin"> Submit Form</i></button>  
                    </section>                
                </div>
            </form>
        </div>
    </div>
    
    <div></div>
    <div></div>

</center>
</body>
</html>
