<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>JS VALIDATION</title>
	<script>
function isvalid() {
  var firstName = document.getElementById("ftName").value;
  var lastName = document.getElementById("lName").value;
  var Gender = document.getElementById("gender").value;
  var Email = document.getElementById("email").value;
  var Religion = document.getElementById("religion").value;
  var Phone = document.getElementById("pho").value;
  var PresentAddress = document.getElementById("paddress").value;
  var ParmanentAddress = document.getElementById("peraddress").value;
  if (firstName == "" || lastName == "" || Gender =="" || Email =="" || Religion=="" || Phone=="" || PresentAddress=="" || ParmanentAddress== "") {
    alert("Must be filled out");
    return false;
  }
}

</script>
</head>
<body>
  <label>First Name</label> <input type="text" id="fname" name="fname"><br>
  <label>Last Name</label> <input type="text" id="lname" name="lname"><br>
  <p><label required="" >Gender:</label>
  <input type="radio" name="gender" value="Male"><label >Male </label>
  <input type="radio" name="gender" value="Female"><label >Female </label>
  <input type="radio" name="gender" value="Others"><label >Others </label></p>
  <label>E-mail</label> <input type="email" id="email" name="email"><br>
  <label>Religion</label> <input type="text" id="religion" name="religion"><br>
  <label>Phone</label> <input type="number" id="pho" name="pho"><br>
  <label>Present-Address</label> <input type="text" id="paddress" name="paddress"><br>
  <label>Permanent-Address</label> <input type="text" id="peraddress" name="peraddress"><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>