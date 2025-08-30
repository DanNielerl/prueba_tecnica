using System;

public class HelloWorld
{
    public static void Main(string[] args)
    {
        Console.WriteLine("ingrese un numero:");
        string numero = Console.ReadLine();
        int numeroEntero = int.Parse(numero);
        Console.WriteLine($"La tabla del {numero} es");
        for (int i = 1; i <= 10; i++) {
            int resultado = i * numeroEntero;
            Console.WriteLine($"{i} x {numero} = {resultado}");
        }
    }
}