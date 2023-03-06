package unidad0;

import java.util.Scanner;

public class DiaLaboral {
    public static void main(String[] args) {
        System.out.println("Ingrese el nombre de un dia (con mayuscula inicial) y se le informará si es laboral o no");
        Scanner entrada = new Scanner(System.in);
        String dia;
        dia = entrada.nextLine();
        if (dia.equals("Lunes") || dia.equals("Martes") || dia.equals("Miercoles") || dia.equals("Jueves") || dia.equals("Viernes") || dia.equals("Sabado") || dia.equals("Domingo") ){

            if(dia.equals("Sabado") || dia.equals("Domingo") ){
                System.out.println("El dia no es laboral");
            }
            else{
                System.out.println("El dia es laboral");
            }
        }
        else{
            System.out.println("Usted ingreso un dia inexistente o se olvido la mayuscula");
        }
    }
}
