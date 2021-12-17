<script>
		
function add_char(c_ob,tb_id)
{
	tb_ob=document.getElementById(tb_id);
	newText=c_ob.value
	
	var start = tb_ob.selectionStart
	var end = tb_ob.selectionEnd
	var text = tb_ob.value
	var before = text.substring(0, start)
	var after  = text.substring(end, text.length)	
	tb_ob.value=(before + newText + after)	
	tb_ob.selectionStart = tb_ob.selectionEnd = start + newText.length
	tb_ob.focus()
	//document.getElementById(tb_id).value =document.getElementById(tb_id).value+c_ob.value;
	//document.getElementById(tb_id).focus();
}

</script>

<?php 
header('content-type:text/html;charset=utf-8');

/*
//to display all in  a range
$st=0x0a80; for($i=$st;$i<($st+256);$i++) { 
$x='&#x'.dechex($i);

//echo mb_convert_encoding($x, 'UTF-8', 'HTML-ENTITIES');
$uc=mb_convert_encoding($x, 'UTF-8', 'HTML-ENTITIES');
echo "<button title=$i id=$x name=$x value=$x onclick='add_char(this,\"tb\")'>$x</button>";

//$x='"\u'.str_pad(dechex($i),4,0,STR_PAD_LEFT).'"';
//echo utf$x;
}
* */

echo '<center><h2>Gujarati & Hindi Keyboard</h2></center>';
echo '<h3> Write whatever youwant. Do Copy & Paste in word processor (Word/Openoffice/Libreoffice) </h3>';

echo '<textarea id=tb cols=87 rows=5 style="font-size:25px;border:2px solid black;"></textarea><br><br>';

$g=array(
2693,2694,2695,2696,2697,2698,'s','s','s',2790,2791,2792,'s','s',2309,2310,2311,2312,2313,2314,'b',
2703,2704,2707,2708,2701,2705,'s','s','s',2793,2794,2795,'s','s',2317,2319,2320,2321,2324,2323,'b',
2768,2784,2785,2699,2700,2749,'s','s','s',2796,2797,2798,'s','s',2322,2308,2315,2316,2400,2401,'b',
2801,2750,2751,2752,2753,2754,'s','s','s',2799,2800,'s','s','s',2365,2363,2364,2366,2367,2368,'b',
2759,2760,2763,2764,2765,2690,'s','s','s','s','s','s','s','s',2369,2370,2371,2372,2373,2374,'b',
2755,2757,2689,2691,2748,2761,'s','s','s','s','s','s','s','s',2375,2376,2377,2378,2379,2380,'b',
2786,2787,2756,'s','s','s','s','s','s','s','s','s','s','s',2381,2383,2402,2403,2305,2306,'b',
's','s','s','s','s','s','s','s','s','s','s','s','s','s',2307,2404,2405,'b',
2709,2710,2711,2712,2713,'s','s','s',2406,2407,2408,'s','s',2325,2326,2327,2328,2329,'b',
2714,2715,2716,2717,2718,'s','s','s',2409,2410,2411,'s','s',2330,2331,2332,2333,2334,'b',
2719,2720,2721,2722,2723,'s','s','s',2412,2413,2414,'s','s',2335,2336,2337,2338,2339,'b',
2724,2725,2726,2727,2728,'s','s','s',2415,2416,'s','s','s',2340,2341,2342,2343,2344,'b',
2730,2731,2732,2733,2734,'s','s','s','s','s','s','s','s',2346,2347,2348,2349,2350,'b',
2735,2736,2738,2741,2744,'s','s','s','s','s','s','s','s',2351,2352,2354,2357,2360,'b',
2742,2743,2745,2739,'s','s','s','s','s','s','s','s','s',2358,2359,2361,2355,2356,'b',


);

echo '<table class=border style="cell-margin:0px;padding:0px">';
foreach($g as $i) 
{ 
		
	if($i=='b'){echo '</tr><tr>';}
	elseif($i=='s'){echo '<td></td>';}
	else
	{
		$x='&#x'.dechex($i);
		$uc=mb_convert_encoding($x, 'UTF-8', 'HTML-ENTITIES');
		echo "<td style='cell-margin:0px;padding:0px'> <button  
		style='font-family:Courier;font-size:20px;width:100%;' 
		title=$i id=$x name=$x value=$x 
		onclick='add_char(this,\"tb\")'>$x</button></td>";
	}
}
echo '</table>';

echo '<h3> &nbsp;&nbsp;Examples: (Same as in Hindi)</h3>';
echo '<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. ક્ષ = ક + ્ +  ષ  &nbsp;&nbsp;&nbsp;&nbsp; 2.  જ્ઞ = જ + ્ + ઞ &nbsp;&nbsp;&nbsp;&nbsp; 3. ર્ગ = ર + ્ + ગ &nbsp;&nbsp;&nbsp;&nbsp; 4. શ્ચ = શ + ્ + ચ  </h3>';
echo '<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. દ્ધ = દ + ્ + ધ  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6. શ્વ = શ + ્ + વ  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7. શ્ન = શ + ્ + ન &nbsp;&nbsp;&nbsp;&nbsp; 8. હ્મ = હ +  ્ + મ</h3>';

?>

