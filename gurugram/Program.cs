using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1
{
    class Program
    {
        static void Main(string[] args)
        {

            long number, num = 0;
            number = Convert.ToInt32(Console.ReadLine());
            while (number != num)
            {

                number = number + 1;
                long temp = number;
                num = 0;
                while (temp != 0)
                {
                    long rem = temp % 10;
                    num = rem + num * 10;
                    temp = temp / 10;
                }
            }
            Console.WriteLine("smallest pallidrome is  " + number);
            Console.ReadLine();
        }
    }
}