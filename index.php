<!DOCTYPE html>
<html>
<head>
	<title>RPS</title>
	<style>
	
	</style>
</head>
<body>
	<form method="POST">
		<div class="">
			<img src="img11.jpg" style="height: 100px">
			
		</div>
		<div>	
			<button name="submit">Play</button>
		</div>
	</form>
</body>
</html>
<?php
  
if (isset($_POST['submit'])) {
   
// Display the random array element

 

$arr= array("-",0,0,0,0,"-",0,0,0,0,"-",0,0,0,0,"-");//array
$counter = 0;//To count the Iteration
for($i=0;$i<50;$i++){
	$set = array("Rock", "Paper", "Scissor");	
	//assigning random values
	$p1 = array_rand($set);
	$p2 = array_rand($set);
	$p3 = array_rand($set);
	$p4 = array_rand($set);
	$counter = $counter + 1;

//Displaying counter
echo "<p style='font-size:20px;'>Iteration -". $counter."<br>"; 

//Displaying Players choose
echo "<table 
			style='width: 50rem;
			text-align: center;
			border: 1px solid black;
			border-collapse: collapse;
			margin-left: 130px;
			
			font-size:20px;
	'>";

echo "<tr>";
echo "<th style='width: 50rem;text-align: center;border: 1px solid black;height: 70px'>Player 1 </th>";
echo "<th style='width: 50rem;text-align: center;border: 1px solid black;height: 70px'>Player 2 </th>";
echo "<th style='width: 50rem;text-align: center;border: 1px solid black;height: 70px'>Player 3 </th>";
echo "<th style='width: 50rem;text-align: center;border: 1px solid black;height: 70px'>Player 4 </th></tr>";

    echo "<tr><td style='width: 50rem;text-align: center;border: 1px solid black;'>$set[$p1]</td>";
	echo "<td style='width: 50rem;text-align: center;border: 1px solid black;'>$set[$p2]</td>";
	echo "<td style='width: 50rem;text-align: center;border: 1px solid black;'>$set[$p3]</td>";
	echo "<td style='width: 50rem;text-align: center;border: 1px solid black;'>$set[$p4]</td></tr>";
    
echo "</table><br>";
	
				#Comparing player 1 with other players
				if($p1==0){
					
					if($p1==0&&$p2==0){
						$arr[1] = $arr[1] + 0;
						$arr[4] = $arr[4] + 0;
						
					}elseif ($p1==0&&$p2==1) {
						$arr[1] = $arr[1] + 0;
						$arr[4] = $arr[4] + 1;
						
					}else{
						$arr[1] = $arr[1] + 1;
						$arr[4] = $arr[4] + 0;
						
					}

					if($p1==0&&$p3==0){
						$arr[2] = $arr[2] + 0;
						$arr[8] = $arr[8] + 0;
						
					}elseif ($p1==0&&$p3==1) {
						$arr[2] = $arr[2] + 0;
						$arr[8] = $arr[8] + 1;
					}else{
						$arr[2] = $arr[2] + 1;
						$arr[8] = $arr[8] + 0;
					}

					if($p1==0&&$p4==0){
						$arr[3] = $arr[3] + 0;
						$arr[12] = $arr[12] + 0;
					}elseif ($p1==0&&$p4==1) {
						$arr[3] = $arr[3] + 0;
						$arr[12] = $arr[12] + 1;
					}else{
						$arr[3] = $arr[3] + 1;
						$arr[12] = $arr[12] + 0;
					}
				}elseif ($p1==1) {
					if($p1==1&&$p2==0){
						$arr[1] = $arr[1] + 1;
						$arr[4] = $arr[4] + 0;
					}elseif ($p1==1&&$p2==1) {
						$arr[1] = $arr[1] + 0;
						$arr[4] = $arr[4] + 0;
					}else{
						$arr[1] = $arr[1] + 0;
						$arr[4] = $arr[4] + 1;
					}

					if($p1==1&&$p3==0){
						$arr[2] = $arr[2] + 1;
						$arr[8] = $arr[8] + 0;
					}elseif ($p1==1&&$p3==1) {
						$arr[2] = $arr[2] + 0;
						$arr[8] = $arr[8] + 0;
					}else{
						$arr[2] = $arr[2] + 0;
						$arr[8] = $arr[8] + 1;
					}

					if($p1==1&&$p4==0){
						$arr[3] = $arr[3] + 1;
						$arr[12] = $arr[12] + 0;
					}elseif ($p1==1&&$p4==1) {
						$arr[3] = $arr[3] + 0;
						$arr[12] = $arr[12] + 0;
					}else{
						$arr[3] = $arr[3] + 0;
						$arr[12] = $arr[12] + 1;
					}




				}else{
					if($p1==2&&$p2==0){
						$arr[1] = $arr[1] + 1;
						$arr[4] = $arr[4] + 0;
					}elseif ($p1==2&&$p2==1) {
						$arr[1] = $arr[1] + 0;
						$arr[4] = $arr[4] + 0;
					}else{
						$arr[1] = $arr[1] + 0;
						$arr[4] = $arr[4] + 1;
					}
					if($p1==2&&$p3==0){
						$arr[2] = $arr[2] + 1;
						$arr[8] = $arr[8] + 0;
					}elseif ($p1==2&&$p3==1) {
						$arr[2] = $arr[2] + 0;
						$arr[8] = $arr[8] + 0;
					}else{
						$arr[2] = $arr[2] + 0;
						$arr[8] = $arr[8] + 1;
					}
					if($p1==2&&$p4==0){
						$arr[3] = $arr[3] + 1;
						$arr[12] = $arr[12] + 0;
					}elseif ($p1==2&&$p4==1) {
						$arr[3] = $arr[3] + 0;
						$arr[12] = $arr[12] + 0;
					}else{
						$arr[3] = $arr[3] + 0;
						$arr[12] = $arr[12] + 1;
					}

				}
				#Comparing player 2 with other players
				if($p2==0){
					#i= 0 and using j
					if($p2==0&&$p3==0){
						$arr[6] = $arr[6] + 0;
						$arr[9] = $arr[9] + 0;
					}elseif ($p2==0&&$p3==1) {
						$arr[6] = $arr[6] + 0;
						$arr[9] = $arr[9] + 1;
					}else{
						$arr[6] = $arr[6] + 1;
						$arr[9] = $arr[9] + 0;
					}

					if($p2==0&&$p4==0){
						$arr[7] = $arr[7] + 0;
						$arr[13] = $arr[13] + 0;
					}elseif ($p2==0&&$p4==1) {	
						$arr[7] = $arr[7] + 0;
						$arr[13] = $arr[13] + 1;
					}else{
						$arr[7] = $arr[7] + 1;
						$arr[13] = $arr[13] + 0;
					}

					






				}elseif ($p2==1) {
					if($p2==1&&$p3==0){
						$arr[6] = $arr[6] + 1;
						$arr[9] = $arr[9] + 0;
					}elseif ($p2==1&&$p3==1) {
						$arr[6] = $arr[6] + 0;
						$arr[9] = $arr[9] + 0;
					}else{
						$arr[6] = $arr[6] + 0;
						$arr[9] = $arr[9] + 1;
					}

					if($p2==1&&$p4==0){
						$arr[7] = $arr[7] + 1;
						$arr[13] = $arr[13] + 0;
					}elseif ($p2==1&&$p4==1) {	
						$arr[7] = $arr[7] + 0;
						$arr[13] = $arr[13] + 0;
					}else{
						$arr[7] = $arr[7] + 0;
						$arr[13] = $arr[13] + 1;
					}

					




				}else{
					if($p2==2&&$p3==0){
						$arr[6] = $arr[6] + 0;
						$arr[9] = $arr[9] + 1;
					}elseif ($p2==2&&$p3==1) {
						$arr[6] = $arr[6] + 1;
						$arr[9] = $arr[9] + 0;
					}else{
						$arr[6] = $arr[6] + 0;
						$arr[9] = $arr[9] + 0;
					}
					if($p2==2&&$p4==0){
						$arr[7] = $arr[7] + 0;
						$arr[13] = $arr[13] + 1;
					}elseif ($p2==2&&$p4==1) {
						$arr[7] = $arr[7] + 1;
						$arr[13] = $arr[13] + 0;
					}else{
						$arr[7] = $arr[7] + 0;
						$arr[13] = $arr[13] + 0;
					
					}
				}
				#Comparing player 3 with other players
				if($p3==0){
					#i= 0 and using j
					if($p3==0&&$p4==0){
						$arr[11] = $arr[11] + 0;
						$arr[14] = $arr[14] + 0;
					}elseif ($p3==0&&$p4==1) {
						$arr[11] = $arr[11] + 0;
						$arr[14] = $arr[14] + 1;
					}else{
						$arr[11] = $arr[11] + 1;
						$arr[14] = $arr[14] + 0;
					
					}

				}elseif ($p3==1) {
				

					if($p3==1&&$p4==0){
						$arr[11] = $arr[11] + 1;
						$arr[14] = $arr[14] + 0;
					}elseif ($p3==1&&$p4==1) {	
						$arr[11] = $arr[11] + 0;
						$arr[14] = $arr[14] + 0;
					}else{
						$arr[11] = $arr[11] + 0;
						$arr[14] = $arr[14] + 1;
					}

				}else{
					if($p3==2&&$p4==0){
						$arr[11] = $arr[11] + 0;
						$arr[14] = $arr[14] + 1;

					}elseif ($p3==2&&$p4==1) {
						$arr[11] = $arr[11] + 1;
						$arr[14] = $arr[14] + 0;

					}else{
						$arr[11] = $arr[11] + 0;
						$arr[14] = $arr[14] + 0;

					}
					
				}
				##Comparing player 4 with other players
				
echo "<br><br>";
#Diplaying the results in table
$token = array('Player 1 ', 'Player 2', 'Player 3', 'Player 4');



$counttoken = count($token);
echo "<h3 style='margin-left:30rem;
				 margin-top:-10px;
				 '>Against</h3>";
echo "<h3 style='margin-left:10px;
				 margin-top:100px;
				 '>Player wins</h3>";
echo "<table 
			style='width: 50rem;
			text-align: center;
			border: 1px solid black;
			border-collapse: collapse;
			margin-left: 130px;
			margin-top:-130px;
			font-size:20px;
	'>";

echo "<tr><th style='width: 50rem;text-align: center;border: 1px solid black;height: 70px'>Total</th>";
echo "<th style='width: 50rem;text-align: center;border: 1px solid black;height: 70px'>Player 1 </th>";
echo "<th style='width: 50rem;text-align: center;border: 1px solid black;height: 70px'>Player 2 </th>";
echo "<th style='width: 50rem;text-align: center;border: 1px solid black;height: 70px'>Player 3 </th>";
echo "<th style='width: 50rem;text-align: center;border: 1px solid black;height: 70px'>Player 4 </th></tr>";
foreach($token as $p3ey=>$value)
{	
	
    echo "<tr><td style='width: 50rem;text-align: center;border: 1px solid black;'>$value</td>";
    for($p=0; $p<$counttoken;$p++)
    {
        echo "<td style='width: 50rem;text-align: center;border: 1px solid black;'>" .$arr[$p + ($p3ey * $counttoken)]. "</td>";
    }
    echo "</tr>";
}

echo "</table><br>";
			}
				

}
?>
