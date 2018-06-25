<header style="background-color:#222; color:#fff; text-align:center; font-size:20px; font-family:tahoma; text-decoration:none; padding:10px 10px 10px 10px;">
<p><a href="prime.php" style="color:#fff; text-decoration:none;">Q-1</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="validate.php" style="color:#fff; text-decoration:none;">Q-2</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" style="color:#fff; text-decoration:none;">Q-3</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="palin.php" style="color:#fff; text-decoration:none;">Q-4</a></p>
</header>

<br><br><br><br><br>

<br><br><br><br><br>
<h1 style="text-align:center; font-size:30px; color:#222; font-family:tahoma;">Small PHP App for getting the smallest palindrome after entering the number</h1><br><br><br><br><br>

<p style="text-align:left;">
using System;<br>
using System.Collections.Generic;<br>
using System.Linq;<br>
using System.Text;<br>
using System.Threading.Tasks;<br>
<br>
namespace ConsoleApp1<br>
{<br>
   &nbsp;&nbsp; class Program<br>
    {&nbsp;&nbsp;<br>
        &nbsp;&nbsp;static void Main(string[] args)<br>
        {&nbsp;&nbsp;<br>

        &nbsp;&nbsp;    long number, num = 0;<br>
           &nbsp;&nbsp; number = Convert.ToInt32(Console.ReadLine());<br>
           &nbsp;&nbsp; while (number != num)<br>
           &nbsp;&nbsp; {<br>

            &nbsp;  &nbsp;&nbsp;number = number + 1;<br>
          &nbsp;&nbsp;     long temp = number;<br>
           &nbsp;&nbsp;     num = 0;<br>
           &nbsp;&nbsp;     while (temp != 0)<br>
             &nbsp;&nbsp;   {<br>
        &nbsp;&nbsp;     &nbsp;&nbsp;       long rem = temp % 10;<br>
        &nbsp;&nbsp;      &nbsp;&nbsp;      num = rem + num * 10;<br>
        &nbsp;&nbsp;      &nbsp;&nbsp;      temp = temp / 10;<br>
       &nbsp;&nbsp;   &nbsp;&nbsp;      }<br>
    &nbsp;&nbsp;    &nbsp;&nbsp;    }<br>
     &nbsp;&nbsp;   &nbsp;&nbsp;    Console.WriteLine("smallest pallidrome is  " + number);<br>
     &nbsp;&nbsp;   &nbsp;&nbsp;    Console.ReadLine();<br>
    &nbsp;&nbsp;   &nbsp;&nbsp; }<br>
  &nbsp;&nbsp;  }<br>
}<br>
</p>