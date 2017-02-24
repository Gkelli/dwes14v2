package figuras;

public class Elipse extends Figura{
	
	private double radioX;
	private double radioY;

	public Elipse(String titulo,Color color,double radioX,double radioY) {
		super(titulo, color);
		this.radioX = radioX;
		this.radioY = radioY;
	}

	public double getRadioX() {
		return radioX;
	}

	public double getRadioY() {
		return radioY;
	}
	public void setRadioX(double radioX) {
		this.radioX = radioX;
	}
	public void setRadioY(double radioY) {
		this.radioY = radioY;
	}

	public double area(){
		return Math.PI*Math.pow(radioX, 2);
	}
	
	public double perimetro(){
		return 2*radioX*radioY*Math.PI;
	}
	
	
	@Override
	public String toString() {
		return super.toString()+" Elipse [radioX=" + radioX + ", radioY=" + radioX + "]"+ " Area: "+area()+" Perimetro: "+perimetro();
	}
	
	public String datos_elipse() {
		return "Datos Elipse [Color=" + getColor() + ", radioX=" + radioX + ", radioY=" + radioY + "]";
	}
}
