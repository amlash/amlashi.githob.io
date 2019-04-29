<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}</style></head>
<body bgcolor="black">
<ul>
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="book.html">Book</a></li>
  <li><a href="guilty.html">in PDF</a></li>
  <li><a href="#about">About</a></li>
</ul><br><br><?php  
$filename="tfile.txt";
$fd = fopen ($filename, "r");
$contents = fread ($fd, filesize($filename));  
$contents=$contents+1;
$fp = fopen ($filename, "w"); 
fwrite ($fp,$contents);
chmod($filename,0777);
fclose ($fd);  ?>            

<div  width="80" height="20" align="right"><font color='red' >Number people visiteg:<?php echo $contents;  ?></font>

</div>
<font color="white"><h1>Why guilty?</h1>
<table><tr><td><p>It takes the wise man a few days, weeks or months to solve a problem. It takes the average man a few months or years. However, the ignorant man will take lifetimes to solve the same problem. — A great Iranian scholar Your Excellency, Governor-General Bryce, I am writing this letter just to let to know that I have been here since 1995 and since the time of arrival in this country I have noticed that I am not very welcome. I always believe that if you give too much freedom you will not be able to control anything, but if it becomes a dictatorship you will lose the nature of the freedom and liberties of democracy. 
I have noticed the agencies of some countries over here are the same as in China, Russia and Iran. TO put it bluntly, intelligence officers have been able to move freely throughout Australia, often to its detriment. For example, a former Chinese diplomat was interviewed recently on Channel 9. Having retired from his B St, he became an Australian citizen and remained in the country. When asked about Chinese spies, he mentioned that many were operating in Australia. Another example is of Mr.  Laghari, who, despite spying offences, is still permitted to work and live in Australia. In this situation, it is not clear who is held accountable for upholding the dignity and safety of Australia and its citizens
</p>

<pre>



</pre></td><td>
<img src="pics/jeld0.jpg" ></td></tr></table>

<a href="thebook.pdf" download="guilty.pdf"><img src="pics/dls.jpg"></a>


<p></p></font>
</body>
</html>