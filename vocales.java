package unidad0;

public class vocales {
    public static void main(String[] args) {
        String vocales="AEIOUaeiouÁÉÍÓÚáéíóú";
        int numeroDeVocales=0;
        String frase = "Ayer me compré muñecos de la marca ‘Colchitas’ por internet";

        for(int contador= 0; contador<frase.length();contador++){
            for(int contadorVocales=0; contadorVocales<vocales.length();contadorVocales++){
                if( frase.charAt(contador) == vocales.charAt(contadorVocales)){
                    numeroDeVocales++;
                }
            }
        }
        System.out.println("Hay " + numeroDeVocales + " vocales");
    }
}
