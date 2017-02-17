<?php include ("../assets/includes/headers.php");?>
<title>Model Release by John Calder</title>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/one-page-wonder.css">
<script src="https://code.jquery.com/jquery-latest.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<script type="text/javascript" src="../assets/javascript/sketch.js"></script>

<script>
function updateName(){
oForm = document.forms["model_release"];	
name = oForm.elements["FullName"].value;
clip = oForm.elements["clip"].value;
document.title = clip + " " + name;

}

function doit(){
if (!window.print){
alert("You need NS4.x to use this print button!")
return
}
updateName();
setTimeout(function(){ window.print(); }, 1000);
}
</script>
</head>

<body class="textCenter">
<br>
<div class="container textCenter">
          <span class="h1 red ">HTML5 Model Release Application</span>
          <span class="h3 text-info" style="text-align: center"><br> 
          By John Steven Calder</span>          
          <br>For best results use Firefox Version 35+<br>
          <span class="license" style="text-align: center"><a href="mailto:jcalder@well.com?subject=JohnStevenCalder%20Model%20Release%20Application%20code%20contact">Source code available for free for Non-Commercial use</a></span>
        <br><hr class="style-eight">
        <br>    

<video autoplay id="vid" style="display:none;">
</video>

<canvas id="canvas" width="640" height="480" style="margin-left: auto; margin-right: auto; border:1px solid grey; box-shadow: 10px 10px 5px #888888;" class="img-responsive"></canvas>

<br><br>
<div class="text-center col-md-6" >
<button class="btn btn-default hack" onclick="snapshot()">Take Picture</button>
</div>

<div class="text-center col-md-6" >
 <span class="btn btn-default btn-file hack">
 Load Picture<input type="file" id='uploadimage' onclick="draw()" >
 </span>
 </div>


<br><br>

<script type="text/javascript">
function draw(ev) {
    console.log(ev);
    var ctx = document.getElementById('canvas').getContext('2d'),
        img = new Image(),
        f = document.getElementById("uploadimage").files[0],
        url = window.URL || window.webkitURL,
        src = url.createObjectURL(f);
    	img.src = src;
    	img.onload = function() {
   		canvas.width = img.width;
		canvas.height = img.height;
		ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
        url.revokeObjectURL(src);
    }
}

document.getElementById("uploadimage").addEventListener("change", draw, false)
</script>

<script type="text/javascript">
    var video = document.querySelector("#vid");
    var canvas = document.querySelector('#canvas');
    var ctx = canvas.getContext('2d');
    var localMediaStream = null;
    var onCameraFail = function (e) {
        console.log('Camera did not work.', e);
    };

    function snapshot() {
        if (localMediaStream) {
   		canvas.width = video.videoWidth;
		canvas.height = video.videoHeight;
		ctx.drawImage(video, 0, 0,canvas.width,canvas.height );
        }
    }

    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;
    window.URL = window.URL || window.webkitURL;
    
	
	navigator.getUserMedia({video:true}, function (stream) {
        video.src = window.URL.createObjectURL(stream);
        localMediaStream = stream;
    }, onCameraFail);
</script>
<br>         
<br>         
<p style="margin-left: auto; margin-right: auto;" class="copy">For good and valuable consideration, the receipt and sufficiency of which is hereby acknowledged, I authorize the Photographer/Filmmaker referenced above, his/her agents, both their respective successors and assigns, and anyone authorized by any of them (collectively, the “Producers”) the right to use separately or together my name, voice, image, picture or other likeness (collectively “my Likeness”), in the Content referenced above, for any purpose whatsoever (except pornographic
or defamatory), including but not limited to use in promotional, marketing, public relations, advertising,
print, documentary, theatrical, television, journalistic, and social/new media materials, in any manner and media, throughout the world, in perpetuity.<br>
<br>

I waive any right to inspect and/or approve the finished Content that may be used in connection with my Likeness or the use to which said finished work may be applied. I release, discharge and hold harmless the Producers from all liability, including but not limited to any liability by virtue of any blurring, distortion, alteration or optical illusion, whether intentional or otherwise in connection with any use authorized in this Agreement. Notwithstanding the foregoing, I understand and agree that my Likeness may be
combined with other images, text, graphics, film, audio, audio-visual works, and may be cropped, altered or otherwise modified. I further understand that there will be no monetary compensation paid to me, either directly or indirectly, for said filming or any materials or finished work which may be derived from the same. I acknowledge and agree that this release is binding upon my heirs and
assigns. I agree that this release is irrevocable and will be governed by the laws of California, excluding the application of its conflicts of law rules.<br>
<br>

I am not a member of any talent union, and if my Likeness is incorporated into a union production I agree
to exercise that union’s standard employment contract and accept that union’s minimum scale wages.
I represent and warrant that I am 18 years of age or older or the model’s parent or legal guardian,
have read and understood this Agreement and voluntarily agree to its terms.</p>
<div style="text-align:center;"><!-- sketchPad -->
                  
<div class="tools textC">
<a href="#tools_sketch" data-tool="marker" style="float: left; width: 100px;">Sign</a>
<a href="#tools_sketch" data-tool="eraser" style="float: center; width: 100px;">Erase</a>
<a href="#tools_sketch" data-download="png" style="float: right; width: 100px;">Download</a>
</div>

<canvas id="tools_sketch" width="800" height="300" style="border:2px solid grey; margin-left: auto; margin-right: auto; box-shadow: 10px 10px 5px #888888;" class="img-responsive"></canvas>
<script type="text/javascript">
  $(function() {
    $('#tools_sketch').sketch({defaultColor: "#000000"});
  });
</script>
<br>
<p id="demo"></p>
	
<script>
  	var d = new Date();
  	var DateS = 'Date Signed: ';
 	document.getElementById("demo").innerHTML = DateS + d.toString();
</script>
<br>
</div> <!-- sketchPade -->
	
    <div class="contactForm">
             <span class="text-center h4">We look forward to being in touch. Thank you for your participation.</span><br><br>
                <div id="contactForm"> <!-- contactForm -->
				<form class="form-group" name="model_release" id="model_release" action="#" method="POST">
					<input type="hidden" name="formId" value=" "/>
				<fieldset class="formA">
				<div class="form-group">
				  <input id="clip" name="clip" type="text" placeholder="Portrait ID Number..." class="form-control" required>
				</div>
				<div class="form-group">
				  <input id="fullName" name="FullName" type="text" placeholder="Name..." class="form-control input-md" required>
				</div>
				<div class="form-group">
				  <input id="address" name="Address" type="text" placeholder="Address..." class="form-control input-md" required>
				</div>
				<div class="form-group">
				  <input id="city" name="City" type="text" placeholder="City..." class="form-control input-md" required>
				</div>
				<div class="form-group">
				  <input id="state" name="State" type="text" placeholder="State..." class="form-control input-md" required>
				</div>
				<div class="form-group">
				  <input id="zip" name="Zip" type="text" placeholder="Zip Code..." class="form-control input-md" required>
				</div>
				<div class="form-group">
				  <input id="cell" name="Cell" type="tel" placeholder="Cell Phone..." class="form-control input-md" required>
				</div>
				<div class="form-group"> 
				  <input id="phone" name="Phone" type="tel" placeholder="Home Phone Number..." class="form-control input-md" required>
				</div>
				<div class="form-group">
				  <input id="email" name="Email" type="email" placeholder="Email Address..." class="form-control input-md" required>
				</div>
				<div class="form-group">
				<textarea class="form-control" rows="6" name="Comments" id="Comments" placeholder="Comments..."></textarea>
				</div>
				<div>
				<input type="checkbox" name="Signup" id="signUp" value="Yes">
					&nbsp;&nbsp;Sign me up to your Mailing List<br><br>
				</div>
                <div>
		<a href="javascript:doit()" id="submit_contact" class="btn-lg btn-primary">Save</a>
		</div>	<!-- contactForm -->			
		</fieldset>
		</form>
<br>
<?php include ("../assets/includes/footer.php");?>
<br>
</div>
</div>
</div>
</body>
</html>