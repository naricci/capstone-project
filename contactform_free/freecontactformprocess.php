<?php
/**
 * 
 * URL: www.freecontactform.com
 * 
 * Version: FreeContactForm Free V2.2
 * 
 * Copyright (c) 2013 Stuart Cochrane
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 * 
 * 
 * Note: This is NOT the same code as the PRO version
 * 
 */

if(isset($_POST['email'])) {
	
	include 'contactformsettings.php';
	
	function died($error) {
		echo "Sorry, but there were error(s) found with the form you submitted. ";
		echo "These errors appear below.<br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		die();
	}
	
	if(!isset($_POST['fullName']) ||
		!isset($_POST['email']) ||
		!isset($_POST['phone']) ||
		!isset($_POST['message']) || 
		!isset($_POST['antiSpam'])		
		) {
		died('Sorry, there appears to be a problem with your form submission.');		
	}
	
	$fullName = $_POST['fullName']; // required
	$email_from = $_POST['email']; // required
	$phone = $_POST['phone']; // not required
	$message = $_POST['message']; // required
	$antispam = $_POST['antiSpam']; // required
	
	$error_message = "";
	
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	
  if(preg_match($email_exp,$email_from) == 0) {
	$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
  if(strlen($fullName) < 2) {
	$error_message .= 'Your First Name does not appear to be valid.<br />';
  }
  if (strlen($phone !== 10)) {
	  $error_message .= 'The number you entered is not a valid 10-digit telephone number.<br />';
  }
  if(strlen(message) < 2) {
	$error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }

  if($antispam <> $antispam_answer) {
	$error_message .= 'The Anti-Spam answer you entered is not correct.<br />';
  }

  if(strlen($error_message) > 0) {
	died($error_message);
  }
	$email_message = "Form details below.\r\n";

	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:");
	  return str_replace($bad,"",$string);
	}

	$email_message .= "Full Name: ".clean_string($fullName)."\r\n";
	$email_message .= "Email: ".clean_string($email_from)."\r\n";
	$email_message .= "Phone Number: ".clean_string($phone)."\r\n";
	$email_message .= "Message: ".clean_string($message)."\r\n";
	
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
header("Location: $thankyou");
?>
<script>location.replace('<?php echo $thankyou;?>')</script>
<?php
}
die();
?>