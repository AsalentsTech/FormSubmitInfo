<?php
include '../@Database@/config.php';
include '../php/insertllcform.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="images/favicon.ico" rel="icon" />
	<meta name="description" content="LLC Formation Questionnaire Form">
	<meta name="author" content="AsalentsTech">
    <title>LLC Formation Questionnaire</title>
   
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
                    <h2 ID=>LLC Formation Questionnaire</h2>
                </div>
                <div class="form-enclose">
                    <div class="form-section">
                        <center><p><font color="blue">If you created an account before coming here, make sure to use the same "<strong>First And Last</strong>" name you used when creating your account.</font></p></center><br>
					<h1 id="header1">General Information</h1><br>
                       <section name="question1">
                       		<label class="lbl-text">Who will serve as the organizer, also known as the incorporator, for the
						company?</label>
						<font color="green">(The organizer is the person who "signs" (electronically) on the formation document.)</font><br><br>
                            <label class="lbl-ui">
                            	<input type="text" name="question1answer1" class="input" placeholder="Your First And Last Name Here" />
                            </label>                            
                       </section>
					   <section name="question2">
                       		<label class="lbl-text"><font color = "black">Will you also serve as the registered agent for the company?</font></label>
							<font color="green">(A registered agent must receive service from the Secretary of State, and therefore must provide a physical address.)</font><br><br>
							<label class="lbl-ui select">
                              <select name="question2answer1">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                              </select>
                            </label>                            
                       </section>
					   <section name="question3">
                       		<label  class="lbl-text">If yes, what address should be listed for service?</label>
							<font color="red">(If 'No' above then skip)</font><br><br>
						<label class="lbl-ui">
                            	<input type="text" name="question3answer1" class="input" placeholder="Your Answer Here" />
                            </label>                            
                       </section>
					   <section name="question4">
                       		<label class="lbl-text">If no, who will serve as the registered agent?</label>
							<font color="red">(If 'Yes' above then skip)</font><br><br>
						<label class="lbl-ui">
                            	<input type="text" name="question4answer1" class="input" placeholder="Your Answer Here" />
                            </label>                            
                       </section>
					   <section name="question5">
                       		<label class="lbl-text">What is that person's address?</label>
						<label class="lbl-ui">
                            	<input type="text" name="question5answer1" class="input" placeholder="Your Answer Here" />
                            </label>                            
                       </section>
					   <section name="question6">
                       		<label class="lbl-text"><font color = "black">Do they agree to serve as registered agent, and is that statement on file?</font></label>
							<label class="lbl-ui select">
                              <select name="question6answer1">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                              </select>
                            </label>                            
                       </section>
					   <section name="question7">
                       		<label class="lbl-text"><font color = "black">Is there a co-founder, or other members?</font></label>
							<label class="lbl-ui select">
                              <select name="question7answer1">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                              </select>
                            </label>                            
                       </section>
					   <section name="question8">
                       		<label class="lbl-text">If so, what are their names?</label>
							<font color="red">(If 'No' above then skip)</font><br><br>
						<label class="lbl-ui">
                            	<input type="text" name="question8answer1" class="input" placeholder="Your Answer Here" />
                            </label>                            
                       </section>
					   <section name="question9">
                       		<label class="lbl-text"><font color = "black">Do you have an accountant assisting with this application? If so, please provide their contact information</font></label>
                            <font color="red">(If Not then skip)</font><br><br>
							<label class="lbl-ui">
                            	<input type="text" name="question9answer1" class="input" placeholder="Enter Their Company Name" />
                            </label><br>
							<label class="lbl-ui">
                            	<input type="text" name="question9answer2" class="input" placeholder="Enter First And Last Name" />
                            </label><br>
                            <label class="lbl-ui">
                            	<input type="text" name="question9answer3" class="input" placeholder="Enter Phone Number ( +1 888 888 8888 )"/>
                            </label><br>  
							<label class="lbl-ui">
                            	<input type="text" name="question9answer4" class="input" placeholder="Enter Email Address"/>
                            </label><br>
							<label class="lbl-ui">
                            	<input type="text" name="question9answer5" class="input" placeholder="Company Website ( https://www.website.com )"/>
                            </label>  							
                       </section>
					   <h1 id="header2">Selection Of A Corporate Name</h1><br>
						<section name="question10">
						<div class="notification warning">
                                    <p><font color = "black">Your corporate name must be checked for availability with the
						Secretary of State to determine that your corporate name is not the same or
						confusingly similar to the name of an existing corporation or registered out-ofstate corporation. Please provide 3 names in order of your preference.</font></p></div><br><br>
                            <label class="lbl-ui">
                            	<input type="text" name="question10answer1" class="input" placeholder="Company Name #1" />
                            </label><br>
							<label class="lbl-ui">
                            	<input type="text" name="question10answer2" class="input" placeholder="Company Name #2" />
                            </label><br>
							<label class="lbl-ui">
                            	<input type="text" name="question10answer3" class="input" placeholder="Company Name #3" />
                            </label><br> 							
                       </section>
					   <h1 id="header3">Certificate Of Formation Documents</h1><br>
					   <section name="question11">
                       		<label class="lbl-text"><font color = "black">What will be the principal address of the corporation?</font></label>
							<label class="lbl-ui">
								<textarea class="textarea no-resize" name="question11answer1" placeholder="Please Enter Requested Information"></textarea>
                            </label><br>							
                       </section>
					   <section name="question12">
                       		<label class="lbl-text"><font color = "black">What will be the purpose(s) of your LLC?</font></label>
							<label class="lbl-ui">
								<textarea class="textarea no-resize" name="question12answer1" placeholder="Please Enter Requested Information"></textarea>
                            </label><br>							
                       </section>
					   <div class="notification warning">
                                    <p><font color = "black">All LLCs, must have a registered agent to accept mail and notices from the
						Secretary of State and other entities. A registered agent may be the founder, a
						board member, or any person who agrees to serve as the registered agent.</font></p></div><br><br>
					   
					   <section name="question13">
                       		<label class="lbl-text"><font color = "black">Who will be the agent for service of process? Please provide the following information</font></label>
							<label class="lbl-ui">
                            	<input type="text" name="question13answer1" class="input" placeholder="Enter Their Company Name" />
                            </label><br>
							<label class="lbl-ui">
                            	<input type="text" name="question13answer2" class="input" placeholder="Enter First And Last Name" />
                            </label><br>
                            <label class="lbl-ui">
                            	<input type="text" name="question13answer3" class="input" placeholder="Enter Phone Number ( +1 888 888 8888 )"/>
                            </label><br>  
							<label class="lbl-ui">
                            	<input type="text" name="question13answer4" class="input" placeholder="Enter Email Address"/>
                            </label><br>
							<label class="lbl-ui">
                            	<input type="text" name="question13answer5" class="input" placeholder="Company Website ( https://www.website.com )"/>
                            </label>  							
                       </section>
					   <h1 id="header4">Management</h1><br>
					   <section name="question14">
                       		<label class="lbl-text"><font color = "black">Will the LLC have managers or members?</font></label>
							<font color="red">(Managers are hired by owners, to be
							responsible for running the organization. A member can be both owner and manager)</font><br><br>
							<label class="lbl-ui select">
                              <select name="question14answer1">
                                <option value="Members only">Members only</option>
                                <option value="Managers">Managers</option>
                              </select>
                            </label>                            
                       </section>
					   <section name="question15">
                       		<label class="lbl-text"><font color = "black">Please list the name, address, and email address for each member or manager.</font></label>
							<label class="lbl-ui">
								<textarea class="textarea no-resize" name="question15answer1" placeholder="Please Enter Requested Information"></textarea>
                            </label><br>							
                       </section>
					   <h1 id="header5">Operating Agreement</h1><br>
					   <section name="question16">
                       		<label class="lbl-text">These questions address the income distribution in your operating agreement.
						Will you evenly split profits between members? If not, what will be the split, ie. 60/40, 70/30, or 80/20? </label>
						<label class="lbl-ui">
                            	<input type="text" name="question16answer1" class="input" placeholder="Your Answer Here"  />
                            </label>                            
                       </section>
					   <h1 id="header6">Operating Agreement</h1><br>
					   <section name="question17">
                       		<label class="lbl-text"><font color = "black">Did each member contribute cash or property to the LLC?</font></label>
							<label class="lbl-ui select">
                              <select name="question17answer1">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                              </select>
                            </label>                            
                       </section>
					   <section name="question18">
                       		<label class="lbl-text">If Yes, how much did each member contribute, and was that contribution cash or property?</label>
							<font color="red">(If 'No' above then skip)</font><br><br>
						<label class="lbl-ui">
								<textarea class="textarea no-resize" name="question18answer1" placeholder="Please Enter Requested Information"></textarea>
                            </label><br>                           
                       </section>
					   
                       
                   </div>
                </div>
                <div class="form-buttons">
                    <section name="ResetAndSubmitButtons">
					   <button type="reset" class="button red"><i class="icon-trash"> Reset Form</i></button>
                       <button type="submit" name="SubmitLlcFormationForm" class="button green"><i class="icon-signin"> Submit Form</i></button>  
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
