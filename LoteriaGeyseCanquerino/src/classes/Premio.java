package classes;

import java.util.HashMap;

public class Premio {
	
	private HashMap<String,String> premio;
	private String num_ganador;
	private String valor_premio;
	
	public Premio(){}
	
	public Premio(String num_ganador, String valor_premio){
		this.num_ganador = num_ganador;
		this.valor_premio = valor_premio;
		premio = new HashMap<>();
		premio.put(num_ganador, valor_premio);
	}

	public String getNum_ganador() {
		return num_ganador;
	}

	public void setNum_ganador(String num_ganador) {
		this.num_ganador = num_ganador;
	}

	public String getValor_premio() {
		return valor_premio;
	}

	public void setValor_premio(String valor_premio) {
		this.valor_premio = valor_premio;
	}

	@Override
	public String toString() {
		return "Premio : numero ganador=" + num_ganador + ", valor del premio=" + valor_premio;
	}
	
	

}
