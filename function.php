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
<style>
	 body { 
     background: url('cell.jpg ') no-repeat center center fixed;    
     background-size:cover;
	}
</style>
	<div align="center">
	<div id="header" style="background-color:black;">
	<h1><font color="white">RESULTS</font></h1>
   
	</div>
	</div>
	</head>
	
<body>
<div align="center">
	<div id="header" style="background-color:#DCDCDC;">
<?php
	if(isset($_POST['go']))
	{ 
		showRecords();
	}
	?>	
	</div>
	<br/><br/><br/><br/><br/><br/>
	</body>
	</html>
	
<?php
/* Function fetch all the data according to the switch cases and call different functions*/
	function showRecords()
	{
		$comment=$_POST['comment'];
		$comment=preg_replace( "/\r|\n/", "", $comment );
		$combos=$_POST['combo'];
		$motifs=$_POST['motif'];
		
		switch($combos)
		{
			case "RR":
			list($n,$s,$p)=noslashex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
				echo "Total RR Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "GG":
			list($n,$s,$p)=noslashex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total GG Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "PE":
			list($n,$s,$p)=noslashex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "AxA":
			list($n,$s,$p)=ex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "PPE":
			list($n,$s,$p)=noslashex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "WxG":
			list($n,$s,$p)=ex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "HTH":
			list($n,$s,$p)=noslashex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			
			case "FHA":
			list($n,$s,$p)=noslashex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "FxA":
			list($n,$s,$p)=ex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "SxN":
			list($n,$s,$p)=ex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "RGD":
			list($n,$s,$p)=noslashex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "GGQ/E":
			list($n,$s,$p)=slash($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "SxxK":
			list($n,$s,$p)=ex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "CxxC":
			list($n,$s,$p)=ex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "AxADP":
			list($n,$s,$p)=ex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "GxSxG":
			list($n,$s,$p)=ex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "EGCLS":
			list($n,$s,$p)=noslashex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "DxDxE":
			list($n,$s,$p)=ex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "YxxxD/E":
			list($n,$s,$p)=bothslashex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "CxxxxxR":
			list($n,$s,$p)=ex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "GxGxAAxQ":
			list($n,$s,$p)=ex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "ITYMRTDS":
			list($n,$s,$p)=noslashex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "HxxxCxxC":
			list($n,$s,$p)=ex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "QHExDHxxG":
			list($n,$s,$p)=ex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "GxxxGPxxGG":
			list($n,$s,$p)=ex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "HPFxxGNGRxxR":
			list($n,$s,$p)=ex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "HxxxDxxxxxxxxxxxxxxY":
			list($n,$s,$p)=ex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "PxxxRxAAxALGxTxxxxIxxIxxP":
			list($n,$s,$p)=ex($comment,$combos);
      		if ($n==0)
      		{
          		echo "Motif not found in the sequence!!!";
      		}
      		else
      		{
		 		echo "Total Motif found:  ".$n."</br></br>";
				echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
				for ($i=0; $i<sizeof($p);$i++)
				{
					echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
				}
			}
			break;
			
			case "Any Other":
			$pos=stripos($motifs,"x");
			$pos1=strpos($motifs,"/");
			/* According to type of motifs entered by the user different conditions are defined*/
			// motifs having both '/' and 'x'.
			if ($pos!=0 AND $pos1!=0)
			{
				list($n,$s,$p)=bothslashex($comment,$motifs);
      			if ($n==0)
      			{
          			echo "Motif not found in the sequence!!!";
      			}
      			else
      			{
		 			echo "Total Motif found:  ".$n."</br></br>";
					echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
					for ($i=0; $i<sizeof($p);$i++)
					{
						echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
					}
				}
			}
			// motifs having 'x' only.
			elseif ($pos!=0 AND $pos1=' ')
			{
				list($n,$s,$p)=ex($comment,$motifs);
      			if ($n==0)
      			{
          			echo "Motif not found in the sequence!!!";
      			}
      			else
      			{
		 			echo "Total Motif found:  ".$n."</br></br>";
					echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
					for ($i=0; $i<sizeof($p);$i++)
					{
						echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
					}
				}
			}
			// motifs having '/' only.
			elseif ($pos=' ' AND $pos1!=0)
			{
				list($n,$s,$p)=slash($comment,$motifs);
      			if ($n==0)
      			{
          			echo "Motif not found in the sequence!!!";
      			}
      			else
      			{
		 			echo "Total Motif found:  ".$n."</br></br>";
					echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
					for ($i=0; $i<sizeof($p);$i++)
					{
						echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
					}
				}
			}
			// motifs having no '/' and  'x' .
			elseif ($pos=' ' AND $pos1=' ')
			{
				list($n,$s,$p)=noslashex($comment,$motifs);
      			if ($n==0)
      			{
          			echo "Motif not found in the sequence!!!";
      			}
      			else
      			{
		 			echo "Total Motif found:  ".$n."</br></br>";
					echo "Positions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Motif Found</br>";
					for ($i=0; $i<sizeof($p);$i++)
					{
						echo $p[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s[$i]."</br>";
					}
				}
			}
			
			break;
		}
	}
	
/* Function searches a motif having no '/' or 'x' and returns motif count, motifs and their respective positions*/
function noslashex($comment,$value2)
{
	$len=strlen($comment);
	$lenm=strlen($value2);
	$position=array();
	$sequence=array();
	$firstword=substr($value2,0,1);
	$count=0;
	$i=0;
	//while loop continues till all the positions having first character of motif in the given sequence are found.
  	while($i!=strrpos($comment,$firstword)+1)
  	{
		$m=0;
		$pos=strpos($comment,$firstword,$i);
		//subseq stores subsequence from sequence of motif length and then compare subseq and motif.
      	$subseq=substr($comment,$pos,$lenm);
        $value=strcmp(substr($subseq,0,$lenm),substr($value2,0,$lenm));
		//if both matches then motif found and their positions are stored in sequence and position array respectively.
      	if ($value==0)
      	{
          	$count=$count+1;
			$sequence[$count-1]=$subseq;
			$position[$count-1]=$pos+1;
      	}
		$i=$pos+1;
  	}
  return array($count,$sequence,$position);	
}

/* Function search a motif having '/' and returns motif count, motifs and their respective positions*/
function Slash($comment,$value2)
{
	$len=strlen($comment);
	$lenm=strlen($value2);
	$slashposition=array();
	$slash=array();
	$position=array();
	$sequence=array();
	$k=0;
	//slashposition array stores positions of all slash present in a motif.
	for ($i=0;$i<$lenm;$i++)
	{
		$pos=stripos($value2,"/",$i);
		if ($pos==$i)
		{
			$slashposition[$k]=$i;
			$k=$k+1;
		}
	}
	//find length of slashposition array.
	$slashpositionlen=sizeof($slashposition);
	
	if ($slashpositionlen==1)
	{
		$slash[0]=$slashposition[0];
	}
	else
	{
		$k=1;
		$slash[0]=$slashposition[0]-1;
		for ($i=1;$i<$slashpositionlen;$i++)
		{
			$slash[$k]=($slashposition[$i]-$slashposition[$i-1])-3;
			$k=$k+1;
		}
		$slash[$k]=($lenm-$slashposition[$k-1])-2;
	}
	$slashlen=sizeof($slash);
	$firstword=substr($value2,0,1);
	$count=0;
	$i=0;
	$j=0;
	$l=0;
	$n=0;
	$p=0;
	$q=$slash[0];
	
	//while loop continues till all the positions having first character of motif in the given sequence are found.
  	while($i!=strrpos($comment,$firstword)+1)
  	{
		$pos=strpos($comment,$firstword,$i);
		$subseq=substr($comment,$pos,$lenm-2*$slashpositionlen);
		if ($slashpositionlen==1)
		{
			// the motif region before the '/' are searched for an exact match.
			$value=strcmp(substr($subseq,0,$slash[$l]-1),substr($value2,0,$slash[$l]-1));
			if ($value==0)
      		{
				// the character preceeding and succeding the '/' in the motif are searched in 'OR' operation.
				$val=strcmp(substr($value2,$lenm-3,1),substr($subseq,$lenm-3,1));
				$vals=strcmp(substr($value2,$lenm-1,1),substr($subseq,$lenm-3,1));
      			if ($val==0 OR $vals==0)
      			{
          			$count=$count+1;
					$sequence[$count-1]=$subseq;
					$position[$count-1]=$pos+1;
      			}
			}
		}
		else
		{
			while ($l!=$slashlen)
			{
				$value=strcmp(substr($subseq,$j,$slash[$l]),substr($value2,$n,$slash[$l]));	
				$j=$j+$slash[$l]+1;
				$n=$n+$slash[$l]+3;
				$l=$l+1;
				if ($value!=0)
				{
					break;
				}
			}
								
			if ($value==0)
			{
				// the character preceeding and succeding the '/' in the motif are searched in 'OR' operation.
				while($p!=$slashpositionlen)
				{
					$val=strcmp(substr($value2,$slashposition[$p]-1,1),substr($subseq,$q,1));
					$vals=strcmp(substr($value2,$slashposition[$p]+1,1),substr($subseq,$q,1));
					$p=$p+1;
					$q=$q+$slash[$p]+1;
					if ($val!=0 OR $vals!=0)
					{
						break;
					}
				}
				if ($val==0 OR $vals==0)
				{
					//Motif found and their respective positions are stored in $sequence and $position array respectively.
					$count=$count+1;
					$sequence[$count-1]=$subseq;
					$position[$count-1]=$pos+1;
				}
			}
		}
		$i=$pos+1;
  	}
  return array($count,$sequence,$position);
}

/* This function search a motif having 'x' and returns motif count, motifs and their respective positions*/
function ex($comment,$value2)
{
	$len=strlen($comment);
	$lenm=strlen($value2);
	$posarray = array();
	$position=array();
	$sequence=array();
	$k=0;
	//Stores all the position in motifs not having 'x'.
	for ($i=0;$i<$lenm;$i++)
	{
		$pos=stripos($value2,"x",$i);
		if ($pos!=$i)
		{
			$posarray[$k]=$i;
			$k=$k+1;
		}
	}
	$lenpos=sizeof($posarray);
	$firstword=substr($value2,0,1);
	$count=0;
	$i=0;
	$k=0;
	//while loop continues till all the positions having first character of motif in the given sequence are found.
  	while($i!=strrpos($comment,$firstword)+1)
  	{
		$m=0;
		$pos=strpos($comment,$firstword,$i);
      	$subseq=substr($comment,$pos,$lenm);
		// matches the positions stored in $posarray with the $subseq.
      	while ($m!=$lenpos)
      	{
          	$value=strcmp(substr($subseq,$posarray[$m],1),substr($value2, $posarray[$m],1));
			$m=$m+1;
			if ($value!=0)
			{
				break; 
			}
      	}
		
      	if ($value==0)
      	{
			//Motif found and their respective positions are stored in $sequence and $position array respectively.
          	$count=$count+1;
			$sequence[$count-1]=$subseq;
			$position[$k]=$pos+1;
			$k=$k+1;
      	}
		$i=$pos+1;
  	}
  return array($count,$sequence,$position);
}

/* This function search a motif having both 'x' and '/' and returns motif count, motifs and their respective positions*/
function Bothslashex($comment,$value2)
{
	$len=strlen($comment);
	$lenm=strlen($value2);
	$position=array();
	$sequence=array();
	$posarray = array();
	$pos=strpos($value2,"/");
	$firstword=substr($value2,0,1);
	$k=0;
	for ($i=0;$i<$lenm-3;$i++)
	{
		$pos=stripos($value2,"x",$i);
		if ($pos!=$i)
		{
			$posarray[$k]=$i;
			$k=$k+1;
		}
	}
	$lenpos=sizeof($posarray);
	$count=0;
	$i=0;
	$k=0;
	//while loop continues till all the positions having first character of motif in the given sequence are found.
  	while($i!=strrpos($comment,$firstword)+1)
  	{
		$m=0;
		$pos=strpos($comment,$firstword,$i);
      	$subseq=substr($comment,$pos,$lenm-2);
		while ($m!=$lenpos)
      	{
          	// matches the positions stored in $posarray with the $subseq.
			$value=strcmp(substr($subseq,$posarray[$m],1),substr($value2, $posarray[$m],1));
			$m=$m+1;
			if ($value!=0)
			{
				break; 
			}
		}
		if ($value==0)
      	{
			$val=strcmp(substr($value2,$lenm-3,1),substr($subseq,$lenm-3,1));
			$vals=strcmp(substr($value2,$lenm-1,1),substr($subseq,$lenm-3,1));
      		if ($val==0 OR $vals==0)
      		{
				//Motif found and their respective positions are stored in $sequence and $position array respectively.
          		$count=$count+1;
				$sequence[$count-1]=$subseq;
				$position[$k]=$pos+1;
				$k=$k+1;
      		}
		}
		$i=$pos+1;
  	}
  return array($count,$sequence,$position);
}
?> 