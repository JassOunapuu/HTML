//Jass Õunapuu
import java.util.Scanner;


public class H4 {

	public static void main(String[] args) {
		
		Scanner scanner = new Scanner (System.in); //kasutaja sisestus
		System.out.print("Kirjuta mida iganes: ");
		String tekst = scanner.nextLine();
		System.out.println(tekst.toUpperCase());
		System.out.println("tahtede arv tekstis: "+tekst.length());
		
		int count = 1;
		 
        for (int i = 0; i < tekst.length() - 1; i++)
        {
            if ((tekst.charAt(i) == ' ') && (tekst.charAt(i + 1) != ' '))
            {
                count++;
            }
        }
        System.out.println("Sonade arv tekstis: " + count);
		
		
	}

}