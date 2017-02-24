package hanoi;

public class Disco {

	private final int DIAMETRO;
	
	public Disco(int diametro){	
		
		if (diametro%2==0) {			
			System.out.println("ADVERTENCIA:  diámetro del disco	inválido, se le asigna un " + (diametro++));
			this.DIAMETRO=diametro;	
		} else if (diametro<3) {
			System.out.println("ADVERTENCIA: diámetro demasiado pequeño, se le asigna un 3.");
			this.DIAMETRO=3;	
		} else{
			this.DIAMETRO=diametro;	
		}
		
	}
	
	public void dibujar_disco(){
		for (int i = 0; i < DIAMETRO; i++) {
			System.out.println("o ");
		}
		
	}

}
