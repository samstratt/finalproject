<!-- HTML top code goes here -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-058EV31HP7"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-058EV31HP7');
</script>

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'badboyzfantasyfootball.com' // Put you mail domain here
	,
	'Bad Boyz Fantasy Football' // Put your site name / form name here
	,
	'sam.stratton@ufl.edu' // Where will the form notification be sent?
	,
	'contact-us@badboyzfantasyfootball.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
