<! Author Name: Chandrani Kumari, B.Tech (Information Technology and Mathematical Innovation), 
				Cluster Innovation Centre University of Delhi, Email: chandraniku@gmail.com
				S.Pavitra, B.Tech (Information Technology and Mathematical Innovation), 
				Cluster Innovation Centre University of Delhi, Email: pavi.kalaimathi@gmail.com
                Asani Bhaduri, PhD, Cluster Innovation Centre University of Delhi, Email: asanii.bhaduri@gmail.com  
  
  Software Description:
  
    This software identifies protein motifs in mycobacterial amino acid sequences. There are sets of known protein motif of mycobacterial origin that has  	   			    been used for users preference. An user can also write a new motif and search for the same in this program.
    Motif: A short sequence pattern of conserved stretch of amino acids in a protein
    
    Functions used in this program:
     
    1. noslashex(): search a motif which has no '/' and 'x' and returns motif count, motifs and their respective positions
    2. slash(): search a motif having '/' and returns motif count, motifs and their respective positions
    3. ex(): search a motif having 'x' and returns motif count, motifs and their respective positions (x: can be any amino acid)
    4. bothslashex(): search a motif which have both '/' and 'x' and returns motif count, motifs and their respective positions  >
    
<!Doctype HTML>

<html>
<head>
<body>	
	<div align="center">
	<div id="header" style="background-color:black;">
	<h1><font color="white">TB-MOTIF</font></h1>
	<b><font color="white">(Identification of Motifs in Mycobacterial Protein Sequence)</font></b>
	</div>
	</div>
	<style>
	 body { 
     background: url('cell.jpg ') no-repeat center center fixed;    
     background-size:cover;
	}
	</style>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>     
	<script type="text/javascript">    
	$(document).ready(function() {     
	$('#combo').change(function(){     
	if($('#combo').val() == 'Any Other')     
   {     
   $('#other').show();      
   }     
	else    
   {     
   $('#other').hide();        
   }     
	});     
	});     
	</script> 
</head>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<div align="center">
	<hr>
		<form action="function.php" method="POST"><br/>
		<div align="center">
		<table>
		<tr>
		<table cellpadding="20">
		<td>
			<b><font color="white"> ENTER PROTEIN SEQUENCE :</font></b></td>
			<td>
            <textarea name="comment" required rows="6" cols="40" placeholder="ENTER SEQUENCE"></textarea></td>	
		</tr>
		<tr>
			<td><b><font color="white">SELECT MOTIF :</font></b></td>
			<td>

		<select id="combo" name="combo">
            <option value="RR"> RR</option>
            <option value="GG"> GG</option>
            <option value="PE"> PE</option>
			<option value="AxA"> AxA</option>
			<option value="PPE"> PPE</option>
			<option value="WxG"> WxG</option>
			<option value="HTH"> HTH</option>
            <option value="FHA"> FHA</option>
            <option value="FxA"> FxA</option>
            <option value="SxN"> SxN</option>
            <option value="RGD"> RGD</option>
             <option value="GGQ/E"> GGQ/E</option>
            <option value="SxxK"> SxxK</option>
            <option value="CxxC"> CxxC</option>
            <option value="AxADP"> AxADP</option>
            <option value="GxSxG"> GxSxG</option>
            <option value="EGCLS"> EGCLS</option>
            <option value="DxDxE"> DxDxE</option>
            <option value="YxxxD/E"> YxxxD/E</option>
            <option value="CxxxxxR"> CxxxxxR</option>
            <option value="GxGxAAxQ"> GxGxAAxQ</option>
            <option value="ITYMRTDS"> ITYMRTDS</option>
            <option value="HxxxCxxC"> HxxxCxxC</option>
            <option value="QHExDHxxG"> QHExDHxxG</option>
            <option value="GxxxGPxxGG"> GxxxGPxxGG</option>
			<option value="HPFxxGNGRxxR"> HPFxxGNGRxxR</option>
            <option value="HxxxDxxxxxxxxxxxxxxY"> HxxxDxxxxxxxxxxxxxxY</option>
            <option value="
PxxxRxAAxALGxTxxxxIxxIxxP"> 
PxxxRxAAxALGxTxxxxIxxIxxP</option>
			<option value="Any Other"> Any Other</option>
		</select></td>
		</tr>
		<tr>
			<td><b><font color="white">WRITE MOTIF :</font></b></td>
			<td><input type="text" id="other" placeholder="ANY OTHER" name="motif" style="display: none;" ></td>

		</tr>
		</table>
	</form>
		<br>
		<input type="submit" value="SUBMIT" name='go'/>
		<br>
		</div>
	<hr>
	</br>
	<div  align="center" id="header" style="background-color:#666666;">
	<b><a href="http://www.ncbi.nlm.nih.gov/protein" target="_blank"><font color="white"> NCBI PROTEIN</font></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="http://tuberculist.epfl.ch/" target="_blank"><font color="white">TUBERCULIST</font></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="http://www.tbdb.org/" target="_blank"><font color="white">TBDB</font></a></b>
    </div>
    <hr>
    <div  align="center" id="header" style="background-color:#999;">
    <p align="centre"> &copy; Chandrani Kumari | S.Pavitra | Asani Bhaduri </Br>
    Cluster Innovation Centre, University of Delhi </p>
    </div>
	<br/><br/><br/><br/><br/><br/>
	</body>
	</html>
