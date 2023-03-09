
public class H2 {

	public static void main(String[] args) {
		
	int toll = 40;
	double t = tolliArvutamine(toll);
	System.out.println(toll+" tolli  on "+ t +" meetrit");
	
	double s = ellipsiArvutamine(3,9);
	System.out.println("ellipsi pindala on "+ s);
	
	minutid(610);
	
	double[] vastus = kiirus(10,20,30,40);
	System.out.println("Esimese sportlase kiirus on "+vastus[0]+"km/h ja teise sportlase kiirus on "+vastus[1]+" km/h");
	
	kiirused(vastus[0], vastus[1]);
	
	
	}
	
	//teisendan tollid meetriteks
	static double tolliArvutamine(int a){
		double toll = a * 0.0254;
	return toll;
	}
	
	//arvutan ellipsi pindala
	static double ellipsiArvutamine(int a,int b){
		double pii = 3.14;
		double ellips = pii * a * b;
		return ellips;
	}
	
	//teisendan minutid tundideks ja minutiteks
	static void minutid(double minutid){
		int tundideks = (int)minutid / 60;
		int minut =(int) minutid % 60;
		System.out.println(tundideks+"h, "+minut+"min");
	}
	
	//arvutan kahe sportlase kiiruse
	static double[] kiirus(double s, double t, double s2, double t2){
		double[] vastused = new double[2];
		double v = s/t;
		double v2 = s2/t2;
		vastused[0] = v;
		vastused[1] = v2;
	return vastused;
	}
	
	//arvutan ja väljastan varasemate kiiruste vahe
	static void kiirused(double k1, double k2) {
		if (k1 > k2) {
			double vastus = k1 - k2;
			System.out.println("Kahe kiiruse vahe on "+vastus);
			} else {
			double vastus = k2 - k1;
			System.out.println("Kahe kiiruse vahe on "+vastus);
			}
	}
	
	
	
	}
	