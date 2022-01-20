/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package CteoriaPoo2Herencia;

/**
 *
 * @author l2k49
 */
public class uso_Furgoneta {
    public static void main(String[] args){
        Furgoneta mifurgoneta1=new Furgoneta(7,580);
        mifurgoneta1.establece_color();
        mifurgoneta1.configura_asientos("si");
        mifurgoneta1.configura_climatizador("si");
        
        System.out.println("los datos heredados son :"+" "+mifurgoneta1.dimeDatosCoche()+" "+
                "los datos agregados a la furgoneta son :"+" "+mifurgoneta1.dimeDatosFurgoneta()); 
        
        
    }
}
