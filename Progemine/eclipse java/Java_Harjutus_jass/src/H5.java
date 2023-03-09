//Jass Õunapuu
import java.util.Scanner;
public class H5 {

	public static void main(String[] args) {
		
	
	for (int i = 0; i < 3; i++) {
	Scanner scanner = new Scanner (System.in); //kasutaja sisestus
	System.out.print("Esimene arv: ");
	int n1 = scanner.nextInt();
	System.out.print("Teine arv(jagaja): ");
	int n2 = scanner.nextInt();
	jagamine(n1, n2);
	}
	}
	
	
	
	
	static void jagamine (int v1, int v2) {
		double vastus = (double)v1 / (double)v2;
		System.out.println("Jagatis on "+ vastus);
		
	}
	
	
	
	
}
